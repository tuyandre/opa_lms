@extends('frontend.layouts.app'.config('theme_layout'))
@php $no_footer = true; @endphp

@push("after-styles")
    <style>
        #search-course {
            padding-bottom: 125px;
        }
    </style>
@endpush
@php
    $footer_data = json_decode(config('footer_data'));
@endphp
@section('content')

    <!-- Start of slider section
     ============================================= -->
    @include('frontend.layouts.partials.slider')

    <!-- End of slider section
            ============================================= -->


    @if($sections->sponsors->status == 1)
        @if(count($sponsors) > 0 )
    <!-- Start of sponsor section
        ============================================= -->
    <div id="sponsor" class="sponsor-section sponsor-2">
        <div class="container">
            <div class="sponsor-item">
                @foreach($sponsors as $sponsor)
                    <div class="sponsor-pic text-center">
                        <a href="{{ ($sponsor->link != "") ? $sponsor->link : '#' }}">
                            <img src={{asset("storage/uploads/".$sponsor->logo)}} alt="{{$sponsor->name}}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
   @endif
    <!-- End of sponsor section
        ============================================= -->


    <!-- Start popular course
        ============================================= -->
    @if($sections->popular_courses->status == 1)
        @include('frontend.layouts.partials.popular_courses')
    @endif
    <!-- End popular course
    ============================================= -->

    @if($sections->search_section->status == 1)
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


                {{--<div class="search-app">--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                {{--<div class="app-mock-up">--}}
                {{--<img src={{asset("assets/img/about/ab-2.png")}} alt="">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6">--}}
                {{--<div class="about-us-text search-app-content">--}}
                {{--<div class="section-title relative-position mb20 headline text-left">--}}
                {{--<h2><span>Download</span> Genius Application on <span>PlayStore.</span></h2>--}}
                {{--</div>--}}

                {{--<div class="app-details-content">--}}
                {{--<p>Introduction Genius Mobile Application on Play Store lorem ipsum dolor sit amet consectuerer adipiscing.</p>--}}

                {{--<div class="about-list mb30 ul-li-block">--}}
                {{--<ul>--}}
                {{--<li>Professional And Experienced Since 1980</li>--}}
                {{--<li>Our Mission Increasing Global Access To Quality Aducation</li>--}}
                {{--<li>100K Online Available Courses</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="about-btn">--}}
                {{--<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font float-left">--}}
                {{--<a href="#">GET THE APP NOW </a>--}}
                {{--</div>--}}

                {{--<div class="app-stor ul-li mt10">--}}
                {{--<ul>--}}
                {{--<li><a href="#"><i class="fab fa-android"></i></a></li>--}}
                {{--<li><a href="#"><i class="fab fa-apple"></i></a></li>--}}
                {{--<li><a href="#"><i class="fab fa-windows"></i></a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </section>
        <!-- End of Search Courses
            ============================================= -->
    @endif

    @if($sections->latest_news->status == 1)
        <!-- Start latest section
        ============================================= -->
        @include('frontend.layouts.partials.latest_news')
        <!-- End latest section
            ============================================= -->
    @endif


    @if($sections->featured_courses->status == 1)
        <!-- Start of best course
        ============================================= -->
        @include('frontend.layouts.partials.browse_courses')
        <!-- End of best course
            ============================================= -->
    @endif



    @if($sections->faq->status == 1)
        <!-- Start FAQ section
        ============================================= -->
        @include('frontend.layouts.partials.faq',['classes' => 'faq-secound-home-version backgroud-style'])
        <!-- End FAQ section
            ============================================= -->
    @endif


    @if($sections->course_by_category->status == 1)
        <!-- Start Course category
        ============================================= -->
        <section id="course-category" class="course-category-section home-secound-version">
            <div class="container">
                <div class="section-title mb20 headline text-left">
                    <span class="subtitle ml42  text-uppercase">{{env('APP_NAME')}} CATEGORIES</span>
                    <h2>Browse <span>By Category.</span></h2>
                </div>
                <div class="category-item category-slide-item">
                    @if($course_categories)
                        @foreach($course_categories as $key=>$category)
                            @if($key%2 == 0)
                                <div class="category-slide-content">
                                    @endif
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
                                    @if($key%2 == 1)
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- End Course category
            ============================================= -->
    @endif

    @if($sections->testimonial->status == 1)
        <!-- Start secound testimonial section
        ============================================= -->
    <section id="testimonial-secound" class="secound-testimoinial-section">
        <div class="container">
            <div class="testimonial-slide">
                <div class="section-title mb35 headline text-center">
                    <span class="subtitle text-uppercase">WHAT THEY SAY ABOUT US</span>
                    <h2>Students <span>Testimonial.</span></h2>
                </div>
                @if($testimonials->count() > 0)
                <div class="testimonial-secound-slide-area">
                    @foreach($testimonials as $item)

                    <div class="student-qoute text-center">
                        <p>{{$item->content}}</p>
                        <div class="student-name-designation">
                            <span class="st-name bold-font">{{$item->name}}  </span>
                            <span class="st-designation">{{$item->occupation}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- End secound testimonial section
        ============================================= -->
    @endif


    @if($sections->teachers->status == 1)
        <!-- Start secound teacher section
        ============================================= -->
    <section id="teacher-2" class="secound-teacher-section">
        <div class="container">
            <div class="section-title mb35 headline text-left">
                <span class="subtitle ml42  text-uppercase">{{env('APP_NAME')}} STAFFS</span>
                <h2>{{env('APP_NAME')}} <span>Teachers.</span></h2>
            </div>
            <div class="teacher-secound-slide">
                @if(count($teachers)> 0)
                    @foreach($teachers as $item)
                        <div class="teacher-img-text relative-position text-center">
                            <div class="teacher-img-social relative-position" >
                                <img height="200px" width="200px" src="{{$item->picture}}" alt="{{$item->full_name}}">
                                <div class="blakish-overlay"></div>
                                <div class="teacher-social-list ul-li">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{route('admin.messages')}}"><i
                                                        class="fa fa-comments"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacher-name-designation mt15">
                                <span class="teacher-name">{{$item->full_name}}</span>
                                {{--<span class="teacher-designation">Mobile Apps</span>--}}
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                <a href="#">All teacher <i class="fas fa-caret-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End teacher section
        ============================================= -->
    @endif

    @if($sections->contact_us->status == 1)
        <!-- Start Of scound contact section
        ============================================= -->
    <section id="contact_secound" class="contact_secound_section backgroud-style">
        <div class="container">
            <div class="contact_secound_content">
                <div class="row">
                    <div class="col-md-6">
                        @if(config('contact_data') != "")
                            @php
                                $contact_data = contact_data(config('contact_data'));
                            @endphp
                        <div class="contact-left-content">
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
                       @endif
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
                                <textarea placeholder="Message."></textarea>
                                <div class="nws-button text-center  gradient-bg text-capitalize">
                                    <button type="submit" value="Submit">SEND MESSAGE NOW <i
                                                class="fas fa-caret-right"></i></button>
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
                    <img src={{asset("storage/logos/".config('logo_w_image'))}} alt="">
                </div>

                <div class="footer_2_subs text-center">
                    @if($footer_data->short_description->status == 1)
                    <p>{!! $footer_data->short_description->text !!} </p>
                    @endif

                    @if($footer_data->newsletter_form->status == 1)
                    <div class="subs-form relative-position">
                        <form action="{{route("subscribe")}}" method="post">
                            @csrf
                            <input class="email" name="email" required type="email" placeholder="Email Address.">
                            <div class="nws-button text-center  gradient-bg text-uppercase">
                                <button type="submit" value="Submit">Subscribe now</button>
                            </div>
                            @if($errors->has('email'))
                                <p class="text-danger text-left">{{$errors->first('email')}}</p>
                            @endif
                        </form>
                    </div>
                    @endif
                </div>
                @if($footer_data->bottom_footer->status == 1)
                <div class="copy-right-menu">
                    <div class="row">
                        @if($footer_data->copyright_text->status == 1)
                        <div class="col-md-5">
                            <div class="copy-right-text">
                                <p>{!!  $footer_data->copyright_text->text !!}</p>
                            </div>
                        </div>
                        @endif

                            @if(($footer_data->social_links->status == 1) && (count($footer_data->social_links->links) > 0))
                        <div class="col-md-3">
                            <div class="footer-social  text-center ul-li">
                                <ul>
                                    @foreach($footer_data->social_links->links as $item)
                                        <li><a href="{{$item->link}}"><i class="{{$item->icon}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                         @endif

                            @if(($footer_data->bottom_footer_links->status == 1) && (count($footer_data->bottom_footer_links->links) > 0))
                        <div class="col-md-4">
                            <div class="copy-right-menu-item float-right ul-li">
                                <ul>
                                    @foreach($footer_data->bottom_footer_links->links as $item)
                                        <li><a href="{{$item->link}}">{{$item->label}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                         @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- ENd Of scound contact section
        ============================================= -->
    @endif

@endsection

@push('after-scripts')
    <script>
        $('ul.product-tab').find('li:first').addClass('active');
    </script>
@endpush