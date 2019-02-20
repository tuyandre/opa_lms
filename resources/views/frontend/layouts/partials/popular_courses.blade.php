<!-- Start popular course
       ============================================= -->
@if(count($popular_courses) > 0)
    <section id="popular-course" class="popular-course-section {{isset($class) ? $class : ''}}">
        <div class="container">
            <div class="section-title mb20 headline text-left ">
                <span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
                <h2><span>Popular</span> Courses.</h2>
            </div>
            <div id="course-slide-item" class="course-slide">
                @foreach($popular_courses as $item)
                    <div class="course-item-pic-text ">
                        <div class="course-pic relative-position mb25">
                            @if($item->course_image != "")
                                <img src="{{asset('storage/uploads/'.$item->course_image)}}"
                                     alt="">
                            @else
                                <img src="http://placehold.it/370x320" alt="">
                            @endif
                            <div class="course-price text-center gradient-bg">
                                <span>${{$item->price}}</span>
                            </div>
                            <div class="course-details-btn">
                                <a href="{{ route('courses.show', [$item->slug]) }}">COURSE DETAIL <i
                                            class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="course-item-text">
                            <div class="course-meta">
                                    <span class="course-category bold-font"><a
                                                href="#">{{$item->category->name}}</a></span>
                                <span class="course-author bold-font">
                                @foreach($item->teachers as $teacher)
                                        <a href="#">{{$teacher->first_name}}</a></span>
                                @endforeach
                                <div class="course-rate ul-li">
                                    <ul>
                                        @for($i=1; $i<=(int)$item->rating; $i++)
                                            <li><i class="fas fa-star"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <div class="course-title mt10 headline pb45 relative-position">
                                <h3><a href="{{ route('courses.show', [$item->slug]) }}">{{$item->title}}</a>
                                    @if($item->trending == 1)
                                        <span
                                                class="trend-badge text-uppercase bold-font"><i
                                                    class="fas fa-bolt"></i> TRENDING</span>
                                    @endif
                                </h3>
                            </div>
                            <div class="course-viewer ul-li">
                                <ul>
                                    <li><a href=""><i class="fas fa-user"></i> {{ $item->students()->count() }}
                                        </a>
                                    </li>
                                    <li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
                                    {{--<li><a href="">125k Unrolled</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- End popular course
        ============================================= -->
@endif