@extends('frontend.layouts.app'.config('theme_layout'))


@section('content')

<!-- Start of Search Courses
    ============================================= -->
<section id="search-course" class="search-course-section search-course-secound">
    <div class="container">
        <div class="search-counter-up">
            <div class="row">
                <div class="col-md-3">
                    <div class="counter-icon-number "  >
                        <div class="counter-icon">
                            <i class="text-gradiant flaticon-graduation-hat"></i>
                        </div>
                        <div class="counter-number">
                            <span class="counter-count bold-font">5 </span><span>M+</span>
                            <p>Students Enrolled</p>
                        </div>
                    </div>
                </div>
                <!-- /counter -->

                <div class="col-md-3">
                    <div class="counter-icon-number "  >
                        <div class="counter-icon">
                            <i class="text-gradiant flaticon-book"></i>
                        </div>
                        <div class="counter-number">
                            <span class="counter-count bold-font">122</span><span>.500+</span>
                            <p>Online Available Courses</p>
                        </div>
                    </div>
                </div>
                <!-- /counter -->

                <div class="col-md-3">
                    <div class="counter-icon-number "  >
                        <div class="counter-icon">
                            <i class="text-gradiant flaticon-favorites-button"></i>
                        </div>
                        <div class="counter-number">
                            <span class="counter-count bold-font">15</span><span>.000+</span>
                            <p>Premium Quality Products</p>
                        </div>
                    </div>
                </div>
                <!-- /counter -->

                <div class="col-md-3">
                    <div class="counter-icon-number "  >
                        <div class="counter-icon">
                            <i class="text-gradiant flaticon-group"></i>
                        </div>
                        <div class="counter-number">
                            <span class="counter-count bold-font">7</span><span>.500+</span>
                            <p>Teachers Registered</p>
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


<!-- Start latest section
    ============================================= -->
<section id="latest-area" class="latest-area-section home-page-three">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="latest-area-content">
                    <div class="section-title-2 mb65 headline text-left "  >
                        <h2>Latest <span>News.</span></h2>
                    </div>
                    <div class="latest-news-posts">
                        <div class="latest-news-area "  >
                            <div class="latest-news-thumbnile relative-position">
                                <img src="{{asset('assets/img/blog/lb-1.jpg')}}" alt="">
                                <div class="hover-search">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="date-meta">
                                <i class="fas fa-calendar-alt"></i> 26 April 2018
                            </div>
                            <h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /post -->

                        <div class="latest-news-posts "  >
                            <div class="latest-news-area">
                                <div class="latest-news-thumbnile relative-position">
                                    <img src="{{asset('assets/img/blog/lb-2.jpg')}}" alt="">
                                    <div class="hover-search">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="date-meta">
                                    <i class="fas fa-calendar-alt"></i> 26 April 2018
                                </div>
                                <h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
                                <div class="course-viewer ul-li">
                                    <ul>
                                        <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                                        <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /post -->
                        </div>

                        <div class="view-all-btn bold-font "  >
                            <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /latest-news -->
            <div class="col-md-4">
                <div class="latest-area-content">
                    <div class="section-title-2 mb65 headline text-left "  >
                        <h2>Upcoming <span>Events.</span></h2>
                    </div>
                    <div class="latest-events "  >
                        <div class="latest-event-item">
                            <div class="events-date  relative-position text-center">
                                <div class="gradient-bdr"></div>
                                <span class="event-date bold-font">22</span>
                                April 2018
                            </div>
                            <div class="event-text">
                                <h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">Koke</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="latest-events "  >
                        <div class="latest-event-item">
                            <div class="events-date  relative-position text-center">
                                <div class="gradient-bdr"></div>
                                <span class="event-date bold-font">07</span>
                                August 2018
                            </div>
                            <div class="event-text">
                                <h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">Koke</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="latest-events "  >
                        <div class="latest-event-item">
                            <div class="events-date  relative-position text-center">
                                <div class="gradient-bdr"></div>
                                <span class="event-date bold-font">30</span>
                                Sept 2018
                            </div>
                            <div class="event-text">
                                <h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">Koke</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-all-btn bold-font "  >
                        <a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
                    </div>
                </div>
            </div>
            <!-- /events -->

            <div class="col-md-4">
                <div class="latest-area-content">
                    <div class="section-title-2 mb65 headline text-left "  >
                        <h2>Latest <span>Video.</span></h2>
                    </div>
                    <div class="latest-video-poster relative-position mb20 "  >
                        <img src="{{asset('assets/img/banner/v-1.jpg')}}" alt="">
                        <div class="video-play-btn text-center gradient-bg">
                            <a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <h3 class="latest-title bold-font "  ><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
                    <p class="mb25 "  >Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
                    <div class="view-all-btn bold-font "  >
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

