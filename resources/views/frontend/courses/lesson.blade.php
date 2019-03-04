@extends('frontend.layouts.app'.config('theme_layout'))

@push('after-styles')
    <link rel="stylesheet" href="{{asset('plugins/YouTube-iFrame-API-Wrapper/css/main.css')}}">

    <style>
        .test-form {
            color: #333333;
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


                        @if ($test_exists)
                            <div class="course-single-text">
                                <div class="course-title mt10 headline relative-position">
                                    <h3>
                                        <a href="{{ route('courses.show', [$lesson->course->slug]) }}"><b>Test
                                                : {{$lesson->title}}</b></a>
                                    </h3>
                                </div>
                                <div class="course-details-content">
                                    <p> {!! $lesson->full_text !!} </p>
                                </div>
                            </div>
                            <hr/>
                            @if (!is_null($test_result))
                                <div class="alert alert-info">Your test score: {{ $test_result->test_result }}</div>
                                <form action="{{route('lessons.retest',[$test_result->test->slug])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="result_id" value="{{$test_result->id}}">
                                    <button type="submit" class="btn gradient-bg font-weight-bold text-white" href="">
                                        Give test again
                                    </button>
                                </form>
                            @else
                                <div class="test-form">
                                    <form action="{{ route('lessons.test', [$lesson->slug]) }}" method="post">
                                        {{ csrf_field() }}
                                        @foreach ($lesson->questions as $question)
                                            <h4 class="mb-0">{{ $loop->iteration }}. {{ $question->question }}</h4>
                                            <br/>
                                            @foreach ($question->options as $option)
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="questions[{{ $question->id }}]"
                                                               value="{{ $option->id }}"/>
                                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                        {{ $option->option_text }}<br/>
                                                    </label>
                                                </div>

                                            @endforeach
                                            <br/>
                                        @endforeach
                                        <input class="btn  gradient-bg text-white font-weight-bold" type="submit"
                                               value=" Submit results "/>
                                    </form>
                                </div>
                            @endif
                            <hr/>
                        @else
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
                        @endif
                        @if($lesson->mediaVideo && $lesson->mediavideo->count() > 0)
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
                                        <div class="video-container mb-5" data-id="{{$video->id}}" id="{{$url}}">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div class="embed-responsive-item">

                                                    <div class="mask"></div>
                                                    {{--<img src="{{asset('vendor/YouTube-iFrame-API-Wrapper')}}/img/preload.gif" class="preload">--}}

                                                    <div class="play">
                                                        <i class="play-icon glyphicon glyphicon-play-circle"></i>
                                                    </div>

                                                    <div class="mute">
                                                        <i class="mute-icon notMuted glyphicon glyphicon-volume-up"></i>
                                                        <i class="mute-icon isMuted glyphicon glyphicon-volume-off"></i>
                                                    </div>

                                                    <img class="thumb"
                                                         src="//img.youtube.com/vi/{{$url}}/maxresdefault.jpg">
                                                    <div class="iframe" id="video-{{$url}}"></div>

                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        @endif

                        @if(($lesson->downloadableMedia != "") && ($lesson->downloadableMedia->count() > 0))
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
                                <p><a class="btn btn-block gradient-bg font-weight-bold text-white"
                                      href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->model->slug]) }}"><<
                                        PREV</a></p>
                            @endif

                            @if ($next_lesson)
                                <p><a class="btn btn-block gradient-bg font-weight-bold text-white"
                                      href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->model->slug]) }}">NEXT
                                        >></a></p>
                            @endif


                            <span class="float-none">Course <b>Timeline:</b></span>
                            <ul>
                                @foreach($lesson->course->courseTimeline()->orderBy('sequence')->get() as $key=>$item)
                                    @php $key++; @endphp
                                    <li class="@if($lesson->id == $item->model->id) active @endif ">
                                        <a @if(in_array($item->model->id,$completed_lessons))href="{{route('lessons.show',['id' => $lesson->course->id,'slug'=>$item->model->slug])}}"@endif>
                                            {{$item->model->title}}
                                            @if($item->model_type == 'App\Models\Test')
                                                <p class="mb-0 text-primary"> - Test</p>
                                            @endif
                                            @if(in_array($item->model->id,$completed_lessons)) <i
                                                    class="fa text-success float-right fa-check-square"></i> @endif</a>
                                    </li>
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
                                <li>Progress <span> <b> {{ intval(count($completed_lessons) /  $lesson->course->courseTimeline->count() * 100)  }}
                                            % completed</b></span></li>
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
    <script src="//www.youtube.com/iframe_api"></script>
    <script src="{{asset('plugins/YouTube-iFrame-API-Wrapper/Player.js')}}"></script>

    <script>
                @if($lesson->mediaVideo && $lesson->mediavideo->count() > 0)
        var videos = [];
        @foreach($lesson->mediaVideo as $key=>$video)

        @php  $key++    @endphp
        videos.push({
            id: "{{$video->name}}",
            video_id: "{{$video->id}}",
            time: parseFloat({{$video->getProgress(auth()->user()->id)->progress?:0}}),
            duration: 0,
        });
        var update = false;

                @endforeach
        var players = [];


        function onYouTubeIframeAPIReady() {
            var videoinfo = videos;
            var v = 0;
            $('.video-container').each(function (key, value) {
                players[key] = new Player();
                var video_container = $(this);
                players[key].init({
                    id: videoinfo[key].id,
                    start: videoinfo[key].time,
                    onLoaded: function (player) {
                        video_container.find('.play').show()
                        duration = players[key].video.duration();
                        video_container.attr('data-duration', duration)
                    },
                    onPlay: function (player) {
                        video_container.find('.play').hide()

                    },
                    onPlaying: function (player) {
                        videoinfo[key].time = player.time();
                        video_container.attr('data-time', videoinfo[key].time)
                        update = true;
                        setInterval(function () {
                            var id = video_container.data('id');
                            var duration = video_container.data('duration');
                            var time = videoinfo[key].time;
                            saveProgress(id, duration, time);
                        }, 5000)
                    },
                    onPause: function (player) {
                        video_container.find('.play').show();
                        update = false;

                    },
                    onEnd: function (player) {
                        var state = saveProgress(videoinfo[key].video_id, videoinfo[key].duration, videoinfo[key].time);

                    },
                    onSeekStart: function (player) {
                    },
                    onSeeking: function (player) {
                    },
                    onSeekEnd: function (player) {
                    }
                })
            })

        }

        //Save every Interval
//        window.setInterval(function () {
//            $('.video-container').each(function () {
//                var id = $(this).data('id');
//                var duration = $(this).data('duration');
//                var time = $(this).data('time');
//                console.log($(this).data('time'))
//                saveProgress(id, duration, time);
//            });
//        }, 5000);


        function saveProgress(id, duration, time) {
            $.ajax({
                url: "{{route('update.videos.progress')}}",
                method: "POST",
                data: {"_token": "{{ csrf_token() }}", 'video': id, 'duration': duration, 'progress': time},
                success: function (result) {
//                    console.log(result)
                }
            });
        }

        $('#notice').on('hidden.bs.modal', function () {
            location.reload();
        });
    </script>
    @endif
@endpush