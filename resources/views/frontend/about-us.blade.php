@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', app_name() . ' | About Us')
@section('meta_description', '')
@section('meta_keywords','')

@section('content')


    <!-- Start of breadcrumb section
        ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold">Genius <span>Blog</span></h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->


    <!-- Start of about us content
        ============================================= -->
    <section id="about-page" class="about-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="about-us-content-item">
                        <div class="about-gallery">
                            <div class="about-gallery-img grid-1">
                                <img src="{{asset('assets/img/about/abt-2.jpg')}}" alt="">
                            </div>
                            <div class="about-gallery-img grid-2">
                                <img src="{{asset('assets/img/about/abt-3.jpg')}}" alt="">
                            </div>
                            <div class="about-gallery-img grid-2">
                                <img src="{{asset('assets/img/about/abt-4.jpg')}}" alt="">
                            </div>
                        </div>
                        <!-- /gallery -->

                        <div class="about-text-item">
                            <div class="section-title-2  headline text-left">
                                <h2>We Are <span>Genius Course,</span> Online Course Since 1990</h2>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                nulla facilisi.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
                                nulla facilisi.
                            </p>
                        </div>
                        <!-- /about-text -->
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="side-bar-widget first-widget">
                        <h2 class="widget-title text-capitalize"><span>Find A Course </span>&amp; Sign up Today.</h2>
                        <div class="course-img">
                            <img src="{{asset('assets/img/teacher/ct-1.jpg')}}" alt="">
                        </div>
                        <div class="course-desc">
                            <p>Lorem ipsum dolor sit consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt.</p>
                        </div>
                        <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                            <a href="#">VIEW ONLINE COURSES <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>

                    <div class="side-bar-widget">
                        <h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>
                        <div class="latest-news-posts">
                            <div class="latest-news-area">
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
                                <h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s
                                        Guide.</a></h3>
                            </div>
                            <!-- /post -->

                            <div class="latest-news-posts">
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
                                    <h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a>
                                    </h3>
                                </div>
                                <!-- /post -->
                            </div>

                            <div class="view-all-btn bold-font">
                                <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="side-bar-widget">
                        <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
                        <div class="featured-course">
                            <div class="best-course-pic-text relative-position">
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
    </section>
    <!-- End of about us content
        ============================================= -->


@endsection