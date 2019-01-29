@extends('backend.layouts.app')


@section('content')
    {{ html()->form('POST', route('admin.general-settings'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.general_settings.management') }}
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr/>

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.settings.general_settings.app_name'))->class('col-md-2 form-control-label')->for('app_name') }}

                        <div class="col-md-10">
                            {{ html()->text('app__name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.settings.general_settings.app_name'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->value(config('app.name'))
                                ->autofocus()
                                }}
                        </div><!--col-->
                    </div><!--form-group-->
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.settings.general_settings.theme_layout'))->class('col-md-2 form-control-label')->for('app_name') }}

                        <div class="col-md-10">
                            <select class="form-control" id="theme_layout" name="theme_layout">
                                <option selected value="1">Layout 1</option>
                                <option value="2">Layout 2</option>
                                <option value="3">Layout 3</option>
                                <option value="4">Layout 4</option>
                            </select>
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.general-settings'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    {{ html()->form()->close() }}
@endsection


@push('after-scripts')
    <script>
        $(document).ready(function () {

            @if(config('theme_layout') != "")
            $('#theme_layout').find('option').removeAttr('selected')
            $('#theme_layout').find('option[value="{{config('theme_layout')}}"]').attr('selected', 'selected')
            @endif

            $(document).on('click', '#captcha_status', function (e) {
//              e.preventDefault();
                if ($('#captcha-credentials').hasClass('d-none')) {
                    $('#captcha_status').attr('checked', 'checked');
                    $('#captcha-credentials').find('input').attr('required', true);
                    $('#captcha-credentials').removeClass('d-none');
                } else {
                    $('#captcha-credentials').addClass('d-none');
                    $('#captcha-credentials').find('input').attr('required', false);
                }
            })
        });
    </script>
@endpush
