<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Sponsor;

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

        return view('frontend.index-'.config('theme_layout'),compact('popular_courses','featured_courses','sponsors'));
    }
}
