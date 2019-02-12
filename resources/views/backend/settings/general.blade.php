@extends('backend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{asset('assets/css/colors/switch.css')}}">
    <style>
        .color-list li {
            float: left;
            width: 8%;
        }

        .color-list li a {
            font-size: 20px;
        }

        .color-list li a.active {
            border: 4px solid grey;
        }

        .color-default {
            font-size: 18px!important;
            background: #101010;
            border-radius: 100%;
        }
        .form-control-label{
            line-height: 35px;
        }

        .color-default i {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
@endpush
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
                        {{ html()->label(__('labels.backend.general_settings.app_name'))->class('col-md-2 form-control-label')->for('app_name') }}

                        <div class="col-md-10">
                            {{ html()->text('app__name')
                                ->class('form-control')
                                ->placeholder(__('labels.backend.general_settings.app_name'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->value(config('app.name'))
                                ->autofocus()
                                }}

                        </div><!--col-->
                    </div><!--form-group-->
                    
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.general_settings.theme_layout'))->class('col-md-2 form-control-label')->for('theme_layout') }}

                        <div class="col-md-10">
                            <select class="form-control" id="theme_layout" name="theme_layout">
                                <option selected value="1">Layout 1</option>
                                <option value="2">Layout 2</option>
                                <option value="3">Layout 3</option>
                                <option value="4">Layout 4</option>
                            </select>
                            <span class="help-text font-italic">{{__('labels.backend.general_settings.layout_note')}}</span>

                        </div><!--col-->
                    </div><!--form-group-->
                    
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.general_settings.font_color'))->class('col-md-2 form-control-label')->for('font_color') }}

                        <div class="col-md-10">
                            <ul class="d-inline-block list-inline w-100 mb-0 color-list list-style-none">
                                <li>
                                    <a data-color="default" class="color-default text-decoration-none text-dark"
                                       href="#!"><i class="fas fa-circle"></i>
                                    </a>
                                    <span style="font-size: 10px">(Default)</span>
                                </li>
                                <li>
                                    <a data-color="color-2" class="color-2"
                                       onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i
                                                class="fas fa-circle"></i></a>
                                </li>
                                <li>
                                    <a data-color="color-3" class="color-3"
                                       onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i
                                                class="fas fa-circle"></i></a>
                                </li>
                                <li>
                                    <a data-color="color-4" class="color-4"
                                       onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i
                                                class="fas fa-circle"></i></a>
                                </li>
                                <li>
                                    <a data-color="color-5" class="color-5"
                                       onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i
                                                class="fas fa-circle"></i></a>
                                </li>
                                <li>
                                    <a data-color="color-6" class="color-6"
                                       onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i
                                                class="fas fa-circle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-color="color-7" class="color-7"
                                       onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i
                                                class="fas fa-circle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-color="color-8" class="color-8"
                                       onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i
                                                class="fas fa-circle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-color="color-9" class="color-9"
                                       onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i
                                                class="fas fa-circle"></i>
                                    </a>
                                </li>
                            </ul>
                            <input type="hidden" name="font_color" id="font_color" value="default">
                            <span class="help-text font-italic">This will change frontend theme font colors</span>
                        </div><!--col-->
                    </div><!--form-group-->
                    
                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.general_settings.layout_type'))->class('col-md-2 form-control-label')->for('layout_type') }}

                        <div class="col-md-10">
                            <select class="form-control" id="layout_type" name="layout_type">
                                <option selected value="wide-layout">Wide</option>
                                <option value="box-layout">Box</option>
                            </select>
                            <span class="help-text font-italic">This will change frontend theme layout type</span>

                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.general_settings.counter'))->class('col-md-2 form-control-label')->for('counter') }}

                        <div class="col-md-10">
                            <select class="form-control" id="counter" name="layout_type">
                                <option selected value="1">Static</option>
                                <option value="2">Database / Real</option>
                            </select>
                            <span class="help-text font-italic">{!!  __('labels.backend.general_settings.counter_note') !!}</span>
                            <div class="counter-container">

                                <input class="form-control my-2" type="text" id="total_students" name="total_students" placeholder="{{__('labels.backend.general_settings.total_students')}}">

                                <input type="text" id="total_courses" class="form-control mb-2" name="total_courses" placeholder="{{__('labels.backend.general_settings.total_courses')}}">

                                <input type="text" class="form-control mb-2" id="total_teachers" name="total_teachers" placeholder="{{__('labels.backend.general_settings.total_teachers')}}">
                            </div>

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
            $('#theme_layout').find('option[value="{{config('theme_layout')}}"]').attr('selected', 'selected');
            @endif



            @if(config('font_color') != "")
            $('.color-list').find('li a').removeClass('active');
            $('.color-list').find('li a[data-color="{{config('font_color')}}"]').addClass('active');
            $('#font_color').val("{{config('font_color')}}");
            @endif

            @if(config('layout_type') != "")
            $('#layout_type').find('option').removeAttr('selected')
            $('#layout_type').find('option[value="{{config('layout_type')}}"]').attr('selected', 'selected');
            @endif


            $(document).on('click', '.color-list li', function () {
                $(this).siblings('li').find('a').removeClass('active')
                $(this).find('a').addClass('active');
                $('#font_color').val($(this).find('a').data('color'));
            });

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

            $(document).on('change','#counter',function () {
              if($(this).val() == 1) {
                  $('.counter-container').empty().removeClass('d-none');
                  var html = "<input class='form-control my-2' type='text' id='total_students' name='total_students' placeholder='"+"{{__('labels.backend.general_settings.total_students')}}"+"'><input type='text' id='total_courses' class='form-control mb-2' name='total_courses' placeholder='"+"{{__('labels.backend.general_settings.total_courses')}}"+"'><input type='text' class='form-control mb-2' id='total_teachers' name='total_teachers' placeholder='"+"{{__('labels.backend.general_settings.total_teachers')}}"+"'>";

                  $('.counter-container').append(html);
              }else{
                  $('.counter-container').addClass('d-none');
              }
            });

            @if(config('counter') != "")
                $('.counter-container').removeClass('d-none');
            @endif
        });
    </script>
@endpush
