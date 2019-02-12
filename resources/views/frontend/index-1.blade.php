@extends('frontend.layouts.app'.config('theme_layout'))


@section('content')

    <!-- Start of slider section
            ============================================= -->
    @include('frontend.layouts.partials.slider')

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
                    <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
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


    <!-- Start popular course
        ============================================= -->
    @if(count($popular_courses) > 0)
        <section id="popular-course" class="popular-course-section">
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
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
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
                                        <li><a href=""><i class="fas fa-user"></i> {{ $item->students()->count() }}</a>
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


    <!-- Start of why choose us section
        ============================================= -->
    <section id="why-choose-us" class="why-choose-us-section">
        <div class="jarallax  backgroud-style">
            <div class="container">
                <div class="section-title mb20 headline text-center ">
                    <span class="subtitle text-uppercase">GENIUS ADVANTAGES</span>
                    <h2>Reason <span>Why Choose Genius.</span></h2>
                </div>
                <div id="service-slide-item" class="service-slide">
                    <div class="service-text-icon ">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">The Power Of Education.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon ">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Best Online Education.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon ">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-list"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Education For All Student.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon ">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">The Power Of Education.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Best Online Education.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-list"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Education For All Student.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">The Power Of Education.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Best Online Education.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                    <div class="service-text-icon">
                        <div class="service-icon float-left">
                            <i class="text-gradiant flaticon-list"></i>
                        </div>
                        <div class="service-text">
                            <h3 class="bold-font">Education For All Student.</h3>
                            <p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod
                                tincidun laoreet.</p>
                        </div>
                    </div>
                </div>
                <!-- /service-slide -->
                <div class="testimonial-slide">
                    <div class="section-title-2 mb65 headline text-left ">
                        <h2>Students <span>Testimonial.</span></h2>
                    </div>

                    <div id="testimonial-slide-item" class="testimonial-slide-area">
                        <div class="student-qoute ">
                            <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole
                                    experience</b>. Your price was lower than other companies. Our experience was good
                                from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                            <div class="student-name-designation">
                                <span class="st-name bold-font">Robertho Garcia </span>
                                <span class="st-designation">Graphic Designer</span>
                            </div>
                        </div>

                        <div class="student-qoute ">
                            <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole
                                    experience</b>. Your price was lower than other companies. Our experience was good
                                from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                            <div class="student-name-designation">
                                <span class="st-name bold-font">Robertho Garcia </span>
                                <span class="st-designation">Graphic Designer</span>
                            </div>
                        </div>

                        <div class="student-qoute ">
                            <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole
                                    experience</b>. Your price was lower than other companies. Our experience was good
                                from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                            <div class="student-name-designation">
                                <span class="st-name bold-font">Robertho Garcia </span>
                                <span class="st-designation">Graphic Designer</span>
                            </div>
                        </div>

                        <div class="student-qoute">
                            <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole
                                    experience</b>. Your price was lower than other companies. Our experience was good
                                from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                            <div class="student-name-designation">
                                <span class="st-name bold-font">Robertho Garcia </span>
                                <span class="st-designation">Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of why choose us section
        ============================================= -->


    <!-- Start latest section
        ============================================= -->
    <section id="latest-area" class="latest-area-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="latest-area-content  ">
                        <div class="section-title-2 mb65 headline text-left">
                            <h2>Latest <span>News.</span></h2>
                        </div>
                        <div class="latest-news-posts">
                            <div class="latest-news-area">
                                <div class="latest-news-thumbnile relative-position">
                                    <img src={{asset("assets/img/blog/lb-1.jpg")}} alt="">
                                    <div class="hover-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="date-meta">
                                    <i class="fas fa-calendar-alt"></i> 26 April 2018
                                </div>
                                <h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s
                                        Guide.</a></h3>
                                <div class="course-viewer ul-li">
                                    <ul>
                                        <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                        <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /post -->

                            <div class="latest-news-posts">
                                <div class="latest-news-area">
                                    <div class="latest-news-thumbnile relative-position">
                                        <img src={{asset("assets/img/blog/lb-2.jpg")}} alt="">
                                        <div class="hover-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div class="blakish-overlay"></div>
                                    </div>
                                    <div class="date-meta">
                                        <i class="fas fa-calendar-alt"></i> 26 April 2018
                                    </div>
                                    <h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a>
                                    </h3>
                                    <div class="course-viewer ul-li">
                                        <ul>
                                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /post -->
                            </div>

                            <div class="view-all-btn bold-font">
                                <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /latest-news -->
                <div class="col-md-4">
                    <div class="latest-area-content ">
                        <div class="section-title-2 mb65 headline text-left">
                            <h2>Upcoming <span>Events.</span></h2>
                        </div>
                        <div class="latest-events">
                            <div class="latest-event-item">
                                <div class="events-date  relative-position text-center">
                                    <div class="gradient-bdr"></div>
                                    <span class="event-date bold-font">22</span>
                                    April 2018
                                </div>
                                <div class="event-text">
                                    <h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design &
                                            Development.</a></h3>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">Koke</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="latest-events">
                            <div class="latest-event-item">
                                <div class="events-date  relative-position text-center">
                                    <div class="gradient-bdr"></div>
                                    <span class="event-date bold-font">07</span>
                                    August 2018
                                </div>
                                <div class="event-text">
                                    <h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application
                                            Development.</a></h3>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">Koke</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="latest-events">
                            <div class="latest-event-item">
                                <div class="events-date  relative-position text-center">
                                    <div class="gradient-bdr"></div>
                                    <span class="event-date bold-font">30</span>
                                    Sept 2018
                                </div>
                                <div class="event-text">
                                    <h3 class="latest-title bold-font"><a href="#">IOS Apps Programming &
                                            Development.</a></h3>
                                    <div class="course-meta">
                                        <span class="course-category"><a href="#">Web Design</a></span>
                                        <span class="course-author"><a href="#">Koke</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="view-all-btn bold-font">
                            <a href="#">Check Calendar <i class="fas fa-calendar-alt"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /events -->

                <div class="col-md-4">
                    <div class="latest-area-content ">
                        <div class="section-title-2 mb65 headline text-left">
                            <h2>Latest <span>Video.</span></h2>
                        </div>
                        <div class="latest-video-poster relative-position mb20">
                            <img src={{asset("assets/img/banner/v-1.jpg")}} alt="">
                            <div class="video-play-btn text-center gradient-bg">
                                <a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i
                                            class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="vidoe-text">
                            <h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
                            <p class="mb25">Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam
                                nonummy.</p>
                        </div>
                        <div class="view-all-btn bold-font">
                            <a href="#">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /. -->
            </div>
        </div>
    </section>
    <!-- End latest section
        ============================================= -->


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
    @endif

    <!-- End of sponsor section
        ============================================= -->


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
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
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
                                            <span class="course-author"><a href="#">{{ $item->students()->count() }}
                                                    Students</a></span>
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
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        {{--<ul>--}}
                                        {{--<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>--}}
                                        {{--</ul>--}}
                                        <div class="teacher-name">
												<span>Daniel
												Alvares</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-1.jpg")}} alt="">
                                            {{--<div class="course-price text-uppercase text-center gradient-bg">--}}
                                            {{--<span>Featured</span>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">Mobile Apps </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="teacher-name">
                                            <span>Juliana Hernandes</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-2.jpg")}} alt="">
                                            <div class="course-price text-uppercase text-center gradient-bg">
                                                <span>Featured</span>
                                            </div>
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">Mobile Apps </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="teacher-name">
												<span>Berliana
												Luis</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-3.jpg")}} alt="">
                                            <div class="course-price text-uppercase text-center gradient-bg">
                                                <span>Featured</span>
                                            </div>
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">IOS Apps </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="teacher-name">
												<span>Johansen
												Doe</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-4.jpg")}} alt="">
                                            <div class="course-price text-uppercase text-center gradient-bg">
                                                <span>Featured</span>
                                            </div>
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">Graphic </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="teacher-name">
												<span>Lisha
												Chambelt</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-6.jpg")}} alt="">
                                            <div class="course-price text-uppercase text-center gradient-bg">
                                                <span>Featured</span>
                                            </div>
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">Mobile Apps </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="teacher-name">
												<span>Checilia
												Yeoung</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-5.jpg")}} alt="">
                                            <div class="course-price text-uppercase text-center gradient-bg">
                                                <span>Featured</span>
                                            </div>
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">Mobile Apps </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
                        <div class="col-md-3">
                            <div class="teacher-img-content ">
                                <div class="teacher-cntent">
                                    <div class="teacher-social-name ul-li-block">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="teacher-name">
												<span>Sean
												Fernandes</span>
                                        </div>
                                    </div>
                                    <div class="teacher-img-category">
                                        <div class="teacher-img">
                                            <img src={{asset("assets/img/teacher/t-7.jpg")}} alt="">
                                            <div class="course-price text-uppercase text-center gradient-bg">
                                                <span>Featured</span>
                                            </div>
                                        </div>
                                        <div class="teacher-category float-right">
                                            <span class="st-name">Mobile Apps </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /teacher -->
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


    <!-- Start FAQ section
        ============================================= -->
    <section id="faq" class="faq-section">
        <div class="container">
            <div class="section-title mb45 headline text-center ">
                <span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
                <h2>Frequently<span> Ask & Questions</span></h2>
            </div>
            <div class="faq-tab">
                <div class="faq-tab-ques ul-li">
                    <div class="tab-button text-center mb65 ">
                        <ul class="product-tab">
                            <li class="active" rel="tab1">GENERAL</li>
                            <li rel="tab2"> COURSES</li>
                            <li rel="tab3"> TEACHERS</li>
                            <li rel="tab4"> EVENTS</li>
                            <li rel="tab5"> OTHERS</li>
                        </ul>
                    </div>
                    <!-- /tab-head -->

                    <!-- tab content -->
                    <div class="tab-container">

                        <!-- 1st tab -->
                        <div id="tab1" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline ">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline ">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline ">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline ">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab1 -->

                        <div id="tab2" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline ">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline ">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline ">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline ">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab2 -->

                        <div id="tab3" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab3 -->

                        <div id="tab4" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab3 -->

                        <div id="tab5" class="tab-content-1 pt35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> What is Genius Courses?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="ques-ans mb45 headline">
                                        <h3> How to Register or Make An Account in Genius?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>

                                    <div class="ques-ans mb45 headline">
                                        <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi
                                            enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #tab3 -->
                    </div>
                    <div class="view-all-btn bold-font ">
                        <a href="#">Make a Question <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ section
        ============================================= -->


    <!-- Start Course category
        ============================================= -->
    <section id="course-category" class="course-category-section">
        <div class="container">
            <div class="section-title mb45 headline text-center ">
                <span class="subtitle text-uppercase">COURSES CATEGORIES</span>
                <h2>Browse Courses<span> By Category.</span></h2>
            </div>
            <div class="category-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-technology"></i>
                            </div>
                            <div class="category-title">
                                <h4>Responsive Website</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-app-store"></i>
                            </div>
                            <div class="category-title">
                                <h4>IOS Applications</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-artist-tools"></i>
                            </div>
                            <div class="category-title">
                                <h4>Graphic Design</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-business"></i>
                            </div>
                            <div class="category-title">
                                <h4>Marketing</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-dna"></i>
                            </div>
                            <div class="category-title">
                                <h4>Science</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-cogwheel"></i>
                            </div>
                            <div class="category-title">
                                <h4>Enginering</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-technology-1"></i>
                            </div>
                            <div class="category-title">
                                <h4>Photography</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->

                    <div class="col-md-3">
                        <div class="category-icon-title text-center ">
                            <div class="category-icon">
                                <i class="text-gradiant flaticon-technology-2"></i>
                            </div>
                            <div class="category-title">
                                <h4>Mobile Application</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /category -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Course category
        ============================================= -->


    <!-- Start of contact area
        ============================================= -->
    <section id="contact-area" class="contact-area-section backgroud-style">
        <div class="container">
            <div class="contact-area-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-left-content ">
                            <div class="section-title  mb45 headline text-left">
                                <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                                <h2><span>Get in Touch</span></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>

                            <div class="contact-address">
                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            <li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
                                            <li><span>Second: </span>Califorinia, 88 Design Street, US</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            <li><span>Primary: </span>(100) 3434 55666</li>
                                            <li><span>Second: </span>(20) 3434 9999</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            <li><span>Primary: </span>info@geniuscourse.com</li>
                                            <li><span>Second: </span>mail@genius.info</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
                            <a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="contact-map" class="contact-map-section">
                            <div id="google-map">
                                <div id="googleMaps" class="google-map-container"></div>
                            </div><!-- /#google-map-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of contact area
        ============================================= -->




@endsection