<div class="col-md-3">
    <div class="side-bar-widget first-widget">
        <h2 class="widget-title text-capitalize"><span>Find A Course </span>&amp; Sign up Today.</h2>

        <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
            <a href="{{route('courses.all')}}">VIEW ONLINE COURSES <i class="fas fa-caret-right"></i></a>
        </div>
    </div>

    @if($recent_news->count() > 0)
        <div class="side-bar-widget">
            <h2 class="widget-title text-capitalize"><span>Recent  </span>News</h2>
            <div class="latest-news-posts">
                @foreach($recent_news as $item)
                    <div class="latest-news-area">

                        <div class="latest-news-thumbnile relative-position">
                            @if($item->image != "")
                                <img src="{{asset('storage/uploads/'.$item->image)}}"
                                     alt="">
                            @else
                                <img src="http://placehold.it/80x80" alt="">
                            @endif

                            <div class="blakish-overlay"></div>
                        </div>
                        <div class="date-meta">
                            <i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
                        </div>
                        <h3 class="latest-title bold-font"><a href="{{route('blogs.index',['slug'=>$item->slug.'-'.$item->id])}}">{{$item->title}}</a></h3>
                    </div>
                    <!-- /post -->
                @endforeach


                <div class="view-all-btn bold-font">
                    <a href="{{route('blogs.index')}}">View All News <i class="fas fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

    @endif

    @if($global_featured_course != "")
        <div class="side-bar-widget">
            <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
            <div class="featured-course">
                <div class="best-course-pic-text relative-position pt-0">
                    <div class="best-course-pic relative-position ">
                        @if($global_featured_course->course_image != "")
                            <img src="{{asset('storage/uploads/'.$global_featured_course->course_image)}}"
                                 alt="">
                        @else
                            <img src="http://placehold.it/270x220" alt="">
                        @endif
                        @if($global_featured_course->trending == 1)
                        <div class="trend-badge-2 text-center text-uppercase">
                            <i class="fas fa-bolt"></i>
                            <span>Trending</span>
                        </div>
                        @endif
                    </div>
                    <div class="best-course-text" style="left: 0;right: 0;">
                        <div class="course-title mb20 headline relative-position">
                            <h3><a href="{{ route('courses.show', [$global_featured_course->slug]) }}">{{$global_featured_course->title}}</a></h3>
                        </div>
                        <div class="course-meta">
                            <span class="course-category"><a href="{{route('courses.category',['category'=>$global_featured_course->category->slug])}}">{{$global_featured_course->category->name}}</a></span>
                            <span class="course-author">{{ $global_featured_course->students()->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>