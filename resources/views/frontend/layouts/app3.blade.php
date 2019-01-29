<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Page 1 :: School, Coaching, Institute Course booking HTML Template</title>

    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/video.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progess.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet"  href="{{asset('assets/css/colors/switch.css')}}">
    <link href="{{asset('assets/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css" title="color-2">
    <link href="{{asset('assets/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css" title="color-3">
    <link href="{{asset('assets/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css" title="color-4">
    <link href="{{asset('assets/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css" title="color-5">
    <link href="{{asset('assets/css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css" title="color-6">
    <link href="{{asset('assets/css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css" title="color-7">
    <link href="{{asset('assets/css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css" title="color-8">
    <link href="{{asset('assets/css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css" title="color-9">

    <style>
        .breadcrumb-section .page-breadcrumb-content{
            bottom: 0;
            top: inherit;
        }
    </style>
    @stack('after-styles')
    @yield('css')
</head>
<body class="{{config('layout_type')}}">
<div id="app">
    <div id="preloader"></div>

    <!-- Start of Header section
    ============================================= -->
    <header>
        <div id="main-menu"  class="main-menu-container header-style-2">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-top-text">
                                <span>Online Course Photoshop Template</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-bar ul-li">
                                <ul>
                                    <li><i class="fas fa-phone-square"></i>Call Us +100 375 8899</li>
                                    <li>
                                        <select>
                                            <option value="9" selected="">English</option>
                                            <option value="10">Bangla</option>
                                            <option value="11">Arbia</option>
                                            <option value="12">France</option>
                                        </select>
                                    </li>
                                    <li><a data-toggle="modal" data-target="#myModal" href="#">Log In</a>
                                        @include('frontend.layouts.modals.loginModal')


                                    </li>
                                    <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="main-menu">
                <div class="container">
                    <div class="navbar-default">
                        <div class="navbar-header float-left">
                            <a class="navbar-brand text-uppercase" href="#"><img src="{{asset('assets/img/logo/f-logo.png')}}" alt="logo"></a>
                        </div><!-- /.navbar-header -->
                        <div class="cart-search float-right ul-li">
                            <ul>
                                <li>
                                    <button type="button" class="toggle-overlay search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>

                                    <div class="search-body">
                                        <div class="search-form">
                                            <form action="#">
                                                <input class="search-input" type="search" placeholder="Search Here">
                                                <div class="outer-close toggle-overlay">
                                                    <button type="button" class="search-close">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <nav class="navbar-menu float-right">
                            <div class="nav-menu ul-li">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="shop">shop</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                    <li class="menu-item-has-children ul-li-block">
                                        <a href="#!">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="teacher">Teacher</a></li>
                                            <li><a href="teacher-details">Teacher Details</a></li>
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="blog-single">Blog Single</a></li>
                                            <li><a href="course">Course</a></li>
                                            <li><a href="course-details">Course Details</a></li>
                                            <li><a href="faq">FAQ</a></li>
                                            <li><a href="check-out">Check Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <div class="mobile-menu">
                            <div class="logo"><a href="index-1"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a></div>
                            <nav>
                                <ul>
                                    <li><a href="index-1">Home</a>
                                    </li>
                                    <li><a href="about">About</a></li>
                                    <li><a href="blog">Blog</a>
                                        <ul>
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="blog-single">Blog sinlge</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop">Shop</a>
                                    </li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="course">Course</a></li>
                                            <li><a href="course-details">course sinlge</a></li>
                                            <li><a href="teacher">teacher</a></li>
                                            <li><a href="teacher-details">teacher details</a></li>
                                            <li><a href="faq">FAQ</a></li>
                                            <li><a href="check-out">Check Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start of Header section
        ============================================= -->

    @yield('content')

    @include('frontend.layouts.partials.footer')

</div><!-- #app -->

<!-- Scripts -->
@stack('before-scripts')
<!-- For Js Library -->
<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jarallax.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/lightbox.js')}}"></script>
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/gmap3.min.js')}}"></script>
<script src="{{asset('assets/js/switch.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
    var font_color = "{{config('font_color')}}"
    setActiveStyleSheet(font_color);
</script>
@yield('js')
@stack('after-scripts')

@include('includes.partials.ga')
</body>
</html>
