<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $purchased_courses = NULL;
        $students_count = NULL;
        $recent_reviews = NULL;
        if (\Auth::check()) {
            $purchased_courses = Course::whereHas('students', function($query) {
                $query->where('id', \Auth::id());
            })
                ->with('lessons')
                ->orderBy('id', 'desc')
                ->get();
            if(auth()->user()->hasRole('teacher')){

            }
            $students_count = Course::whereHas('teachers', function ($query) {
                $query->where('user_id', '=', auth()->user()->id);
            })
                ->withCount('students')
                ->get()
                ->sum('students_count');

            $courses_id = auth()->user()->courses()->has('reviews')->pluck('id')->toArray();
            $recent_reviews = Review::where('reviewable_type','=','App\Models\Course')
                ->whereIn('reviewable_id',$courses_id)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();



            $unreadThreads = [];
            $threads = [];
            foreach(auth()->user()->threads as $item){
                if($item->unreadMessagesCount > 0){
                    $unreadThreads[] = $item;
                }else{
                    $threads[] = $item;
                }
            }
            $threads = Collection::make(array_merge($unreadThreads,$threads))->take(10) ;
            dd($threads);
            /* TODO:: Show latest 10 messages in teacher dashboard */


        }



        return view('backend.dashboard',compact('purchased_courses','students_count','recent_reviews'));
    }
}
