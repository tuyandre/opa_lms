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

    @stack('after-styles')
    @yield('css')
</head>
<body class="{{config('layout_type')}}">
<div id="app">
    <div id="preloader"></div>


    <!-- Start of Header section
    ============================================= -->
    <header class="header_3 gradient-bg">
        <div class="container">
            <div class="navbar-default">
                <div class="navbar-header float-left">
                    <a class="navbar-brand text-uppercase" href="#"><img src="{{asset('assets/img/logo/logo-2.png')}}" alt="logo"></a>
                </div><!-- /.navbar-header -->
                <div class="header-info ul-li">
                    <ul>
                        <li>
                            <div class="mail-phone">
                                <div class="info-icon">
                                    <i class="text-gradiant fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-id">info@genius.com</span>
                                    <span class="info-text">Email Us For Free Registration</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mail-phone">
                                <div class="info-icon">
                                    <i class="text-gradiant fas fa-phone-square"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-id">(100) 2443 900</span>
                                    <span class="info-text">Call Us For Free Registration</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="info-social">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <span class="info-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="info-social">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <span class="info-text">Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav-menu-4">
                    <div class="login-cart-lang float-right ul-li">
                        <ul class="search_cart">
                            <li>
                                <div class="cart_search">
                                    <a href="#">
                                        <i class="fas fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div  class="cart_search">
                                    <button type="button" class="toggle-overlay search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
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
                        <ul class="lang-login">
                            <li>
                                <div class="select-lang">
                                    <select>
                                        <option value="9" selected="">English</option>
                                        <option value="10">Bangla</option>
                                        <option value="11">Arabia</option>
                                        <option value="12">Dutch</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="login">
                                    <a data-toggle="modal" data-target="#myModal" href="#">LogIn</a>
                                </div>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header backgroud-style">
                                                <div class="gradient-bg"></div>
                                                <div class="popup-logo">
                                                    <img src="{{asset('assets/img/logo/p-logo.jpg')}}" alt="">
                                                </div>
                                                <div class="popup-text text-center">
                                                    <h2> <span>Login</span> Your Account.</h2>
                                                    <p>Login to our website, or <span>REGISTER</span></p>
                                                </div>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="facebook-login">
                                                    <a href="#">
                                                        <div class="log-in-icon">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </div>
                                                        <div class="log-in-text text-center">
                                                            Login with Facebook
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="alt-text text-center"><a href="#">OR SIGN IN</a> </div>
                                                <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                                    <div class="contact-info">
                                                        <input class="name" name="Email" type="email" placeholder="Your@email.com*">
                                                    </div>
                                                    <div class="contact-info">
                                                        <input class="password" name="name" type="password" placeholder="Your Password*">
                                                    </div>
                                                    <div class="nws-button text-center white text-capitalize">
                                                        <button type="submit" value="Submit">LOg in Now</button>
                                                    </div>
                                                </form>
                                                <div class="log-in-footer text-center">
                                                    <p>* Denotes mandatory field.</p>
                                                    <p>** At least one telephone number is required.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <nav class="navbar-menu float-left">
                        <div class="nav-menu ul-li">
                            <ul class="quick-menu">
                                <li><a  href="#slide">Home</a></li>
                                <li><a  href="#search-course">Course</a></li>
                                <li><a  href="#about-us">About Us</a></li>
                                <li><a  href="#genius-teacher-2">Teachers</a></li>
                                <li><a  href="#best-product">Shop</a></li>
                                <li><a  href="#faq">faq</a></li>
                                <li><a  href="#latest-area">BLOG</a></li>
                                <li><a  href="#contact-form">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="altranative-header ul-li-block">
        <div id="menu-container">

            <div class="menu-wrapper">
                <div class="row">

                    <button type="button" class="alt-menu-btn float-left">
                        <span class="hamburger-menu"></span>
                    </button>

                    <div class="logo-area">
                        <a href="index-1">
                            <img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo_not_found">
                        </a>
                    </div>

                    <div class="cart-btn pulse  ul-li float-right">
                        <ul>
                            <li><a data-toggle="modal" data-target="#myModal-2"  href="#"><i class="fas fa-user"></i></a>
                            </li>
                            <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                        </ul>
                        @include('frontend.layouts.modals.loginModal')

                    </div>

                </div>
            </div>

            <ul class="menu-list accordion" style="left: -100%;">
                <li class="alt-search">
                    <form action="#">
                        <input type="search" placeholder="search">
                    </form>
                </li>
                <li class="card">
                    <a class="menu-link" href="index-1.html">Home</a>
                </li>

                <li class="card">
                    <a class="menu-link" href="about.html">About Us</a>
                </li>

                <!-- services - start -->
                <li class="card active">
                    <div class="card-header" id="heading1">
                        <button class="menu-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Service
                        </button>
                    </div>
                    <ul id="collapse1" class="submenu collapse show" aria-labelledby="heading1" data-parent="#accordion" style="">
                        <li class="active"><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <!-- services - end -->

                <!-- team - start -->
                <li class="card">
                    <div class="card-header" id="headingtwo">
                        <button class="menu-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                            Team
                        </button>
                    </div>
                    <ul id="collapsetwo" class="submenu collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                    </ul>
                </li>
                <!-- team - end -->

                <!-- shop - start -->
                <li class="card">
                    <div class="card-header" id="headingthree">
                        <button class="menu-link" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                            Shop
                        </button>
                    </div>
                    <ul id="collapsethree" class="submenu collapse show" aria-labelledby="headingthree" data-parent="#accordion" style="">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="product-details.html">Product Details</a></li>
                    </ul>
                </li>
                <!-- shop - end -->

                <!-- newses - start -->
                <li class="card">
                    <div class="card-header" id="headingfour">
                        <button class="menu-link" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                            Newses
                        </button>
                    </div>
                    <ul id="collapsefour" class="submenu collapse" aria-labelledby="headingfour" data-parent="#accordion">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <!-- newses - end -->

                <!-- contact - start -->
                <li class="card">
                    <div class="card-header" id="headingfive">
                        <button class="menu-link" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                            Contact
                        </button>
                    </div>
                    <ul id="collapsefive" class="submenu collapse" aria-labelledby="headingfive" data-parent="#accordion">
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="contactv2.html">Contact V2</a></li>
                    </ul>
                </li>
                <!-- contact - end -->

                <!-- pages - start -->
                <li class="card">
                    <div class="card-header" id="headingsix">
                        <button class="menu-link" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                            Pages
                        </button>
                    </div>
                    <ul id="collapsesix" class="submenu collapse" aria-labelledby="headingsix" data-parent="#accordion">
                        <li><a href="error.html">error</a></li>
                        <li><a href="errorv2.html">error V2</a></li>
                        <li><a href="work-process.html">work process</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <!-- pages - end -->

            </ul>
        </div>
    </div>
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
