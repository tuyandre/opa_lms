@extends('frontend.layouts.app'.config('theme_layout'))
@push('after-styles')
    <style>
        .couse-pagination li.active {
            color: #333333!important;
            font-weight: 700;
        }
        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #c7c7c7;
            background-color: white;
            border: none;
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #333333;
            background-color:white;
            border:none;

        }
        ul.pagination{
            display: inline;
            text-align: center;
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
                    <h2 class="breadcrumb-head black bold">@if(isset($category)) {{$category->name}} @endif <span>Courses</span></h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->


    <!-- Start of course section
        ============================================= -->
    <section id="course-page" class="course-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if(session()->has('success'))
                        <div class="alert alert-dismissable alert-success fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="short-filter-tab">
                        <div class="shorting-filter w-50 d-inline float-left mr-3">
                            <span><b>Sort</b> By</span>
                            <select class="form-control d-inline w-50">
                                <option value="9" selected="">Popularity</option>
                                <option value="10">Most Read</option>
                                <option value="11">Most View</option>
                                <option value="12">Most Shared</option>
                            </select>
                        </div>
                        {{--<div class="shorting-filter  float-left">--}}
                            {{--<span><b>View</b> By</span>--}}
                            {{--<select>--}}
                                {{--<option value="9" selected="">9 Course</option>--}}
                                {{--<option value="10">7 Course</option>--}}
                                {{--<option value="11">2 Course</option>--}}
                                {{--<option value="12">0 Course</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        <div class="tab-button blog-button ul-li text-center float-right">
                            <ul class="product-tab">
                                <li class="active" rel="tab1"><i class="fas fa-th"></i></li>
                                <li rel="tab2"><i class="fas fa-list"></i></li>
                            </ul>
                        </div>

                    </div>

                    <div class="genius-post-item">
                        <div class="tab-container">
                            <div id="tab1" class="tab-content-1 pt35">
                                <div class="best-course-area best-course-v2">
                                    <div class="row">
                                        @foreach($courses as $course)

                                            <div class="col-md-4">
                                                <div class="best-course-pic-text relative-position">
                                                    <div class="best-course-pic relative-position">
                                                        @if($course->course_image != "")
                                                            <img src="{{asset('storage/uploads/'.$course->course_image)}}"
                                                                 alt="">
                                                        @else
                                                            <img src="http://placehold.it/270x200" alt="">
                                                        @endif
                                                        @if($course->trending == 1)
                                                        <div class="trend-badge-2 text-center text-uppercase">
                                                        <i class="fas fa-bolt"></i>
                                                        <span>Trending</span>
                                                        </div>
                                                        @endif
                                                        <div class="course-price text-center gradient-bg">
                                                            <span>${{$course->price}}</span>
                                                        </div>
                                                        <div class="course-rate ul-li">
                                                            <ul>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="course-details-btn">
                                                            <a href="{{ route('courses.show', [$course->slug]) }}">COURSE
                                                                DETAIL <i class="fas fa-arrow-right"></i></a>
                                                        </div>
                                                        <div class="blakish-overlay"></div>
                                                    </div>
                                                    <div class="best-course-text">
                                                        <div class="course-title mb20 headline relative-position">
                                                            <h3>
                                                                <a href="{{ route('courses.show', [$course->slug]) }}">{{$course->title}}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="course-meta">
                                                            <span class="course-category"><a href="{{route('courses.category',['category'=>$course->category->slug])}}">{{$course->category->name}}</a></span>
                                                            <span class="course-author"><a href="#">{{ $course->students()->count() }}
                                                                    Students</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach

                                    <!-- /course -->


                                    </div>
                                </div>
                            </div><!-- /tab-1 -->

                            <div id="tab2" class="tab-content-1">
                                <div class="course-list-view">
                                    <table>
                                        <tr class="list-head">
                                            <th>COURSE NAME</th>
                                            <th>COURSE TYPE</th>
                                            <th>STARTS</th>
                                            <th>LENGTH</th>
                                        </tr>
                                        @foreach($courses as $course)

                                            <tr>
                                                <td>
                                                    <div class="course-list-img-text">
                                                        <div class="course-list-img">
                                                            @if($course->course_image != "")
                                                                <img src="{{asset('storage/uploads/'.$course->course_image)}}"
                                                                     alt="">
                                                            @else
                                                                <img src="http://placehold.it/270x200" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="course-list-text">
                                                            <h3>
                                                                <a href="{{ route('courses.show', [$course->slug]) }}">{{$course->title}}</a>
                                                            </h3>
                                                            <div class="course-meta">
                                                                <span class="course-category bold-font"><a
                                                                            href="{{ route('courses.show', [$course->slug]) }}">${{$course->price}}</a></span>
                                                                <div class="course-rate ul-li">
                                                                    <ul>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="course-type-list">
                                                        <span>Graphic Design & 3D</span>
                                                    </div>
                                                </td>
                                                <td>6-06-2018</td>
                                                <td>3 Months</td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div><!-- /tab-2 -->
                        </div>
                        <div class="couse-pagination text-center ul-li">
                            {{ $courses->links() }}
                        </div>
                    </div>


                </div>

                <div class="col-md-3">
                    <div class="side-bar">

                        <div class="side-bar-widget  first-widget">
                            <h2 class="widget-title text-capitalize"><span>Find </span>Your Course.</h2>
                            <div class="listing-filter-form pb30">
                                <form action="#" method="get">
                                    <div class="filter-select mb20">
                                        <label>COURSE TYPE</label>
                                        <select>
                                            <option value="9" selected="">All Categories</option>
                                            <option value="10">Default Listing</option>
                                            <option value="11">Category Listing</option>
                                            <option value="12">Orderly Listing</option>
                                        </select>
                                    </div>

                                    <div class="filter-select mb20">
                                        <label>STUDY LAVEL</label>
                                        <select>
                                            <option value="9" selected="">All Locations</option>
                                            <option value="10">Default Listing</option>
                                            <option value="11">Category Listing</option>
                                            <option value="12">Orderly Listing</option>
                                        </select>
                                    </div>
                                    <div class="filter-search mb20">
                                        <label>FULL TEXT</label>
                                        <input type="text" class="" placeholder="Looking for?">
                                    </div>
                                    <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                        <a href="#">FIND COURSES <i class="fas fa-caret-right"></i></a>
                                    </div>
                                </form>

                            </div>
                        </div>

                        @if($recent_news->count() > 0)
                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize"><span>Recent  </span>News</h2>
                                <div class="latest-news-posts">
                                    @foreach($recent_news as $item)
                                        <div class="latest-news-area">

                                            <div class="latest-news-thumbnile relative-position">
                                                @if($item->image != "")
                                                    <img src="{{asset('storage/uploads/'.$item->image)}}"
                                                         alt="">
                                                @else
                                                    <img src="http://placehold.it/80x80" alt="">
                                                @endif

                                                <div class="blakish-overlay"></div>
                                            </div>
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


                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
                            <div class="featured-course">
                                <div class="best-course-pic-text relative-position pt-0">
                                    <div class="best-course-pic relative-position">
                                        <img src="{{asset('assets/img/blog/fb-1.jpg')}}" alt="">
                                        <div class="trend-badge-2 text-center text-uppercase">
                                            <i class="fas fa-bolt"></i>
                                            <span>Trending</span>
                                        </div>
                                    </div>
                                    <div class="best-course-text">
                                        <div class="course-title mb20 headline relative-position">
                                            <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                        </div>
                                        <div class="course-meta">
                                            <span class="course-category"><a href="#">Web Design</a></span>
                                            <span class="course-author"><a href="#">250 Students</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of course section
        ============================================= -->


    <section id="best-course" class="best-course-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
                <h2>You<span> Recently View.</span></h2>
            </div>
            <div class="best-course-area mb45">
                <div class="row">
                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('assets/img/course/bc-1.jpg')}}" alt="">
                                <div class="trend-badge-2 text-center text-uppercase">
                                    <i class="fas fa-bolt"></i>
                                    <span>Trending</span>
                                </div>
                                <div class="course-price text-center gradient-bg">
                                    <span>$99.00</span>
                                </div>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="course-details-btn">
                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                </div>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">250 Students</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /course -->

                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('assets/img/course/bc-2.jpg')}}" alt="">
                                <div class="course-price text-center gradient-bg">
                                    <span>$99.00</span>
                                </div>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="course-details-btn">
                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                </div>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">250 Students</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /course -->

                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('assets/img/course/bc-3.jpg')}}" alt="">
                                <div class="course-price text-center gradient-bg">
                                    <span>$99.00</span>
                                </div>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="course-details-btn">
                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                </div>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">250 Students</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /course -->

                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{asset('assets/img/course/bc-4.jpg')}}" alt="">
                                <div class="course-price text-center gradient-bg">
                                    <span>$99.00</span>
                                </div>
                                <div class="course-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="course-details-btn">
                                    <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position">
                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                </div>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">250 Students</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /course -->
                </div>
            </div>
        </div>
    </section>


@endsection