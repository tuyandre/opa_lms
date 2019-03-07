@extends('backend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/amigo-sorter/css/theme-default.css')}}">
    <style>
        ul.sorter > span {
            display: inline-block;
            width: 100%;
            height: 100%;
            background: #f5f5f5;
            color: #333333;
            border: 1px solid #cccccc;
            border-radius: 6px;
            padding: 0px;
        }

        ul.sorter li > span .title {
            padding-left: 15px;
        }

        ul.sorter li > span .btn {
            width: 20%;
        }


    </style>
@endpush

@section('content')

    <div class="card">

        <div class="card-header">
            <h3 class="page-title mb-0">@lang('labels.backend.courses.title')</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('labels.backend.courses.fields.teachers')</th>
                            <td>
                                @foreach ($course->teachers as $singleTeachers)
                                    <span class="label label-info label-many">{{ $singleTeachers->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.title')</th>
                            <td>{{ $course->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.slug')</th>
                            <td>{{ $course->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.category')</th>
                            <td>{{ $course->category->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.description')</th>
                            <td>{!! $course->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.price')</th>
                            <td>{{ $course->price }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.course_image')</th>
                            <td>@if($course->course_image)<a
                                        href="{{ asset('storage/uploads/' . $course->course_image) }}"
                                        target="_blank"><img
                                            src="{{ asset('storage/uploads/' . $course->course_image) }}"
                                            height="50px"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.start_date')</th>
                            <td>{{ $course->start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.published')</th>
                            <td>{{ Form::checkbox("published", 1, $course->published == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.meta_title')</th>
                            <td>{{ $course->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.meta_description')</th>
                            <td>{{ $course->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.meta_keywords')</th>
                            <td>{{ $course->meta_keywords }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            @if(count($courseTimeline) > 0)
                <div class="row justify-content-center">
                    <div class="col-6  ">
                        <h4 class="">@lang('labels.backend.courses.course_timeline')</h4>
                        <p class="mb-0">@lang('labels.backend.courses.listing_note')</p>
                        <p class="">@lang('labels.backend.courses.timeline_description')</p>
                        <ul class="sorter d-inline-block">
                            @foreach($courseTimeline as $item)
                                <li>
                            <span data-id="{{$item->id}}" data-sequence="{{$item->sequence}}">
                              @if($item->model_type == 'App\Models\Test')
                                    <p class="d-inline-block mb-0 btn btn-primary">
                                        @lang('labels.backend.courses.test')
                                    </p>
                                @elseif($item->model_type == 'App\Models\Lesson')
                                    <p class="d-inline-block mb-0 btn btn-success">
                                        @lang('labels.backend.courses.lesson')
                                    </p>
                                @endif
                                <p class="title d-inline ml-2">{{$item->model->title}}</p>
                           </span>

                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('admin.courses.index') }}"
                           class="btn btn-default border float-left">@lang('strings.backend.general.app_back_to_list')</a>

                        <a href="#" id="save_timeline"
                           class="btn btn-primary float-right">@lang('labels.backend.courses.save_timeline')</a>

                    </div>

                </div>
            @endif
        </div>
    </div>
@stop

@push('after-scripts')
    <script src="{{asset('plugins/amigo-sorter/js/amigo-sorter.min.js')}}"></script>
    <script>
        $(function () {
            $('ul.sorter').amigoSorter({
                li_helper: "li_helper",
                li_empty: "empty",
            });
            $(document).on('click', '#save_timeline', function (e) {
                e.preventDefault();
                var list = [];
                $('ul.sorter li').each(function (key, value) {
                    key++;
                    var val = $(value).find('span').data('id');
                    list.push({id: val, sequence: key});
                });

                $.ajax({
                    method: 'POST',
                    url: "{{route('admin.courses.saveSequence')}}",
                    data: {
                        _token: '{{csrf_token()}}',
                        list: list
                    }
                }).done(function () {
                    location.reload();
                });
            })
        });

    </script>
@endpush