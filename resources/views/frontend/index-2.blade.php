@extends('frontend.layouts.app'.config('theme_layout'))
@php $no_footer = true; @endphp
@section('content')


<!-- Start of slider section
    ============================================= -->
<section id="slide" class="slider-section">
    <div id="slider-item" class="slider-item-details">
        <div  class="slider-area slider-bg-5 relative-position">
            <div class="slider-text">
                <div class="section-title mb20 headline text-left ">
                    <div class="layer-1-1">
                        <span class="subtitle ml42 text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
                    </div>
                    <div class="layer-1-3">
                        <h2><span>Inventive</span> Solution <br> for <span>Education</span></h2>
                    </div>
                </div>
                <div class="layer-1-4">
                    <div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
                        <a href="#">Our Courses <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="slider-area slider-bg-2 relative-position">
            <div class="slider-text">
                <div class="section-title mb20 headline text-center ">
                    <div class="layer-1-1">
                        <span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
                    </div>
                    <div class="layer-1-2">
                        <h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>
                    </div>
                </div>
                <div class="layer-1-3">
                    <div class="search-course mb30 relative-position">
                        <form action="#" method="post">
                            <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
                            <div class="nws-button text-center  gradient-bg text-capitalize">
                                <button type="submit" value="Submit">Search Course</button>
                            </div>
                        </form>
                    </div>
                    <div class="layer-1-4">
                        <div class="slider-course-category ul-li text-center">
                            <span class="float-left">BY CATEGORY:</span>
                            <ul>
                                <li>Graphics Design</li>
                                <li>Web Design</li>
                                <li>Mobile Application</li>
                                <li>Enginering</li>
                                <li>Science</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area slider-bg-3 relative-position">
            <div class="slider-text">
                <div class="layer-1-2">
                    <div class="coming-countdown ul-li">
                        <ul>
                            <li class="days">
                                <span class="number"></span>
                                <span class>Days</span>
                            </li>

                            <li class="hours">
                                <span class="number"></span>
                                <span class>Hours</span>
                            </li>

                            <li class="minutes">
                                <span class="number"></span>
                                <span class>Minutes</span>
                            </li>

                            <li class="seconds">
                                <span class="number"></span>
                                <span class>Seconds</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section-title mb20 headline text-center ">
                    <div class="layer-1-3">
                        <h2 class="third-slide"> Mobile Application Experiences : <br> <span>Mobile App Design.</span></h2>
                    </div>
                </div>
                <div class="layer-1-4">
                    <div class="about-btn text-center">
                        <div class="genius-btn text-center text-uppercase ul-li-block bold-font">
                            <a href="#">About Us <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area slider-bg-4 relative-position">
            <div class="slider-text">
                <div class="section-title mb20 headline text-center ">
                    <span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
                    <h2 class=""  ><span>Inventive</span> Solution <br> for <span>Education</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of slider section
    ============================================= -->



<!-- Start of sponsor section
    ============================================= -->
<div id="sponsor" class="sponsor-section sponsor-2">
    <div class="container">
        <div class="sponsor-item">
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-1.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center ">
                <img src={{asset("assets/img/sponsor/s-2.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-3.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-4.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-5.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-6.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-1.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-2.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-3.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-4.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-5.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-6.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-1.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-2.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-3.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-4.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-5.jpg")}} alt="">
            </div>
            <div class="sponsor-pic text-center">
                <img src={{asset("assets/img/sponsor/s-6.jpg")}} alt="">
            </div>
        </div>
    </div>
</div>
<!-- End of sponsor section
    ============================================= -->


<!-- Start popular course
    ============================================= -->
