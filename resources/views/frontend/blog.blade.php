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
                        <li class="breadcrumb-item active">blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->

    <!-- Start of blog content
        ============================================= -->
    <section id="blog-item" class="blog-item-post">
        <div class="container">
            <div class="blog-content-details">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-post-content">
                            <div class="short-filter-tab">
                                <div class="shorting-filter  float-left">
                                    <span><b>Sort</b> By</span>
                                    <select>
                                        <option value="9" selected="">Popularity</option>
                                        <option value="10">Most Read</option>
                                        <option value="11">Most View</option>
                                        <option value="12">Most Shared</option>
                                    </select>
                                </div>
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
                                                        <div class="blog-content">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.
                                                        </div>

                                                        <div class="view-all-btn bold-font">
                                                            <a href="#">Read More <i
                                                                        class="fas fa-chevron-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="blog-post-img-content">
                                                    <div class="blog-img-date relative-position">
                                                        <div class="blog-thumnile">
                                                            <img src="{{asset('assets/img/blog/bp-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="course-price text-center gradient-bg">
                                                            <span>26 April 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="blog-title-content headline">
                                                        <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                                                        <div class="blog-content">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.
                                                        </div>

                                                        <div class="view-all-btn bold-font">
                                                            <a href="#">Read More <i
                                                                        class="fas fa-chevron-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="blog-post-img-content">
                                                    <div class="blog-img-date relative-position">
                                                        <div class="blog-thumnile">
                                                            <img src="{{asset('assets/img/blog/bp-3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="course-price text-center gradient-bg">
                                                            <span>26 April 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="blog-title-content headline">
                                                        <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                                                        <div class="blog-content">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.
                                                        </div>

                                                        <div class="view-all-btn bold-font">
                                                            <a href="#">Read More <i
                                                                        class="fas fa-chevron-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="blog-post-img-content">
                                                    <div class="blog-img-date relative-position">
                                                        <div class="blog-thumnile">
                                                            <img src="{{asset('assets/img/blog/bp-4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="course-price text-center gradient-bg">
                                                            <span>26 April 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="blog-title-content headline">
                                                        <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
                                                        <div class="blog-content">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.
                                                        </div>

                                                        <div class="view-all-btn bold-font">
                                                            <a href="#">Read More <i
                                                                        class="fas fa-chevron-circle-right"></i></a>
                                                        </div>
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
                                                        <div class="blog-content">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.
                                                        </div>

                                                        <div class="view-all-btn bold-font">
                                                            <a href="#">Read More <i
                                                                        class="fas fa-chevron-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
                                                        <div class="blog-content">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.
                                                        </div>

                                                        <div class="view-all-btn bold-font">
                                                            <a href="#">Read More <i
                                                                        class="fas fa-chevron-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- 1st tab -->

                                    <div id="tab2" class="tab-content-1 pt35">
                                        <div class="blog-list-view">
                                            <div class="list-blog-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    <img src="{{asset('assets/img/blog/bp-1.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>26 April 2018</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="blog-title-content headline">
                                                            <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a>
                                                            </h3>
                                                            <div class="blog-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam erat volutpat.
                                                            </div>

                                                            <div class="view-all-btn bold-font">
                                                                <a href="#">Read More <i
                                                                            class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-blog-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    <img src="{{asset('assets/img/blog/bp-5.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>26 April 2018</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="blog-title-content headline">
                                                            <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a>
                                                            </h3>
                                                            <div class="blog-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam erat volutpat.
                                                            </div>

                                                            <div class="view-all-btn bold-font">
                                                                <a href="#">Read More <i
                                                                            class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-blog-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    <img src="{{asset('assets/img/blog/bp-4.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>26 April 2018</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="blog-title-content headline">
                                                            <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a>
                                                            </h3>
                                                            <div class="blog-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam erat volutpat.
                                                            </div>

                                                            <div class="view-all-btn bold-font">
                                                                <a href="#">Read More <i
                                                                            class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-blog-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    <img src="{{asset('assets/img/blog/bp-1.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>26 April 2018</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="blog-title-content headline">
                                                            <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a>
                                                            </h3>
                                                            <div class="blog-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam erat volutpat.
                                                            </div>

                                                            <div class="view-all-btn bold-font">
                                                                <a href="#">Read More <i
                                                                            class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-blog-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    <img src="{{asset('assets/img/blog/bp-2.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>26 April 2018</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="blog-title-content headline">
                                                            <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a>
                                                            </h3>
                                                            <div class="blog-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam erat volutpat.
                                                            </div>

                                                            <div class="view-all-btn bold-font">
                                                                <a href="#">Read More <i
                                                                            class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-blog-item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    <img src="{{asset('assets/img/blog/bp-3.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>26 April 2018</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="blog-title-content headline">
                                                            <h3><a href="#">Affiliate Marketing A Beginner’s Guide.</a>
                                                            </h3>
                                                            <div class="blog-content">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                                elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                                dolore magna aliquam erat volutpat.
                                                            </div>

                                                            <div class="view-all-btn bold-font">
                                                                <a href="#">Read More <i
                                                                            class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- 2nd tab -->
                                </div>
                            </div>


                            <div class="couse-pagination text-center ul-li">
                                <ul>
                                    <li class="pg-text"><a href="#">PREV</a></li>
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li class="active"><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>
                                    <li class="pg-text"><a href="#">NEXT</a></li>
                                </ul>
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
                                            <h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course
                                                    2018.</a></h3>
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
        </div>
    </section>
    <!-- End of blog content
        ============================================= -->

@endsection