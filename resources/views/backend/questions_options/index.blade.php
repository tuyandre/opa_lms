@inject('request', 'Illuminate\Http\Request')
@extends('backend.layouts.app')
@push('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css" type="text/css">

    <style>

    </style>
@endpush

@section('content')
    <div class="d-inline-block w-100">
        <h3 class="page-title float-left">@lang('labels.backend.questions_options.title')</h3>
        @can('questions_option_create')
            <div class="float-right">
                <a href="{{ route('admin.questions_options.create') }}"
                   class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

            </div>
        @endcan
    </div>



    <div class="card">
        <div class="card-body table-responsive">
            <div class="d-block">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{ route('admin.questions_options.index')  }}"
                           style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a>
                    </li>
                    |
                    <li class="list-inline-item">
                        <a href="{{route('admin.questions_options.index')  }}?show_deleted=1"
                           style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a>
                    </li>
                </ul>
            </div>

            {{--<table id="myTable" class="table table-bordered table-striped {{ count($questions_options) > 0 ? 'datatable' : '' }} @can('questions_option_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">--}}
            <table id="myTable"
                   class="table table-bordered table-striped @can('questions_option_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                <tr>
                    @can('questions_option_delete')
                        @if ( request('show_deleted') != 1 )
                            <th style="text-align:center;"><input onchange="checkAll(this)" type="checkbox"
                                                                  id="select-all"/></th>

                        @endif
                    @endcan
                    <th>@lang('labels.backend.questions_options.fields.question')</th>
                    <th>@lang('labels.backend.questions_options.fields.option_text')</th>
                    <th>@lang('labels.backend.questions_options.fields.correct')</th>

                    @if( request('show_deleted') == 1 )

                        <th>@lang('labels.general.actions')</th>
                    @else
                        <th>@lang('labels.general.actions')</th>
                    @endif


                </tr>
                </thead>

                <tbody>
                {{--@if (count($questions_options) > 0)--}}
                {{--@foreach ($questions_options as $questions_option)--}}
                {{--<tr data-entry-id="{{ $questions_option->id }}">--}}
                {{--@can('questions_option_delete')--}}
                {{--@if ( request('show_deleted') != 1 )--}}
                {{--<td></td>@endif--}}
                {{--@endcan--}}

                {{--<td>{{ ($questions_option->question) ? $questions_option->question->question : '' }}</td>--}}
                {{--<td>{!! $questions_option->option_text !!}</td>--}}
                {{--<td>{{ Form::checkbox("correct", 1, $questions_option->correct == 1 ? true : false, ["disabled"]) }}</td>--}}
                {{--@if( request('show_deleted') == 1 )--}}
                {{--<td>--}}

                {{--<a data-method="delete" data-trans-button-cancel="Cancel"--}}
                {{--data-trans-button-confirm="Restore" data-trans-title="Are you sure?"--}}
                {{--class="btn btn-xs  btn-success" style="cursor:pointer;"--}}
                {{--onclick="$(this).find('form').submit();">--}}
                {{--{{trans('strings.backend.general.app_restore')}}--}}
                {{--<form action="{{route('admin.questions_options.restore',['questions_option'=> $questions_option->id ])}}"--}}
                {{--method="POST" name="delete_item" style="display:none">--}}
                {{--@csrf--}}
                {{--</form>--}}
                {{--</a>--}}


                {{--<a data-method="delete" data-trans-button-cancel="Cancel"--}}
                {{--data-trans-button-confirm="Delete" data-trans-title="Are you sure?"--}}
                {{--class="btn btn-xs btn-danger" style="cursor:pointer;"--}}
                {{--onclick="$(this).find('form').submit();">--}}
                {{--{{trans('strings.backend.general.app_permadel')}}--}}
                {{--<form action="{{route('aadmin.questions_options.perma_del',['questions_option'=>$questions_option->id])}}"--}}
                {{--method="POST" name="delete_item" style="display:none">--}}
                {{--@csrf--}}
                {{--{{method_field('DELETE')}}--}}
                {{--</form>--}}
                {{--</a>--}}

                {{--</td>--}}
                {{--@else--}}
                {{--<td>--}}
                {{--@can('questions_option_view')--}}
                {{--<a href="{{ route('admin.questions_options.show',[$questions_option->id]) }}"--}}
                {{--class="btn btn-xs btn-primary"><i class="icon-eye"></i></a>--}}
                {{--@endcan--}}
                {{--@can('questions_option_edit')--}}
                {{--<a href="{{ route('admin.questions_options.edit',[$questions_option->id]) }}"--}}
                {{--class="btn btn-xs btn-info"><i class="icon-pencil"></i></a>--}}
                {{--@endcan--}}
                {{--@can('questions_option_delete')--}}

                {{--<a data-method="delete" data-trans-button-cancel="Cancel"--}}
                {{--data-trans-button-confirm="Delete" data-trans-title="Are you sure?"--}}
                {{--class="btn btn-xs btn-danger" style="cursor:pointer;"--}}
                {{--onclick="$(this).find('form').submit();">--}}
                {{--<i class="fa fa-trash"--}}
                {{--data-toggle="tooltip"--}}
                {{--data-placement="top" title=""--}}
                {{--data-original-title="Delete"></i>--}}
                {{--<form action="{{route('admin.questions_options.destroy',['questions_option'=>$questions_option->id])}}"--}}
                {{--method="POST" name="delete_item" style="display:none">--}}
                {{--@csrf--}}
                {{--{{method_field('DELETE')}}--}}
                {{--</form>--}}
                {{--</a>--}}
                {{--@endcan--}}
                {{--</td>--}}
                {{--@endif--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                {{--@else--}}
                {{--<tr>--}}
                {{--<td colspan="7">@lang('strings.backend.general.app_no_entries_in_table')</td>--}}
                {{--</tr>--}}
                {{--@endif--}}
                </tbody>
            </table>
        </div>
    </div>
@stop

@push('after-scripts')
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>

    <script>

        $(document).ready(function () {


            var route = '{{route('admin.questions_options.get_q_data')}}';

            @if(request('show_deleted') == 1)
                route = '{{route('admin.questions_options.get_q_data',['show_deleted' => 1])}}';
            @endif

            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lBfrtip<"actions">',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible',
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible',
                        }
                    },
                    'colvis'
                ],
                ajax: route,
                columns: [
                     @if(request('show_deleted') != 1)
                    { "data": function(data){
                        return '<input type="checkbox" name="id[]" value="'+ data.id +'" />';
                    }, "orderable": false, "searchable":false, "name":"id" },
                    @endif
                    {data: "question", name: 'question_name'},
                    {data: "option_text", name: "option_text"},
                    {data: "correct", name: "correct"},
                    {data: "actions", name: "actions"}
                ],
                @if(request('show_deleted') != 1)
                columnDefs: [
                    {"width": "5%", "targets": 0},
                    {"className": "text-center", "targets": [0]}
                ],
                @endif

                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
            });
            @can('questions_option_delete')
            @if(request('show_deleted') != 1)
            $('.actions').html('<a href="' + '{{ route('admin.questions_options.mass_destroy') }}' + '" class="btn btn-xs btn-danger js-delete-selected" style="margin-top:0.755em;margin-left: 20px;">Delete selected</a>');
            @endif
            @endcan
        });
    </script>
@endpush