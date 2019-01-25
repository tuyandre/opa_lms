@inject('request', 'Illuminate\Http\Request')
@extends('backend.layouts.app')

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left">@lang('labels.backend.tests.title')</h3>
            @can('test_create')
                <div class="float-right">
                    <a href="{{ route('admin.tests.create') }}"
                       class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

                </div>
            @endcan
        </div>
        <div class="card-body table-responsive">
            <div class="d-block">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{ route('admin.tests.index') }}"
                           style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">{{trans('labels.general.all')}}</a>
                    </li>
                    |
                    <li class="list-inline-item">
                        <a href="{{ route('admin.tests.index') }}?show_deleted=1"
                           style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">{{trans('labels.general.trash')}}</a>
                    </li>
                </ul>
            </div>
            <table id="myTable"
                   class="table table-bordered table-striped @can('test_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                <tr>
                    @can('test_delete')
                        @if ( request('show_deleted') != 1 )
                            <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>@endif
                    @endcan

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

                </tbody>
            </table>
        </div>
    </div>
@stop

@push('after-scripts')
    <script>

        $(document).ready(function () {
            var route = '{{route('admin.tests.get_data')}}';

            @if(request('show_deleted') == 1)
                route = '{{route('admin.tests.get_data',['show_deleted' => 1])}}';
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
                    {
                        "data": function (data) {
                            return '<input type="checkbox" name="id[]" value="' + data.id + '" />';
                        }, "orderable": false, "searchable": false, "name": "id"
                    },
                        @endif

                    {
                        data: "course", name: 'course'
                    },
                    {data: "lesson", name: 'lesson'},
                    {data: "title", name: 'title'},
                    {data: "description", name: "description"},
                    {data: "questions", name: "questions"},
                    {data: "published", name: "published"},
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
            @can('test_delete')
            @if(request('show_deleted') != 1)
            $('.actions').html('<a href="' + '{{ route('admin.tests.mass_destroy') }}' + '" class="btn btn-xs btn-danger js-delete-selected" style="margin-top:0.755em;margin-left: 20px;">Delete selected</a>');
            @endif
            @endcan
        });

    </script>

@endpush