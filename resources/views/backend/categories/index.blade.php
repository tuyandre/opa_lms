@extends('backend.layouts.app')

@section('title', 'Category Management')



@section('content')

    <div class="card">
        <div class="card-header">
            @if(isset($category))
            <h3 class="page-title float-left">@lang('labels.backend.categories.edit')</h3>
                <div class="float-right">
                    <a href="{{ route('admin.categories.index') }}"
                       class="btn btn-success">@lang('labels.backend.categories.view')</a>
                </div>
            @else
                <h3 class="page-title float-left">@lang('labels.backend.categories.create')</h3>
                <div class="float-right">
                    <a data-toggle="collapse" data-target="#createCat" href="#"
                       class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

                </div>
            @endif

        </div>
        <div class="card-body">
            <div class="row @if(!isset($category)) collapse @endif" id="createCat">
                <div class="col-12">
                    @if(isset($category))
                        {!! Form::model($category, ['method' => 'PUT', 'route' => ['admin.categories.update', $category->id], 'files' => true,]) !!}
                    @else
                        {!! Form::open(['method' => 'POST', 'route' => ['admin.categories.store'], 'files' => true,]) !!}
                    @endif

                    <div class="row">
                        <div class="col-lg-5 col-12 form-group mb-0">
                            {!! Form::label('title', trans('labels.backend.categories.fields.name').' *', ['class' => 'control-label']) !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Category Name', 'required' => false]) !!}

                        </div>

                        <div class="col-lg-5 col-12 form-group mb-0">

                            {!! Form::label('image',  trans('labels.backend.categories.fields.image'), ['class' => 'control-label d-block']) !!}
                            @if(isset($category) && ($category->image != null))
                                {!! Form::file('image', ['class' => 'form-control w-75 d-inline-block', 'placeholder' => '']) !!}
                                    <img class="d-inline-block" src="{{asset('storage/uploads/'.$category->image)}}" height="38px">
                            @else
                                {!! Form::file('image', ['class' => 'form-control d-inline-block', 'placeholder' => '']) !!}
                            @endif
                        </div>
                        <div class="col-lg-2 col-12 form-group d-flex mb-0 flex-column">

                            {!! Form::submit(trans('strings.backend.general.app_save'), ['class' => 'btn mt-auto  btn-danger']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                        <hr>


                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div class="d-block">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route('admin.categories.index') }}"
                                       style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">{{trans('labels.general.all')}}</a>
                                </li>
                                |
                                <li class="list-inline-item">
                                    <a href="{{ route('admin.categories.index') }}?show_deleted=1"
                                       style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">{{trans('labels.general.trash')}}</a>
                                </li>
                            </ul>
                        </div>


                        <table id="myTable"
                               class="table table-bordered table-striped @can('category_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                            <thead>
                            <tr>

                                @can('category_delete')
                                    @if ( request('show_deleted') != 1 )
                                        <th style="text-align:center;"><input type="checkbox" class="mass"
                                                                              id="select-all"/>
                                        </th>@endif
                                @endcan

                                <th>@lang('labels.general.sr_no')</th>
                                <th>@lang('labels.backend.categories.fields.name')</th>
                                <th>@lang('labels.backend.categories.fields.slug')</th>
                                <th>@lang('labels.backend.categories.fields.image')</th>
                                <th>@lang('labels.backend.categories.fields.courses')</th>
                                @if( request('show_deleted') == 1 )
                                    <th>&nbsp; @lang('strings.backend.general.actions')</th>
                                @else
                                    <th>&nbsp; @lang('strings.backend.general.actions')</th>
                                @endif
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
            var route = '{{route('admin.categories.get_data')}}';

            @if(request('show_deleted') == 1)
                route = '{{route('admin.categories.get_data',['show_deleted' => 1])}}';
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
                            return '<input type="checkbox" class="single" name="id[]" value="' + data.id + '" />';
                        }, "orderable": false, "searchable": false, "name": "id"
                    },
                        @endif
                    {
                        data: "DT_RowIndex", name: 'DT_RowIndex'
                    },
                    {data: "name", name: 'name'},
                    {data: "slug", name: 'slug'},
                    {data: "image", name: 'image'},
                    {data: "courses", name: "courses"},
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
            @can('category_index')
            @if(request('show_deleted') != 1)
            $('.actions').html('<a href="' + '{{ route('admin.categories.mass_destroy') }}' + '" class="btn btn-xs btn-danger js-delete-selected" style="margin-top:0.755em;margin-left: 20px;">Delete selected</a>');
            @endif
            @endcan
        });

    </script>

@endpush