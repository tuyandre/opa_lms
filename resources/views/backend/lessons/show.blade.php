@extends('backend.layouts.app')

@section('content')
    <div class="d-inline-block w-100">
        <h3 class="page-title float-left">@lang('labels.backend.lessons.title')</h3>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.course')</th>
                            <td>{{ $lesson->course->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.title')</th>
                            <td>{{ $lesson->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.slug')</th>
                            <td>{{ $lesson->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.lesson_image')</th>
                            <td>@if($lesson->lesson_image)<a href="{{ asset('storage/uploads/' . $lesson->lesson_image) }}"
                                                             target="_blank"><img
                                            src="{{ asset('storage/uploads/' . $lesson->lesson_image) }}" height="100px"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.short_text')</th>
                            <td>{!! $lesson->short_text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.full_text')</th>
                            <td>{!! $lesson->full_text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.position')</th>
                            <td>{{ $lesson->position }}</td>
                        </tr>
                        <tr>

                            <th>@lang('labels.backend.lessons.fields.downloadable_files')</th>
                            <td>
                                @if(count($lesson->media) > 0 )
                                    @foreach($lesson->media as $media)
                                        <p class="form-group">
                                            <a href="{{ asset('storage/'.$media->name) }}"
                                               target="_blank">{{ $media->name }}
                                                ({{ $media->size }} KB)</a>
                                        </p>
                                    @endforeach
                                @else
                                    <p>No Files</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.free_lesson')</th>
                            <td>{{ Form::checkbox("free_lesson", 1, $lesson->free_lesson == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.lessons.fields.published')</th>
                            <td>{{ Form::checkbox("published", 1, $lesson->published == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tests">
                    <h3>@lang('labels.backend.tests.title')</h3>
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
                                <th>@lang('strings.backend.general.actions')</th>
                            @else
                                <th>@lang('strings.backend.general.actions')</th>
                            @endif
                        </tr>
                        </thead>

                        <tbody>
                        @if (count($tests) > 0)
                            @foreach ($tests as $test)
                                <tr data-entry-id="{{ $test->id }}">
                                    <td>{{ ($test->course) ? $test->course->title : 'N/A' }}</td>
                                    <td>{{ ($test->lesson->title) ? $test->lesson->title : 'N/A' }}</td>
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
                                               data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                               class="btn btn-xs btn-danger mb-2" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();">
                                                <i class="fa fa-trash" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="Delete"></i>
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
                                                   class="btn btn-xs btn-primary mb-2"><i class="icon-eye"></i></a>
                                            @endcan
                                            @can('test_edit')
                                                <a href="{{ route('admin.tests.edit',[$test->id]) }}"
                                                   class="btn btn-xs btn-info mb-2"><i class="icon-pencil"></i></a>
                                            @endcan
                                            @can('test_delete')


                                                <a data-method="delete" data-trans-button-cancel="Cancel"
                                                   data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                                   class="btn btn-xs btn-danger mb-2" style="cursor:pointer;"
                                                   onclick="$(this).find('form').submit();">
                                                    <i class="fa fa-trash" data-toggle="tooltip"
                                                       data-placement="top" title="" data-original-title="Delete"></i>
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
                                <td colspan="10">@lang('strings.backend.general.app_no_entries_in_table')</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>


            <a href="{{ route('admin.lessons.index') }}"
               class="btn btn-default">@lang('strings.backend.general.app_back_to_list')</a>
        </div>
    </div>
@stop