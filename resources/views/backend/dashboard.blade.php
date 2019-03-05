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
                        @if(count($purchased_courses) > 0)
                            @foreach($purchased_courses as $item)
                                <div class="col-md-3">
                                    <div class="best-course-pic-text position-relative border">
                                        <div class="best-course-pic position-relative overflow-hidden">
                                            @if($item->course_image != "")
                                                <img width="100%"
                                                     src="{{asset('storage/uploads/'.$item->course_image)}}"
                                                     alt="">
                                            @else
                                                <img src="http://placehold.it/255x220" alt="">
                                            @endif
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
                                        <div class="best-course-text d-inline-block w-100 px-2 pb-4">
                                            <div class="course-title mb20 headline relative-position">
                                                <h3>
                                                    <a href="{{ route('courses.show', [$item->slug]) }}">{{$item->title}}</a>
                                                </h3>
                                            </div>
                                            <div class="course-meta d-inline-block w-100 ">
                                                <div class="d-inline-block w-100">
                                                     <span class="course-category float-left">
                                                <a href="{{route('courses.category',['category'=>$item->category->slug])}}"
                                                   class="text-success">{{$item->category->name}}</a>
                                            </span>
                                                    <span class="course-author float-right">
                                                 {{ $item->students()->count() }}
                                                        Students
                                            </span>
                                                </div>

                                                <p class="mb-0 text-center text-danger"><b> {{ $item->progress()  }}
                                                        % completed</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h4 class="text-center">No Featured Courses yet</h4>
                        @endif
                    </div>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
