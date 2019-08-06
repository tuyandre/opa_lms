@extends('backend.layouts.app')
@section('title', __('labels.backend.sitemap.title').' | '.app_name())

@push('after-styles')
    <style>
        .form-control-label {
            line-height: 35px;
        }
    </style>
@endpush

@section('content')
    {{ html()->form('POST', route('admin.sitemap.generate'))->id('general-settings-form')->class('form-horizontal')->acceptsFiles()->open() }}

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-5">
                    <h3 class="page-title d-inline">@lang('labels.backend.sitemap.title')</h3>

                </div>
            </div>
        </div>

        <div class="card-body" id="newsletter">
            <h5>@lang('labels.backend.sitemap.sitemap_note')</h5>
            <a class="mb-2 d-block" target="_blank"
               href="{{asset('sitemap-'.str_slug(config('app.name')).'/sitemap-index.xml')}}"><h6>Click here to see
                    Sitemap Index File</h6></a>

            <div class="form-group row">
                {{ html()->label(__('labels.backend.sitemap.records_per_file'))->class('col-md-2 form-control-label')->for('short_description') }}
                <div class="col-md-10">
                    {{ html()->input('number','chunk')
                  ->id('list_id')
                  ->class('form-control')
                  ->value(config('sitemap.chunk'))
                  ->placeholder('Ex. 100 ')
                  }}
                </div>
            </div>
            <div class="form-group text-center row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success ">{{__('buttons.general.crud.generate')}}</button>
                </div><!--col-->
            </div><!--row-->
        </div>

    </div>
    {{ html()->form()->close() }}

@endsection

@push('after-scripts')
@endpush