<!-- Start popular course
    ============================================= -->
<section id="popular-course" class="popular-course-section popular-three">
    <div class="container">
        <div class="section-title mb20 headline text-left "  >
            <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
            <h2><span>Popular</span> Courses.</h2>
        </div>
        <div id="course-slide-item" class="course-slide">
            <div class="course-item-pic-text">
                <div class="course-pic relative-position mb25 "  >
                    <img src="{{asset('assets/img/course/c-1.jpg')}}" alt="">
                    <div class="course-price text-center gradient-bg">
                        <span>$99.00</span>
                    </div>
                    <div class="course-details-btn">
                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Web Design</a></span>
                        <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
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
                        <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                    </div>
                    <div class="course-viewer ul-li">
                        <ul>
                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="">125k Unrolled</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <div class="course-item-pic-text "  >
                <div class="course-pic relative-position mb25">
                    <img src="{{asset('assets/img/course/c-2.jpg')}}" alt="">
                    <div class="course-price text-center gradient-bg">
                        <span>$99.00</span>
                    </div>
                    <div class="course-details-btn">
                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Mobile Apps</a></span>
                        <span class="course-author bold-font"><a href="#">Fernando Torres</a></span>
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
                        <h3><a href="#">Introduction to Mobile Application Development.</a></h3>
                    </div>
                    <div class="course-viewer ul-li">
                        <ul>
                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="">125k Unrolled</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <div class="course-item-pic-text "  >
                <div class="course-pic relative-position mb25">
                    <img src="{{asset('assets/img/course/c-3.jpg')}}" alt="">
                    <div class="course-price text-center gradient-bg">
                        <span>$99.00</span>
                    </div>
                    <div class="course-details-btn">
                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Motion Graphic </a></span>
                        <span class="course-author bold-font"><a href="#">enny Garcias</a></span>
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
                        <h3><a href="#">Learning IOS Apps Programming & Development.</a></h3>
                    </div>
                    <div class="course-viewer ul-li">
                        <ul>
                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="">125k Unrolled</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <div class="course-item-pic-text "  >
                <div class="course-pic relative-position mb25">
                    <img src="{{asset('assets/img/course/c-2.jpg')}}" alt="">
                    <div class="course-price text-center gradient-bg">
                        <span>$99.00</span>
                    </div>
                    <div class="course-details-btn">
                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Web Design</a></span>
                        <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
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
                        <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                    </div>
                    <div class="course-viewer ul-li">
                        <ul>
                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="">125k Unrolled</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <div class="course-item-pic-text "  >
                <div class="course-pic relative-position mb25">
                    <img src="{{asset('assets/img/course/c-3.jpg')}}" alt="">
                    <div class="course-price text-center gradient-bg">
                        <span>$99.00</span>
                    </div>
                    <div class="course-details-btn">
                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Web Design</a></span>
                        <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
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
                        <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                    </div>
                    <div class="course-viewer ul-li">
                        <ul>
                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="">125k Unrolled</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <div class="course-item-pic-text">
                <div class="course-pic relative-position mb25">
                    <img src="{{asset('assets/img/course/c-1.jpg')}}" alt="">
                    <div class="course-price text-center gradient-bg">
                        <span>$99.00</span>
                    </div>
                    <div class="course-details-btn">
                        <a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Web Design</a></span>
                        <span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
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
                        <h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
                    </div>
                    <div class="course-viewer ul-li">
                        <ul>
                            <li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="">125k Unrolled</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /item -->
        </div>
    </div>
</section>
<!-- End popular course
    ============================================= -->


