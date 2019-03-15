@extends('backend.layouts.app')

@section('content')
    {{ html()->form('POST', route('admin.social-settings'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.social_settings.management') }}
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr/>

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.settings.social_settings.facebook.label'))->class('col-md-2 form-control-label')->for('services.facebook.active') }}
                        <div class="col-md-10">
                            <div class="checkbox">
                                {{ html()->label(
                                        html()->checkbox('services__facebook__active', config('services.facebook.active') ? true : false,1)
                                              ->class('switch-input')->value(1)
                                        . '<span class="switch-label"></span><span class="switch-handle"></span>')

                                    ->class('switch switch-sm switch-3d switch-primary')
                                }}
                            </div>
                            <small><i> Enable / disable facebook login for website</i></small>
                            <div class="switch-content @if(config('services.facebook.active') == 0 || config('services.facebook.active') == false) d-none @endif">
                                <br>
                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.facebook.client_id'))->class('col-md-2 form-control-label')->for('servicesfacebook.client_id') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__facebook__client_id')
                                             ->class('form-control')
                                             ->value(config('services.facebook.client_id'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.facebook.client_secret'))->class('col-md-2 form-control-label')->for('services.facebook.client_secret') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__facebook__client_secret')
                                             ->class('form-control')
                                             ->value(config('services.facebook.client_secret'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.facebook.redirect'))->class('col-md-2 form-control-label')->for('services.facebook.redirect') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__facebook__redirect')
                                             ->class('form-control')
                                             ->attribute('disabled')
                                             ->value(config('services.facebook.redirect'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->
                            </div>
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.settings.social_settings.google.label'))->class('col-md-2 form-control-label')->for('services.google.active') }}
                        <div class="col-md-10">
                            <div class="checkbox">
                                {{ html()->label(
                                        html()->checkbox('services__google__active', config('services.google.active') ? true : false,1)
                                              ->class('switch-input')->value(1)
                                        . '<span class="switch-label"></span><span class="switch-handle"></span>')

                                    ->class('switch switch-sm switch-3d switch-primary')
                                }}
                            </div>
                            <small><i> Enable / disable Google login for website</i></small>
                            <div class="switch-content @if(config('services.google.active') == 0 || config('services.google.active') == false) d-none @endif">
                                <br>
                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.google.client_id'))->class('col-md-2 form-control-label')->for('services.google.client_id') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__google__client_id')
                                             ->class('form-control')
                                             ->value(config('services.google.client_id'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.google.client_secret'))->class('col-md-2 form-control-label')->for('services.google.client_secret') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__google__client_secret')
                                             ->class('form-control')
                                             ->value(config('services.google.client_secret'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.google.redirect'))->class('col-md-2 form-control-label')->for('services.google.redirect') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__google__redirect')
                                             ->class('form-control')
                                             ->attribute('disabled')
                                             ->value(config('services.google.redirect'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->
                            </div>
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.settings.social_settings.twitter.label'))->class('col-md-2 form-control-label')->for('services.twitter.active') }}
                        <div class="col-md-10">
                            <div class="checkbox">
                                {{ html()->label(
                                        html()->checkbox('services__twitter__active', config('services.twitter.active') ? true : false,1)
                                              ->class('switch-input')->value(1)
                                        . '<span class="switch-label"></span><span class="switch-handle"></span>')

                                    ->class('switch switch-sm switch-3d switch-primary')
                                }}
                            </div>
                            <small><i> Enable / disable twitter login for website</i></small>
                            <div class="switch-content @if(config('services.twitter.active') == 0 || config('services.twitter.active') == false) d-none @endif">
                                <br>
                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.twitter.client_id'))->class('col-md-2 form-control-label')->for('services.twitter.client_id') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__twitter__client_id')
                                             ->class('form-control')
                                             ->value(config('services.twitter.client_id'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.twitter.client_secret'))->class('col-md-2 form-control-label')->for('services.twitter.client_secret') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__twitter__client_secret')
                                             ->class('form-control')
                                             ->value(config('services.twitter.client_secret'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label(__('validation.attributes.backend.settings.social_settings.twitter.redirect'))->class('col-md-2 form-control-label')->for('services.twitter.redirect') }}
                                    <div class="col-md-6 col-xs-12">
                                        {{ html()->text('services__twitter__redirect')
                                             ->class('form-control')
                                             ->attribute('disabled')
                                             ->value(config('services.twitter.redirect'))
                                             }}
                                    </div><!--col-->
                                </div><!--form-group-->
                            </div>
                        </div><!--col-->
                    </div><!--form-group-->

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.linkedin.label'))->class('col-md-2 form-control-label')->for('services.linkedin.active') }}--}}
                        {{--<div class="col-md-10">--}}
                            {{--<div class="checkbox">--}}
                                {{--{{ html()->label(--}}
                                        {{--html()->checkbox('services__linkedin__active', config('services.linkedin.active') ? true : false,1)--}}
                                              {{--->class('switch-input')->value(1)--}}
                                        {{--. '<span class="switch-label"></span><span class="switch-handle"></span>')--}}

                                    {{--->class('switch switch-sm switch-3d switch-primary')--}}
                                {{--}}--}}
                            {{--</div>--}}
                            {{--<small><i> Enable / disable linkedin login for website</i></small>--}}
                            {{--<div class="switch-content @if(config('services.linkedin.active') == 0 || config('services.linkedin.active') == false) d-none @endif">--}}
                                {{--<br>--}}
                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.linkedin.client_id'))->class('col-md-2 form-control-label')->for('services.linkedin.client_id') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__linkedin__client_id')--}}
                                             {{--->class('form-control')--}}
                                             {{--->value(config('services.linkedin.client_id'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}

                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.linkedin.client_secret'))->class('col-md-2 form-control-label')->for('services.linkedin.client_secret') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__linkedin__client_secret')--}}
                                             {{--->class('form-control')--}}
                                             {{--->value(config('services.linkedin.client_secret'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}

                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.linkedin.redirect'))->class('col-md-2 form-control-label')->for('services.linkedin.redirect') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__linkedin__redirect')--}}
                                             {{--->class('form-control')--}}
                                             {{--->attribute('disabled')--}}
                                             {{--->value(config('services.linkedin.redirect'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div>--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.github.label'))->class('col-md-2 form-control-label')->for('services.github.active') }}--}}
                        {{--<div class="col-md-10">--}}
                            {{--<div class="checkbox">--}}
                                {{--{{ html()->label(--}}
                                        {{--html()->checkbox('services__github__active', config('services.github.active') ? true : false,1)--}}
                                              {{--->class('switch-input')->value(1)--}}
                                        {{--. '<span class="switch-label"></span><span class="switch-handle"></span>')--}}

                                    {{--->class('switch switch-sm switch-3d switch-primary')--}}
                                {{--}}--}}
                            {{--</div>--}}
                            {{--<small><i> Enable / disable github login for website</i></small>--}}
                            {{--<div class="switch-content @if(config('services.github.active') == 0 || config('services.github.active') == false) d-none @endif">--}}
                                {{--<br>--}}
                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.github.client_id'))->class('col-md-2 form-control-label')->for('services.github.client_id') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__github__client_id')--}}
                                             {{--->class('form-control')--}}
                                             {{--->value(config('services.github.client_id'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}

                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.github.client_secret'))->class('col-md-2 form-control-label')->for('services.github.client_secret') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__github__client_secret')--}}
                                             {{--->class('form-control')--}}
                                             {{--->value(config('services.github.client_secret'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}

                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.github.redirect'))->class('col-md-2 form-control-label')->for('services.github.redirect') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__github__redirect')--}}
                                             {{--->class('form-control')--}}
                                             {{--->attribute('disabled')--}}
                                             {{--->value(config('services.github.redirect'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div>--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.bitbucket.label'))->class('col-md-2 form-control-label')->for('services.bitbucket.active') }}--}}
                        {{--<div class="col-md-10">--}}
                            {{--<div class="checkbox">--}}
                                {{--{{ html()->label(--}}
                                        {{--html()->checkbox('services__bitbucket__active', config('services.bitbucket.active') ? true : false,1)--}}
                                              {{--->class('switch-input')->value(1)--}}
                                        {{--. '<span class="switch-label"></span><span class="switch-handle"></span>')--}}
                                    {{--->class('switch switch-sm switch-3d switch-primary')--}}
                                {{--}}--}}
                            {{--</div>--}}
                            {{--<small><i> Enable / disable bitbucket login for website</i></small>--}}
                            {{--<div class="switch-content @if(config('services.bitbucket.active') == 0 || config('services.bitbucket.active') == false) d-none @endif">--}}
                                {{--<br>--}}
                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.bitbucket.client_id'))->class('col-md-2 form-control-label')->for('services.bitbucket.client_id') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__bitbucket__client_id')--}}
                                             {{--->class('form-control')--}}
                                             {{--->value(config('services.bitbucket.client_id'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}

                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.bitbucket.client_secret'))->class('col-md-2 form-control-label')->for('services.bitbucket.client_secret') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__bitbucket__client_secret')--}}
                                             {{--->class('form-control')--}}
                                             {{--->value(config('services.bitbucket.client_secret'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}

                                {{--<div class="form-group row">--}}
                                    {{--{{ html()->label(__('validation.attributes.backend.settings.social_settings.bitbucket.redirect'))->class('col-md-2 form-control-label')->for('services.bitbucket.redirect') }}--}}
                                    {{--<div class="col-md-6 col-xs-12">--}}
                                        {{--{{ html()->text('services__bitbucket__redirect')--}}
                                             {{--->class('form-control')--}}
                                             {{--->attribute('disabled')--}}
                                             {{--->value(config('services.bitbucket.redirect'))--}}
                                             {{--}}--}}
                                    {{--</div><!--col-->--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div>--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.social-settings'), __('buttons.general.cancel')) }}
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
            $(document).on('click', '.switch-input', function (e) {
//              e.preventDefault();
              var content = $(this).parents('.checkbox').siblings('.switch-content');
                if (content.hasClass('d-none')) {
                    $(this).attr('checked', 'checked');
                    content.find('input').attr('required', true);
                    content.removeClass('d-none');
                } else {
                    content.addClass('d-none');
                    content.find('input').attr('required', false);
                }
            })
        });
    </script>
@endpush
