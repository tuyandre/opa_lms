@extends('backend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/css/colors/switch.css')}}">
    <style>
        .color-list li {
            float: left;
            width: 8%;
        }

        .options {
            line-height: 35px;
        }

        .color-list li a {
            font-size: 20px;
        }

        .color-list li a.active {
            border: 4px solid grey;
        }

        .color-default {
            font-size: 18px !important;
            background: #101010;
            border-radius: 100%;
        }

        .form-control-label {
            line-height: 35px;
        }

        .switch.switch-3d {
            margin-bottom: 0px;
            vertical-align: middle;

        }

        .color-default i {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .preview {
            background-color: #dcd8d8;
            background-image: url(https://www.transparenttextures.com/patterns/carbon-fibre-v2.png);
        }
    </style>
@endpush
@section('content')
    {{ html()->form('POST', route('admin.general-settings'))->id('general-settings-form')->class('form-horizontal')->acceptsFiles()->open() }}


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">

                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a data-toggle="tab" class="nav-link active " href="#general">General </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#logos">
                                {{ __('labels.backend.general_settings.logos.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#layout">
                                {{ __('labels.backend.general_settings.layout.title') }}
                            </a>
                        </li>
                    </ul>
                    <h4 class="card-title mb-0">
                        {{--{{ __('labels.backend.general_settings.management') }}--}}
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="tab-content">
                <!---General Tab--->
                <div id="general" class="tab-pane container active">
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.app_name'))->class('col-md-2 form-control-label')->for('app_name') }}

                                <div class="col-md-10">
                                    {{ html()->text('app__name')
                                        ->class('form-control')
                                        ->placeholder(__('labels.backend.general_settings.app_name'))
                                        ->attribute('maxlength', 191)
                                        
                                        ->value(config('app.name'))
                                        ->autofocus()
                                        }}

                                </div><!--col-->
                            </div><!--form-group-->

                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.font_color'))->class('col-md-2 form-control-label')->for('font_color') }}

                                <div class="col-md-10">
                                    <ul class="d-inline-block list-inline w-100 mb-0 color-list list-style-none">
                                        {{--<li>--}}
                                        {{--<a data-color="default" class="color-default text-decoration-none text-dark"--}}
                                        {{--href="#!"><i class="fas fa-circle"></i>--}}
                                        {{--</a>--}}
                                        {{--<span style="font-size: 10px">(Default)</span>--}}
                                        {{--</li>--}}
                                        <li>
                                            <a data-color="default" class="color-default"
                                               href="#!"><i
                                                        class="fas fa-circle"></i></a>
                                            <p style="font-size: 10px">(Default)</p>
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
                                {{ html()->label(__('labels.backend.general_settings.counter'))->class('col-md-2 form-control-label')->for('counter') }}

                                <div class="col-md-10">
                                    <select class="form-control" id="counter" name="counter">
                                        <option selected value="1">Static</option>
                                        <option value="2">Database / Real</option>
                                    </select>
                                    <span class="help-text font-italic">{!!  __('labels.backend.general_settings.counter_note') !!}</span>
                                    <div class="counter-container" id="counter-container">

                                        <input class="form-control my-2" type="text" id="total_students" required
                                               name="total_students"
                                               placeholder="{{__('labels.backend.general_settings.total_students')}}">

                                        <input type="text" required id="total_courses" class="form-control mb-2"
                                               name="total_courses"
                                               placeholder="{{__('labels.backend.general_settings.total_courses')}}">

                                        <input type="text" required class="form-control mb-2" id="total_teachers"
                                               name="total_teachers"
                                               placeholder="{{__('labels.backend.general_settings.total_teachers')}}">
                                    </div>

                                </div><!--col-->
                            </div><!--form-group-->

                        </div>
                    </div>
                </div>

                <!---Logos Tab--->
                <div id="logos" class="tab-pane container fade">
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <div class="row form-group">
                                {{ html()->label(__('labels.backend.logo.logo_b'))->class('col-md-2 form-control-label')->for('logo_b_image') }}

                                <div class="col-md-10 ">
                                    {!! Form::file('logo_b_image', ['class' => 'form-control d-inline-block', 'placeholder' => '','id' => 'logo_b_image', 'accept' => 'image/jpeg,image/gif,image/png', 'data-preview'=>'#logo_b_image_preview']) !!}
                                    <p class="help-text mb-0 font-italic">{!!  __('labels.backend.logo.logo_b_note')!!}</p>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div id="logo_b_image_preview" class="d-inline-block p-3 preview">
                                        <img height="50px" src="{{asset('storage/logos/'.config('logo_b_image'))}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                {{ html()->label(__('labels.backend.logo.logo_w'))->class('col-md-2 form-control-label')->for('logo_w_image') }}

                                <div class="col-md-10">
                                    {!! Form::file('logo_w_image', ['class' => 'form-control d-inline-block', 'placeholder' => '', 'data-preview'=>'#logo_w_image_preview', 'id' => 'logo_w_image', 'accept' => 'image/jpeg,image/gif,image/png']) !!}
                                    <p class="help-text mb-0 font-italic">{!!  __('labels.backend.logo.logo_w_note')!!}</p>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div id="logo_w_image_preview" class="d-inline-block p-3 preview">
                                        <img height="50px" src="{{asset('storage/logos/'.config('logo_w_image'))}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                {{ html()->label(__('labels.backend.logo.logo_white'))->class('col-md-2 form-control-label')->for('logo_white_image') }}

                                <div class="col-md-10">
                                    {!! Form::file('logo_white_image', ['class' => 'form-control d-inline-block', 'placeholder' => '', 'data-preview'=>'#logo_white_image_preview', 'id' => 'logo_w_image', 'accept' => 'image/jpeg,image/gif,image/png']) !!}
                                    <p class="help-text mb-0 font-italic">{!!  __('labels.backend.logo.logo_white_note')!!}</p>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div id="logo_white_image_preview" class="d-inline-block p-3 preview">
                                        <img height="50px" src="{{asset('storage/logos/'.config('logo_white_image'))}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                {{ html()->label(__('labels.backend.logo.logo_popup'))->class('col-md-2 form-control-label')->for('logo_white_image') }}

                                <div class="col-md-10">
                                    {!! Form::file('logo_popup', ['class' => 'form-control d-inline-block', 'placeholder' => '', 'data-preview'=>'#logo_popup_preview', 'id' => 'logo_w_image', 'accept' => 'image/jpeg,image/gif,image/png']) !!}
                                    <p class="help-text mb-0 font-italic">{!!  __('labels.backend.logo.logo_popup_note')!!}</p>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div id="logo_popup_preview" class="d-inline-block p-3 preview">
                                        <img height="50px" src="{{asset('storage/logos/'.config('logo_popup'))}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                {{ html()->label(__('labels.backend.logo.favicon'))->class('col-md-2 form-control-label')->for('favicon_image') }}

                                <div class="col-md-10">
                                    {!! Form::file('favicon_image', ['class' => 'form-control d-inline-block', 'placeholder' => '', 'data-preview'=>'#favicon_image_preview', 'accept' => 'image/jpeg,image/gif,image/png']) !!}
                                    <p class="help-text mb-0 font-italic">{!!  __('labels.backend.logo.favicon_note')!!}</p>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div id="favicon_image_preview" class="d-inline-block p-3 preview">
                                        <img height="50px" src="{{asset('storage/logos/'.config('favicon_image'))}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---Layout Tab--->
                <div id="layout" class="tab-pane container fade">
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <input type="hidden" id="section_data" name="layout_{{config('theme_layout')}}">
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
                                {{ html()->label(__('labels.backend.general_settings.theme_layout'))->class('col-md-2 form-control-label')->for('theme_layout') }}

                                <div class="col-md-10">
                                    <select class="form-control" id="theme_layout" name="theme_layout">
                                        <option selected value="1">Layout 1</option>
                                        <option value="2">Layout 2</option>
                                        <option value="3">Layout 3</option>
                                        <option value="4">Layout 4</option>
                                    </select>
                                    <span class="help-text font-italic">{{__('labels.backend.general_settings.layout_note')}}</span>
                                    <p id="sections_note" class="d-none font-weight-bold">Once you click on update, you
                                        will see list of sections to on/off.</p>

                                </div><!--col-->
                            </div><!--form-group-->
                            <div class="form-group row" id="sections">
                                <div class="col-md-10 offset-2">
                                    <div class="row">
                                        @foreach($sections as $key=>$item)
                                            <p style="line-height: 35px" class="col-md-4 col-12">
                                                {{ html()->label(html()->checkbox('')->id($key)
                                                   ->checked(($item->status == 1) ? true : false)->class('switch-input')->value(($item->status == 1) ? 1 : 0)

                                             . '<span class="switch-label"></span><span class="switch-handle"></span>')
                                         ->class('switch switch-sm switch-3d switch-primary')
                                     }} <span class="ml-2 title">{{$item->title}}</span>
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer clearfix">
                    <div class="row">
                        <div class="col">
                            {{ form_cancel(route('admin.general-settings'), __('buttons.general.cancel')) }}
                        </div><!--col-->
                        <div class="col text-right">
                            {{ form_submit(__('buttons.general.crud.update'))->id('submit') }}
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-footer-->

            </div><!--card-->
        </div>
    </div>
    {{ html()->form()->close() }}
@endsection


@push('after-scripts')
    <script src="{{asset('plugins/bootstrap-iconpicker/js/bootstrap-iconpicker.bundle.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            //========= Initialisation for Iconpicker ===========//
            $('#icon').iconpicker({
                cols: 10,
                icon: 'fab fa-facebook-f',
                iconset: 'fontawesome5',
                labelHeader: '{0} of {1} pages',
                labelFooter: '{0} - {1} of {2} icons',
                placement: 'bottom', // Only in button tag
                rows: 5,
                search: true,
                searchText: 'Search',
                selectedClass: 'btn-success',
                unselectedClass: ''
            });


            //========== Preset theme layout ==============//
            @if(config('theme_layout') != "")
            $('#theme_layout').find('option').removeAttr('selected')
            $('#theme_layout').find('option[value="{{config('theme_layout')}}"]').attr('selected', 'selected');
            @endif


            //============ Preset font color ===============//
            @if(config('font_color') != "")
            $('.color-list').find('li a').removeClass('active');
            $('.color-list').find('li a[data-color="{{config('font_color')}}"]').addClass('active');
            $('#font_color').val("{{config('font_color')}}");
            @endif


            //========= Preset Layout type =================//
            @if(config('layout_type') != "")
            $('#layout_type').find('option').removeAttr('selected')
            $('#layout_type').find('option[value="{{config('layout_type')}}"]').attr('selected', 'selected');
            @endif


            //=========== Preset Counter data =============//
            @if(config('counter') != "")
            @if((int)config('counter') == 1)
            $('.counter-container').removeClass('d-none')
            $('#total_students').val("{{config('total_students')}}");
            $('#total_teachers').val("{{config('total_teachers')}}");
            $('#total_courses').val("{{config('total_courses')}}");
            @else
            $('#counter-container').empty();
            @endif

            @if(config('counter') != "")
            $('.counter-container').removeClass('d-none');
            @endif

            $('#counter').find('option').removeAttr('selected')
            $('#counter').find('option[value="{{config('counter')}}"]').attr('selected', 'selected');
            @endif


            //============= Font Color selection =================//
            $(document).on('click', '.color-list li', function () {
                $(this).siblings('li').find('a').removeClass('active')
                $(this).find('a').addClass('active');
                $('#font_color').val($(this).find('a').data('color'));
            });


            //============== Captcha status =============//
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
            });


            //===== Counter value on change ==========//
            $(document).on('change', '#counter', function () {
                if ($(this).val() == 1) {
                    $('.counter-container').empty().removeClass('d-none');
                    var html = "<input class='form-control my-2' type='text' id='total_students' name='total_students' placeholder='" + "{{__('labels.backend.general_settings.total_students')}}" + "'><input type='text' id='total_courses' class='form-control mb-2' name='total_courses' placeholder='" + "{{__('labels.backend.general_settings.total_courses')}}" + "'><input type='text' class='form-control mb-2' id='total_teachers' name='total_teachers' placeholder='" + "{{__('labels.backend.general_settings.total_teachers')}}" + "'>";

                    $('.counter-container').append(html);
                } else {
                    $('.counter-container').addClass('d-none');
                }
            });


            //========== Preview image function on upload =============//
            var previewImage = function (input, block) {
                var fileTypes = ['jpg', 'jpeg', 'png', 'gif'];
                var extension = input.files[0].name.split('.').pop().toLowerCase();
                var isSuccess = fileTypes.indexOf(extension) > -1;

                if (isSuccess) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $(block).find('img').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                } else {
                    alert('Please input valid file!');
                }

            };
            $(document).on('change', 'input[type="file"]', function () {
                previewImage(this, $(this).data('preview'));
            });


            //======= Saving settings for All tabs =================//
            $(document).on('submit', '#general-settings-form', function (e) {
//                e.preventDefault();

                //======Saving Layout sections details=====//
                var sections = $('#sections').find('input[type="checkbox"]');
                var title, name;
                var sections_data = {};
                $(sections).each(function () {
                    if ($(this).is(':checked')) {
                        status = 1
                    } else {
                        status = 0
                    }
                    name = $(this).attr('id');
                    title = $(this).parent('label').siblings('.title').html();
                    sections_data[name] = {title: title, status: status}
                });
                $('#section_data').val(JSON.stringify(sections_data));

            });


            //==========Hiding sections on Theme layout option changed ==========//
            $(document).on('change', '#theme_layout', function () {
                var theme_layout = "{{config('theme_layout')}}";
                if ($(this).val() != theme_layout) {
                    $('#sections').addClass('d-none');
                    $('#sections_note').removeClass('d-none')
                } else {
                    $('#sections').removeClass('d-none');
                    $('#sections_note').addClass('d-none')
                }
            });


        });


    </script>
@endpush
