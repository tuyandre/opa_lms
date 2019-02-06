@extends('backend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/amigo-sorter/css/theme-default.css')}}">
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
                            <td>@if($course->course_image)<a href="{{ asset('storage/uploads/' . $course->course_image) }}"
                                                             target="_blank"><img
                                            src="{{ asset('storage/uploads/' . $course->course_image) }}" height="50px" /></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.start_date')</th>
                            <td>{{ $course->start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.courses.fields.published')</th>
                            <td>{{ Form::checkbox("published", 1, $course->published == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
            <div class="row">
                <div class="col-12  text-center">
                    <ul class="sorter d-inline-block">
                        <li>
                            <span>Sci-Fi</span>
                        </li>
                        <li>
                            <span>Fantasy</span>

                        </li>
                        <li>
                            <span>Bondiana</span>
                        </li>
                    </ul>

                </div>
            </div>

            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="nav-item">
                    <a href="#lessons" class="nav-link active" aria-controls="lessons" role="tab"
                       data-toggle="tab">Lessons</a></li>
                <li role="presentation" class="nav-item"><a href="#tests" class="nav-link" aria-controls="tests" role="tab" data-toggle="tab">Tests</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane container active" id="lessons">
                    <table class="table table-bordered table-striped {{ count($lessons) > 0 ? 'datatable' : '' }}">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.course')</th>
                            <th>@lang('labels.backend.lessons.fields.title')</th>
                            <th>@lang('labels.backend.lessons.fields.short_text')</th>
                            <th>@lang('labels.backend.lessons.fields.lesson_image')</th>
                            <th>@lang('labels.backend.lessons.fields.free_lesson')</th>
                            <th>@lang('labels.backend.lessons.fields.published')</th>
                            @if( request('show_deleted') == 1 )
                                <th>@lang('labels.general.actions')</th>
                            @else
                                <th>@lang('labels.general.actions')</th>
                            @endif
                        </tr>
                        </thead>

                        <tbody>
                        @if (count($lessons) > 0)
                            @foreach ($lessons as $lesson)
                                <tr data-entry-id="{{ $lesson->id }}">
                                    <td>{{ ($lesson->course) ? $lesson->course->title : '' }}</td>
                                    <td>{{ $lesson->title }}</td>
                                    <td>{!! $lesson->short_text !!}</td>
                                    <td>@if($lesson->lesson_image)<a
                                                href="{{ asset('storage/uploads/' . $lesson->lesson_image) }}"
                                                target="_blank"><img
                                                    src="{{ asset('storage/uploads/' . $lesson->lesson_image) }}" height="50px" /></a>@endif
                                    </td>
                                    <td>{{ Form::checkbox("free_lesson", 1, $lesson->free_lesson == 1 ? true : false, ["disabled"]) }}</td>
                                    <td>{{ Form::checkbox("published", 1, $lesson->published == 1 ? true : false, ["disabled"]) }}</td>
                                    @if( request('show_deleted') == 1 )
                                        <td>
                                            <a data-method="delete" data-trans-button-cancel="Cancel"
                                               data-trans-button-confirm="Restore" data-trans-title="Are you sure?"
                                               class="btn btn-xs mb-2  btn-success" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();">
                                                {{trans('strings.backend.general.app_restore')}}
                                                <form action="{{route('admin.lessons.restore',['lesson'=> $lesson->id ])}}"
                                                      method="POST" name="delete_item" style="display:none">
                                                    @csrf
                                                </form>
                                            </a>


                                            <a data-method="delete" data-trans-button-cancel="Cancel"
                                               data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                               class="btn btn-xs  mb-2  btn-danger" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();">
                                                {{trans('strings.backend.general.app_permadel')}}
                                                <form action="{{route('admin.lessons.perma_del',['lesson'=>$lesson->id])}}"
                                                      method="POST" name="delete_item" style="display:none">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                            </a>

                                        </td>
                                    @else
                                        <td>
                                            @can('lesson_view')
                                                <a href="{{ route('admin.lessons.show',[$lesson->id]) }}"
                                                   class="btn  mb-2  btn-xs btn-primary"><i class="icon-eye"></i></a>
                                            @endcan
                                            @can('lesson_edit')
                                                <a href="{{ route('admin.lessons.edit',[$lesson->id]) }}"
                                                   class="btn  mb-2  btn-xs btn-info">
                                                    <i class="icon-pencil">
                                                    </i>
                                                </a>
                                                        @endcan
                                            @can('lesson_delete')
                                                    <a data-method="delete" data-trans-button-cancel="Cancel"
                                                       data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                                       class="btn  mb-2  btn-xs btn-danger" style="cursor:pointer;"
                                                       onclick="$(this).find('form').submit();"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>
                                                        <form action="{{route('admin.lessons.destroy',['lesson'=>$lesson->id])}}"
                                                              method="POST" name="delete_item" style="display:none">
                                                            @csrf
                                                            {{method_field('DELETE')}}
                                                        </form>
                                                    </a>
                                            @endcan
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="14">@lang('strings.backend.general.app_no_entries_in_table')</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane container" id="tests">
                    <table class="table table-bordered table-striped {{ count($tests) > 0 ? 'datatable' : '' }}">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.tests.fields.course')</th>
                            <th>@lang('labels.backend.tests.fields.lesson')</th>
                            <th>@lang('labels.backend.tests.fields.title')</th>
                            <th>@lang('labels.backend.tests.fields.description')</th>
                            <th>@lang('labels.backend.tests.fields.questions')</th>
                            <th>@lang('labels.backend.tests.fields.published')</th>
                            @if( request('show_deleted') == 1 )
                                <th>@lang('labels.general.actions')</th>
                            @else
                                <th>@lang('labels.general.actions')</th>
                            @endif
                        </tr>
                        </thead>

                        <tbody>
                        @if (count($tests) > 0)
                            @foreach ($tests as $test)
                                <tr data-entry-id="{{ $test->id }}">
                                    <td>{{ ($test->course) ? $test->course->title : ''  }}</td>
                                    <td>{{ ($test->lesson) ? $test->lesson->title : ''  }}</td>
                                    <td>{{ $test->title }}</td>
                                    <td>{!! $test->description !!}</td>
                                    <td>
                                        @foreach ($test->questions as $singleQuestions)
                                            <span class="label label-info label-many">{{ $singleQuestions->question }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ Form::checkbox("published", 1, $test->published == 1 ? true : false, ["disabled"]) }}</td>
                                    @if( request('show_deleted') == 1 )
                                        <td>
                                            <a data-method="delete" data-trans-button-cancel="Cancel"
                                               data-trans-button-confirm="Restore" data-trans-title="Are you sure?"
                                               class="btn btn-xs  btn-success" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();">
                                                {{trans('strings.backend.general.app_restore')}}
                                                <form action="{{route('admin.tests.restore',['test'=> $test->id ])}}"
                                                      method="POST" name="delete_item" style="display:none">
                                                    @csrf
                                                </form>
                                            </a>


                                            <a data-method="delete" data-trans-button-cancel="Cancel"
                                               data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                               class="btn btn-xs btn-danger" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();">
                                                {{trans('strings.backend.general.app_permadel')}}
                                                <form action="{{route('admin.tests.perma_del',['test'=>$test->id])}}"
                                                      method="POST" name="delete_item" style="display:none">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                </form>
                                            </a>

                                        </td>
                                    @else
                                        <td>
                                            @can('test_view')
                                                <a href="{{ route('admin.tests.show',[$test->id]) }}"
                                                   class="btn btn-xs mb-1 btn-primary"><i class="icon-eye"></i></a>
                                            @endcan
                                            @can('test_edit')
                                                <a href="{{ route('admin.tests.edit',[$test->id]) }}"
                                                   class="btn btn-xs mb-1 btn-info"><i class="icon-pencil"></i></a>
                                            @endcan
                                            @can('test_delete')
                                                    <a data-method="delete" data-trans-button-cancel="Cancel"
                                                       data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                                       class="btn btn-xs btn-danger mb-1" style="cursor:pointer;"
                                                       onclick="$(this).find('form').submit();">
                                                       <i class="fa fa-trash"></i>
                                                        <form action="{{route('admin.tests.destroy',['test'=>$test->id])}}"
                                                              method="POST" name="delete_item" style="display:none">
                                                            @csrf
                                                            {{method_field('DELETE')}}
                                                        </form>
                                                    </a>
                                            @endcan
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">{{trans('strings.backend.general.app_no_entries_in_table')}}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.courses.index') }}" class="btn btn-default border">@lang('strings.backend.general.app_back_to_list')</a>
        </div>
    </div>
@stop

@push('after-scripts')
    <script src="{{asset('plugins/amigo-sorter/js/amigo-sorter.min.js')}}"></script>
    <script>
        $( function() {
            $('ul.sorter').amigoSorter({
                li_helper: "li_helper",
                li_empty: "empty",
                onTouchStart : function() {},
                onTouchMove : function() {},
                onTouchEnd : function() {}
            });
        });

    </script>
@endpush