@extends('frontend.layouts.app'.config('theme_layout'))
@section('content')

    <!-- Start of breadcrumb section
    ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold">{{$blog->title}}</h2>
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
                            @if($blog->image != "")

                                <div class="blog-detail-thumbnile mb35">
                                    <img src="{{asset('storage/uploads/'.$blog->image)}}" alt="">
                                </div>
                            @endif

                            <h2>{{$blog->title}}</h2>

                            <div class="date-meta text-uppercase">
                                <span><i class="fas fa-calendar-alt"></i> {{$blog->created_at->format('d M Y')}}</span>
                                <span><i class="fas fa-user"></i> {{$blog->author->name}}</span>
                                <span><i class="fas fa-comment-dots"></i> {{$blog->comments->count()}}</span>
                                <span><i class="fas fa-tag"><a
                                                href="{{route('blogs.category',['category' => $blog->category->slug])}}"> {{$blog->category->name}}</a></i></span>
                            </div>
                            <p>
                                {!! $blog->content !!}
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
                        <div class="author-comment d-inline-block p-3   h-100 d-table text-center mx-auto">
                            <div class="author-img float-none">
                                <img src="{{$blog->author->picture}}" alt="">
                            </div>
                            <span class="mt-2  d-table-cell align-middle">BY:  <b>{{$blog->author->name}}</b></span>
                        </div>

                        <div class="next-prev-post">
                            @if($previous != "")
                                <div class="next-post-item float-left">
                                    <a href="{{route('blogs.index',['slug'=>$previous->slug.'-'.$previous->id ])}}"><i
                                                class="fas fa-arrow-circle-left"></i>Previous Post</a>
                                </div>
                            @endif

                            @if($next != "")
                                <div class="next-post-item float-right">
                                    <a href="{{route('blogs.index',['slug'=>$next->slug.'-'.$next->id ])}}">Next Post<i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    @endif
                                </div>
                        </div>
                    </div>

                    <div class="blog-recent-post about-teacher-2">
                        <div class="section-title-2  headline text-left">
                            <h2><span>Related</span> News</h2>
                        </div>
                        @if(count($related_news) > 0)
                            <div class="recent-post-item">
                                <div class="row">
                                    @foreach($related_news as $item)
                                        <div class="col-md-6">
                                            <div class="blog-post-img-content">
                                                <div class="blog-img-date relative-position">
                                                    <div class="blog-thumnile">
                                                        @if($item->image != "")
                                                            <img src="{{asset('storage/uploads/'.$item->image)}}"
                                                                 alt="">

                                                        @else
                                                            <img src="http://placehold.it/420x250" alt="">

                                                        @endif
                                                    </div>
                                                    <div class="course-price text-center gradient-bg">
                                                        <span>{{$item->created_at->format('d M Y')}}</span>
                                                    </div>
                                                </div>
                                                <div class="blog-title-content headline">
                                                    <h3>
                                                        <a href="{{route('blogs.index',['slug'=>$item->slug.'-'.$item->id ])}}">{{$item->title}}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="blog-comment-area ul-li about-teacher-2">
                        <div class="reply-comment-box">
                            <div class="section-title-2  headline text-left">
                                <h2>Post <span>Comments.</span></h2>
                            </div>

                            @if(auth()->check())
                                <div class="teacher-faq-form">
                                    <form method="POST" action="{{route('blogs.comment',['id'=>$blog->id])}}"
                                          data-lead="Residential">
                                        @csrf
                                        <div class="form-group">
                                            <label for="comment">Write a Comment</label>
                                            <textarea name="comment" required class="mb-0" id="comment" rows="2"
                                                      cols="20"></textarea>
                                            <span class="help-block text-danger">{{ $errors->first('comment', ':message') }}</span>
                                        </div>

                                        <div class="nws-button text-center  gradient-bg text-uppercase">
                                            <button type="submit" value="Submit">Add Comment</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <a id="openLoginModal" class="btn nws-button gradient-bg text-white"
                                   data-target="#myModal">Login to Post a comment</a>
                            @endif
                        </div>
                        @if($blog->comments->count() > 0)

                        <ul class="comment-list my-5">
                                @foreach($blog->comments as $item)
                                <li class="d-block">
                                    <div class="comment-avater">
                                        <img src="{{$item->user->picture}}" alt="">
                                    </div>

                                    <div class="author-name-rate">
                                        <div class="author-name float-left">
                                            BY: <span>{{$item->name}}</span>
                                        </div>

                                        <div class="time-comment float-right">{{$item->created_at->diffforhumans()}}</div><br>
                                        @if($item->user_id == auth()->user()->id)
                                        <div class="time-comment float-right">

                                            <a class="text-danger font-weight-bolf" href="{{route('blogs.comment.delete',['id'=>$item->id])}}">Delete</a>

                                        </div>
                                        @endif
                                    </div>
                                    <div class="author-designation-comment">
                                        <p>{{$item->comment}}</p>
                                    </div>
                                </li>
                                @endforeach


                        </ul>
                        @else
                            <p class="my-5">No comments yet, Be the first to comment.</p>
                        @endif



                    </div>
                </div>
                @include('frontend.blogs.partials.sidebar')
            </div>
        </div>
    </section>
    <!-- End of Blog single content
        ============================================= -->


@endsection