<!-- Start why choose section
    ============================================= -->
<section id="why-choose" class="why-choose-section backgroud-style">
    <div class="container">
        <div class="section-title mb20 headline text-center "  >
            <span class="subtitle text-uppercase">GENIUS ADVANTAGES</span>
            <h2>Reason <span>Why Choose Genius.</span></h2>
        </div>
        <div class="extra-features-content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="extra-left">
                        <div class="extra-left-content "  >
                            <div class="extra-icon-text text-left">
                                <div class="features-icon gradient-bg text-center">
                                    <i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                                </div>
                                <div class="features-text">
                                    <div class="features-text-title">
                                        <h3>The Power Of Education.</h3>
                                    </div>
                                    <div class="features-text-dec">
                                        <span>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam non nibh euismod tincidun laoreet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // extra-left-content -->

                        <div class="extra-left-content "  >
                            <div class="extra-icon-text">
                                <div class="features-icon gradient-bg text-center">
                                    <i class=" flaticon-clipboard-with-pencil"></i>
                                </div>
                                <div class="features-text pt25">
                                    <div class="features-text-title">
                                        <h3>Best Online Education.</h3>
                                    </div>
                                    <div class="features-text-dec">
                                        <span>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam non nibh euismod tincidun laoreet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // extra-left-content -->

                        <div class="extra-left-content "  >
                            <div class="extra-icon-text">
                                <div class="features-icon gradient-bg text-center">
                                    <i class="flaticon-list"></i>
                                </div>
                                <div class="features-text pt25">
                                    <div class="features-text-title">
                                        <h3>Education For Student.</h3>
                                    </div>
                                    <div class="features-text-dec">
                                        <span>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam non nibh euismod tincidun laoreet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // extra-left-content -->
                    </div><!-- /extra-left -->
                </div>
                <!-- /col-sm-3 -->

                <div class="col-sm-4">
                    <div class="extra-pic text-center "  >
                        <img src="{{asset('assets/img/banner/wc-2.png')}}" alt="img">
                    </div>
                </div>
                <!-- /col-sm-6 -->

                <div class="col-md-4 col-sm-6">
                    <div class="extra-right">
                        <div class="extra-left-content "  >
                            <div class="extra-icon-text text-right">
                                <div class="features-icon gradient-bg text-center">
                                    <i class="flaticon-ruler-and-pencil"></i>
                                </div>
                                <div class="features-text pt25">
                                    <div class="features-text-title text-right pb10">
                                        <h3>The Power Of Education.</h3>
                                    </div>
                                    <div class="features-text-dec text-right">
                                        <span>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam non nibh euismod tincidun laoreet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // extra-left-content -->

                        <div class="extra-left-content "  >
                            <div class="extra-icon-text text-right">
                                <div class="features-icon gradient-bg text-center">
                                    <i class="flaticon-clipboards"></i>
                                </div>
                                <div class="features-text pt25">
                                    <div class="features-text-title text-right pb10">
                                        <h3>Best Online Education.</h3>
                                    </div>
                                    <div class="features-text-dec text-right">
                                        <span>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam non nibh euismod tincidun laoreet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // extra-left-content -->

                        <div class="extra-left-content "  >
                            <div class="extra-icon-text text-right">
                                <div class="features-icon gradient-bg text-center">
                                    <i class="flaticon-pie-chart"></i>
                                </div>
                                <div class="features-text pt25">
                                    <div class="features-text-title text-right pb10">
                                        <h3>Education For Student.</h3>
                                    </div>
                                    <div class="features-text-dec text-right">
                                        <span>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam non nibh euismod tincidun laoreet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // extra-left-content -->
                    </div><!-- /extra-left -->
                </div>
                <!-- /col-sm-3 -->
            </div><!-- /row -->
        </div>
    </div>
</section>
<!-- End why choose section
    ============================================= -->



<!-- Start of best course
    ============================================= -->
