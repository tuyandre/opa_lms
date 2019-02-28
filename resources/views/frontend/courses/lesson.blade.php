@extends('frontend.layouts.app'.config('theme_layout'))

@push('after-styles')
    <style>


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
                    <h2 class="breadcrumb-head black bold">
                        <span>{{$lesson->course->title}}</span><br> {{$lesson->title}} </h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ul>
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
                        @if($lesson->lesson_image != "")
                            <div class="course-single-pic mb30">
                                <img src="{{asset('storage/uploads/'.$lesson->lesson_image)}}"
                                     alt="">
                            </div>
                        @endif

                        <div class="course-single-text">
                            <div class="course-title mt10 headline relative-position">
                                <h3>
                                    <a href="{{ route('courses.show', [$lesson->course->slug]) }}"><b>{{$lesson->title}}</b></a>
                                </h3>
                            </div>
                            <div class="course-details-content">
                                {!! $lesson->full_text !!}
                            </div>
                        </div>
                        @if($lesson->mediavideo->count() > 0)
                            <div class="course-single-text">
                                <div class="course-title mt10 headline relative-position">
                                    <h2>
                                        Chapter Videos
                                    </h2>
                                </div>

                                @foreach($lesson->mediavideo as $video)
                                    @php
                                        $url = array_last(explode('=',$video->url));
                                    @endphp
                                    <div class="course-details-content">

                                        <iframe width="870" height="543" src="https://www.youtube.com/embed/{{$url}}"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                @endforeach
                            </div>

                        @endif

                        @if($lesson->downloadableMedia->count() > 0)
                            <div class="course-single-text mt-4 px-3 py-1 gradient-bg text-white">
                                <div class="course-title mt10 headline relative-position">
                                    <h4 class="text-white">
                                        Download Files
                                    </h4>
                                </div>

                                @foreach($lesson->downloadableMedia as $media)
                                    <div class="course-details-content text-white">
                                        <p class="form-group">
                                            <a href="{{ route('download',['filename'=>$media->name,'lesson'=>$lesson->id]) }}"
                                                class="text-white font-weight-bold"><i
                                                        class="fa fa-download"></i> {{ $media->name }}
                                                ({{ number_format((float)$media->size / 1024 , 2, '.', '')}} MB)</a>
                                            {{--<a href="{{ asset('storage/uploads/'.$media->name) }}"--}}
                                               {{--target="_blank" class="text-white font-weight-bold"><i--}}
                                                        {{--class="fa fa-download"></i> {{ $media->name }}--}}
                                                {{--({{ $media->size }} KB)</a>--}}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <!-- /course-details -->

                    <!-- /market guide -->

                    <!-- /review overview -->

                </div>

                <div class="col-md-3">
                    <div class="side-bar">
                        <div class="course-details-category ul-li">
                            @if ($previous_lesson)
                                <p><a class="btn btn-block gradient-bg font-weight-bold text-white" href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->model->slug]) }}"><< PREV</a></p>
                            @endif

                            @if ($next_lesson)
                                <p><a class="btn btn-block gradient-bg font-weight-bold text-white" href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->model->slug]) }}">NEXT >></a></p>
                            @endif

                            <p>Progress: {{ Auth::user()->lessons()->where('course_id', $lesson->course->id)->count() }}
                                of {{ $lesson->course->courseTimeline->count() }} lessons</p>
                            <span class="float-none">Course <b>Timeline:</b></span>
                            <ul>
                                @foreach($lesson->course->courseTimeline()->orderBy('sequence')->get() as $key=>$item)
                                    @php $key++; @endphp
                                    <li class="@if($lesson->id == $item->model->id) active @endif ">
                                        <a  @if(in_array($item->model->id,$completed_lessons))href="{{route('lessons.show',['id' => $lesson->course->id,'slug'=>$item->model->slug])}}"@endif>
                                            {{$item->model->title}}  @if(in_array($item->model->id,$completed_lessons)) <i class="fa fa-check"></i> @endif</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="couse-feature ul-li-block">
                            <ul>
                                <li>Chapters <span> {{$lesson->course->courseTimeline->count()}} </span></li>
                                <li>Language <span>English</span></li>
                                <li>Category <span><a
                                                href="{{route('courses.category',['category'=>$lesson->course->category->slug])}}"
                                                target="_blank">{{$lesson->course->category->name}}</a> </span></li>
                                <li>Author <span>

                                        @foreach($lesson->course->teachers as $key=>$teacher)
                                            @php $key++ @endphp
                                            <a href="{{route('teachers.show',['id'=>$teacher->id])}}" target="_blank">
                                                {{$teacher->full_name}}@if($key < count($lesson->course->teachers ))
                                                    , @endif
                                            </a>
                                        @endforeach

                                       </span>
                                </li>
                            </ul>

                        </div>


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

    </script>
@endpush