<section id="popular-course" class="popular-course-section">
    <div class="container">
        <div class="section-title mb20 headline text-left">
            <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
            <h2><span>Popular</span> Courses.</h2>
        </div>
        <div id="course-slide-item" class="course-slide">
            <div class="course-item-pic-text">
                <div class="course-pic relative-position mb25">
                    <img src={{asset("assets/img/course/c-1.jpg")}} alt="">
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
                    <img src={{asset("assets/img/course/c-2.jpg")}} alt="">
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

            <div class="course-item-pic-text">
                <div class="course-pic relative-position mb25">
                    <img src={{asset("assets/img/course/c-3.jpg")}} alt="">
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

            <div class="course-item-pic-text">
                <div class="course-pic relative-position mb25">
                    <img src={{asset("assets/img/course/c-2.jpg")}} alt="">
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
                    <img src={{asset("assets/img/course/c-3.jpg")}} alt="">
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
                    <img src={{asset("assets/img/course/c-1.jpg")}} alt="">
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


<!-- Start of about us section
    ============================================= -->
<section id="about-us" class="about-us-section home-secound">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-resigter-form backgroud-style relative-position">
                    <div class="register-content">
                        <div class="register-fomr-title text-center">
                            <h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
                            <p>More Than 122K Online Available Courses</p>
                        </div>
                        <div class="register-form-area">
                            <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                <div class="contact-info">
                                    <input class="name" name="name" type="text" placeholder="Your Name.">
                                </div>
                                <div class="contact-info">
                                    <input class="nbm" name="nbm" type="number" placeholder="Your Number">
                                </div>
                                <div class="contact-info">
                                    <input class="email" name="email" type="email" placeholder="Email Address.">
                                </div>
                                <select>
                                    <option value="9" selected="">Select Course.</option>
                                    <option value="10">Web Design</option>
                                    <option value="11">Web Development</option>
                                    <option value="12">Php Core</option>
                                </select>
                                <div class="contact-info">
                                    <input type="text" id="datepicker" placeholder="Date.">
                                </div>
                                <textarea placeholder="Message."></textarea>
                                <div class="nws-button text-uppercase text-center white text-capitalize">
                                    <button type="submit" value="Submit">SUBMIT REQUEST </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-mockup">
                    <img src={{asset("assets/img/about/abt.jpg")}} alt="">
                </div>
            </div>
            <!-- /form -->

            <div class="col-md-7">
                <div class="about-us-text">
                    <div class="section-title relative-position mb20 headline text-left">
                        <span class="subtitle ml42 text-uppercase">SORT ABOUT US</span>
                        <h2>We are <span>Genius Course</span>
                            work since 1980.</h2>
                        <p>We take our mission of increasing global access to quality education seriously. We connect learners to the best universities and institutions from around the world.</p>
                    </div>
                    <div class="about-content-text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam. magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                        <div class="about-list mb65 ul-li-block">
                            <ul>
                                <li>Professional And Experienced Since 1980</li>
                                <li>We Connect Learners To The Best  Universities From Around The World</li>
                                <li>Our Mission Increasing Global Access To Quality Aducation</li>
                                <li>100K Online Available Courses</li>
                            </ul>
                        </div>
                        <div class="about-btn">
                            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                <a href="#">About Us <i class="fas fa-caret-right"></i></a>
                            </div>
                            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                <a href="#">contact us <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of about us section
    ============================================= -->


<!-- Start of Search Courses
    ============================================= -->
