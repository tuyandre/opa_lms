<section id="best-course" class="best-course-section {{isset($class) ? $class : ''}}">
    <div class="container">
        <div class="section-title mb45 headline text-center ">
            <span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
            <h2>Browse Our<span> Featured Course.</span></h2>
        </div>
        <div class="best-course-area mb45">
            <div class="row">
                @if(count($featured_courses) > 0)
                    @foreach($featured_courses as $item)
                        <div class="col-md-3">
                            <div class="best-course-pic-text relative-position ">
                                <div class="best-course-pic relative-position">
                                    @if($item->course_image != "")
                                        <img src="{{asset('storage/uploads/'.$item->course_image)}}"
                                             alt="">
                                    @else
                                        <img src="http://placehold.it/270x220" alt="">
                                    @endif
                                    @if($item->trending == 1)
                                        <div class="trend-badge-2 text-center text-uppercase">
                                            <i class="fas fa-bolt"></i>
                                            <span>Trending</span>
                                        </div>
                                    @endif
                                    <div class="course-price text-center gradient-bg">
                                        <span>${{$item->price}}</span>
                                    </div>
                                    <div class="course-rate ul-li">
                                        <ul>
                                            @for($i=1; $i<=(int)$item->rating; $i++)
                                                <li><i class="fas fa-star"></i></li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="course-details-btn">
                                        <a href="{{ route('courses.show', [$item->slug]) }}">COURSE DETAIL <i
                                                    class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blakish-overlay"></div>
                                </div>
                                <div class="best-course-text">
                                    <div class="course-title mb20 headline relative-position">
                                        <h3>
                                            <a href="{{ route('courses.show', [$item->slug]) }}">{{$item->title}}</a>
                                        </h3>
                                    </div>
                                    <div class="course-meta">
                                            <span class="course-category"><a
                                                        href="#">{{$item->category->name}}</a></span>
                                        <span class="course-author">
                                                <a href="#">
                                                    {{ $item->students()->count() }}
                                                    Students</a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="text-center">No Featured Courses yet</h4>
                @endif

            </div>
        </div>
    </div>
</section>