<section id="best-course" class="best-course-section best-course-v2">
    <div class="container">
        <div class="section-title mb45 headline text-center "  >
            <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
            <h2>Browse Our<span> Best Course.</span></h2>
        </div>
        <div class="best-course-area mb45">
            <div class="row">
                <div class="col-md-3">
                    <div class="best-course-pic-text relative-position "  >
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
                    <div class="best-course-pic-text relative-position "  >
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
                    <div class="best-course-pic-text relative-position "  >
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
                    <div class="best-course-pic-text relative-position "  >
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

                <div class="col-md-3">
                    <div class="best-course-pic-text relative-position "  >
                        <div class="best-course-pic relative-position">
                            <img src="{{asset('assets/img/course/bc-5.jpg')}}" alt="">
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
                    <div class="best-course-pic-text relative-position "  >
                        <div class="best-course-pic relative-position">
                            <img src="{{asset('assets/img/course/bc-6.jpg')}}" alt="">
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
                    <div class="best-course-pic-text relative-position "  >
                        <div class="best-course-pic relative-position">
                            <img src="{{asset('assets/img/course/bc-7.jpg')}}" alt="">
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
                    <div class="best-course-pic-text relative-position "  >
                        <div class="best-course-pic relative-position">
                            <img src="{{asset('assets/img/course/bc-8.jpg')}}" alt="">
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
<!-- End of best course
    ============================================= -->


<!-- Start of genius teacher v2
    ============================================= -->
<section id="genius-teacher-2" class="genius-teacher-section-2">
    <div class="container">
        <div class="section-title mb20  headline text-left">
            <span class="subtitle ml42 text-uppercase">LEARN NEW SKILLS</span>
            <h2><span>Popular</span> Teachers.</h2>
        </div>
        <div class="teacher-third-slide">
            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-1.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>

                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-1.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-2.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>

                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-3.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-4.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>

                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-5.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-6.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-2.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-3.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>

                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-4.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-5.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>

                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-6.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-1.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>

                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-1.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>

            <div class="teacher-double">
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-1.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
                <div class="teacher-img-content relative-position">
                    <img src="{{asset('assets/img/teacher/ts-1.jpg')}}" alt="">
                    <div class="teacher-cntent">
                        <div class="teacher-social-name ul-li-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="teacher-name">
										<span>Daniel
										Alvares</span>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-category float-right">
                        <span class="st-name">Mobile Apps </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of genius teacher v2
    ============================================= -->


<!-- Start FAQ section
    ============================================= -->
