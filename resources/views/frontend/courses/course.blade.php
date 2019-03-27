@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', ($course->meta_title) ? $course->meta_title : app_name() )
@section('meta_description', $course->meta_description)
@section('meta_keywords', $course->meta_keywords)

@push('after-styles')
    <style>
        .leanth-course.go {
            right: 0;
        }

    </style>
@endpush

@section('content')

    <!-- Start of breadcrumb section
        ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold"><span>{{$course->title}}</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->

    <!-- Start of course details section
        ============================================= -->
    <section id="course-details" class="course-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if(session()->has('success'))
                        <div class="alert alert-dismissable alert-success fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="course-details-item border-bottom-0 mb-0">
                        <div class="course-single-pic mb30">
                            @if($course->course_image != "")
                                <img src="{{asset('storage/uploads/'.$course->course_image)}}"
                                     alt="">
                            @endif
                        </div>
                        <div class="course-single-text">
                            <div class="course-title mt10 headline relative-position">
                                <h3><a href="{{ route('courses.show', [$course->slug]) }}"><b>{{$course->title}}</b></a>
                                    @if($course->trending == 1)
                                        <span class="trend-badge text-uppercase bold-font"><i
                                                    class="fas fa-bolt"></i> @lang('labels.frontend.badges.trending')</span>
                                    @endif
                                </h3>
                            </div>
                            <div class="course-details-content">
                                <p>
                                    {!! $course->description !!}
                                </p>
                            </div>

                            @if(count($lessons)  > 0)

                                <div class="course-details-category ul-li">
                                    <span class="float-none">@lang('labels.frontend.course.course_timeline')</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- /course-details -->

                    <div class="affiliate-market-guide mb65">

                        <div class="affiliate-market-accordion">
                            <div id="accordion" class="panel-group">
                                @if(count($lessons)  > 0)
                                    @foreach($lessons as $key=> $lesson)
                                        @php $key++ @endphp
                                        <div class="panel">
                                            <div class="panel-title" id="headingOne">
                                                <div class="ac-head">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapse{{$key}}" aria-expanded="false"
                                                            aria-controls="collapse{{$key}}">
                                                        <span>{{ sprintf("%02d", $key)}}</span> {{$lesson->model->title}}
                                                    </button>
                                                    @if($lesson->model_type == 'App\Models\Test')
                                                        <div class="leanth-course">
                                                            <span>@lang('labels.frontend.course.test')</span>
                                                        </div>
                                                    @endif
                                                    @if(auth()->check())
                                                        @if(in_array($lesson->model->id,$completed_lessons))
                                                            <div class="leanth-course ">
                                                                <span class="gradient-bg text-white font-weight-bold completed">@lang('labels.frontend.course.completed')</span>
                                                            </div>
                                                        @endif
                                                    @endif


                                                </div>
                                            </div>
                                            <div id="collapse{{$key}}" class="collapse" aria-labelledby="headingOne"
                                                 data-parent="#accordion">
                                                <div class="panel-body">
                                                    @if($lesson->model_type == 'App\Models\Test')
                                                        {{ mb_substr($lesson->model->description,0,20).'...'}}
                                                    @else
                                                        {{$lesson->model->short_text}}

                                                    @endif
                                                        @if(auth()->check())


                                                        @if(in_array($lesson->model->id,$completed_lessons))
                                                        <div>
                                                            <a class="btn btn-warning mt-3"
                                                               href="{{route('lessons.show',['id' => $lesson->course->id,'slug'=>$lesson->model->slug])}}">
                                                                <span class=" text-white font-weight-bold ">@lang('labels.frontend.course.go') ></span>
                                                            </a>
                                                        </div>
                                                    @endif
                                                            @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /market guide -->

                    <div class="course-review">
                        <div class="section-title-2 mb20 headline text-left">
                            <h2>@lang('labels.frontend.course.course_reviews')</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ratting-preview">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="avrg-rating ul-li">
                                                <b>@lang('labels.frontend.course.average_rating')</b>
                                                <span class="avrg-rate">{{$course_rating}}</span>
                                                <ul>
                                                    @for($r=1; $r<=$course_rating; $r++)
                                                        <li><i class="fas fa-star"></i></li>
                                                    @endfor
                                                </ul>
                                                <b>{{$total_ratings}} @lang('labels.frontend.course.ratings')</b>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="avrg-rating ul-li">
                                                <span><b>@lang('labels.frontend.course.details')</b></span>
                                                @for($r=5; $r>=1; $r--)
                                                    <div class="rating-overview">
                                                        <span class="start-item">{{$r}} @lang('labels.frontend.course.stars')</span>
                                                        <span class="start-bar"></span>
                                                        <span class="start-count">{{$course->reviews()->where('rating','=',$r)->get()->count()}}</span>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /review overview -->

                    <div class="couse-comment">
                        <div class="blog-comment-area ul-li about-teacher-2">
                            @if(count($course->reviews) > 0)
                                <ul class="comment-list">
                                    @foreach($course->reviews as $item)
                                        <li class="d-block">
                                            <div class="comment-avater">
                                                <img src="{{$item->user->picture}}" alt="">
                                            </div>

                                            <div class="author-name-rate">
                                                <div class="author-name float-left">
                                                    @lang('labels.frontend.course.by'): <span>{{$item->user->full_name}}</span>
                                                </div>
                                                <div class="comment-ratting float-right ul-li">
                                                    <ul>
                                                        @for($i=1; $i<=(int)$item->rating; $i++)
                                                            <li><i class="fas fa-star"></i></li>
                                                        @endfor
                                                    </ul>
                                                    @if(auth()->check() && ($item->user_id == auth()->user()->id))
                                                        <div>
                                                            <a href="{{route('courses.review.edit',['id'=>$item->id])}}"
                                                               class="mr-2">@lang('labels.general.edit')</a>
                                                            <a href="{{route('courses.review.delete',['id'=>$item->id])}}"
                                                               class="text-danger">@lang('labels.general.delete')</a>
                                                        </div>

                                                    @endif
                                                </div>
                                                <div class="time-comment float-right">{{$item->created_at->diffforhumans()}}</div>
                                            </div>
                                            <div class="author-designation-comment">
                                                <p>{{$item->content}}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <h4> @lang('labels.frontend.course.no_reviews_yet')</h4>
                            @endif

                            @if ($purchased_course)
                                @if(isset($review) || ($is_reviewed == false))
                                    <div class="reply-comment-box">
                                        <div class="review-option">
                                            <div class="section-title-2  headline text-left float-left">
                                                <h2>@lang('labels.frontend.course.add_reviews')</h2>
                                            </div>
                                            <div class="review-stars-item float-right mt15">
                                                <span>@lang('labels.frontend.course.your_rating'): </span>
                                                <div class="rating">
                                                    <label>
                                                        <input type="radio" name="stars" value="1"/>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="2"/>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="3"/>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="4"/>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="5"/>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                        <span class="icon"><i class="fas fa-star"></i></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teacher-faq-form">
                                            @php
                                                if(isset($review)){
                                                    $route = route('courses.review.update',['id'=>$review->id]);
                                                }else{
                                                    $route = route('courses.review',['course'=>$course->id]);
                                                }
                                            @endphp
                                            <form method="POST"
                                                  action="{{$route}}"
                                                  data-lead="Residential">
                                                @csrf
                                                <input type="hidden" name="rating" id="rating">
                                                <label for="review">@lang('labels.frontend.course.message')</label>
                                                <textarea name="review" class="mb-2" id="review" rows="2"
                                                          cols="20">@if(isset($review)){{$review->content}} @endif</textarea>
                                                <span class="help-block text-danger">{{ $errors->first('review', ':message') }}</span>
                                                <div class="nws-button text-center  gradient-bg text-uppercase">
                                                    <button type="submit" value="Submit">@lang('labels.frontend.course.add_review_now')
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="side-bar">
                        <div class="course-side-bar-widget">


                            @if (!$purchased_course)
                                <h3>@lang('labels.frontend.course.price') <span>${{$course->price}}</span></h3>

                            @if(auth()->check() && (auth()->user()->hasRole('student')) && (Cart::session(auth()->user()->id)->get( $course->id)))
                                    <button class="btn genius-btn btn-block text-center my-2 text-uppercase  btn-success text-white bold-font"
                                            type="submit">@lang('labels.frontend.course.added_to_cart')
                                    </button>
                                @elseif(!auth()->check())
                                    <a id="openLoginModal"
                                       class="genius-btn btn-block text-white  gradient-bg text-center text-uppercase  bold-font"
                                       data-target="#myModal" href="#">@lang('labels.frontend.course.buy_now') <i class="fas fa-caret-right"></i></a>

                                    <a id="openLoginModal"
                                       class="genius-btn btn-block my-2 bg-dark text-center text-white text-uppercase "
                                       data-target="#myModal" href="#">@lang('labels.frontend.course.add_to_cart') <i
                                                class="fa fa-shopping-bag"></i></a>
                                @elseif(auth()->check() && (auth()->user()->hasRole('student')))
                                    <form action="{{ route('cart.checkout') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $course->id }}"/>
                                        <input type="hidden" name="amount" value="{{ $course->price}}"/>
                                        <button class="genius-btn btn-block text-white  gradient-bg text-center text-uppercase  bold-font"
                                                href="#">@lang('labels.frontend.course.buy_now') <i class="fas fa-caret-right"></i></button>
                                    </form>
                                    <form action="{{ route('cart.addToCart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $course->id }}"/>
                                        <input type="hidden" name="amount" value="{{ $course->price}}"/>
                                        <button type="submit"
                                                class="genius-btn btn-block my-2 bg-dark text-center text-white text-uppercase ">
                                            @lang('labels.frontend.course.add_to_cart') <i class="fa fa-shopping-bag"></i></button>
                                    </form>
                                @else
                                    <h6 class="alert alert-danger"> @lang('labels.frontend.course.buy_note')</h6>
                                @endif
                            @else

                                @if($continue_course)
                                    <a href="{{route('lessons.show',['id' => $course->id,'slug'=>$continue_course->model->slug])}}"
                                       class="genius-btn btn-block text-white  gradient-bg text-center text-uppercase  bold-font">

                                        @lang('labels.frontend.course.continue_course')

                                        <i class="fa fa-arrow-right"></i></a>

                                @endif

                            @endif

                        </div>
                        <div class="enrolled-student">
                            <div class="comment-ratting float-left ul-li">
                                <ul>
                                    @for($i=1; $i<=(int)$course->rating; $i++)
                                        <li><i class="fas fa-star"></i></li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="student-number bold-font">
                                {{ $course->students()->count() }}  @lang('labels.frontend.course.enrolled')
                            </div>
                        </div>
                        <div class="couse-feature ul-li-block">
                            <ul>
                                <li> @lang('labels.frontend.course.chapters') <span> {{$course->courseTimeline->count()}} </span></li>
                                {{--<li>Language <span>English</span></li>--}}
                                <li> @lang('labels.frontend.course.category') <span><a
                                                href="{{route('courses.category',['category'=>$course->category->slug])}}"
                                                target="_blank">{{$course->category->name}}</a> </span></li>
                                <li> @lang('labels.frontend.course.author') <span>

                                        @foreach($course->teachers as $key=>$teacher)
                                            @php $key++ @endphp
                                            <a href="{{route('teachers.show',['id'=>$teacher->id])}}" target="_blank">
                                                {{$teacher->full_name}}@if($key < count($course->teachers )), @endif
                                            </a>
                                        @endforeach

                                       </span>
                                </li>
                            </ul>

                        </div>

                        @if($recent_news->count() > 0)
                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize">@lang('labels.frontend.course.recent_news')</h2>
                                <div class="latest-news-posts">
                                    @foreach($recent_news as $item)
                                        <div class="latest-news-area">
                                            @if($item->image != "")
                                                <div class="latest-news-thumbnile relative-position"
                                                     style="background-image: url({{asset('storage/uploads/'.$item->image)}})">
                                                    <div class="blakish-overlay"></div>
                                                </div>
                                            @endif


                                            <div class="date-meta">
                                                <i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
                                            </div>
                                            <h3 class="latest-title bold-font"><a
                                                        href="{{route('blogs.index',['slug'=>$item->slug.'-'.$item->id])}}">{{$item->title}}</a>
                                            </h3>
                                        </div>
                                        <!-- /post -->
                                    @endforeach


                                    <div class="view-all-btn bold-font">
                                        <a href="{{route('blogs.index')}}">@lang('labels.frontend.course.view_all_news') <i
                                                    class="fas fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        @endif

                        @if($global_featured_course != "")
                            <div class="side-bar-widget">
                                <h2 class="widget-title text-capitalize">@lang('labels.frontend.course.featured_course')</h2>
                                <div class="featured-course">
                                    <div class="best-course-pic-text relative-position pt-0">
                                        <div class="best-course-pic relative-position "
                                            @if($global_featured_course->course_image != "") style="background-image: url({{asset('storage/uploads/'.$global_featured_course->course_image)}})" @endif>

                                            @if($global_featured_course->trending == 1)
                                                <div class="trend-badge-2 text-center text-uppercase">
                                                    <i class="fas fa-bolt"></i>
                                                    <span>@lang('labels.frontend.badges.trending')</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="best-course-text" style="left: 0;right: 0;">
                                            <div class="course-title mb20 headline relative-position">
                                                <h3>
                                                    <a href="{{ route('courses.show', [$global_featured_course->slug]) }}">{{$global_featured_course->title}}</a>
                                                </h3>
                                            </div>
                                            <div class="course-meta">
                                                <span class="course-category"><a
                                                            href="{{route('courses.category',['category'=>$global_featured_course->category->slug])}}">{{$global_featured_course->category->name}}</a></span>
                                                <span class="course-author">{{ $global_featured_course->students()->count() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of course details section
        ============================================= -->

@endsection

@push('after-scripts')
    <script>
        $(document).on('change', 'input[name="stars"]', function () {
            $('#rating').val($(this).val());
        })
                @if(isset($review))
        var rating = "{{$review->rating}}";
        $('input[value="' + rating + '"]').prop("checked", true);
        $('#rating').val(rating);
        @endif
    </script>
@endpush