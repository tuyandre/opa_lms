<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Cart;

class CoursesController extends Controller
{


    public function all()
    {
        if(request('type') == 'popular'){
            $courses = Course::where('published', 1)->where('popular','=',1)->orderBy('id', 'desc')->paginate(9);

        }else if(request('type') == 'trending'){
            $courses = Course::where('published', 1)->where('trending','=',1)->orderBy('id', 'desc')->paginate(9);

        }else if(request('type') == 'featured'){
            $courses = Course::where('published', 1)->where('featured','=',1)->orderBy('id', 'desc')->paginate(9);

        }else{
            $courses = Course::where('published', 1)->orderBy('id', 'desc')->paginate(9);
        }
        $purchased_courses = NULL;
        if (\Auth::check()) {
            $purchased_courses = Course::whereHas('students', function ($query) {
                $query->where('id', \Auth::id());
            })
                ->with('lessons')
                ->orderBy('id', 'desc')
                ->get();
        }
        $recent_news = Blog::orderBy('created_at','desc')->take(2)->get();
        return view('frontend.courses.index', compact('courses', 'purchased_courses','recent_news'));
    }

    public function show($course_slug)
    {
        $recent_news = Blog::orderBy('created_at','desc')->take(2)->get();
        $course = Course::where('slug', $course_slug)->with('publishedLessons')->firstOrFail();
        $purchased_course = \Auth::check() && $course->students()->where('user_id', \Auth::id())->count() > 0;

        return view('frontend.courses.course', compact('course', 'purchased_course','recent_news'));
    }
    public function payment(Request $request)
    {
        $course = Course::findOrFail($request->get('course_id'));
        $this->createStripeCharge($request);

        $course->students()->attach(\Auth::id());

        return redirect()->back()->with('success', 'Payment completed successfully.');
    }

    private function createStripeCharge($request)
    {
        Stripe::setApiKey(env('STRIPE_API_KEY'));

        try {
            $customer = Customer::create([
                'email' => $request->get('stripeEmail'),
                'source' => $request->get('stripeToken')
            ]);

            $charge = Charge::create([
                'customer' => $customer->id,
                'amount' => $request->get('amount'),
                'currency' => "usd"
            ]);
        } catch (\Stripe\Error\Base $e) {
            return redirect()->back()->withError($e->getMessage())->send();
        }
    }

    public function rating($course_id, Request $request)
    {
        $course = Course::findOrFail($course_id);
        $course->students()->updateExistingPivot(\Auth::id(), ['rating' => $request->get('rating')]);

        return redirect()->back()->with('success', 'Thank you for rating.');
    }

    public function getByCategory(Request $request){
        $category = Category::has('courses')->where('slug','=',$request->category)->first();
        if($category != ""){
            $recent_news = Blog::orderBy('created_at','desc')->take(2)->get();

            $courses =  $category->courses()->where('published','=',1)->paginate(9);
           return view('frontend.courses.index',compact('courses','category','recent_news'));
        }
        return abort(404);
    }

    public function addReview(Request $request){
        $this->validate($request,[
         'review' => 'required'
        ]);
       $blog = Blog::findORFail($request->id);
       $review = new Review();
       $review->user_id = auth()->user()->id;
       $review->reviewable_id = $blog->id;
       $review->reviewable_type = Course::class;
       $review->rating = $request->rating;
       $review->content = $request->review;
       $review->save();

       return back();
    }

}
