<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Course;
use App\Models\Sponsor;
use App\Models\Testimonial;

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
        $popular_courses = Course::where('published','=',1)
            ->where('popular','=',1)->get();

        $featured_courses = Course::where('published','=',1)
            ->where('featured','=',1)->get();

        $sponsors = Sponsor::where('status','=',1)->get();

        $testimonials = Testimonial::where('status','=',1)->orderBy('created_at','desc')->get();

        if((int)config('counter') == 1){
            $total_students =  config('total_students');
            $total_courses =  config('total_courses');
            $total_teachers =  config('total_teachers');
        }else{
            $total_students = User::role('student')->get()->count();
            $total_courses =  Course::where('published','=',1)->get()->count();
            $total_teachers =   User::role('teacher')->get()->count();
        }

        return view('frontend.index-'.config('theme_layout'),compact('popular_courses','featured_courses','sponsors','total_students','total_courses','total_teachers','testimonials'));
    }
}
