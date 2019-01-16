@inject('request', 'Illuminate\Http\Request')
@extends('backend.layouts.app')

@section('content')
    <div class="d-inline-block w-100">
        <h3 class="page-title float-left">@lang('labels.backend.questions.title')</h3>
        @can('question_create')
            <div class="float-right">
                <a href="{{ route('admin.questions.create') }}"
                   class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

            </div>
        @endcan
    </div>


    <div class="card">
        <div class="card-body table-responsive">
            <div class="d-block">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{ route('admin.questions.index') }}"
                                                    style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a>
                    </li>
                    |
                    <li class="list-inline-item"><a href="{{ route('admin.questions.index') }}?show_deleted=1"
                                                    style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a>
                    </li>
                </ul>
            </div>
            <table class="table table-bordered table-striped {{ count($questions) > 0 ? 'datatable' : '' }} @can('question_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                <tr>
                    @can('question_delete')
                        @if ( request('show_deleted') != 1 )
                            <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>@endif
                    @endcan

                    <th>@lang('labels.backend.questions.fields.question')</th>
                    <th>@lang('labels.backend.questions.fields.question_image')</th>
                    <th>@lang('labels.backend.questions.fields.score')</th>
                    @if( request('show_deleted') == 1 )
                        <th>@lang('strings.backend.general.actions')</th>
                    @else
                            <th>@lang('strings.backend.general.actions')</th>
                    @endif
                </tr>
                </thead>

                <tbody>
                @if (count($questions) > 0)
                    @foreach ($questions as $question)
                        <tr data-entry-id="{{ $question->id }}">
                            @can('question_delete')
                                @if ( request('show_deleted') != 1 )
                                    <td></td>@endif
                            @endcan

                            <td>{!! $question->question !!}</td>
                            <td>@if($question->question_image)<a
                                        href="{{ asset('storage/uploads/' . $question->question_image) }}" target="_blank"><img
                                            src="{{ asset('storage/uploads/' . $question->question_image) }}" height="50px" /></a>@endif
                            </td>
                            <td>{{ $question->score }}</td>
                            @if( request('show_deleted') == 1 )
                                <td>

                                    <a data-method="delete" data-trans-button-cancel="Cancel"
                                       data-trans-button-confirm="Restore" data-trans-title="Are you sure?"
                                       class="btn btn-xs  btn-success" style="cursor:pointer;"
                                       onclick="$(this).find('form').submit();">
                                        {{trans('strings.backend.general.app_restore')}}
                                        <form action="{{route('admin.questions.restore',['lesson'=> $question->id ])}}"
                                              method="POST" name="delete_item" style="display:none">
                                            @csrf
                                        </form>
                                    </a>


                                    <a data-method="delete" data-trans-button-cancel="Cancel"
                                       data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                       class="btn btn-xs btn-danger" style="cursor:pointer;"
                                       onclick="$(this).find('form').submit();">
                                        {{trans('strings.backend.general.app_permadel')}}
                                        <form action="{{route('admin.questions.perma_del',['question'=>$question->id])}}"
                                              method="POST" name="delete_item" style="display:none">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                    </a>
                                </td>
                            @else
                                <td>
                                    @can('question_view')
                                        <a href="{{ route('admin.questions.show',[$question->id]) }}"
                                           class="btn btn-xs btn-primary"><i class="icon-eye"></i></a>
                                    @endcan
                                    @can('question_edit')
                                        <a href="{{ route('admin.questions.edit',[$question->id]) }}"
                                           class="btn btn-xs btn-info"><i class="icon-pencil"></i></a>
                                    @endcan
                                    @can('question_delete')

                                            <a data-method="delete" data-trans-button-cancel="Cancel"
                                               data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
                                               class="btn btn-xs btn-danger" style="cursor:pointer;"
                                               onclick="$(this).find('form').submit();">
                                                <i class="fa fa-trash"
                                                   data-toggle="tooltip"
                                                   data-placement="top" title=""
                                                   data-original-title="Delete"></i>
                                                <form action="{{route('admin.questions.destroy',['question'=>$question->id])}}"
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
                        <td colspan="7">@lang('strings.backend.general.app_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('question_delete')
                @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.questions.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection