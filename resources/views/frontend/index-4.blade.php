@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', app_name() . ' | Home')
@section('meta_description', '')
@section('meta_keywords','')

@push("after-styles")
    <style>
        #search-course-2 {
            padding-bottom: 125px;
        }
        .my-alert{
            position: absolute;
            z-index: 10;
            left: 0;
            right: 0;
            top: 25%;
            width: 50%;
            margin: auto;
            display: inline-block;
        }
    </style>
@endpush
@section('content')

    @if(session()->has('alert'))
        <div class="alert alert-light alert-dismissible fade my-alert show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{session('alert')}}</strong>
        </div>
    @endif

    <!-- Start of slider section
    ============================================= -->
    @include('frontend.layouts.partials.slider')

    <!-- End of slider section
            ============================================= -->


    @if($sections->counters->status == 1)
        <!-- Start of Search Courses
    ============================================= -->
        <section id="search-course" class="search-course-section search-course-third">
            <div class="container">
                <div class="search-counter-up">
                    <div class="version-four">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="counter-icon-number">
                                    <div class="counter-icon">
                                        <i class="text-gradiant flaticon-graduation-hat"></i>
                                    </div>
                                    <div class="counter-number">
                                        <span class="bold-font">{{$total_students}}</span>
                                        <p>Students Enrolled</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /counter -->

                            <div class="col-md-4">
                                <div class="counter-icon-number">
                                    <div class="counter-icon">
                                        <i class="text-gradiant flaticon-book"></i>
                                    </div>
                                    <div class="counter-number">
                                        <span class="bold-font">{{$total_courses}}</span>
                                        <p>Online Available Courses</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /counter -->

                            <div class="col-md-3">
                                <div class="counter-icon-number">
                                    <div class="counter-icon">
                                        <i class="text-gradiant flaticon-group"></i>
                                    </div>
                                    <div class="counter-number">
                                        <span class="bold-font">{{$total_teachers}}</span>
                                        <p>Teachers</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /counter -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Search Courses
            ============================================= -->
    @endif

    @if($sections->popular_courses->status == 1)
        @include('frontend.layouts.partials.popular_courses',['class'=>'popular-three'])
    @endif


    @if($sections->reasons->status == 1)
        <!-- Start why choose section
        ============================================= -->
        @include('frontend.layouts.partials.why_choose_us',['class'=>'pb-5'])
        <!-- End why choose section
        ============================================= -->
    @endif



    @if($sections->featured_courses->status == 1)
        <!-- Start of best course
        ============================================= -->
        <div id="best-product">
            @include('frontend.layouts.partials.browse_courses')
        </div>
        <!-- End of best course
            ============================================= -->
    @endif


    @if($sections->course_by_category->status == 1)
        <!-- Start of Categories
    ============================================= -->
        <div class="about-course-categori one-page-category about-teacher-2">
            <div class="container">
                <div class="category-slide text-center">
                    @if($course_categories->count() > 0)
                        @foreach($course_categories as $category)
                            <a href="{{route('courses.category',['category'=>$category->slug])}}">
                                <div class="category-icon-title text-center">
                                    <div class="category-icon">
                                        <i class="text-gradiant {{$category->icon}}"></i>
                                    </div>
                                    <div class="category-title">
                                        <h4>{{$category->name}}</h4>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- End of Categories
       ============================================= -->
    @endif


    @if($sections->teachers->status == 1)

        <!-- Start of genius teacher v2
    ============================================= -->
        <section id="genius-teacher-2" class="genius-teacher-section-2 one-page-teacher backgroud-style">
            <div class="container">
                <div class="section-title mb20  headline text-center">
                    <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                    <h2><span>Popular</span> Teachers.</h2>
                </div>
                @if(count($teachers)> 0)
                    <div class="teacher-third-slide">
                        @foreach($teachers as $key=>$item)
                            @if($key%2 == 0 && (count($teachers) > 5))
                                <div class="teacher-double">
                                    @endif
                                    <div class="teacher-img-content relative-position">
                                        <img height="210px" width="210px" src="{{$item->picture}}" alt="">
                                        <div class="teacher-cntent">
                                            <div class="teacher-social-name ul-li-block">
                                                <ul>
                                                    <li><a href="{{'mailto:'.$item->email}}"><i class="fa fa-envelope"></i></a></li>
                                                    <li><a href="{{route('admin.messages',['teacher_id'=>$item->id])}}"><i class="fa fa-comments"></i></a></li>
                                                </ul>
                                                <div class="teacher-name">
                                                    <span>{{$item->full_name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="teacher-category float-right">--}}
                                        {{--<span class="st-name">Mobile Apps </span>--}}
                                        {{--</div>--}}
                                    </div>
                                    @if($key%2 == 1)
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
        <!-- End of genius teacher v2
            ============================================= -->
    @endif




    @if($sections->latest_news->status == 1)
        <!-- Start latest section
        ============================================= -->
        @include('frontend.layouts.partials.latest_news')
        <!-- End latest section
            ============================================= -->
    @endif



    @if($sections->search_section->status == 1)
        <!-- Start of Search Courses
        ============================================= -->
    <section id="search-course-2" class="search-course-section home-third-course-search backgroud-style">
        <div class="container">
            <div class="section-title mb20 headline text-center">
                <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                <h2><span>Search</span> {{env('APP_NAME')}} Courses.</h2>
            </div>
            <div class="search-course mb30 relative-position">
                <form action="{{route('search')}}" method="get">
                    <input class="course" name="q" type="text" placeholder="Type what do you want to learn today?">
                    <div class="nws-button text-center  gradient-bg text-capitalize">
                        <button type="submit" value="Submit">Search Course</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of Search Courses
        ============================================= -->
    @endif



    @if($sections->faq->status == 1)
        <!-- Start FAQ section
        ============================================= -->
        @include('frontend.layouts.partials.faq-with-bg')
        <!-- End FAQ section
            ============================================= -->
    @endif


    @if($sections->testimonial->status == 1)
        <!-- Start of testimonial secound section
        ============================================= -->
        @include('frontend.layouts.partials.testimonial')
        <!-- End  of testimonial secound section
            ============================================= -->
    @endif


    @if($sections->sponsors->status == 1)
        @if(count($sponsors) > 0 )
            <!-- Start of sponsor section
        ============================================= -->
            @include('frontend.layouts.partials.sponsors')
            <!-- End of sponsor section
       ============================================= -->
        @endif
    @endif



    @if($sections->contact_form->status == 1)
        <!-- Start of contact area form
        ============================================= -->
    <section id="contact-form" class="contact-form-area_3">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">Send us a message</span>
                <h2>Send Us A<span> Message.</span></h2>
            </div>

            <div class="contact_third_form">
                <form class="contact_form" action="{{route('frontend.contact.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info">
                                <input class="name" name="name" type="text" placeholder="Your Name">
                                @if($errors->has('name'))
                                    <span class="help-block text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <input class="email" name="email" type="email" placeholder="Your Email">
                                @if($errors->has('email'))
                                    <span class="help-block text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <input class="number" name="phone" type="number" placeholder="Phone Number">
                                @if($errors->has('phone'))
                                    <span class="help-block text-danger">{{$errors->first('phone')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <textarea name="message" placeholder="Message"></textarea>
                    @if($errors->has('message'))
                        <span class="help-block text-danger">{{$errors->first('message')}}</span>
                    @endif
                    <div class="nws-button text-center  gradient-bg text-uppercase">
                        <button type="submit" value="Submit">SEND EMAIL <i class="fas fa-caret-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of contact area form
        ============================================= -->
    @endif


    @if($sections->contact_us->status == 1)
        <!-- Start of contact area
        ============================================= -->
        @include('frontend.layouts.partials.contact_area')
        <!-- End of contact area
            ============================================= -->
    @endif

@endsection