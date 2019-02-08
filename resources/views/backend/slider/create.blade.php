@extends('backend.layouts.app')

@push('after-styles')
    <style>
        .form-control-label {
            line-height: 35px;
        }

    </style>
    <link rel="stylesheet" type="text/css"
          href="{{asset('plugins/jqueryui-datetimepicker/jquery.datetimepicker.css')}}">
@endpush
@section('content')
    {{ html()->form('POST', route('admin.slider.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left">@lang('labels.backend.hero_slider.create')</h3>
            <div class="float-right">
                <a href="{{ route('admin.slider.index') }}"
                   class="btn btn-success">@lang('labels.backend.hero_slider.view')</a>

            </div>
        </div>
        <div class="card-body">

            <div class="row form-group">
                {{ html()->label(__('labels.backend.hero_slider.fields.name'))->class('col-md-2 form-control-label')->for('first_name') }}

                <div class="col-md-10">
                    {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('labels.backend.hero_slider.fields.name'))
                        ->attribute('maxlength', 191)
                    ->autofocus()
                    }}
                </div><!--col-->
            </div>
            <div class="row form-group">
                {{ html()->label(__('labels.backend.hero_slider.fields.bg_image'))->class('col-md-2 form-control-label')->for('image') }}

                <div class="col-md-10">
                    {!! Form::file('image', ['class' => 'form-control d-inline-block', 'placeholder' => '']) !!}
                    <p class="help-text mb-0 font-italic">{!!  __('labels.backend.hero_slider.note')!!}</p>
                </div>
            </div>
            <div class="row form-group">
                {{ html()->label(__('labels.backend.hero_slider.fields.hero_text'))->class('col-md-2 form-control-label')->for('hero_text') }}

                <div class="col-md-10">
                    {{ html()->text('hero_text')
                        ->class('form-control')
                        ->placeholder(__('labels.backend.hero_slider.fields.hero_text'))
                        }}
                </div>
            </div>
            <div class="row form-group">
                {{ html()->label(__('labels.backend.hero_slider.fields.sub_text'))->class('col-md-2 form-control-label')->for('sub_text') }}
                <div class="col-md-10">
                    {{ html()->text('sub_text')
                        ->class('form-control')
                        ->placeholder(__('labels.backend.hero_slider.fields.sub_text'))
                         }}
                </div><!--col-->
            </div>
            <div class="row form-group">
                {{ html()->label(__('labels.backend.hero_slider.fields.widget.title'))->class('col-md-2 form-control-label')->for('sub_text') }}
                <div class="col-md-10">
                    {!! Form::select('widget', [""=>trans('labels.backend.hero_slider.fields.widget.select_widget'),1=>trans('labels.backend.hero_slider.fields.widget.search_bar'),2=>trans('labels.backend.hero_slider.fields.widget.countdown_timer')],  (request('widget')) ? request('widget') : old('widget'), ['class' => 'form-control ', 'id'=>'widget']) !!}

                    <div class="widget-container mt-2 d-none">
                        {{ html()->text('timer')
                           ->class('form-control')
                           ->placeholder('form-control')
                         ->id('timer')
                       }}
                    </div>
                </div><!--col-->
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-4">
                    {{ form_cancel(route('admin.teachers.index'), __('buttons.general.cancel')) }}
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div>
            </div><!--col-->
        </div>
    </div>
    {{ html()->form()->close() }}
@endsection

@push('after-scripts')
    <script src="{{asset('plugins/jqueryui-datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>
    <script>

        $(document).ready(function () {
            $(".js-example-placeholder-single").select2({
                placeholder: "{{trans('labels.backend.hero_slider.fields.widget.select_widget')}}",
            });

            $('#timer').datetimepicker({
               mask:true
            });

            $(document).on('change', '#widget', function () {
                if ($(this).val() == 2) {
                    $('.widget-container').removeClass('d-none');
                } else {
                    $('.widget-container').addClass('d-none');
                }
            })


        })
    </script>
@endpush
