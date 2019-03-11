@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@push('after-styles')
    <style>
        .trend-badge-2 {
            top: -10px;
            left: -52px;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            position: absolute;
            padding: 40px 40px 12px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            background-color: #ff5a00;
        }

        .progress {
            background-color: #b6b9bb;
            height: 2em;
            font-weight: bold;
            font-size: 0.8rem;
            text-align: center;
        }

        .best-course-pic {
            background-color: #333333;
            background-position: center;
            background-size: cover;
            height: 150px;
            width: 100%;
            background-repeat: no-repeat;
        }


    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    <div class="row">
                        @if(auth()->user()->hasRole('student'))
                            @if(count($purchased_courses) > 0)
                                @foreach($purchased_courses as $item)
                                    <div class="col-md-3">
                                        <div class="best-course-pic-text position-relative border">
                                            <div class="best-course-pic position-relative overflow-hidden"
                                                 @if($item->course_image != "") style="background-image: url({{asset('storage/uploads/'.$item->course_image)}})" @endif>

                                                @if($item->trending == 1)
                                                    <div class="trend-badge-2 text-center text-uppercase">
                                                        <i class="fas fa-bolt"></i>
                                                        <span>Trending</span>
                                                    </div>
                                                @endif

                                                <div class="course-rate ul-li">
                                                    <ul>
                                                        @for($i=1; $i<=(int)$item->rating; $i++)
                                                            <li><i class="fas fa-star"></i></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="best-course-text d-inline-block w-100 p-2">
                                                <div class="course-title mb20 headline relative-position">
                                                    <h5>
                                                        <a href="{{ route('courses.show', [$item->slug]) }}">{{$item->title}}</a>
                                                    </h5>
                                                </div>
                                                <div class="course-meta d-inline-block w-100 ">
                                                    <div class="d-inline-block w-100 0 mt-2">
                                                     <span class="course-category float-left">
                                                <a href="{{route('courses.category',['category'=>$item->category->slug])}}"
                                                   class="bg-primary px-2 p-1">{{$item->category->name}}</a>
                                            </span>
                                                        <span class="course-author float-right">
                                                 {{ $item->students()->count() }}
                                                            Students
                                            </span>
                                                    </div>

                                                    <div class="progress my-2">
                                                        <div class="progress-bar"
                                                             style="width:{{$item->progress() }}%">{{ $item->progress()  }}
                                                            %
                                                            Completed
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center">
                                    <h4 class="text-center">You have not purchased any course yet.</h4>
                                    <a class="btn btn-primary" href="{{route('courses.all')}}">Buy course now <i
                                                class="fa fa-arrow-right"></i></a>
                                </div>
                            @endif
                        @elseif(auth()->user()->hasRole('teacher'))
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card text-white bg-primary text-center">
                                                    <div class="card-body">
                                                        <h2 class="">{{count(auth()->user()->courses)}}</h2>
                                                        <h5>Your Courses</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card text-white bg-success text-center">
                                                    <div class="card-body">
                                                        <h2 class="">{{$students_count}}</h2>
                                                        <h5>Students Enrolled To<br> Your Courses</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <h4>Recent Reviews</h4>
                                        <table class="table table-responsive-sm table-striped">
                                            <thead>
                                            <tr>
                                                <td>Course</td>
                                                <td>Review</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($recent_reviews) > 0)
                                                @foreach($recent_reviews as $item)
                                                    <tr>
                                                        <td>
                                                            <a target="_blank" href="{{route('courses.show',[$item->reviewable->slug])}}">{{$item->reviewable->title}}</a>
                                                        </td>
                                                        <td>{{$item->content}}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2">No Reviews yet.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <h4>Recent Reviews</h4>
                                        <table class="table table-responsive-sm table-striped">
                                            <thead>
                                            <tr>
                                                <td>Course</td>
                                                <td>Review</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($recent_reviews) > 0)
                                                @foreach($recent_reviews as $item)
                                                    <tr>
                                                        <td>
                                                            <a target="_blank" href="{{route('courses.show',[$item->reviewable->slug])}}">{{$item->reviewable->title}}</a>
                                                        </td>
                                                        <td>{{$item->content}}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2">No Reviews yet.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        @elseif(auth()->user()->hasRole('administrator'))
                        @else
                            <div class="col-12">
                                <h1>Dashboard!</h1>
                            </div>
                        @endif
                    </div>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
