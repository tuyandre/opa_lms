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
                        <li class="list-inline-item"><a href="{{ route('admin.lessons.index') }}"
                                                        style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a>
                        </li>
                        |
                        <li class="list-inline-item"><a href="{{ route('admin.lessons.index') }}?show_deleted=1"
                                                        style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a>
                        </li>
                    </ul>
                </div>
                <table id="myTable" class="table table-bordered table-striped @can('lesson_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
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
                            <th>@lang('strings.backend.general.actions') &nbsp;</th>
                        @endif
                    </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@stop

@push('after-scripts')
    <script>

        $(document).ready(function () {
            var route = '{{route('admin.lessons.get_data')}}';

            @if(request('show_deleted') == 1)
                route = '{{route('admin.lessons.get_data',['show_deleted' => 1])}}';
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
                    {data: "course", name: 'course'},
                    {data: "title", name: 'title'},
                    {data: "position", name: "position"},
                    {data: "free_lesson", name: "free_lesson"},
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
            @can('lesson_delete')
            @if(request('show_deleted') != 1)
            $('.actions').html('<a href="' + '{{ route('admin.lessons.mass_destroy') }}' + '" class="btn btn-xs btn-danger js-delete-selected" style="margin-top:0.755em;margin-left: 20px;">Delete selected</a>');
            @endif
            @endcan
        });

    </script>
@endpush