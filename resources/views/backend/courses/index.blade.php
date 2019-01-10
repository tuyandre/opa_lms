@inject('request', 'Illuminate\Http\Request')
@extends('backend.layouts.app')

@section('content')

    <div class="d-inline-block w-100">
        <h3 class="page-title float-left">@lang('labels.backend.courses.title')</h3>
        @can('course_create')
            <div class="float-right">
                <a href="{{ route('admin.courses.create') }}"
                   class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

            </div>
        @endcan
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-block">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('admin.courses.index') }}"
                               style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a>
                        </li>
                        |
                        <li class="list-inline-item">
                            <a href="{{ route('admin.courses.index') }}?show_deleted=1"
                               style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a>
                        </li>
                    </ul>
                </div>


                <table class="table table-bordered table-striped {{ count($courses) > 0 ? 'datatable' : '' }} @can('course_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                    <thead>
                    <tr>
                        @can('course_delete')
                            @if ( request('show_deleted') != 1 )
                                <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>@endif
                        @endcan

                        @if (Auth::user()->isAdmin())
                            <th>@lang('labels.backend.courses.fields.teachers')</th>
                        @endif
                        <th>@lang('labels.backend.courses.fields.title')</th>
                        <th>@lang('labels.backend.courses.fields.slug')</th>
                        <th>@lang('labels.backend.courses.fields.description')</th>
                        <th>@lang('labels.backend.courses.fields.price')</th>
                        <th>@lang('labels.backend.courses.fields.course_image')</th>
                        <th>@lang('labels.backend.courses.fields.start_date')</th>
                        <th>@lang('labels.backend.courses.fields.published')</th>
                        @if( request('show_deleted') == 1 )
                            <th>&nbsp; @lang('strings.backend.general.actions')</th>
                        @else
                            <th>&nbsp; @lang('strings.backend.general.actions')</th>
                        @endif
                    </tr>
                    </thead>

                    <tbody>
                    @if (count($courses) > 0)
                        @foreach ($courses as $course)
                            <tr data-entry-id="{{ $course->id }}">
                                @can('course_delete')
                                    @if ( request('show_deleted') != 1 )
                                        <td></td>@endif
                                @endcan

                                @if (Auth::user()->isAdmin())
                                    <td>
                                        @foreach ($course->teachers as $singleTeachers)
                                            <span class="label label-info label-many">{{ $singleTeachers->name }}</span>
                                        @endforeach
                                    </td>
                                @endif
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->slug }}</td>
                                <td>{!! $course->description !!}</td>
                                <td>{{ $course->price }}</td>
                                <td>@if($course->course_image)<a href="{{ asset('uploads/' . $course->course_image) }}"
                                                                 target="_blank"><img
                                                src="{{ asset('uploads/thumb/' . $course->course_image) }}"/></a>@endif
                                </td>
                                <td>{{ $course->start_date }}</td>
                                <td>{{ Form::checkbox("published", 1, $course->published == 1 ? true : false, ["disabled"]) }}</td>
                                @if( request('show_deleted') == 1 )
                                    <td>

                                        <a data-method="delete" data-trans-button-cancel="Cancel"
                                           data-trans-button-confirm="Restore" data-trans-title="Are you sure?"
                                           class="btn btn-xs  btn-success" style="cursor:pointer;"
                                           onclick="$(this).find('form').submit();">
                                            {{trans('strings.backend.general.app_restore')}}
                                            <form action="{{route('admin.courses.restore',['course'=> $course->id ])}}"
                                                  method="POST" name="delete_item" style="display:none">
                                                @csrf
                                            </form>
                                        </a>


                                        <a data-method="delete" data-trans-button-cancel="Cancel"
                                           data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                           class="btn btn-xs btn-danger" style="cursor:pointer;"
                                           onclick="$(this).find('form').submit();">
                                            {{trans('strings.backend.general.app_permadel')}}
                                            <form action="{{route('admin.courses.perma_del',['course'=>$course])}}"
                                                  method="POST" name="delete_item" style="display:none">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            </form>
                                        </a>

                                    </td>
                                @else
                                    <td>
                                        @can('course_view')

                                            <a href="{{ route('admin.lessons.index',['course_id' => $course->id]) }}"
                                               class="btn btn-xs mb-1 btn-primary">@lang('labels.backend.lessons.title')</a>
                                        @endcan
                                        @can('course_edit')
                                            <a href="{{ route('admin.courses.edit',[$course->id]) }}"
                                               class="btn btn-xs btn-info mb-1"><i class="icon icon-pencil"></i></a>
                                        @endcan
                                        @can('course_delete')


                                            <a data-method="delete" data-trans-button-cancel="Cancel"
                                               data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                               class="btn btn-xs btn-danger" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>
                                                <form action="{{route('admin.courses.destroy',['course'=>$course])}}"
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
                            <td colspan="12">@lang('strings.backend.general.app_no_entries_in_table')</td>
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
        @can('course_delete')
                @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.courses.mass_destroy') }}'; @endif
        @endcan
    </script>
@endpush