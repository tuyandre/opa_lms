<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index(){

        return view('backend.reports.index');
    }

    public function getCourseData(Request $request)
    {
        $courses = auth()->user()->courses()->has('students','>',0)->withCount('students')->get();

        return \DataTables::of($courses)
            ->addIndexColumn()
            ->editColumn('created_at', function ($q) {
                return $q->created_at->format('d M, Y | H:i A');
            })
            ->addColumn('course', function ($q) {
                $course_name = $q->title;
                $course_slug = $q->slug;
                $link = "<a href='".route('courses.show', [$course_slug])."' target='_blank'>".$course_name."</a>";
                return $link;
            })
            ->addColumn('students',function ($q){
                return $q->students_count;
            })
            ->rawColumns(['course','user'])
            ->make();
    }

    public function getBundleData(Request $request)
    {
        $bundles = auth()->user()->bundles()->has('students','>',0)->withCount('students')->get();

        return \DataTables::of($bundles)
            ->addIndexColumn()
            ->editColumn('created_at', function ($q) {
                return $q->created_at->format('d M, Y | H:i A');
            })
            ->addColumn('bundle', function ($q) {
                $bundle_name = $q->title;
                $bundle_slug = $q->slug;
                $link = "<a href='".route('bundles.show', [$bundle_slug])."' target='_blank'>".$bundle_name."</a>";
                return $link;
            })
            ->addColumn('students',function ($q){
                return $q->students_count;
            })
            ->rawColumns(['bundle','user'])
            ->make();
    }
}
