@extends('backend.layouts.app')

@section('content')

    {!! Form::model($course, ['method' => 'PUT', 'route' => ['admin.courses.update', $course->id], 'files' => true,]) !!}

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">@lang('labels.backend.courses.edit')</h3>
            <div class="float-right">
                <a href="{{ route('admin.courses.index') }}"
                   class="btn btn-success">@lang('labels.backend.courses.view')</a>
            </div>
        </div>

        <div class="card-body">

            @if (Auth::user()->isAdmin())
                <div class="row">
                    <div class="col-12 form-group">
                        {!! Form::label('teachers', trans('labels.backend.courses.fields.teachers'), ['class' => 'control-label']) !!}
                        {!! Form::select('teachers[]', $teachers, old('teachers') ? old('teachers') : $course->teachers->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12 col-lg-6 form-group">
                    {!! Form::label('title', trans('labels.backend.courses.fields.title').' *', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                </div>
                <div class="col-12 col-lg-6 form-group">
                    {!! Form::label('slug', trans('labels.backend.courses.fields.slug'), ['class' => 'control-label']) !!}
                    {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>

            </div>

            <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('description',trans('labels.backend.courses.fields.description'), ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 form-group">
                    {!! Form::label('price', trans('labels.backend.courses.fields.price'), ['class' => 'control-label']) !!}
                    {!! Form::text('price', old('price'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
                <div class="col-12 col-lg-4 form-group">

                    {!! Form::label('course_image', trans('labels.backend.courses.fields.course_image'), ['class' => 'control-label']) !!}
                    {!! Form::file('course_image', ['class' => 'form-control']) !!}
                    {!! Form::hidden('course_image_max_size', 8) !!}
                    {!! Form::hidden('course_image_max_width', 4000) !!}
                    {!! Form::hidden('course_image_max_height', 4000) !!}
                    @if ($course->course_image)
                        <a href="{{ asset('uploads/'.$course->course_image) }}"  target="_blank"><img
                                    src="{{ asset('uploads/thumb/'.$course->course_image) }}" class="mt-1"></a>
                    @endif
                </div>
                <div class="col-12 col-lg-4 form-group">
                    {!! Form::label('start_date', trans('labels.backend.courses.fields.start_date'), ['class' => 'control-label']) !!}
                    {!! Form::text('start_date', old('start_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('start_date'))
                        <p class="help-block">
                            {{ $errors->first('start_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <div class="checkbox">

                    {!! Form::hidden('published', 0) !!}
                    {!! Form::checkbox('published', 1, old('published'), []) !!}
                    {!! Form::label('published', trans('labels.backend.courses.fields.published'), ['class' => 'checkbox control-label font-weight-bold']) !!}
                    </div>

                </div>
                <div class="col-12  text-center form-group">
                    {!! Form::submit(trans('strings.backend.general.app_update'), ['class' => 'btn btn-danger']) !!}

                </div>

            </div>

        </div>
    </div>

    {!! Form::close() !!}
@stop

@push('after-scripts')
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@endpush