@extends('backend.layouts.app')


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left">@lang('labels.backend.hero_slider.title')</h3>
                <div class="float-right">
                    <a href="{{ route('admin.slider.create') }}"
                       class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

                </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="myTable"
                               class="table table-bordered table-striped ">
                            <thead>
                            <tr>
                                <th>@lang('labels.general.sr_no')</th>
                                <th>@lang('labels.backend.hero_slider.fields.name')</th>
                                <th>@lang('labels.backend.hero_slider.fields.bg_image')</th>
                                <th>@lang('labels.backend.hero_slider.fields.sequence')</th>
                                <th>@lang('labels.backend.hero_slider.fields.status')</th>
                                @if( request('show_deleted') == 1 )
                                    <th>&nbsp; @lang('strings.backend.general.actions')</th>
                                @else
                                    <th>&nbsp; @lang('strings.backend.general.actions')</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($slides as $key=>$slide)
                                    <tr>
                                        <td>
                                           {{ $key++ }}
                                        </td>
                                        <td>
                                            {{$slide->name}}
                                        </td>
                                        <td>
                                            <img src="{{asset('storage/uploads/'.$slide->bg_image)}}" href="50px">
                                        </td>
                                        <td>
                                           {{ $slide->sequence }}
                                        </td>
                                        <td>
                                            @if($slide->status == 1)
                                                @lang('labels.backend.hero_slider.on')
                                            @else
                                                @lang('labels.backend.hero_slider.off')
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    <script>

        $(document).ready(function () {

            $('#myTable').DataTable({
                processing: true,
                serverSide: false,
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

                columnDefs: [
                    {"width": "10%", "targets": 0},
                    {"width": "15%", "targets": 4},
                    {"className": "text-center", "targets": [0]}
                ],

            });
        });

    </script>

@endpush