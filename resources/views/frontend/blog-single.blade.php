@extends('frontend.layouts.app'.config('theme_layout'))
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
                    <li class="breadcrumb-item active">blog Single</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of breadcrumb section
    ============================================= -->


<!-- Start of Blog single content
    ============================================= -->
<section id="blog-detail" class="blog-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-details-content">
                    <div class="post-content-details">
                        <div class="blog-detail-thumbnile mb35">
                            <img src="{{asset('assets/img/blog/bd-1.jpg')}}" alt="">
                        </div>
                        <h2>Affiliate Marketing A Beginner’s Guide.</h2>

                        <div class="date-meta text-uppercase">
                            <span><i class="fas fa-calendar-alt"></i> 26 April 2018</span>
                            <span><i class="fas fa-user"></i> PRO.THEO HENRY</span>
                            <span><i class="fas fa-comment-dots"></i> 15 COMMENTS</span>
                        </div>
                        <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit </h3>
                        <p>
                            Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>
                    </div>
                    <div class="blog-share-tag">
                        <div class="share-text float-left">
                            Share this news
                        </div>
                        <div class="share-social ul-li float-right">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-category ul-li">
                        <ul>
                            <li><a href="#">fruits</a></li>
                            <li><a href="#">veegetable</a></li>
                            <li><a href="#">juices</a></li>
                        </ul>
                    </div>
                    <div class="author-comment">
                        <div class="author-img">
                            <img src="{{asset('assets/img/blog/ath.jpg')}}" alt="">
                        </div>
                        <div class="author-designation-comment">
                            BY: <span>FRANK LAMPARD</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                    <div class="next-prev-post">
                        <div class="next-post-item float-left">
                            <a href="#"><i class="fas fa-arrow-circle-left"></i>Previous Post</a>
                        </div>

                        <div class="next-post-item float-right">
                            <a href="#">Next Post<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="blog-recent-post about-teacher-2">
                    <div class="section-title-2  headline text-left">
                        <h2><span>Related</span> News</h2>
                    </div>
                    <div class="recent-post-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-post-img-content">
                                    <div class="blog-img-date relative-position">
                                        <div class="blog-thumnile">
                                            <img src="{{asset('assets/img/blog/bp-1.jpg')}}" alt="">
                                        </div>
                                        <div class="course-price text-center gradient-bg">
                                            <span>26 April 2018</span>
                                        </div>
                                    </div>
                                    <div class="blog-title-content headline">
                                        <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="blog-post-img-content">
                                    <div class="blog-img-date relative-position">
                                        <div class="blog-thumnile">
                                            <img src="{{asset('assets/img/blog/bp-5.jpg')}}" alt="">
                                        </div>
                                        <div class="course-price text-center gradient-bg">
                                            <span>26 April 2018</span>
                                        </div>
                                    </div>
                                    <div class="blog-title-content headline">
                                        <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-comment-area ul-li about-teacher-2">
                    <div class="section-title-2  headline text-left">
                        <h2>Post <span>Comments.</span></h2>
                    </div>

                    <ul class="comment-list">
                        <li>
                            <div class=" comment-avater">
                                <img src="{{asset('assets/img/blog/ath-2.jpg')}}" alt="">
                            </div>

                            <div class="author-name-rate">
                                <div class="author-name float-left">
                                    BY: <span>FRANK LAMPARD</span>
                                </div>
                                <div class="comment-ratting float-right ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="time-comment float-right">3 Days ago</div>
                            </div>
                            <div class="author-designation-comment">
                                <h3>Great Course!! Recommended for Everyone</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class=" comment-avater">
                                <img src="{{asset('assets/img/blog/ath.jpg')}}" alt="">
                            </div>

                            <div class="author-name-rate">
                                <div class="author-name float-left">
                                    BY: <span>FRANK LAMPARD</span>
                                </div>
                                <div class="comment-ratting float-right ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="time-comment float-right">3 Days ago</div>
                            </div>
                            <div class="author-designation-comment">
                                <h3>Great Course!! Recommended for Everyone</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                </p>
                            </div>
                        </li>
                    </ul>

                    <div class="reply-comment-box">
                        <div class="section-title-2  headline text-left">
                            <h2>Reply  <span>Comments.</span></h2>
                        </div>

                        <div class="teacher-faq-form">
                            <form method="POST" action="/no-form" data-lead="Residential">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" id="name" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone">Email Address</label>
                                        <input type="tel" name="phone" id="phone" required="required">
                                    </div>
                                </div>
                                <label for="comments">Message</label>
                                <textarea name="comments" id="comments" rows="2" cols="20" required="required"></textarea>
                                <div class="nws-button text-center  gradient-bg text-uppercase">
                                    <button type="submit" value="Submit">Send Message now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="side-bar">
                    <div class="side-bar-search">
                        <form action="#" method="get">
                            <input type="text" class="" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <div class="side-bar-widget">
                        <h2 class="widget-title text-capitalize">blog <span>Categories.</span></h2>
                        <div class="post-categori ul-li-block">
                            <ul>
                                <li class="cat-item"><a href="#">Design Graphic Book</a></li>
                                <li class="cat-item"><a href="#">Student Bag’s</a></li>
                                <li class="cat-item"><a href="#">Education T-shirt</a></li>
                                <li class="cat-item"><a href="#">Student Watch</a></li>
                                <li class="cat-item"><a href="#">Tutorial Videos</a></li>
                                <li class="cat-item"><a href="#">Other Products</a></li>
                            </ul>
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
                                <h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
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
                                    <h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
                                </div>
                                <!-- /post -->
                            </div>

                            <div class="view-all-btn bold-font">
                                <a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="side-bar-widget">
                        <h2 class="widget-title text-capitalize">Popular <span>Tags.</span></h2>
                        <div class="tag-clouds ul-li">
                            <ul>
                                <li><a href="#">fruits</a></li>
                                <li><a href="#">veegetable</a></li>
                                <li><a href="#">juices</a></li>
                                <li><a href="#">natural food</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">bread</a></li>
                                <li><a href="#">natural</a></li>
                                <li><a href="#">healthy</a></li>
                            </ul>
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
    </div>
</section>
<!-- End of Blog single content
    ============================================= -->


@endsection