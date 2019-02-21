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
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#contact">
                                {{ __('labels.backend.general_settings.contact.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" class="nav-link" href="#footer">
                                {{ __('labels.backend.general_settings.footer.title') }}
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

                <!---Contact Tab--->
                <div id="contact" class="tab-pane container fade">
                    <div class="mt-4 mb-4">
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.general_settings.contact.short_text'))->class('col-md-2 form-control-label')->for('short_text') }}

                            <div class="col-md-8">
                                {{ html()->text('')
                                    ->id('short_text')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.short_text'))

                                    ->value(config('contact.short_text'))
                                    }}

                            </div>
                            <input type="hidden" name="contact_data" id="contact_data">
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.general_settings.contact.primary_address'))->class('col-md-2 form-control-label')->for('primary_address') }}

                            <div class="col-md-8">
                                {{ html()->text('')
                                ->id('primary_address')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.primary_address'))
                                    
                                    ->value(config('contact.primary_address'))
                                    }}

                            </div>
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>

                        </div>
                        <div class="form-group row">

                            {{ html()->label(__('labels.backend.general_settings.contact.secondary_address'))->class('col-md-2 form-control-label')->for('secondary_address') }}

                            <div class="col-md-8">
                                {{ html()->text('')
                                ->id('secondary_address')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.secondary_address'))
                                    ->value(config('contact.secondary_address'))
                                    }}

                            </div>
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>
                        </div>
                        <div class="form-group row">

                            {{ html()->label(__('labels.backend.general_settings.contact.primary_phone'))->class('col-md-2 form-control-label')->for('primary_phone') }}

                            <div class="col-md-8">
                                {{ html()->text()
                                ->id('primary_phone')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.primary_phone'))
                                    
                                    ->value(config('contact.primary_phone'))
                                    }}

                            </div>
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.general_settings.contact.secondary_phone'))->class('col-md-2 form-control-label')->for('secondary_phone') }}

                            <div class="col-md-8">
                                {{ html()->text()
                                ->id('secondary_phone')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.secondary_phone'))
                                    
                                    ->value(config('contact.secondary_phone'))
                                    }}
                            </div>
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>
                        </div>
                        <div class="form-group row">

                            {{ html()->label(__('labels.backend.general_settings.contact.primary_email'))->class('col-md-2 form-control-label')->for('primary_email') }}

                            <div class="col-md-8">
                                {{ html()->email('')
                                ->id('primary_email')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.primary_email'))
                                    
                                    ->value(config('contact.primary_email'))
                                    }}

                            </div>
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.general_settings.contact.secondary_email'))->class('col-md-2 form-control-label')->for('secondary_email') }}

                            <div class="col-md-8">
                                {{ html()->email('')
                                ->id('secondary_email')
                                    ->class('form-control')
                                    ->placeholder(__('labels.backend.general_settings.contact.secondary_email'))
                                    
                                    ->value(config('contact.secondary_email'))
                                    }}
                            </div>
                            <div class="col-md-2">
                                <p style="line-height: 35px">
                                    <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 border-right">
                                <div class="row">
                                    {{ html()->label(__('labels.backend.general_settings.contact.location_on_map'))->class('col-md-12 form-control-label')->for('location_on_map') }}

                                    <div class="col-md-12">
                                        {{ html()->textarea('')
                                        ->id('location_on_map')
                                            ->class('form-control')
                                            ->attributes(['rows'=>9])
                                            ->placeholder(__('labels.backend.general_settings.contact.location_on_map'))

                                            ->value(config('contact.location_on_map'))
                                            }}

                                    </div>
                                    <div class="col-md-12">
                                        <p style="line-height: 35px">
                                            <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                {!! __('labels.backend.general_settings.contact.map_note') !!}
                            </div>

                        </div>

                    </div>
                </div><!--card-body-->

                <div id="footer" class="tab-pane container fade">
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <input type="hidden" id="footer_data" name="footer_data">
                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.footer.short_description'))->class('col-md-2 form-control-label')->for('short_description') }}
                                <div class="col-md-8">
                                    {{ html()->textarea()
                                        ->id('short_description')
                                        ->class('form-control')
                                        ->placeholder(__('labels.backend.general_settings.footer.short_description'))
                                        }}
                                </div>
                                <div class="col-md-2">
                                    <p style="line-height: 35px">
                                        <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input status')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                </div>
                            </div>
                            @for($i=1; $i<=3; $i++)
                                <div class="form-group row">
                                    {{ html()->label(__('labels.backend.general_settings.footer.section_'.$i))->class('col-md-2 form-control-label')->for('section'.$i) }}
                                    <div class="col-md-8 options">
                                        <div class="row">
                                            <div class="col-4">
                                                {{ html()->label(html()->radio('section'.$i)
                                          ->checked()->class('switch-input section'.$i)->value(1)->checked()
                                    . '<span class="switch-label"></span><span class="switch-handle"></span>')
                                ->class('switch switch-sm switch-3d switch-success')}}
                                                <span class="ml-2 title">{{__('labels.backend.general_settings.footer.popular_categories')}}</span>
                                            </div>

                                            <div class="col-4">
                                                {{ html()->label(html()->radio('section'.$i)
                                          ->class('switch-input section'.$i)->value(2)
                                     . '<span class="switch-label"></span><span class="switch-handle"></span>')
                                 ->class('switch switch-sm switch-3d switch-success')}}
                                                <span class="ml-2 title">{{__('labels.backend.general_settings.footer.featured_courses')}}</span>
                                            </div>

                                            <div class="col-4">
                                                {{ html()->label(html()->radio('section'.$i)
                                        ->class('switch-input section'.$i)->value(3)
                                   . '<span class="switch-label"></span><span class="switch-handle"></span>')
                               ->class('switch switch-sm switch-3d switch-success')}}
                                                <span class="ml-2 title">{{__('labels.backend.general_settings.footer.trending_courses')}}</span>

                                            </div>

                                            <div class="col-4">
                                                {{ html()->label(html()->radio('section'.$i)
                                          ->class('switch-input section'.$i)->value(4)
                                    . '<span class="switch-label"></span><span class="switch-handle"></span>')
                                ->class('switch switch-sm switch-3d switch-success')}}
                                                <span class="ml-2 title">{{__('labels.backend.general_settings.footer.popular_courses')}}</span>
                                            </div>

                                            <div class="col-4">
                                                {{ html()->label(html()->radio('section'.$i)
                                          ->class('switch-input custom_links section'.$i)->value(5)
                                    . '<span class="switch-label"></span><span class="switch-handle"></span>')
                                ->class('switch switch-sm switch-3d switch-success')}}
                                                <span class="ml-2 title">{{__('labels.backend.general_settings.footer.custom_links')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="line-height: 35px">
                                            <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input status')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                    </div>
                                    <div class="col-10 offset-2 button-container">
                                    </div>
                                </div>
                            @endfor

                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.footer.social_links'))->class('col-md-2 form-control-label')->for('social_links') }}

                                <div class="col-md-4">
                                    {{ html()->text('')
                                        ->id('social_link_url')
                                        ->class('form-control')
                                        ->placeholder(__('labels.backend.general_settings.footer.link_url'))
                                        }}
                                    <span class="error text-danger"></span>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn  btn-block btn-default border" id="icon" name="icon"></button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button"
                                            class="btn btn-block btn-light add-social-link border">{{ trans('strings.backend.general.app_add')}}
                                        <i class="fa fa-plus"></i></button>
                                </div>
                                <div class="col-md-2">
                                    <p style="line-height: 35px">
                                        <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input status')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                </div>
                                <div class="col-md-10 offset-2">
                                    <p class="font-italic">{!!  __('labels.backend.general_settings.footer.social_links_note') !!}</p>
                                </div>
                                <div class="col-md-8 offset-2 social-links-container">

                                </div>
                            </div>

                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.footer.newsletter_form'))->class('col-md-2 form-control-label')->for('newsletter_form') }}

                                <div class="col-md-2">
                                    <p style="line-height: 35px">
                                        <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input newsletter-form status')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.footer.bottom_footer'))->class('col-md-2 form-control-label')->for('newsletter_form') }}

                                <div class="col-md-10">
                                    <p style="line-height: 35px">
                                        <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input bottom-footer status')->value(1)->checked()
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')

                          }}
                                        <span class="ml-3 font-italic">{{__('labels.backend.general_settings.footer.bottom_footer_note')}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.footer.copyright_text'))->class('col-md-2 form-control-label')->for('copyright_text') }}

                                <div class="col-md-8">
                                    {{ html()->text('')
                                        ->id('copyright_text')
                                        ->class('form-control')
                                        ->placeholder(__('labels.backend.general_settings.footer.copyright_text'))
                                        }}

                                </div>
                                <div class="col-md-2">
                                    <p style="line-height: 35px">
                                        <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input status')->value(1)
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ html()->label(__('labels.backend.general_settings.footer.footer_links'))->class('col-md-2 form-control-label')->for('footer_links') }}

                                <div class="col-md-4">
                                    {{ html()->text('')
                                        ->id('footer_link_url')
                                        ->class('form-control')
                                        ->placeholder(__('labels.backend.general_settings.footer.link_url'))
                                        }}
                                    <span class="error text-danger"></span>

                                </div>
                                <div class="col-md-2">
                                    {{ html()->text('')
                                        ->id('footer_link_label')
                                        ->class('form-control')
                                        ->placeholder(__('labels.backend.general_settings.footer.link_label'))
                                        }}
                                </div>
                                <div class="col-md-2">
                                    <button type="button"
                                            class="btn btn-block btn-light add-footer-link border">{{ trans('strings.backend.general.app_add')}}
                                        <i class="fa fa-plus"></i></button>
                                </div>
                                <div class="col-md-2">
                                    <p style="line-height: 35px">
                                        <span class="mr-2">{{__('labels.backend.general_settings.contact.show')}}</span> {{ html()->label(html()->checkbox('')
                                        ->checked()->class('switch-input status')->value(1)
                                  . '<span class="switch-label"></span><span class="switch-handle"></span>')
                              ->class('switch switch-sm switch-3d switch-primary')
                          }} </p>
                                </div>
                                <div class="col-md-8 offset-2 footer-links-container">

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


            //=========Preset contact data ==========//
            @if(config('contact_data'))
            var contact_data = "{{config('contact_data')}}";
            contact_data = JSON.parse(contact_data.replace(/&quot;/g, '"'));

            $(contact_data).each(function (key, element) {
                if (element.name == 'location_on_map') {
                    $('#' + element.name).html(element.value);

                } else {
                    $('#' + element.name).val(element.value)
                }

                if (element.status == 1) {
                    $('#' + element.name).parents('.form-group').find('input[type="checkbox"]').attr('checked', true);
                } else {
                    $('#' + element.name).parents('.form-group').find('input[type="checkbox"]').attr('checked', false);
                }
            })
            @endif


            //========== Preset Footer Data ===========//
            @if(config('footer_data'))
            var footer_data = "{{config('footer_data')}}";
            footer_data = JSON.parse(footer_data.replace(/&quot;/g, '"'));
            var footer = $('#footer');
            var status;

            //== Preset Short description
            footer.find('#short_description').val(footer_data.short_description.text);
            status = (footer_data.short_description.status === 1);
            footer.find('#short_description').parents('.form-group').find('.status').attr('checked',status);

            //== Preset Section inputs data
            footer.find('.section1[value="'+footer_data.section1.type+'"]').attr('checked',true);
            status = (footer_data.section1.status === 1);
            footer.find('.section1[value="'+footer_data.section1.type+'"]').parents('.form-group').find('.status').attr('checked',status);
            if(footer_data.section1.type == 5){
               presetCustomLinks( footer.find('.section1[value="'+footer_data.section1.type+'"]'),footer_data.section1.links)
            }

            footer.find('.section2[value="'+footer_data.section2.type+'"]').attr('checked',true);
            status = (footer_data.section2.status === 1);
            footer.find('.section2[value="'+footer_data.section2.type+'"]').parents('.form-group').find('.status').attr('checked',status);
            if(footer_data.section2.type == 5){
                presetCustomLinks( footer.find('.section2[value="'+footer_data.section2.type+'"]'),footer_data.section2.links)
            }

            footer.find('.section3[value="'+footer_data.section3.type+'"]').attr('checked',true);
            status = (footer_data.section3.status === 1);
            footer.find('.section3[value="'+footer_data.section3.type+'"]').parents('.form-group').find('.status').attr('checked',status);
            if(footer_data.section3.type == 5){
                presetCustomLinks( footer.find('.section3[value="'+footer_data.section3.type+'"]'),footer_data.section3.links)
            }


            @endif

            //== Preset Social links data
            $(footer_data.social_links.links).each(function (key,link_data) {
                var html = "<div class='alert border alert-light alert-dismissible social-link-wrapper fade show'> " +
                "<button type='button' class='close' data-dismiss='alert'>&times;</button> " +
                "<strong><i class='" + link_data.icon + " mr-2'></i></strong><span data-icon='" + link_data.icon + "' class='mb-0 social-link-data'> " + link_data.link + "</span></div>";
            $('.social-links-container').append(html);
            });
            status = (footer_data.social_links.status === 1);
            footer.find('.social-links-container').parents('.form-group').find('.status').attr('checked',status);

            //== Preset newsletter form checkbox
            status = (footer_data.newsletter_form.status === 1);
            $('.newsletter-form').attr('checked',status);

            //=== Preset Bottom Footer status
            status = (footer_data.bottom_footer.status === 1);
            $('.bottom-footer').attr('checked',status);


            //== Preset Copyright text
            status = (footer_data.copyright_text.status === 1);
            footer.find('#copyright_text').val(footer_data.copyright_text.text)
            footer.find('#copyright_text').parents('.form-group').find('.status').attr('checked',status);

            //== Bottom footer links
            status = (footer_data.bottom_footer_links.status === 1);
            footer.find('#footer_link_label').parents('.form-group').find('.status').attr('checked',status);
            $(footer_data.bottom_footer_links.links).each(function (key,link_data) {
                var html = "<div class='alert border alert-light footer-link-wrapper alert-dismissible fade show'> " +
                    "<button type='button' class='close' data-dismiss='alert'>&times;</button> " +
                    "<strong class='footer-link-label'>" + link_data.label + "</strong> <a target='_blank' href='" + link_data.link + "'>" + link_data.link + "</a></div>";
                $('.footer-links-container').append(html)
            });









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

                //============Saving Contact Details=====//
                var dataJson = {};
                var inputs = $('#contact').find('input[type="text"],textarea,input[type="email"]');
                var data = [];
                var val, name, status
                $(inputs).each(function (key, value) {
                    name = $(value).attr('id')
                    if (name == 'location_on_map') {
                        val = $(value).val().replace(/"/g, "'")
                    } else {
                        val = $(value).val()
                    }
                    status = ($(value).parents('.form-group').find('input[type="checkbox"]:checked').val()) ? 1 : 0;
                    data.push({name: name, value: val, status: status});
                });
                dataJson = JSON.stringify(data);
                $('#contact_data').val(dataJson);


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


                //====== Saving Footer section details =========//
                var footer = $('#footer');
                var footer_data = {};
                var option, type, option_title, option_status, i, b, links, label, link;

                var short_description = footer.find('#short_description').val();
                var description_status = (footer.find('#short_description').parents('.form-group').find('.status').is(':checked')) ? 1 : 0;

                footer_data['short_description'] = {text: short_description, status: description_status};

                //== Saving data for Footer links ==//
                for (i = 0; i <= $('.options').length; i++) {
                    if ($('.options')[i]) {
                        option = $('.options')[i];
                        type = $(option).find('input[type="radio"]:checked').val();
                        option_title = $(option).find('input[type="radio"]:checked').attr('name')
                        option_status = $(option).parents('.form-group').find('.status').is(':checked') ? 1 : 0;
                        if (type != 5) {
                            footer_data[option_title] = {type: type, status: option_status};
                        } else {
                            var link_list = [];
                            links = $(option).parents('.form-group').find('.button-wrapper');
                            $(links).each(function () {
                                label = $(this).find('.button_label').val()
                                link = $(this).find('.button_link').val()
                                link_list.push({label: label, link: link})
                            })
                            footer_data[option_title] = {
                                type: type,
                                links: link_list,
                                status: option_status
                            }
                        }
                    }
                }


                //=== Saving Social links for footer ===//
                var social_links = $('.social-links-container').find('.social-link-wrapper');
                var icon, link, link_list = [];
                $(social_links).each(function () {
                    icon = $(this).find('.social-link-data').data('icon');
                    link = $(this).find('.social-link-data').text().trim();
                    link_list.push({icon: icon, link: link})

                });
                status = (footer.find('.social-links-container').parents('.form-group').find('.status').is(':checked')) ? 1 : 0;
                footer_data['social_links'] = {status:status,links:link_list};

                //==== Newsletter form status ====//
                if($('.newsletter-form').is(':checked')){
                    footer_data['newsletter_form'] = {status : 1}
                }else{
                    footer_data['newsletter_form'] = {status : 0}
                }

                //=== Bottom Footer status ====//
                if($('.bottom-footer').is(':checked')){
                    footer_data['bottom_footer'] = {status : 1}
                }else{
                    footer_data['bottom_footer'] = {status : 0}
                }

                //=== Copyright Text ===//
                var copy_text = $('#copyright_text').val();
                var status_checkbox = $('#copyright_text').parents('.form-group').find('.status');
                if($(status_checkbox).is(':checked')){
                   status = 1;
                }else{
                    status = 0;
                }
                footer_data['copyright_text'] = {text:copy_text,status:status}

                //=== Bottom Footer links ===//
                var footer_links = $('.footer-links-container').find('.footer-link-wrapper');
                var label, link, link_list = [];
                $(footer_links).each(function () {
                    label = $(this).find('.footer-link-label').text().trim();
                    link = $(this).find('.footer-link-label').siblings('a').attr('href');
                    console.log(label+' and '+link)
                    link_list.push({label: label, link: link})
                });
                var status_checkbox = $('.footer-links-container').parents('.form-group').find('.status');
                if($(status_checkbox).is(':checked')){
                    status = 1;
                }else{
                    status = 0;
                }

                footer_data['bottom_footer_links'] = {status:status,links:link_list};
                $('#footer_data').val(JSON.stringify(footer_data))
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


            //====Checking checkbox inputs to show text input for Custom links in section====//
            $(document).on('click', '.options input', function () {
                var button_container = $(this).parents('.form-group').find('.button-container');

                if ($(this).is(':checked') && $(this).val() == 5) {
                    button_container.removeClass('d-none')
                    if ($(button_container).find('.button-wrapper').length == 0) {
                        var name = "{{__('labels.backend.general_settings.footer.link')}}";
                        var link_label = "{{__('labels.backend.general_settings.footer.link_label')}}";
                        var link_url = "{{__('labels.backend.general_settings.footer.link_url')}}";
                        var html = "<div class='button-wrapper'> <h6 class='mt-3'> " + name + " </h6>" +
                            "<div class='row'>" +
                            "<div class='col-lg-5'>" +
                            "<input type='text' required name=''  class='form-control button_link' placeholder='" + link_url + "'>" +
                            "</div>" +
                            "<div class='col-lg-5'>" +
                            "<input type='text' required name='' class='form-control button_label' placeholder='" + link_label + "'>" +
                            "</div>" +
                            "<div class='col-lg-2'><buttton class='remove btn-danger btn mr-2'><i class='fa fa-times'></i></buttton><buttton class='add btn btn-success  '><i class='fa fa-plus'></i></buttton></div>";

                        $(button_container).append(html);
                    }
                } else {
                    button_container.addClass('d-none');
                }

            })


            //==========Remove Custom links to Sections============//
            $(document).on('click', '.remove', function () {
                if($(this).parents('.form-group').find('.button-wrapper').length > 1){
                    if (confirm('Are you sure want to remove link?')) {
                        $(this).parents('.button-wrapper').remove();
                        $('#buttons').val($('.button-wrapper').length)
                    }
                }else{
                    alert('Minimum one link is required for this selection')
                }

            });


            //=========Add Custom links to Sections==============//
            $(document).on('click', '.add', function () {
                var button_container = $(this).parents('.form-group').find('.button-container');
                if ($(button_container).find('.button-wrapper').length <= 5) {
                    var name = "{{__('labels.backend.general_settings.footer.link')}}";
                    var link_label = "{{__('labels.backend.general_settings.footer.link_label')}}";
                    var link_url = "{{__('labels.backend.general_settings.footer.link_url')}}";
                    var html = "<div class='button-wrapper'> <h6 class='mt-3'> " + name + " </h6>" +
                        "<div class='row'>" +
                        "<div class='col-lg-5'>" +
                        "<input type='text' required name='' class='form-control button_link' placeholder='" + link_url + "'>" +
                        "</div>" +
                        "<div class='col-lg-5'>" +
                        "<input type='text' required name='' class='form-control button_label' placeholder='" + link_label + "'>" +
                        "</div>" +
                        "<div class='col-lg-2'><buttton class='remove btn-danger btn mr-2'><i class='fa fa-times'></i></buttton><buttton class='add btn btn-success  '><i class='fa fa-plus'></i></buttton></div>";
                    $(button_container).append(html);
                } else {
                    alert('Maximum limit of button exceeded!')
                }
            });


            //=========Adding social links====================//
            $(document).on('click', '.add-social-link', function () {
                if ($('#social_link_url').val() == "") {
                    $('#social_link_url').siblings('span').empty().html('Please input value')
                } else {
                    var icon = $('input[name="icon"]').val();
                    var url = $('#social_link_url').val();
                    $('#social_link_url').siblings('span').empty();
                    var html = "<div class='alert border alert-light alert-dismissible social-link-wrapper fade show'> " +
                        "<button type='button' class='close' data-dismiss='alert'>&times;</button> " +
                        "<strong><i class='" + icon + " mr-2'></i></strong><span data-icon='" + icon + "' class='mb-0 social-link-data'> " + url + "</span></div>";
                    $('.social-links-container').append(html);
                    $('#social_link_url').val('');
                }
            });


            //======== Add footer links ===========//
            $(document).on('click', '.add-footer-link', function () {
                if ($('#footer_link_url').val() == "" || $('#footer_link_label').val() == "") {
                    $('#footer_link_url').siblings('span').empty().html('Please input valid value')
                } else {
                    var label = $('#footer_link_label').val();
                    var url = $('#footer_link_url').val();
                    $('#footer_link_url').siblings('span').empty();
                    var html = "<div class='alert border alert-light footer-link-wrapper alert-dismissible fade show'> " +
                        "<button type='button' class='close' data-dismiss='alert'>&times;</button> " +
                        "<strong class='footer-link-label'>" + label + "</strong> <a target='_blank' href='" + url + "'>" + url + "</a></div>";
                    $('.footer-links-container').append(html)
                    $('#footer_link_url').val('');
                    $('#footer_link_label').val('');
                }
            });
        });

        function presetCustomLinks(element,data){
            var name = "{{__('labels.backend.general_settings.footer.link')}}";

            var button_container = $(element).parents('.form-group').find('.button-container');
            $(data).each(function (key,link_data) {
                var html = "<div class='button-wrapper'> <h6 class='mt-3'> " + name + " </h6>" +
                    "<div class='row'>" +
                    "<div class='col-lg-5'>" +
                    "<input type='text' required name=''  class='form-control button_link' value='" + link_data.link + "'>" +
                    "</div>" +
                    "<div class='col-lg-5'>" +
                    "<input type='text' required name='' class='form-control button_label' value='" + link_data.label + "'>" +
                    "</div>" +
                    "<div class='col-lg-2'><buttton class='remove btn-danger btn mr-2'><i class='fa fa-times'></i></buttton><buttton class='add btn btn-success  '><i class='fa fa-plus'></i></buttton></div>";

                $(button_container).append(html);
            });
        }

    </script>
@endpush
