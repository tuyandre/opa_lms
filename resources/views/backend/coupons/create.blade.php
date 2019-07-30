@extends('backend.layouts.app')
@section('title', __('labels.backend.coupons.title').' | '.app_name())

@push('after-styles')
    <style>
        .form-control-label {
            line-height: 35px;
        }
        .remove{
            float: right;
            color: red;
            font-size: 20px;
            cursor: pointer;
        }
        .error{
            color: red;
        }

    </style>

@endpush
@section('content')
    {{ html()->form('POST', route('admin.coupons.store'))->id('coupons-create')->class('form-horizontal')->acceptsFiles()->open() }}
    <div class="alert alert-danger d-none" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <div class="error-list">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="page-title d-inline">@lang('labels.backend.coupons.create')</h3>
            <div class="float-right">
                <a href="{{ route('admin.sliders.index') }}"
                   class="btn btn-success">@lang('labels.backend.coupons.view')</a>

            </div>
        </div>
        <div class="card-body">

            <div class="row form-group">
                {{ html()->label(__('labels.backend.coupons.fields.name'))->class('col-md-2 form-control-label')->for('first_name') }}

                <div class="col-md-10">
                    {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('labels.backend.coupons.fields.name'))
                    ->autofocus()
                    }}

                </div><!--col-->
            </div>

            <div class="row form-group">
                {{ html()->label(__('labels.backend.coupons.fields.code'))->class('col-md-2 form-control-label')->for('first_name') }}

                <div class="col-md-10">
                    {{ html()->text('code')
                        ->class('form-control')
                        ->placeholder('Ex: MyShopping50')
                    }}

                </div><!--col-->
            </div>

            <div class="row form-group">
                {{ html()->label(__('labels.backend.coupons.fields.type'))->class('col-md-2 form-control-label')->for('first_name') }}

                <div class="col-md-10">
                    {{ html()->select('type',[1=>__('labels.backend.coupons.discount_rate').' (in %)',2=>__('labels.backend.coupons.flat_rate')])
                        ->class('form-control')
                    }}

                </div><!--col-->
            </div>

            <div class="row form-group">
                {{ html()->label(__('labels.backend.coupons.fields.amount'))->class('col-md-2 form-control-label')->for('first_name') }}

                <div class="col-md-10">
                    {{ html()->input('number','amount')
                    ->placeholder(__('labels.backend.coupons.fields.amount'))
                        ->class('form-control')
                    }}

                </div><!--col-->
            </div>



            <div class="form-group row justify-content-center">
                <div class="col-4">
                    {{ form_cancel(route('admin.coupons.index'), __('buttons.general.cancel')) }}

                    <button class="btn btn-success pull-right" type="submit">{{__('buttons.general.crud.create')}}</button>
                </div>
            </div><!--col-->
        </div>
    </div>
    {{ html()->form()->close() }}
@endsection

@push('after-scripts')

@endpush
