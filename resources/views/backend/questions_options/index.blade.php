@inject('request', 'Illuminate\Http\Request')
@extends('backend.layouts.app')
@push('after-styles')

@endpush

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">@lang('labels.backend.questions_options.title')</h3>
            @can('questions_option_create')
                <div class="float-right">
                    <a href="{{ route('admin.questions_options.create') }}"
                       class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

                </div>
            @endcan
        </div>
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


            <table id="myTable" class="table table-bordered table-striped @can('questions_option_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                <tr>
                    @can('questions_option_delete')
                        @if ( request('show_deleted') != 1 )
                            <th style="text-align:center;">
                                <input onchange="checkAll(this)" type="checkbox" id="select-all"/>
                            </th>
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

                </tbody>
            </table>
        </div>
    </div>
@stop

@push('after-scripts')

    <script>

        $(document).ready(function () {
            var route = '{{route('admin.questions_options.get_data')}}';

            @if(request('show_deleted') == 1)
                route = '{{route('admin.questions_options.get_data',['show_deleted' => 1])}}';
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