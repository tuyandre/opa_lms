@inject('request', 'Illuminate\Http\Request')
@extends('backend.layouts.app')

@section('content')

    <div class="d-inline-block w-100">
        <h3 class="page-title float-left">@lang('labels.backend.lessons.title')</h3>
        @can('lesson_create')
            <div class="float-right">
                <a href="{{ route('admin.lessons.create') }}"
                   class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

            </div>
        @endcan
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-block">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a  href="{{ route('admin.lessons.index') }}"
                               style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li>
                        |
                        <li class="list-inline-item"><a  href="{{ route('admin.lessons.index') }}?show_deleted=1"
                               style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
                    </ul>
                </div>
                <table class="table table-bordered table-striped {{ count($lessons) > 0 ? 'datatable' : '' }} @can('lesson_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                    <thead>
                    <tr>
                        @can('lesson_delete')
                            @if ( request('show_deleted') != 1 )
                                <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>@endif
                        @endcan

                        <th>@lang('labels.backend.lessons.fields.course')</th>
                        <th>@lang('labels.backend.lessons.fields.title')</th>
                        <th>@lang('labels.backend.lessons.fields.position')</th>
                        <th>@lang('labels.backend.lessons.fields.free_lesson')</th>
                        <th>@lang('labels.backend.lessons.fields.published')</th>
                        @if( request('show_deleted') == 1 )
                            <th>@lang('strings.backend.general.actions') &nbsp;</th>
                        @else
                            <th>@lang('strings.backend.general.actions')  &nbsp;</th>
                        @endif
                    </tr>
                    </thead>

                    <tbody>
                    @if (count($lessons) > 0)
                        @foreach ($lessons as $lesson)
                            <tr data-entry-id="{{ $lesson->id }}">
                                @can('lesson_delete')
                                    @if ( request('show_deleted') != 1 )
                                        <td></td>@endif
                                @endcan
                                <td>{{$lesson->course->title}}</td>
                                <td>{{ $lesson->title }}</td>
                                <td>{{ $lesson->position }}</td>
                                <td>{{ Form::checkbox("free_lesson", 1, $lesson->free_lesson == 1 ? true : false, ["disabled"]) }}</td>
                                <td>{{ Form::checkbox("published", 1, $lesson->published == 1 ? true : false, ["disabled"]) }}</td>
                                @if( request('show_deleted') == 1 )
                                    <td>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'POST',
                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                            'route' => ['admin.lessons.restore', $lesson->id])) !!}
                                        {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                        {!! Form::close() !!}


                                        {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
            'route' => ['admin.lessons.perma_del', $lesson->id])) !!}
                                        {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    </td>
                                @else
                                    <td>
                                        @can('lesson_view')
                                            <a href="{{ route('admin.lessons.show',[$lesson->id]) }}"
                                               class="btn btn-xs btn-primary"><i class="icon-eye"></i></a>
                                        @endcan
                                        @can('lesson_edit')
                                            <a href="{{ route('admin.lessons.edit',[$lesson->id]) }}"
                                               class="btn btn-xs btn-info"><i class="icon-pencil"></i></a>
                                        @endcan
                                        @can('lesson_delete')

                                                <a data-method="delete" data-trans-button-cancel="Cancel"
                                                   data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                                   class="btn btn-xs btn-danger" style="cursor:pointer;"
                                                   onclick="$(this).find('form').submit();"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>
                                                    <form action="{{route('admin.lessons.destroy',['lesson'=>$lesson])}}"
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
                            <td colspan="14">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@stop

@push('after-scripts')
    <script>
        @can('lesson_delete')
                @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.lessons.mass_destroy') }}'; @endif
        @endcan

    </script>
@endpush