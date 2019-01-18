@extends('backend.layouts.app')

@section('content')

    {!! Form::model($questions_option, ['method' => 'PUT', 'route' => ['admin.questions_options.update', $questions_option->id]]) !!}
    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left">@lang('labels.backend.questions_options.edit')</h3>
            <div class="float-right">
                <a href="{{ route('admin.questions_options.index') }}"
                   class="btn btn-success">@lang('labels.backend.questions_options.view')</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('question_id', 'Question', ['class' => 'control-label']) !!}
                    {!! Form::select('question_id', $questions, old('question_id'), ['class' => 'form-control select2']) !!}

                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('option_text', 'Option text*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('option_text', old('option_text'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}

                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
                    {!! Form::hidden('correct', 0) !!}
                    {!! Form::checkbox('correct', 1, old('correct'), []) !!}

                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('strings.backend.general.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

