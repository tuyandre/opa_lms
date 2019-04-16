@extends('frontend.layouts.app'.config('theme_layout'))

@push('after-styles')
    {{--<link rel="stylesheet" href="{{asset('plugins/YouTube-iFrame-API-Wrapper/css/main.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.3/plyr.css"/>


    <style>
        .test-form {
            color: #333333;
        }

        .course-details-category ul li {
            width: 100%;
        }

        .sidebar.is_stuck {
            top: 15% !important;
        }

        .course-timeline-list {
            max-height: 300px;
            overflow: scroll;
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
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->


    <!-- Start of course details section
        ============================================= -->
    <section id="course-details" class="course-details-section">
        <div class="container ">
            <div class="row main-content">
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
                                        <a href="{{ route('courses.show', [$lesson->course->slug]) }}"><b>@lang('labels.frontend.course.test')
                                                : {{$lesson->title}}</b></a>
                                    </h3>
                                </div>
                                <div class="course-details-content">
                                    <p> {!! $lesson->full_text !!} </p>
                                </div>
                            </div>
                            <hr/>
                            @if (!is_null($test_result))
                                <div class="alert alert-info">@lang('labels.frontend.course.your_test_score')
                                    : {{ $test_result->test_result }}</div>
                                <form action="{{route('lessons.retest',[$test_result->test->slug])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="result_id" value="{{$test_result->id}}">
                                    <button type="submit" class="btn gradient-bg font-weight-bold text-white" href="">
                                        @lang('labels.frontend.course.give_test_again')
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
                                               value=" @lang('labels.frontend.course.submit_results') "/>
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

                        @if($lesson->mediaPDF)
                                <div class="course-single-text mb-5">
                                    <iframe src="{{asset('storage/uploads/'.$lesson->mediaPDF->name)}}" width="100%" height="500px">
                                    </iframe>
                                </div>
                        @endif

                        @if($lesson->mediaVideo && $lesson->mediavideo->count() > 0)
                            <div class="course-single-text">
                                @if($lesson->mediavideo != "")
                                    <div class="course-details-content mt-3">
                                        <div class="video-container mb-5" data-id="{{$lesson->mediavideo->id}}">
                                            @if($lesson->mediavideo->type == 'youtube')

                                                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                                {{--<div class="embed-responsive-item">--}}

                                                {{--<div class="mask"></div>--}}
                                                {{--<img src="{{asset('vendor/YouTube-iFrame-API-Wrapper')}}/img/preload.gif" class="preload">--}}

                                                {{--<div class="play">--}}
                                                {{--<i class="play-icon glyphicon glyphicon-play-circle"></i>--}}
                                                {{--</div>--}}

                                                {{--<div class="mute">--}}
                                                {{--<i class="mute-icon notMuted glyphicon glyphicon-volume-up"></i>--}}
                                                {{--<i class="mute-icon isMuted glyphicon glyphicon-volume-off"></i>--}}
                                                {{--</div>--}}

                                                {{--<img class="thumb"--}}
                                                {{--src="//img.youtube.com/vi/{{$url}}/maxresdefault.jpg">--}}
                                                {{--<div class="iframe" id="video-{{$url}}"></div>--}}

                                                {{--</div>--}}
                                                {{--</div>--}}

                                                {{--<div class="progress">--}}
                                                {{--<div class="progress-bar" role="progressbar"></div>--}}
                                                {{--</div>--}}

                                                <div id="player" class="js-player" data-plyr-provider="youtube"
                                                     data-plyr-embed-id="{{$lesson->mediavideo->file_name}}"></div>
                                            @elseif($lesson->mediavideo->type == 'vimeo')
                                                <div id="player" class="js-player" data-plyr-provider="vimeo"
                                                     data-plyr-embed-id="{{$lesson->mediavideo->file_name}}"></div>
                                            @elseif($lesson->mediavideo->type == 'upload')
                                                <video poster="" id="player" class="js-player" playsinline controls>
                                                    <source src="{{$lesson->mediavideo->url}}" type="video/mp4"/>
                                                </video>
                                            @elseif($lesson->mediavideo->type == 'embed')
                                                {!! $lesson->mediavideo->url !!}
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif


                        @if(($lesson->downloadableMedia != "") && ($lesson->downloadableMedia->count() > 0))
                            <div class="course-single-text mt-4 px-3 py-1 gradient-bg text-white">
                                <div class="course-title mt10 headline relative-position">
                                    <h4 class="text-white">
                                        @lang('labels.frontend.course.download_files')
                                    </h4>
                                </div>

                                @foreach($lesson->downloadableMedia as $media)
                                    <div class="course-details-content text-white">
                                        <p class="form-group">
                                            <a href="{{ route('download',['filename'=>$media->name,'lesson'=>$lesson->id]) }}"
                                               class="text-white font-weight-bold"><i
                                                        class="fa fa-download"></i> {{ $media->name }}
                                                ({{ number_format((float)$media->size / 1024 , 2, '.', '')}} @lang('labels.frontend.course.mb')
                                                )</a>
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

                <div class="col-md-3 ">
                    <div id="sidebar" class="sidebar">
                        <div class="course-details-category ul-li">
                            @if ($previous_lesson)
                                <p><a class="btn btn-block gradient-bg font-weight-bold text-white"
                                      href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->model->slug]) }}"><i
                                                class="fa fa-angle-double-left"></i>
                                        @lang('labels.frontend.course.prev')</a></p>
                            @endif

                            @if ($next_lesson)
                                <p><a class="btn btn-block gradient-bg font-weight-bold text-white"
                                      href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->model->slug]) }}">@lang('labels.frontend.course.next')
                                        <i class="fa fa-angle-double-right"></i> </a></p>
                            @endif


                            <span class="float-none">@lang('labels.frontend.course.course_timeline')</span>
                            <ul class="course-timeline-list">
                                @foreach($lesson->course->courseTimeline()->orderBy('sequence')->get() as $key=>$item)
                                    @if($item->model)
                                        @php $key++; @endphp
                                        <li class="@if($lesson->id == $item->model->id) active @endif ">
                                            <a @if(in_array($item->model->id,$completed_lessons))href="{{route('lessons.show',['id' => $lesson->course->id,'slug'=>$item->model->slug])}}"@endif>
                                                {{$item->model->title}}
                                                @if($item->model_type == 'App\Models\Test')
                                                    <p class="mb-0 text-primary">
                                                        - @lang('labels.frontend.course.test')</p>
                                                @endif
                                                @if(in_array($item->model->id,$completed_lessons)) <i
                                                        class="fa text-success float-right fa-check-square"></i> @endif
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="couse-feature ul-li-block">
                            <ul>
                                <li>@lang('labels.frontend.course.chapters')
                                    <span> {{$lesson->course->courseTimeline->count()}} </span></li>
                                <li>@lang('labels.frontend.course.category') <span><a
                                                href="{{route('courses.category',['category'=>$lesson->course->category->slug])}}"
                                                target="_blank">{{$lesson->course->category->name}}</a> </span></li>
                                <li>@lang('labels.frontend.course.author') <span>

                   @foreach($lesson->course->teachers as $key=>$teacher)
                                            @php $key++ @endphp
                                            <a href="{{route('teachers.show',['id'=>$teacher->id])}}" target="_blank">
                           {{$teacher->full_name}}@if($key < count($lesson->course->teachers ))
                                                    , @endif
                       </a>
                                        @endforeach

                  </span>
                                </li>
                                <li>@lang('labels.frontend.course.progress') <span> <b> {{ intval(count($completed_lessons) /  $lesson->course->courseTimeline->count() * 100)  }}
                                            % @lang('labels.frontend.course.completed')</b></span></li>
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
    {{--<script src="//www.youtube.com/iframe_api"></script>--}}
    <script src="{{asset('plugins/sticky-kit/sticky-kit.js')}}"></script>
    <script src="https://cdn.plyr.io/3.5.3/plyr.polyfilled.js"></script>


    <script>
                @if($lesson->mediaVideo && $lesson->mediaVideo->type != 'embed')
        var current_progress = 0;
        @if($lesson->mediaVideo->getProgress(auth()->user()->id) != "")
            current_progress = "{{$lesson->mediaVideo->getProgress(auth()->user()->id)->progress}}";
                @endif

        const player = new Plyr('#player');
        var duration = 0;
        var progress = 0;
        var video_id = $('#player').parents('.video-container').data('id');
        player.on('ready', event => {
            player.currentTime = parseInt(current_progress);
            duration = event.detail.plyr.duration;
        });
        setInterval(function () {
            player.on('timeupdate', event => {
                if (parseInt(current_progress) < parseInt(event.detail.plyr.currentTime)) {
                    progress = current_progress;
                } else {
                    progress = parseInt(event.detail.plyr.currentTime);
                }
            })
            saveProgress(video_id, duration, progress);
        }, 5000)


        function saveProgress(id, duration, progress) {
            $.ajax({
                url: "{{route('update.videos.progress')}}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'video': parseInt(id),
                    'duration': parseInt(duration),
                    'progress': parseInt(progress)
                },
                success: function (result) {
                    if (duration === progress) {
                        location.reload();
                    }
                }
            });
        }

        $('#notice').on('hidden.bs.modal', function () {
            location.reload();
        });


        @endif
        $("#sidebar").stick_in_parent();

    </script>



@endpush