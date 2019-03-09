@extends('frontend.layouts.app'.config('theme_layout'))
@push('after-styles')
    <style>
        .section-title-2 h2:after{
            background: #ffffff;
            bottom: 0px;
            position: relative;
        }
    </style>
@endpush
@section('content')

    <!-- Start of breadcrumb section
        ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold">{{env('APP_NAME')}} <span>Teacher</span></h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teachers Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->


    <!-- Start of teacher details area
        ============================================= -->
    <section id="teacher-details" class="teacher-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="teacher-details-content mb45">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="teacher-details-img">
                                    <img style="height: 100px" src="{{$teacher->picture}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="teacher-details-text">
                                    <div class="section-title-2 mb-2  headline text-left">
                                        <h2>{{$teacher->first_name}} <span>{{$teacher->last_name}}</span></h2>

                                    </div>

                                    <div class="teacher-address">
                                        <div class="address-details ul-li-block">
                                            <ul class="d-inline-block w-100">
                                                <li class="d-inline-block w-100">
                                                    <div class="addrs-icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div class="add-info">
                                                        <span>{{$teacher->email}}</span>
                                                    </div>
                                                </li>
                                                <li class="d-inline-block w-100">
                                                    <div class="addrs-icon">
                                                        <i class="fas fa-comments"></i>
                                                    </div>
                                                    <div class="add-info">
                                                        <a href="{{route('admin.messages',['teacher_id' => $teacher->id])}}"><span> Send Now <i class="fa fa-arrow-right text-primary"></i></span></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-teacher mb45">
                        <div class="section-title-2  mb-0 headline text-left">
                            <h2>Courses <span>By Teacher.</span></h2>
                        </div>
                       @if(count($teacher->courses) > 0)
                            <div class="row">
                                    @foreach($teacher->courses as $item)
                                        <div class="col-md-4">
                                            <div class="best-course-pic-text relative-position ">
                                                <div class="best-course-pic relative-position"  @if($item->course_image) style="background-image:url({{asset('storage/uploads/'.$item->course_image)}}) " @endif >

                                                    @if($item->trending == 1)
                                                        <div class="trend-badge-2 text-center text-uppercase">
                                                            <i class="fas fa-bolt"></i>
                                                            <span>Trending</span>
                                                        </div>
                                                    @endif
                                                    <div class="course-price text-center gradient-bg">
                                                        <span>${{$item->price}}</span>
                                                    </div>
                                                    <div class="course-rate ul-li">
                                                        <ul>
                                                            @for($i=1; $i<=(int)$item->rating; $i++)
                                                                <li><i class="fas fa-star"></i></li>
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                    <div class="course-details-btn">
                                                        <a href="{{ route('courses.show', [$item->slug]) }}">COURSE DETAIL <i
                                                                    class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                                <div class="best-course-text">
                                                    <div class="course-title mb20 headline relative-position">
                                                        <h3>
                                                            <a href="{{ route('courses.show', [$item->slug]) }}">{{$item->title}}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="course-meta">
                                            <span class="course-category"><a
                                                        href="#">{{$item->category->name}}</a></span>
                                                        <span class="course-author">
                                                <a href="#">
                                                    {{ $item->students()->count() }}
                                                    Students</a>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                            </div>

                        @else
                           <p>No Courses yet.</p>
                        @endif
                    </div>


                </div>

                <div class="col-md-3">
                    <div class="side-bar">


                        @if($recent_news->count() > 0)
                            <div class="side-bar-widget first-widget">
                                <h2 class="widget-title text-capitalize"><span>Recent  </span>News</h2>
                                <div class="latest-news-posts">
                                    @foreach($recent_news as $item)
                                        <div class="latest-news-area">

                                            @if($item->image != "")
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url({{asset('storage/uploads/'.$item->image)}})">
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @endif
                                            <div class="date-meta">
                                                <i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
                                            </div>
                                            <h3 class="latest-title bold-font"><a href="{{route('blogs.index',['slug'=>$item->slug.'-'.$item->id])}}">{{$item->title}}</a></h3>
                                        </div>
                                        <!-- /post -->
                                    @endforeach


                                    <div class="view-all-btn bold-font">
                                        <a href="{{route('blogs.index')}}">View All News <i class="fas fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        @endif


                        @if($global_featured_course != "")
                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
                                <div class="featured-course">
                                    <div class="best-course-pic-text relative-position pt-0">
                                        <div class="best-course-pic relative-position " style="background-image: url({{asset('storage/uploads/'.$global_featured_course->course_image)}})">

                                            @if($global_featured_course->trending == 1)
                                                <div class="trend-badge-2 text-center text-uppercase">
                                                    <i class="fas fa-bolt"></i>
                                                    <span>Trending</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="best-course-text" style="left: 0;right: 0;">
                                            <div class="course-title mb20 headline relative-position">
                                                <h3><a href="{{ route('courses.show', [$global_featured_course->slug]) }}">{{$global_featured_course->title}}</a></h3>
                                            </div>
                                            <div class="course-meta">
                                                <span class="course-category"><a href="{{route('courses.category',['category'=>$global_featured_course->category->slug])}}">{{$global_featured_course->category->name}}</a></span>
                                                <span class="course-author">{{ $global_featured_course->students()->count() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End  of teacher details area
        ============================================= -->

@endsection