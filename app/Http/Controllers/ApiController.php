<?php

namespace App\Http\Controllers;

use App\Mail\Frontend\Contact\SendContact;
use App\Models\Auth\User;
use App\Models\Blog;
use App\Models\Bundle;
use App\Models\Certificate;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Lesson;
use App\Models\Media;
use App\Models\Reason;
use App\Models\Review;
use App\Models\Sponsor;
use App\Models\System\Session;
use App\Models\Testimonial;
use App\Models\VideoProgress;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Carbon\Carbon;
use Harimayco\Menu\Models\MenuItems;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Cart;

class ApiController extends Controller
{
    /**
     * Get the Signup Form
     *
     * @return [json] config object
     */
    public function signupForm()
    {
        $fields = [];
        if (config('registration_fields') != NULL) {
            $fields = json_decode(config('registration_fields'), true);
        }
        if (config('access.captcha.registration') > 0) {
            $fields[] = ['name' => 'g-recaptcha-response', 'type' => 'captcha'];
        }
        return response()->json(['status' => 'success', 'fields' => $fields]);
    }

    public function signup(Request $request)
    {
        $validation = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'g-recaptcha-response' => (config('access.captcha.registration') ? ['required', new CaptchaRule()] : ''),
        ], [
            'g-recaptcha-response.required' => __('validation.attributes.frontend.captcha'),
        ]);

        if (!$validation) {
            return response()->json(['errors' => $validation->errors()]);
        }
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->dob = isset($request->dob) ? $request->dob : NULL;
        $user->phone = isset($request->phone) ? $request->phone : NULL;
        $user->gender = isset($request->gender) ? $request->gender : NULL;
        $user->address = isset($request->address) ? $request->address : NULL;
        $user->city = isset($request->city) ? $request->city : NULL;
        $user->pincode = isset($request->pincode) ? $request->pincode : NULL;
        $user->state = isset($request->state) ? $request->state : NULL;
        $user->country = isset($request->country) ? $request->country : NULL;
        $user->save();

        $userForRole = User::find($user->id);
        $userForRole->confirmed = 1;
        $userForRole->save();
        $userForRole->assignRole('student');
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Get the App Config
     *
     * @return [json] config object
     */
    public function getConfig(Request $request)
    {
        $data = ['font_color', 'contact_data', 'counter', 'total_students', 'total_courses', 'total_teachers', 'logo_b_image', 'logo_w_image', 'logo_white_image', 'contact_data', 'footer_data', 'app.locale', 'app.display_type', 'app.currency', 'app.name', 'app.url', 'access.captcha.registration', 'paypal.active', 'payment_offline_active'];
        $json_arr = [];
        $config = Config::whereIn('key', $data)->select('key', 'value')->get();
        foreach ($config as $data) {
            if ((array_first(explode('_', $data->key)) == 'logo') || (array_first(explode('_', $data->key)) == 'favicon')) {
                $data->value = asset('storage/logos/' . $data->value);
            }
            $json_arr[$data->key] = (is_null(json_decode($data->value, true))) ? $data->value : json_decode($data->value, true);
        }
        return response()->json(['status' => 'success', 'data' => $json_arr]);
    }


    /**
     * Get  courses
     *
     * @return [json] course object
     */
    public function getCourses(Request $request)
    {
        $types = ['popular', 'trending', 'featured'];
        $type = ($request->type) ? $request->type : null;
        if ($type != null) {
            if (in_array($type, $types)) {
                $courses = Course::where('published', '=', 1)
                    ->where($type, '=', 1)
                    ->paginate(10);
            } else {
                return response()->json(['status' => 'failure', 'message' => 'Invalid Request']);
            }
        } else {
            $courses = Course::where('published', '=', 1)
                ->paginate(10);
        }

        return response()->json(['status' => 'success', 'type' => $type, 'result' => $courses]);

    }

    /**
     * Search Basic
     *
     * @return [json] Course / Bundle / Blog object
     */
    public function search(Request $request)
    {
        $result = NULL;
        if ($request->type) {

            if ($request->type == 1) {
                $result = Course::where('title', 'LIKE', '%' . $request->q . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->q . '%')
                    ->where('published', '=', 1)
                    ->with('teachers')
                    ->paginate(10);

            } elseif ($request->type == 2) {
                $result = Bundle::where('title', 'LIKE', '%' . $request->q . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->q . '%')
                    ->where('published', '=', 1)
                    ->with('user')
                    ->paginate(10);

            } elseif ($request->type == 3) {
                $result = Blog::where('title', 'LIKE', '%' . $request->q . '%')
                    ->orWhere('content', 'LIKE', '%' . $request->q . '%')
                    ->with('author')
                    ->paginate(10);
            }

        }
        $type = $request->type;
        $q = $request->q;
        return response()->json(['status' => 'success', 'q' => $q, 'type' => $type, 'result' => $result]);

    }

    /**
     * Latest News / Blog
     *
     * @return [json] Blog object
     */
    public function getLatestNews(Request $request)
    {
        $blog = Blog::orderBy('created_at', 'desc')
            ->select('id', 'category_id', 'user_id', 'title', 'slug', 'content', 'image')
            ->paginate(10);
        return response()->json(['status' => 'success', 'result' => $blog]);
    }


    /**
     * Get Latest Testimonials
     *
     * @return [json] Testimonial object
     */
    public function getTestimonials(Request $request)
    {
        $testimonials = Testimonial::where('status', '=', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return response()->json(['status' => 'success', 'result' => $testimonials]);
    }

    /**
     * Get Teachers
     *
     * @return [json] Teacher object
     */
    public function getTeachers(Request $request)
    {
        $teachers = User::role('teacher')->paginate(10);
        if ($teachers == null) {
            return response()->json(['status' => 'failure', 'result' => null]);
        }
        return response()->json(['status' => 'success', 'result' => $teachers]);
    }

    /**
     * Get Single Teacher
     *
     * @return [json] Teacher object
     */
    public function getSingleTeacher(Request $request)
    {
        $teacher = User::role('teacher')->find($request->teacher_id);
        if ($teacher == null) {
            return response()->json(['status' => 'failure', 'result' => null]);
        }
        $courses = $teacher->courses->take(5);
        $bundles = $teacher->bundles->take(5);
        return response()->json(['status' => 'success', 'result' => ['teacher' => $teacher, 'courses' => $courses, 'bundles' => $bundles]]);
    }

    /**
     * Get Teacher Courses
     *
     * @return [json] Teacher Courses object
     */
    public function getTeacherCourses(Request $request)
    {
        $teacher = User::role('teacher')->find($request->teacher_id);
        if ($teacher == null) {
            return response()->json(['status' => 'failure', 'result' => null]);
        }
        $courses = $teacher->courses()->paginate(10);
        return response()->json(['status' => 'success', 'result' => ['teacher' => $teacher, 'courses' => $courses]]);
    }

    /**
     * Get Teacher Bundles
     *
     * @return [json] Teacher Bundles object
     */
    public function getTeacherBundles(Request $request)
    {
        $teacher = User::role('teacher')->find($request->teacher_id);
        if ($teacher == null) {
            return response()->json(['status' => 'failure', 'result' => null]);
        }
        $bundles = $teacher->bundles()->paginate(10);
        return response()->json(['status' => 'success', 'result' => ['teacher' => $teacher, 'bundles' => $bundles]]);
    }

    /**
     * Get FAQs
     *
     * @return [json] FAQs object
     */
    public function getFaqs()
    {

        $faqs = Faq::whereHas('category')
            ->where('status', '=', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return response()->json(['status' => 'success', 'result' => $faqs]);
    }

    /**
     * Get WHy Us Reasons
     *
     * @return [json] Reason object
     */
    public function getWhyUs()
    {
        $reasons = Reason::where('status', '=', 1)->paginate(10);
        return response()->json(['status' => 'success', 'result' => $reasons]);

    }

    /**
     * Get Sponsors
     *
     * @return [json] Sponsors object
     */
    public function getSponsors()
    {
        $sponsors = Sponsor::where('status', '=', 1)->paginate(10);
        return response()->json(['status' => 'success', 'result' => $sponsors]);
    }

    /**
     * Save Contact Us Request
     *
     * @return [json] Success feedback
     */
    public function saveContactUs(Request $request)
    {
        $validation = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        if (!$validation) {
            return response()->json(['status' => 'failure', 'errors' => $validation->errors()]);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        \Mail::send(new SendContact($request));

        return response()->json(['status' => 'success']);
    }

    /**
     * Get Single Course
     *
     * @return [json] Success feedback
     */
    public function getSingleCourse(Request $request)
    {
        $continue_course = NULL;
        $course_timeline = NULL;
        $course = Course::withoutGlobalScope('filter')->with('teachers','category')->where('id', '=', $request->course_id)->with('publishedLessons')->first();
        if ($course == null) {
            return response()->json(['status' => 'failure', 'result' => NULL]);
        }

        $purchased_course = \Auth::check() && $course->students()->where('user_id', \Auth::id())->count() > 0;
        $course_rating = 0;
        $total_ratings = 0;
        $completed_lessons = NULL;
        $is_reviewed = false;
        if (auth()->check() && $course->reviews()->where('user_id', '=', auth()->user()->id)->first()) {
            $is_reviewed = true;
        }
        if ($course->reviews->count() > 0) {
            $course_rating = $course->reviews->avg('rating');
            $total_ratings = $course->reviews()->where('rating', '!=', "")->get()->count();
        }
        $lessons = $course->courseTimeline()->orderby('sequence', 'asc')->get();


        if (\Auth::check()) {
            $completed_lessons = \Auth::user()->chapters()->where('course_id', $course->id)->get()->pluck('model_id')->toArray();
            $continue_course = $course->courseTimeline()->orderby('sequence', 'asc')->whereNotIn('model_id', $completed_lessons)->first();
            if ($continue_course == NULL) {
                $continue_course = $course->courseTimeline()->orderby('sequence', 'asc')->first();
            }
        }

        if($course->courseTimeline){

            $timeline =$course->courseTimeline()->orderBy('sequence')->get();
            foreach ($timeline as $item){
                $completed = false;
                if(in_array($item->model_id,$completed_lessons)){
                    $completed = true;
                }
                $type = 'lesson';
                $description = "";
                if($item->model_type == 'App\Models\Test'){
                    $type = 'test';
                    $description = $item->model->description;
                }else{
                    $description = $item->model->short_text;
                }
                $course_timeline[] = [
                    'title' => $item->model->title,
                    'type' => $type,
                    'id' => $item->model_id,
                    'description' => $description,
                    'completed' => $completed,
                ];
            }
        }
        $result = [
            'course' => $course,
            'purchased_course' => $purchased_course,
            'course_rating' => $course_rating,
            'total_ratings' => $total_ratings,
            'is_reviewed' => $is_reviewed,
            'lessons' => $lessons,
            'course_timeline' => $course_timeline,
            'completed_lessons' => $completed_lessons,
            'continue_course' => $continue_course,
            'is_certified' => $course->isUserCertified(),
            'course_process' => $course->progress()
        ];
        return response()->json(['status' => 'success', 'result' => $result]);
    }


    /**
     * Submit review
     *
     * @return [json] Success message
     */
    public function submitReview(Request $request){
        $reviewable_id = $request->item_id;
        if($request->type == 'course'){
            $reviewable_type = Course::class;
            $item = Course::find($request->item_id);

        }else{
            $reviewable_type = Bundle::class;
            $item = Bundle::find($request->item_id);
        }
        if($item != null){
            $review = new Review();
            $review->user_id = auth()->user()->id;
            $review->reviewable_id = $reviewable_id;
            $review->reviewable_type = $reviewable_type;
            $review->rating = $request->rating;
            $review->content = $request->review;
            $review->save();
            return response()->json(['status' => 'success']);
        }
        return response()->json(['status' => 'failure']);
    }

    /**
     * Update Review
     *
     * @return [json] Success message
     */
    public function updateReview(Request $request){
        $review = Review::where('id', '=', $request->review_id)->where('user_id', '=', auth()->user()->id)->first();
        if ($review != null) {
            $review->rating = $request->rating;
            $review->content = $request->review;
            $review->save();

            return response()->json(['status' => 'success']);
        }
        return response()->json(['status' => 'failure']);
    }

    /**
     * Get Lesson
     *
     * @return [json] Success message
     */
    public function getLesson(Request $request){
        $lesson = Lesson::where('published','=',1)
            ->where('id','=',$request->lesson_id)
            ->first();
        if($lesson != null){
            $course = $lesson->course;
            $previous_lesson = $lesson->course->courseTimeline()->where('sequence', '<', $lesson->courseTimeline->sequence)
                ->orderBy('sequence', 'desc')
                ->first();
            $next_lesson = $lesson->course->courseTimeline()->where('sequence', '>', $lesson->courseTimeline->sequence)
                ->orderBy('sequence', 'asc')
                ->first();

           $is_certified = $lesson->course->isUserCertified();
           $course_progress = $lesson->course->progress();

          $downloadable_media = $lesson->downloadable_media;
          $video = $lesson->mediaVideo;
          $pdf = $lesson->mediaPDF;
          $audio = $lesson->mediaAudio;
          $lesson_media =[
              'downloadable_media' => $downloadable_media,
              'video' => $video,
              'pdf' => $pdf,
              'audio' => $audio,
          ];


            return response()->json(['status' => 'success','result'=>['lesson' => $lesson,'lesson_media' => $lesson_media,'previous_lesson' => $previous_lesson, 'next_lesson' => $next_lesson,'is_certified' => $is_certified, 'course_progress' => $course_progress, 'course' => $course]]);
        }
        return response()->json(['status' => 'failure']);
    }


    /**
     * Save video progress for Lesson
     *
     * @return [json] Success message
     */
    public function videoProgress(Request $request)
    {
        $user = auth()->user();
        $video = Media::find($request->media_id);
        if($video == null){
            return response()->json(['status' => 'failure']);
        }
        $video_progress = VideoProgress::where('user_id', '=', $user->id)
            ->where('media_id', '=', $video->id)->first() ?: new VideoProgress();
        $video_progress->media_id = $video->id;
        $video_progress->user_id = $user->id;
        $video_progress->duration = $video_progress->duration ?: round($request->duration, 2);
        $video_progress->progress = round($request->progress, 2);
        if ($video_progress->duration - $video_progress->progress < 5) {
            $video_progress->progress = $video_progress->duration;
            $video_progress->complete = 1;
        }
        $video_progress->save();
        return response()->json(['status' => 'success']);
    }



    /**
     * Generate course certificate
     *
     * @return [json] Success message
     */

    public function generateCertificate(Request $request)
    {
        $course = Course::whereHas('students', function ($query) {
            $query->where('id', \Auth::id());
        })
            ->where('id', '=', $request->course_id)->first();
        if (($course != null) && ($course->progress() == 100)) {
            $certificate = Certificate::firstOrCreate([
                'user_id' => auth()->user()->id,
                'course_id' => $request->course_id
            ]);

            $data = [
                'name' => auth()->user()->name,
                'course_name' => $course->title,
                'date' => Carbon::now()->format('d M, Y'),
            ];
            $certificate_name = 'Certificate-' . $course->id . '-' . auth()->user()->id . '.pdf';
            $certificate->name = auth()->user()->id;
            $certificate->url = $certificate_name;
            $certificate->save();

            $pdf = \PDF::loadView('certificate.index', compact('data'))->setPaper('', 'landscape');

            $pdf->save(public_path('storage/certificates/' . $certificate_name));

            return response()->json(['status' => 'success']);
        }
        return response()->json(['status' => 'failure']);
    }


    /**
     * Get Bundles
     *
     * @return [json] Bundle Object
     */
    public function getBundles(Request $request)
    {
        $types = ['popular', 'trending', 'featured'];
        $type = ($request->type) ? $request->type : null;
        if ($type != null) {
            if (in_array($type, $types)) {
                $bundles = Bundle::where('published', '=', 1)
                    ->where($type, '=', 1)
                    ->paginate(10);
            } else {
                return response()->json(['status' => 'failure', 'message' => 'Invalid Request']);
            }
        } else {
            $bundles = Bundle::where('published', '=', 1)
                ->paginate(10);
        }

        return response()->json(['status' => 'success', 'type' => $type, 'result' => $bundles]);

    }

    /**
     * Get Bundles
     *
     * @return [json] Bundle Object
     */
    public function getSingleBundle(Request $request){
        $result['bundle'] = Bundle::where('published','=',1)
            ->where('id','=',$request->bundle_id)
            ->first();
        if($result['bundle'] == null){
            return response()->json(['status' => 'failure', 'message' => 'Invalid Request']);
        }
        $result['courses'] = $result['bundle']->courses;
        return response()->json(['status' => 'success','result' => $result]);
    }


    /**
     * Add to cart
     *
     * @return [json] Return cart value
     */

    public function addToCart(Request $request)
    {
        $product = "";
        $teachers = "";
        $type = "";
        if ($request->type == 'course') {
            $product = Course::findOrFail($request->item_id);
            $teachers = $product->teachers->pluck('id', 'name');
            $type = 'course';

        } elseif ($request->type == 'bundle') {
            $product = Bundle::findOrFail($request->item_id);
            $teachers = $product->user->name;
            $type = 'bundle';
        }

        $cart_items = Cart::session(auth()->user()->id)->getContent()->keys()->toArray();
        if (!in_array($product->id, $cart_items)) {
            Cart::session(auth()->user()->id)
                ->add($product->id, $product->title, $product->price, 1,
                    [
                        'user_id' => auth()->user()->id,
                        'description' => $product->description,
                        'image' => $product->course_image,
                        'product_id' => $product->id,
                        'type' => $type,
                        'teachers' => $teachers
                    ]);
        }
        return response()->json(['status' => 'success']);
    }


    /**
     * Remove from cart
     *
     * @return [json] Remove from cart
     */
    public function removeFromCart(Request $request)
    {

        foreach (Cart::session(auth()->user()->id)->getContent() as $cartItem){
            if(($cartItem->attributes->type == $request->type) && ($cartItem->attributes->product_id == $request->item_id)){
                Cart::session(auth()->user()->id)->remove($request->item_id);
            }
        }
        return response()->json(['status' => 'success']);
    }


    /**
     * Show Cart
     *
     * @return [json] Get Cart data
     */
    public function getCartData(Request $request){
        $course_ids = [];
        $bundle_ids = [];

        if(Cart::session(auth()->user()->id)->getContent()){
            foreach (Cart::session(auth()->user()->id)->getContent() as $item) {
                if ($item->attributes->type == 'bundle') {
                    $bundle_ids[] = $item->id;
                } else {
                    $course_ids[] = $item->id;
                }
            }
            $courses = Course::find($course_ids);
            $bundles = Bundle::find($bundle_ids);
            $total = Cart::session(auth()->user()->id)->getTotal();


            return response()->json(['status' => 'success', 'result' => ['courses' => $courses, 'bundles'=> $bundles,'total' => $total]]);
        }
        return response()->json(['status' => 'failure']);
    }

    /**
     * Clear Cart
     *
     * @return [json] Success Message
     */
    public function clearCart(){
        Cart::session(auth()->user()->id)->clear();
        return response()->json(['status' => 'success']);
    }


}
