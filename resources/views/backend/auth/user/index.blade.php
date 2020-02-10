@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.users.management') }}
                        <small class="text-muted">{{ __('labels.backend.access.users.active') }}</small>
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    @include('backend.auth.user.includes.header-buttons')
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>@lang('labels.general.sr_no')</th>
                                <th>@lang('labels.backend.access.users.table.first_name')</th>
                                <th>@lang('labels.backend.access.users.table.last_name')</th>
                                <th>@lang('labels.backend.access.users.table.email')</th>
                                <th>@lang('labels.backend.access.users.table.confirmed')</th>
                                <th>@lang('labels.backend.access.users.table.roles')</th>
                                <th>@lang('labels.backend.access.users.table.other_permissions')</th>
                                <th>@lang('labels.backend.access.users.table.social')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($users as $user)--}}
                            {{--<tr>--}}
                            {{--<td>{{ $user->last_name }}</td>--}}
                            {{--<td>{{ $user->first_name }}</td>--}}
                            {{--<td>{{ $user->email }}</td>--}}
                            {{--<td>{!! $user->confirmed_label !!}</td>--}}
                            {{--<td>{!! $user->roles_label !!}</td>--}}
                            {{--<td>{!! $user->permissions_label !!}</td>--}}
                            {{--<td>{!! $user->social_buttons !!}</td>--}}
                            {{--<td>{{ $user->updated_at->diffForHumans() }}</td>--}}
                            {{--<td>{!! $user->action_buttons !!}</td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                {{--<div class="col-7">--}}
                {{--<div class="float-left">--}}
                {{--{!! $users->total() !!} {{ trans_choice('labels.backend.access.users.table.total', $users->total()) }}--}}
                {{--</div>--}}
                {{--</div><!--col-->--}}

                {{--<div class="col-5">--}}
                {{--<div class="float-right">--}}
                {{--{!! $users->render() !!}--}}
                {{--</div>--}}
                {{--</div><!--col-->--}}
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection


@push('after-scripts')
    <script>

        $(document).ready(function () {
            var route = '{{route('admin.auth.user.getData')}}';

            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lfBrtip<"actions">',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },
                    'colvis'
                ],
                ajax: route,
                columns: [
                    {data: "DT_RowIndex", name: 'DT_RowIndex', "orderable": false, "searchable": false},
                    {data: "first_name", name: 'first_name'},
                    {data: "last_name", name: 'last_name'},
                    {data: "email", name: "email"},
                    {data: "confirmed_label", name: "confirmed_label"},
                    {data: "roles_label", name: "roles.name"},
                    {data: "permissions_label", name: "permissions.name"},
                    {data: "social_buttons", name: "social_accounts.provider","searchable": false},
                    {data: "last_updated", name: "last_updated"},
                    {data: "actions", name: "actions","searchable": false}
                ],


                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
                language: {
                    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/{{$locale_full_name}}.json",
                    buttons: {
                        colvis: '{{trans("datatable.colvis")}}',
                        pdf: '{{trans("datatable.pdf")}}',
                        csv: '{{trans("datatable.csv")}}',
                    }
                }
            });
        });

    </script>

@endpush
