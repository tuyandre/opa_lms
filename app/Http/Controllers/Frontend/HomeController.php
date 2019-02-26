<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Config;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Reason;
use App\Models\Sponsor;
use App\Models\System\Session;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Newsletter;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $type = config('theme_layout');
        $sections = Config::where('key', '=', 'layout_' . $type)->first();
        $sections = json_decode($sections->value);

        $popular_courses = Course::where('published', '=', 1)
            ->where('popular', '=', 1)->take(6)->get();

        $featured_courses = Course::where('published', '=', 1)
            ->where('featured', '=', 1)->take(8)->get();

        $course_categories = Category::with('courses')->where('icon', '!=', "")->take(12)->get();

        $trending_courses = Course::where('published', '=', 1)
            ->where('trending', '=', 1)->take(2)->get();

        $teachers = User::role('teacher')->with('courses')->where('active', '=', 1)->take(7)->get();

        $sponsors = Sponsor::where('status', '=', 1)->get();

        $news = Blog::orderBy('created_at', 'desc')->take(2)->get();

        $faqs = Category::with('faqs')->get()->take(6);

        $testimonials = Testimonial::where('status', '=', 1)->orderBy('created_at', 'desc')->get();

        $reasons = Reason::where('status', '=', 1)->orderBy('created_at', 'desc')->get();

        if ((int)config('counter') == 1) {
            $total_students = config('total_students');
            $total_courses = config('total_courses');
            $total_teachers = config('total_teachers');
        } else {
            $total_students = User::role('student')->get()->count();
            $total_courses = Course::where('published', '=', 1)->get()->count();
            $total_teachers = User::role('teacher')->get()->count();
        }

        return view('frontend.index-' . config('theme_layout'), compact('popular_courses', 'featured_courses', 'sponsors', 'total_students', 'total_courses', 'total_teachers', 'testimonials', 'news', 'trending_courses', 'teachers', 'faqs', 'course_categories', 'reasons', 'sections'));
    }

    public function getFaqs()
    {
        $faq_categories = Category::with('faqs')->get();
        return view('frontend.faq', compact('faq_categories'));
    }

    public function subscribe(Request $request)
    {
        if (config('mail_provider') != "" && config('mail_provider') == "mailchimp") {
            try {
                if (!Newsletter::isSubscribed($request->email)) {
                    if (config('mailchimp_double_opt_in')) {
                        Newsletter::subscribePending($request->email);
                        session()->flash('alert', "We've sent you an email, Check your mailbox for further procedure.");
                    } else {
                        Newsletter::subscribe($request->email);
                        session()->flash('alert', "You've subscribed successfully");
                    }
                    return back();
                } else {
                    session()->flash('alert', "Email already exist in subscription list");
                    return back();

                }
            } catch (Exception $e) {
                \Log::info($e->getMessage());
                session()->flash('alert', "Something went wrong, Please try again Later");
                return back();
            }

        } elseif (config('mail_provider') != "" && config('mail_provider') == "sendgrid") {
            try {
                $apiKey = config('sendgrid_api_key');
                $sg = new \SendGrid($apiKey);
                $query_params = json_decode('{"page": 1, "page_size": 1}');
                $response = $sg->client->contactdb()->recipients()->get(null, $query_params);
                if ($response->statusCode() == 200) {
                    $users = json_decode($response->body());
                    $emails = [];
                    foreach ($users->recipients as $user) {
                        array_push($emails, $user->email);
                    }
                    if (in_array($request->email, $emails)) {
                        session()->flash('alert', "Email already exist in subscription list");
                        return back();
                    } else {
                        $request_body = json_decode(
                            '[{
                             "email": "' . $request->email . '",
                             "first_name": "",
                             "last_name": ""
                              }]'
                        );
                        $response = $sg->client->contactdb()->recipients()->post($request_body);
                        if ($response->statusCode() != 201 || (json_decode($response->body())->new_count == 0)) {

                            session()->flash('alert', "Email already exist in subscription list");
                            return back();
                        } else {
                            $recipient_id = json_decode($response->body())->persisted_recipients[0];
                            $list_id = config('sendgrid_list');
                            $response = $sg->client->contactdb()->lists()->_($list_id)->recipients()->_($recipient_id)->post();
                            if ($response->statusCode() == 201) {
                                session()->flash('alert', "You've subscribed successfully");
                            } else {
                                session()->flash('alert', "Check your email and try again");
                                return back();
                            }

                        }
                    }
                }
            } catch (Exception $e) {
                \Log::info($e->getMessage());
                session()->flash('alert', "Something went wrong, Please try again Later");
                return back();
            }
        }

    }
}
