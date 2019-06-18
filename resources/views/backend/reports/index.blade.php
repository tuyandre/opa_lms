@extends('backend.layouts.app')

@section('title', __('labels.backend.reports.title').' | '.app_name())

@push('after-styles')
    <style>
        .dataTables_wrapper .dataTables_filter {
            float: right!important;
            text-align: left;
            margin-left: 25%;
        }
        div.dt-buttons {
            display: inline-block;
            width: 100%;
            text-align: center;
        }
    </style>
@endpush
@section('content')

    <div class="card">
        <div class="card-header">

            <h3 class="page-title float-left">@lang('labels.backend.reports.title')</h3>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-12 border-right">
                    <div class="table-responsive">
                        <table id="myCourseTable" class="table table-bordered table-striped ">
                            <thead>
                            <tr>
                                <th>@lang('labels.general.sr_no')</th>
                                <th>@lang('labels.backend.reports.fields.course')</th>
                                <th>@lang('labels.backend.reports.fields.students')</th>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="table-responsive">
                        <table id="myBundleTable" class="table table-bordered table-striped ">
                            <thead>
                            <tr>
                                <th>@lang('labels.general.sr_no')</th>
                                <th>@lang('labels.backend.reports.fields.bundle')</th>
                                <th>@lang('labels.backend.reports.fields.students')</th>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@push('after-scripts')
    <script>

        $(document).ready(function () {
            var course_route = '{{route('admin.reports.get_course_data')}}';
            var bundle_route = '{{route('admin.reports.get_bundle_data')}}';

            $('#myCourseTable').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lfBrtip<"actions">',
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
                ajax: course_route,
                columns: [

                    {data: "DT_RowIndex", name: 'DT_RowIndex', width:'8%'},
                    {data: "course", name: 'course'},
                    {data: "students", name: 'students'},
                ],


                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
            });


            $('#myBundleTable').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lfBrtip<"actions">',
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
                ajax: bundle_route,
                columns: [

                    {data: "DT_RowIndex", name: 'DT_RowIndex', width:'8%'},
                    {data: "bundle", name: 'bundle'},
                    {data: "students", name: 'students'},
                ],


                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
            });

        });

    </script>

@endpush