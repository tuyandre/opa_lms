@extends('frontend.layouts.app'.config('theme_layout'))

@push('after-styles')
    <style>
        /*.address-details.ul-li-block{*/
        /*line-height: 60px;*/
        /*}*/
    </style>
@endpush

@section('content')

    <!-- Start of slider section
            ============================================= -->
    @include('frontend.layouts.partials.slider')

    @if($sections->search_section->status == 1)
        <!-- End of slider section
            ============================================= -->
        <section id="search-course" class="search-course-section">
            <div class="container">
                <div class="section-title mb20 headline text-center ">
                    <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                    <h2><span>Search</span> Genius Courses.</h2>
                </div>
                <div class="search-course mb30 relative-position ">
                    <form action="#" method="post">
                        <input class="course" name="course" type="text"
                               placeholder="Type what do you want to learn today?">
                        <div class="nws-button text-center  gradient-bg text-capitalize">
                            <button type="submit" value="Submit">Search Course</button>
                        </div>
                    </form>
                </div>
                <div class="search-counter-up">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="counter-icon-number ">
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-graduation-hat"></i>
                                </div>
                                <div class="counter-number">
                                    <span class=" bold-font">{{$total_students}}</span>
                                    <p>Students Enrolled</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->

                        <div class="col-md-4 col-sm-4">
                            <div class="counter-icon-number ">
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-book"></i>
                                </div>
                                <div class="counter-number">
                                    <span class=" bold-font">{{$total_courses}}</span>
                                    <p>Online Available Courses</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->


                        <div class="col-md-4 col-sm-4">
                            <div class="counter-icon-number ">
                                <div class="counter-icon">
                                    <i class="text-gradiant flaticon-group"></i>
                                </div>
                                <div class="counter-number">
                                    <span class=" bold-font">{{$total_teachers}}</span>
                                    <p>Teachers</p>
                                </div>
                            </div>
                        </div>
                        <!-- /counter -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Search Courses
            ============================================= -->
    @endif


    @if($sections->popular_courses->status == 1)
        <!-- Start popular course
        ============================================= -->
        @if(count($popular_courses) > 0)
            <section id="popular-course" class="mt-4 popular-course-section">
                <div class="container">
                    <div class="section-title mb20 headline text-left ">
                        <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                        <h2><span>Popular</span> Courses.</h2>
                    </div>
                    <div id="course-slide-item" class="course-slide">
                        @foreach($popular_courses as $item)
                            <div class="course-item-pic-text ">
                                <div class="course-pic relative-position mb25">
                                    @if($item->course_image != "")
                                        <img src="{{asset('storage/uploads/'.$item->course_image)}}"
                                             alt="">
                                    @else
                                        <img src="http://placehold.it/370x320" alt="">
                                    @endif
                                    <div class="course-price text-center gradient-bg">
                                        <span>${{$item->price}}</span>
                                    </div>
                                    <div class="course-details-btn">
                                        <a href="{{ route('courses.show', [$item->slug]) }}">COURSE DETAIL <i
                                                    class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="course-item-text">
                                    <div class="course-meta">
                                    <span class="course-category bold-font"><a
                                                href="#">{{$item->category->name}}</a></span>
                                        <span class="course-author bold-font">
                                @foreach($item->teachers as $teacher)
                                                <a href="#">{{$teacher->first_name}}</a></span>
                                        @endforeach
                                        <div class="course-rate ul-li">
                                            <ul>
                                                @for($i=1; $i<=(int)$item->rating; $i++)
                                                    <li><i class="fas fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="course-title mt10 headline pb45 relative-position">
                                        <h3><a href="{{ route('courses.show', [$item->slug]) }}">{{$item->title}}</a>
                                            @if($item->trending == 1)
                                                <span
                                                        class="trend-badge text-uppercase bold-font"><i
                                                            class="fas fa-bolt"></i> TRENDING</span>
                                            @endif
                                        </h3>
                                    </div>
                                    <div class="course-viewer ul-li">
                                        <ul>
                                            <li><a href=""><i class="fas fa-user"></i> {{ $item->students()->count() }}
                                                </a>
                                            </li>
                                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                            {{--<li><a href="">125k Unrolled</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /item -->
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End popular course
                ============================================= -->
        @endif
    @endif

    @if(($sections->reasons->status != 0) || ($sections->testimonial->status != 0))
    <!-- Start of why choose us section
        ============================================= -->
    <section id="why-choose-us" class="why-choose-us-section">
        <div class="jarallax  backgroud-style">
            <div class="container">
                @if($sections->reasons->status == 1)

                    <div class="section-title mb20 headline text-center ">
                        <span class="subtitle text-uppercase">GENIUS ADVANTAGES</span>
                        <h2>Reason <span>Why Choose {{env('APP_NAME')}}.</span></h2>
                    </div>
                    @if($reasons->count() > 0)
                        <div id="service-slide-item" class="service-slide">
                            @foreach($reasons as $item)
                                <div class="service-text-icon ">

                                    <div class="service-icon float-left">
                                        <i class="text-gradiant {{$item->icon}}"></i>
                                    </div>
                                    <div class="service-text">
                                        <h3 class="bold-font">{{$item->title}}</h3>
                                        <p>{{$item->content}}.</p>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    @endif
                @endif
            <!-- /service-slide -->
                @if($sections->testimonial->status == 1)

                    <div class="testimonial-slide">
                        <div class="section-title-2 mb65 headline text-left ">
                            <h2>Students <span>Testimonial.</span></h2>
                        </div>
                        @if($testimonials->count() > 0)
                            <div id="testimonial-slide-item" class="testimonial-slide-area">

                                @foreach($testimonials as $item)
                                    <div class="student-qoute ">
                                        <p>{{$item->content}}</p>
                                        <div class="student-name-designation">
                                            <span class="st-name bold-font">{{$item->name}} </span>
                                            <span class="st-designation">{{$item->occupation}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h4>Not Available</h4>
                        @endif
                        @endif
                    </div>
            </div>
        </div>
    </section>
    <!-- End of why choose us section
        ============================================= -->
    @endif

    @if($sections->latest_news->status == 1)
        <!-- Start latest section
        ============================================= -->
        <section id="latest-area" class="latest-area-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="latest-area-content  ">
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Latest <span>News Blog.</span></h2>
                            </div>
                            <div class="latest-news-posts">
                                @if(count($news) > 0)
                                    @foreach($news as  $item)
                                        <div class="latest-news-area">
                                            @if($item->image != null)
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url('{{asset("storage/uploads/".$item->image)}}');">
                                                    <div class="hover-search">
                                                        {{--<i class="fas fa-search"></i>--}}
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @else
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url('http://placehold.it/120x120');">
                                                    <div class="hover-search">
                                                        {{--<i class="fas fa-search"></i>--}}
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @endif
                                            <div class="date-meta">
                                                <i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
                                            </div>
                                            <h3 class="latest-title bold-font"><a
                                                        href="{{route('blogs.index',['slug' => $item->slug.'-'.$item->id])}}">{{$item->title}}</a>
                                            </h3>
                                            <h3 class="latest-title text-primary"><a
                                                        href="{{route('blogs.category',['category' => $item->category->slug])}}">{{$item->category->name}}</a>
                                            </h3>
                                            <div class="course-viewer ul-li">
                                                <ul>
                                                    {{--<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>--}}
                                                    @if($item->comments->count() > 1)
                                                        <li><a href=""><i
                                                                        class="fas fa-comment-dots"></i>{{ $item->comments->count() }}
                                                            </a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                @endforeach
                            @endif

                            <!-- /post -->


                                <div class="view-all-btn bold-font">
                                    <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="latest-area-content  ">
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Trending <span>Courses.</span></h2>
                            </div>
                            <div class="latest-news-posts">
                                @if(count($trending_courses) > 0)
                                    @foreach($trending_courses as  $item)
                                        <div class="latest-news-area">
                                            @if($item->image != null)
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url('{{asset("storage/uploads/".$item->image)}}');">
                                                    <div class="hover-search">
                                                        {{--<i class="fas fa-search"></i>--}}
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @else
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url('http://placehold.it/120x120');">
                                                    <div class="hover-search">
                                                        {{--<i class="fas fa-search"></i>--}}
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @endif
                                            <div class="date-meta">
                                                <i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
                                            </div>
                                            <h3 class="latest-title bold-font"><a
                                                        href="{{route('courses.show',['slug'=>$item->slug])}}">{{$item->title}}</a>
                                            </h3>
                                            <h3 class="latest-title text-primary"><a
                                                        href="{{route('courses.category',['category'=>$item->category->slug])}}">{{$item->category->name}}</a>
                                            </h3>
                                            <div class="course-viewer ul-li">
                                                <ul>
                                                    <li><a href=""><i
                                                                    class="fas fa-user"></i> {{$item->students->count()}}
                                                        </a></li>

                                                </ul>
                                            </div>
                                        </div>

                                @endforeach
                            @endif

                            <!-- /post -->

                                <div class="view-all-btn bold-font">
                                    <a href="{{route('courses.all',['type'=>'trending'])}}">View All Trending Courses <i
                                                class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="latest-area-content  ">
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Popular <span>Courses.</span></h2>
                            </div>
                            <div class="latest-news-posts">
                                @if(count($popular_courses) > 0)
                                    @foreach($popular_courses->take(2) as  $item)
                                        <div class="latest-news-area">
                                            @if($item->image != null)
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url('{{asset("storage/uploads/".$item->image)}}');">
                                                    <div class="hover-search">
                                                        {{--<i class="fas fa-search"></i>--}}
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @else
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url('http://placehold.it/120x120');">
                                                    <div class="hover-search">
                                                        {{--<i class="fas fa-search"></i>--}}
                                                    </div>
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @endif
                                            <div class="date-meta">
                                                <i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
                                            </div>
                                            <h3 class="latest-title bold-font"><a
                                                        href="{{route('courses.show',['slug'=>$item->slug])}}">{{$item->title}}</a>
                                            </h3>
                                            <h3 class="latest-title text-primary"><a
                                                        href="{{route('courses.category',['category'=>$item->category->slug])}}">{{$item->category->name}}</a>
                                            </h3>
                                            <div class="course-viewer ul-li">
                                                <ul>
                                                    <li><a href=""><i
                                                                    class="fas fa-user"></i> {{$item->students->count()}}
                                                        </a></li>

                                                </ul>
                                            </div>
                                        </div>
                                @endforeach
                            @endif

                            <!-- /post -->
                                <div class="view-all-btn bold-font">
                                    <a href="{{route('courses.all',['type'=>'popular'])}}">View All Popular Courses <i
                                                class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest section
            ============================================= -->
    @endif


    @if($sections->sponsors->status == 1)
        @if(count($sponsors) > 0 )
            <!-- Start of sponsor section
        ============================================= -->
            <section id="sponsor" class="sponsor-section">
                <div class="container">
                    <div class="section-title-2 mb65 headline text-left ">
                        <h2>Genius <span>Sponsors.</span></h2>
                    </div>

                    <div class="sponsor-item sponsor-1 text-center">
                        @foreach($sponsors as $sponsor)
                            <div class="sponsor-pic text-center">
                                <a href="{{ ($sponsor->link != "") ? $sponsor->link : '#' }}">
                                    <img src={{asset("storage/uploads/".$sponsor->logo)}} alt="{{$sponsor->name}}">
                                </a>

                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <!-- End of sponsor section
       ============================================= -->
        @endif
    @endif


    @if($sections->featured_courses->status == 1)
        <!-- Start of best course
        ============================================= -->
        <section id="best-course" class="best-course-section">
            <div class="container">
                <div class="section-title mb45 headline text-center ">
                    <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
                    <h2>Browse Our<span> Featured Course.</span></h2>
                </div>
                <div class="best-course-area mb45">
                    <div class="row">
                        @if(count($featured_courses) > 0)
                            @foreach($featured_courses as $item)
                                <div class="col-md-3">
                                    <div class="best-course-pic-text relative-position ">
                                        <div class="best-course-pic relative-position">
                                            @if($item->course_image != "")
                                                <img src="{{asset('storage/uploads/'.$item->course_image)}}"
                                                     alt="">
                                            @else
                                                <img src="http://placehold.it/270x220" alt="">
                                            @endif
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
                        @else
                            <h4 class="text-center">No Featured Courses yet</h4>
                        @endif

                    </div>
                </div>


            </div>
        </section>
        <!-- End of best course
            ============================================= -->
    @endif


    @if($sections->teachers->status == 1)
        <!-- Start of course teacher
        ============================================= -->
        <section id="course-teacher" class="course-teacher-section">
            <div class="jarallax">
                <div class="container">
                    <div class="section-title mb20 headline text-center ">
                        <span class="subtitle text-uppercase">OUR PROFESSIONAL</span>
                        <h2>Genius Courses <span>Teachers.</span></h2>
                    </div>

                    <div class="teacher-list">
                        <div class="row justify-content-center">
                            <!-- /teacher -->
                            @if(count($teachers)> 0)
                                @foreach($teachers as $item)
                                    <div class="col-md-3">
                                        <div class="teacher-img-content ">
                                            <div class="teacher-cntent">
                                                <div class="teacher-social-name ul-li-block">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="{{route('admin.messages')}}"><i
                                                                        class="fa fa-comments"></i></a></li>
                                                    </ul>
                                                    <div class="teacher-name">
                                                        <span>{{$item->full_name}}</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-img-category">
                                                    <div class="teacher-img">
                                                        <img src="{{$item->picture}}" style="height: 100%" alt="">
                                                        {{--<div class="course-price text-uppercase text-center gradient-bg">--}}
                                                        {{--<span>Featured</span>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                    {{--<div class="teacher-category float-right">--}}
                                                    {{--<span class="st-name">{{$item->name}} </span>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            @endif

                        </div>

                        <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font ">
                            <a href="#">All teacher <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of course teacher
            ============================================= -->
    @endif


    @if($sections->faq->status == 1)
        <!-- Start FAQ section
        ============================================= -->
        <section id="faq" class="faq-section">
            <div class="container">
                <div class="section-title mb45 headline text-center ">
                    <span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
                    <h2>Frequently<span> Ask & Questions</span></h2>
                </div>
                @if(count($faqs)> 0)

                    <div class="faq-tab">
                        <div class="faq-tab-ques ul-li">
                            <div class="tab-button text-center mb65 ">
                                <ul class="product-tab">
                                    @foreach($faqs as $key=>$faq)
                                        <li rel="tab{{$faq->id}}">{{$faq->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- /tab-head -->

                            <!-- tab content -->
                            <div class="tab-container">
                            @foreach($faqs as $key=>$faq)

                                <!-- 1st tab -->
                                    <div id="tab{{$faq->id}}" class="tab-content-1 pt35">
                                        <div class="row">
                                            @foreach($faq->faqs->take(4) as $item)
                                                <div class="col-md-6">
                                                    <div class="ques-ans mb45 headline">
                                                        <h3> {{$item->question}}</h3>
                                                        <p>{{$item->answer}}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- #tab1 -->
                                @endforeach

                            </div>
                            <div class="view-all-btn bold-font ">
                                <a href="{{route('frontend.faqs')}}">More FAQs <i
                                            class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @else
                    <h4>No FAQs yet</h4>
                @endif
            </div>
        </section>
        <!-- End FAQ section
            ============================================= -->
    @endif


    @if($sections->course_by_category->status == 1)
        <!-- Start Course category
        ============================================= -->
        <section id="course-category" class="course-category-section">
            <div class="container">
                <div class="section-title mb45 headline text-center ">
                    <span class="subtitle text-uppercase">COURSES CATEGORIES</span>
                    <h2>Browse Courses<span> By Category.</span></h2>
                </div>
                @if($course_categories)
                    <div class="category-item">
                        <div class="row">
                            @foreach($course_categories as $category)
                                <div class="col-md-3">
                                    <a href="{{route('courses.category',['category'=>$category->slug])}}">
                                        <div class="category-icon-title text-center ">
                                            <div class="category-icon">
                                                <i class="text-gradiant {{$category->icon}}"></i>
                                            </div>
                                            <div class="category-title">
                                                <h4>{{$category->name}}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        @endforeach
                        <!-- /category -->
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- End Course category
            ============================================= -->
    @endif


    @if($sections->contact_us->status == 1)
        <!-- Start of contact area
        ============================================= -->
        <section id="contact-area" class="contact-area-section backgroud-style">
            <div class="container">
                <div class="contact-area-content">
                    <div class="row">
                        @if(config('contact_data') != "")
                            @php
                                $contact_data = contact_data(config('contact_data'));
                            @endphp
                            <div class="col-md-6">
                                <div class="contact-left-content ">
                                    <div class="section-title  mb45 headline text-left">
                                        <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                                        <h2><span>Get in Touch</span></h2>
                                        <p>
                                            {{ $contact_data["short_text"]["value"] }}
                                        </p>
                                    </div>

                                    <div class="contact-address">
                                        <div class="contact-address-details">
                                            <div class="address-icon relative-position text-center float-left">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="address-details ul-li-block">
                                                <ul>
                                                    @if($contact_data["primary_address"]["status"] == 1)
                                                        <li>
                                                            <span>Primary: </span>{{$contact_data["primary_address"]["value"]}}
                                                        </li>
                                                    @endif

                                                    @if($contact_data["secondary_address"]["status"] == 1)
                                                        <li>
                                                            <span>Second: </span>{{$contact_data["secondary_address"]["value"]}}
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="contact-address-details">
                                            <div class="address-icon relative-position text-center float-left">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="address-details ul-li-block">
                                                <ul>
                                                    @if($contact_data["primary_phone"]["status"] == 1)
                                                        <li>
                                                            <span>Primary: </span>{{$contact_data["primary_phone"]["value"]}}
                                                        </li>
                                                    @endif

                                                    @if($contact_data["secondary_phone"]["status"] == 1)
                                                        <li>
                                                            <span>Second: </span>{{$contact_data["secondary_phone"]["value"]}}
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="contact-address-details">
                                            <div class="address-icon relative-position text-center float-left">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="address-details ul-li-block">
                                                <ul>
                                                    @if($contact_data["primary_email"]["status"] == 1)
                                                        <li>
                                                            <span>Primary: </span>{{$contact_data["primary_email"]["value"]}}
                                                        </li>
                                                    @endif

                                                    @if($contact_data["secondary_email"]["status"] == 1)
                                                        <li>
                                                            <span>Second: </span>{{$contact_data["secondary_email"]["value"]}}
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
                                    <a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                            @if($contact_data["location_on_map"]["status"] == 1)
                                <div class="col-md-6">
                                    <div id="contact-map" class="contact-map-section">
                                        {!! $contact_data["location_on_map"]["value"] !!}
                                    </div>
                                </div>
                            @endif
                        @else
                            <h4>Please enter data from backend.</h4>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- End of contact area
            ============================================= -->
    @endif


@endsection

@push('after-scripts')
    <script>
        $('ul.product-tab').find('li:first').addClass('active');
    </script>
@endpush