<section id="search-course" class="search-course-section home-secound-course-search backgroud-style">
    <div class="container">
        <div class="section-title mb20 headline text-center">
            <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
            <h2><span>Search</span> Genius Courses.</h2>
        </div>
        <div class="search-course mb30 relative-position">
            <form action="#" method="post">
                <input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
                <div class="nws-button text-center  gradient-bg text-capitalize">
                    <button type="submit" value="Submit">Search Course</button>
                </div>
            </form>
        </div>
        <div class="search-counter-up">
            <div class="row">
                <div class="col-md-3">
                    <div class="counter-icon-number">
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
                    <div class="counter-icon-number">
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
                    <div class="counter-icon-number">
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
                    <div class="counter-icon-number">
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

        <div class="search-app">
            <div class="row">
                <div class="col-md-6">
                    <div class="app-mock-up">
                        <img src={{asset("assets/img/about/ab-2.png")}} alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-us-text search-app-content">
                        <div class="section-title relative-position mb20 headline text-left">
                            <h2><span>Download</span> Genius Application on <span>PlayStore.</span></h2>
                        </div>

                        <div class="app-details-content">
                            <p>Introduction Genius Mobile Application on Play Store lorem ipsum dolor sit amet consectuerer adipiscing.</p>

                            <div class="about-list mb30 ul-li-block">
                                <ul>
                                    <li>Professional And Experienced Since 1980</li>
                                    <li>Our Mission Increasing Global Access To Quality Aducation</li>
                                    <li>100K Online Available Courses</li>
                                </ul>
                            </div>
                            <div class="about-btn">
                                <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font float-left">
                                    <a href="#">GET THE APP NOW </a>
                                </div>

                                <div class="app-stor ul-li mt10">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-android"></i></a></li>
                                        <li><a href="#"><i class="fab fa-apple"></i></a></li>
                                        <li><a href="#"><i class="fab fa-windows"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Search Courses
    ============================================= -->


<!-- Start latest section
    ============================================= -->
<section id="latest-area" class="latest-area-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="latest-area-content">
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
                            <h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
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

                        <div class="view-all-btn bold-font">
                            <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /latest-news -->
            <div class="col-md-4">
                <div class="latest-area-content">
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
                                <h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
                                <h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
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
                                <h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
                                <div class="course-meta">
                                    <span class="course-category"><a href="#">Web Design</a></span>
                                    <span class="course-author"><a href="#">Koke</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-all-btn bold-font">
                        <a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
                    </div>
                </div>
            </div>
            <!-- /events -->

            <div class="col-md-4">
                <div class="latest-area-content">
                    <div class="section-title-2 mb65 headline text-left">
                        <h2>Latest <span>Video.</span></h2>
                    </div>
                    <div class="latest-video-poster relative-position mb20">
                        <img src={{asset("assets/img/banner/v-1.jpg")}} alt="">
                        <div class="video-play-btn text-center gradient-bg">
                            <a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
                    <p class="mb25">Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
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


<!-- Start of best product section
    ============================================= -->
<section id="best-product" class="best-product-section home_2">
    <div class="container">
        <div class="section-title-2 mb65 headline text-left">
            <h2>Genius <span>Best Products.</span></h2>
        </div>
        <div id="best-product-slide-item"  class="best-product-slide">
            <div class="product-img-text">
                <div class="product-img text-center mb20">
                    <img src={{asset("assets/img/product/bp-1.png")}} alt="">
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
                    <img src={{asset("assets/img/product/bp-2.png")}} alt="">
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
                    <img src={{asset("assets/img/product/bp-3.png")}} alt="">
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
                    <img src={{asset("assets/img/product/bp-4.png")}} alt="">
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
                    <img src={{asset("assets/img/product/bp-1.png")}} alt="">
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
                    <img src={{asset("assets/img/product/bp-2.png")}} alt="">
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
                    <img src={{asset("assets/img/product/bp-3.png")}} alt="">
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
</section>
<!-- End  of best product section
    ============================================= -->


<!-- Start of best course
    ============================================= -->
<section id="best-course" class="best-course-section">
    <div class="container">
        <div class="section-title mb45 headline text-center">
            <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
            <h2>Browse Our<span> Best Course.</span></h2>
        </div>
        <div class="best-course-area mb45">
            <div class="row">
                <div class="col-md-3">
                    <div class="best-course-pic-text relative-position">
                        <div class="best-course-pic relative-position">
                            <img src={{asset("assets/img/course/bc-1.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-2.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-3.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-4.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-5.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-6.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-7.jpg")}} alt="">
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
                            <img src={{asset("assets/img/course/bc-8.jpg")}} alt="">
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


<!-- Start FAQ section
    ============================================= -->
