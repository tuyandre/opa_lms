@extends('backend.layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">@lang('labels.backend.questions_options.title')</h3>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('labels.backend.questions_options.fields.question')</th>
                            <td>{{ $questions_option->question->question or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.questions_options.fields.option_text')</th>
                            <td>{!! $questions_option->option_text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.questions_options.fields.correct')</th>
                            <td>{{ Form::checkbox("correct", 1, $questions_option->correct == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.questions_options.index') }}" class="btn btn-default border">@lang('strings.backend.general.app_back_to_list')</a>
        </div>
    </div>
@stop