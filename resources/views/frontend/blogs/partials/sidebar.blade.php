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
                    @if(count($categories) > 0)

                        @foreach($categories as $item)
                            <li class="cat-item @if(isset($category) && ($item->slug == $category->slug))  active @endif "><a href="{{route('blogs.category',[
                                                'category' => $item->slug])}}">{{$item->name}}</a></li>

                        @endforeach
                    @endif
                </ul>
            </div>
        </div>

        {{--<div class="side-bar-widget">--}}
            {{--<h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>--}}
            {{--<div class="latest-news-posts">--}}
                {{--<div class="latest-news-area">--}}
                    {{--<div class="latest-news-thumbnile relative-position">--}}
                        {{--<img src="{{asset('assets/img/blog/lb-1.jpg')}}" alt="">--}}
                        {{--<div class="hover-search">--}}
                            {{--<i class="fas fa-search"></i>--}}
                        {{--</div>--}}
                        {{--<div class="blakish-overlay"></div>--}}
                    {{--</div>--}}
                    {{--<div class="date-meta">--}}
                        {{--<i class="fas fa-calendar-alt"></i> 26 April 2018--}}
                    {{--</div>--}}
                    {{--<h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s--}}
                            {{--Guide.</a></h3>--}}
                {{--</div>--}}
                {{--<!-- /post -->--}}

                {{--<div class="latest-news-posts">--}}
                    {{--<div class="latest-news-area">--}}
                        {{--<div class="latest-news-thumbnile relative-position">--}}
                            {{--<img src="{{asset('assets/img/blog/lb-2.jpg')}}" alt="">--}}
                            {{--<div class="hover-search">--}}
                                {{--<i class="fas fa-search"></i>--}}
                            {{--</div>--}}
                            {{--<div class="blakish-overlay"></div>--}}
                        {{--</div>--}}
                        {{--<div class="date-meta">--}}
                            {{--<i class="fas fa-calendar-alt"></i> 26 April 2018--}}
                        {{--</div>--}}
                        {{--<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course--}}
                                {{--2018.</a></h3>--}}
                    {{--</div>--}}
                    {{--<!-- /post -->--}}
                {{--</div>--}}

                {{--<div class="view-all-btn bold-font">--}}
                    {{--<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        @if(count($popular_tags) > 0)
            <div class="side-bar-widget">
                <h2 class="widget-title text-capitalize">Popular <span>Tags.</span></h2>
                <div class="tag-clouds ul-li">
                    <ul>
                        @foreach($popular_tags as $item)

                            <li @if(isset($tag) && ($item->slug == $tag->slug))  class="active" @endif ><a href="{{route('blogs.tag',['tag'=>$item->slug])}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif


        <div class="side-bar-widget">
            <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
            <div class="featured-course ">
                <div class="best-course-pic-text pt-0 relative-position">
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