<section id="faq" class="faq-section faq-secound-home-version backgroud-style">
    <div class="container">
        <div class="section-title mb45 headline text-center">
            <span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
            <h2>Frequently<span> Ask & Questions</span></h2>
        </div>

        <div class="faq-tab mb45">
            <div class="faq-tab-ques  ul-li">
                <div class="tab-button text-center mb45">
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
                            <div class="panel">
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
                            <div class="panel">
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
                            <div class="panel">
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
                            <div class="panel">
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
                        </div>
                        <!-- end of #accordion -->

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

        <div class="about-btn text-center">
            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                <a href="#">Make Question <i class="fas fa-caret-right"></i></a>
            </div>
            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                <a href="#">contact us <i class="fas fa-caret-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ section
    ============================================= -->


<!-- Start Course category
    ============================================= -->
<section id="course-category" class="course-category-section home-secound-version">
    <div class="container">
        <div class="section-title mb20 headline text-left">
            <span class="subtitle ml42  text-uppercase">GENIUS CATEGORIES</span>
            <h2>Browse <span>By Category.</span></h2>
        </div>
        <div class="category-item category-slide-item">
            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-technology"></i>
                    </div>
                    <div class="category-title">
                        <h4>Responsive Website</h4>
                    </div>
                </div>
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-app-store"></i>
                    </div>
                    <div class="category-title">
                        <h4>IOS Applications</h4>
                    </div>
                </div>
            </div>
            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-artist-tools"></i>
                    </div>
                    <div class="category-title">
                        <h4>Graphic Design</h4>
                    </div>
                </div>
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-business"></i>
                    </div>
                    <div class="category-title">
                        <h4>Marketing</h4>
                    </div>
                </div>
            </div>

            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-dna"></i>
                    </div>
                    <div class="category-title">
                        <h4>Science</h4>
                    </div>
                </div>

                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-cogwheel"></i>
                    </div>
                    <div class="category-title">
                        <h4>Enginering</h4>
                    </div>
                </div>
            </div>

            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-technology-1"></i>
                    </div>
                    <div class="category-title">
                        <h4>Photography</h4>
                    </div>
                </div>

                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-technology-2"></i>
                    </div>
                    <div class="category-title">
                        <h4>Mobile Application</h4>
                    </div>
                </div>
            </div>
            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-technology"></i>
                    </div>
                    <div class="category-title">
                        <h4>Responsive Website</h4>
                    </div>
                </div>
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-app-store"></i>
                    </div>
                    <div class="category-title">
                        <h4>IOS Applications</h4>
                    </div>
                </div>
            </div>
            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-artist-tools"></i>
                    </div>
                    <div class="category-title">
                        <h4>Graphic Design</h4>
                    </div>
                </div>
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-business"></i>
                    </div>
                    <div class="category-title">
                        <h4>Marketing</h4>
                    </div>
                </div>
            </div>

            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-dna"></i>
                    </div>
                    <div class="category-title">
                        <h4>Science</h4>
                    </div>
                </div>

                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-cogwheel"></i>
                    </div>
                    <div class="category-title">
                        <h4>Enginering</h4>
                    </div>
                </div>
            </div>

            <div class="category-slide-content">
                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-technology-1"></i>
                    </div>
                    <div class="category-title">
                        <h4>Photography</h4>
                    </div>
                </div>

                <div class="category-icon-title text-center">
                    <div class="category-icon">
                        <i class="text-gradiant flaticon-technology-2"></i>
                    </div>
                    <div class="category-title">
                        <h4>Mobile Application</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Course category
    ============================================= -->


<!-- Start secound testimonial section
    ============================================= -->
<section id="testimonial-secound" class="secound-testimoinial-section">
    <div class="container">
        <div class="testimonial-slide">
            <div class="section-title mb35 headline text-center">
                <span class="subtitle text-uppercase">WHAT THEY SAY ABOUT US</span>
                <h2>Students <span>Testimonial.</span></h2>
            </div>

            <div class="testimonial-secound-slide-area">
                <div class="student-qoute text-center">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>

                <div class="student-qoute text-center">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>

                <div class="student-qoute text-center">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>

                <div class="student-qoute text-center">
                    <p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience so we’ll be back in the future lorem ipsum diamet.”</p>
                    <div class="student-name-designation">
                        <span class="st-name bold-font">Robertho Garcia </span>
                        <span class="st-designation">Graphic Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End secound testimonial section
    ============================================= -->