<section id="faq" class="faq-section faq-secound-home-version faq_3 backgroud-style">
    <div class="container">
        <div class="section-title mb45 headline text-center "  >
            <span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
            <h2>Frequently<span> Ask & Questions</span></h2>
        </div>

        <div class="faq-tab mb65">
            <div class="faq-tab-ques  ul-li">
                <div class="tab-button text-center mb65 "  >
                    <ul class="product-tab">
                        <li class="active" rel="tab1">GENERAL </li>
                        <li rel="tab2"> COURSES </li>
                        <li rel="tab3"> TEACHERS </li>
                        <li rel="tab4">  EVENTS  </li>
                        <li rel="tab5">  OTHERS  </li>
                    </ul>
                </div>
                <!-- /tab-head -->

                <!-- tab content -->
                <div class="tab-container">

                    <!-- 1st tab -->
                    <div id="tab1" class="tab-content-1 pt35">
                        <div id="accordion" class="panel-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel "  >
                                        <div class="panel-title" id="headingOne">
                                            <h3 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    How to Register or Make An Account in Genius?
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel "  >
                                        <div class="panel-title" id="headingTwo">
                                            <h3 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What is Genius Courses?
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel "  >
                                        <div class="panel-title" id="headingThree">
                                            <h3 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    What Lorem Ipsum Dolor Sit Amet Consectuerer?
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel "  >
                                        <div class="panel-title" id="headingFoure">
                                            <h3 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">
                                                    Adipiscing Diamet Nonnumy Nibh Euismod?
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapseFoure" class="collapse"  data-parent="#accordion">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel "  >
                                        <div class="panel-title" id="heading22">
                                            <h3 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                                    How to Register or Make An Account in Genius?
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapse22" class="collapse show" aria-labelledby="heading22" data-parent="#accordion">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel "  >
                                        <div class="panel-title" id="heading33">
                                            <h3 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                                    What is Genius Courses?
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordion">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of #accordion -->
                        </div>
                    </div>
                    <!-- #tab1 -->

                    <div id="tab2" class="tab-content-1 pt35">
                        <div id="accordion-2" class="panel-group">
                            <div class="panel">
                                <div class="panel-title" id="headingSix">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            How to Register or Make An Account in Genius?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title" id="headingSeven">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            What is Genius Courses?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title" id="headingEight">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            What Lorem Ipsum Dolor Sit Amet Consectuerer?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-title" id="headingNine">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Adipiscing Diamet Nonnumy Nibh Euismod?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion-2">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of #accordion -->
                    </div>
                    <!-- #tab2 -->

                    <div id="tab3" class="tab-content-1 pt35">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ques-ans mb45 headline">
                                    <h3> What is Genius Courses?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>

                                <div class="ques-ans mb45 headline">
                                    <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ques-ans mb45 headline">
                                    <h3> How to Register or Make An Account in Genius?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>

                                <div class="ques-ans mb45 headline">
                                    <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
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
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>

                                <div class="ques-ans mb45 headline">
                                    <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ques-ans mb45 headline">
                                    <h3> How to Register or Make An Account in Genius?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>

                                <div class="ques-ans mb45 headline">
                                    <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
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
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>

                                <div class="ques-ans mb45 headline">
                                    <h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ques-ans mb45 headline">
                                    <h3> How to Register or Make An Account in Genius?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>

                                <div class="ques-ans mb45 headline">
                                    <h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #tab3 -->
                </div>
            </div>
        </div>


        <div class="best-product-section third-home-version">
            <div class="section-title-2 mb65 headline text-left "  >
                <h2>Genius <span>Best Products.</span></h2>
            </div>
            <div id="best-product-slide-item" class="best-product-slide">
                <div class="product-img-text "  >
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-1.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="product-img-text "  >
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-2.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="product-img-text "  >
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-3.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="product-img-text "  >
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-4.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="product-img-text "  >
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-1.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="product-img-text">
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-2.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="product-img-text">
                    <div class="product-img text-center mb20">
                        <img src="{{asset('assets/img/product/bp-3.png')}}" alt="">
                    </div>
                    <div class="product-text-content relative-position">
                        <div class="best-title-price float-left">
                            <div class="course-title headline">
                                <h3><a href="#">Mobile Apps Books.</a></h3>
                            </div>
                            <div class="price-start">
                                Start from
                                <span>$55.25</span>
                            </div>
                        </div>
                        <div class="add-cart text-center">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ section
    ============================================= -->


<!-- Start of testimonial secound section
    ============================================= -->
<section id="testimonial_2" class="testimonial_2_section">
    <div class="container">
        <div class="testimonial-slide">
            <div class="section-title-2 mb65 headline text-left">
                <h2>Students <span>Testimonial.</span></h2>
            </div>

            <div id="testimonial-slide-item" class="testimonial-slide-area">
                <div class="student-qoute">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>

                <div class="student-qoute">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>

                <div class="student-qoute">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>

                <div class="student-qoute">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  of testimonial secound section
    ============================================= -->


<!-- Start of sponsor section
    ============================================= -->
<section id="sponsor" class="sponsor-section">
    <div class="container">
        <div class="section-title-2 mb65 headline text-left">
            <h2>Genius <span>Sponsors.</span></h2>
        </div>
        <div class="sponsor-item sponsor-1">
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-1.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-2.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-3.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-4.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-5.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-6.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-6.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-6.jpg')}}" alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src="{{asset('assets/img/sponsor/s-6.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End of sponsor section
    ============================================= -->


<!-- Start Course category
    ============================================= -->
<section id="course-category" class="course-category-section">
    <div class="container">
        <div class="section-title mb45 headline text-center">
            <span class="subtitle text-uppercase">COURSES CATEGORIES</span>
            <h2>Browse Courses<span> By Category.</span></h2>
        </div>
        <div class="category-item">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="category-icon-title text-center">
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
                    <div class="contact-left-content">
                        <div class="section-title  mb45 headline text-left">
                            <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                            <h2><span>Get in Touch</span></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.
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
                    <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font">
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