<!-- Start secound teacher section
    ============================================= -->
<section id="teacher-2" class="secound-teacher-section">
    <div class="container">
        <div class="section-title mb35 headline text-left">
            <span class="subtitle ml42  text-uppercase">GENIUS STAFFS</span>
            <h2>Genius <span>Teachers.</span></h2>
        </div>
        <div class="teacher-secound-slide">
            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-1.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Daniel Alvares</span>
                    <span class="teacher-designation">Mobile Apps</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-2.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Daniel Alvares</span>
                    <span class="teacher-designation">Mobile Apps</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-3.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Juliana Hernandes</span>
                    <span class="teacher-designation">Web Design</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-4.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Daniel Alvares</span>
                    <span class="teacher-designation">Mobile Apps</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-1.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Berliana Luis</span>
                    <span class="teacher-designation">IOS App</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-3.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Johansen Doe</span>
                    <span class="teacher-designation">Mobile Apps</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-1.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Johanas Doe</span>
                    <span class="teacher-designation">Graphic</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-4.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Daniel Alvares</span>
                    <span class="teacher-designation">Mobile Apps</span>
                </div>
            </div>

            <div class="teacher-img-text relative-position text-center">
                <div class="teacher-img-social relative-position">
                    <img src={{asset("assets/img/teacher/tb-1.png")}} alt="">
                    <div class="blakish-overlay"></div>
                    <div class="teacher-social-list ul-li">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="teacher-name-designation mt15">
                    <span class="teacher-name">Daniel Alvares</span>
                    <span class="teacher-designation">Mobile Apps</span>
                </div>
            </div>
        </div>

        <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
            <a href="#">All teacher <i class="fas fa-caret-right"></i></a>
        </div>
    </div>
</section>
<!-- End teacher section
    ============================================= -->



<!-- Start Of scound contact section
    ============================================= -->
<section id="contact_secound" class="contact_secound_section backgroud-style">
    <div class="container">
        <div class="contact_secound_content">
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
                </div>

                <div class="col-md-6">
                    <div class="contact_secound_form">
                        <div class="section-title-2 mb65 headline text-left">
                            <h2>Send Us a message</h2>
                        </div>
                        <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
                            <div class="contact-info">
                                <input class="name" name="name" type="text" placeholder="Your Name.">
                            </div>
                            <div class="contact-info">
                                <input class="email" name="email" type="email" placeholder="Your Email">
                            </div>
                            <textarea  placeholder="Message."></textarea>
                            <div class="nws-button text-center  gradient-bg text-capitalize">
                                <button type="submit" value="Submit">SEND MESSAGE NOW <i class="fas fa-caret-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_2 backgroud-style">
        <div class="container">
            <div class="back-top text-center mb45">
                <a class="scrollup" href="#"><img src={{asset("assets/img/banner/bt.png")}} alt=""></a>
            </div>
            <div class="footer_2_logo text-center">
                <img src={{asset("assets/img/logo/logo.png")}} alt="">
            </div>

            <div class="footer_2_subs text-center">
                <p>We take our mission of increasing global access to quality education seriously. </p>
                <div class="subs-form relative-position">
                    <form action="#" method="post">
                        <input class="course" name="course" type="email" placeholder="Email Address.">
                        <div class="nws-button text-center  gradient-bg text-uppercase">
                            <button type="submit" value="Submit">Subscribe now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copy-right-menu">
                <div class="row">
                    <div class="col-md-5">
                        <div class="copy-right-text">
                            <p>© 2018 - Designed & Developed by <a href="https://jthemes.com" title="Best Premium WordPress, HTML Template Store"> Jthemes Studio</a>. All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-social  text-center ul-li">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copy-right-menu-item float-right ul-li">
                            <ul>
                                <li><a href="#">License</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Term Of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ENd Of scound contact section
    ============================================= -->

@endsection

