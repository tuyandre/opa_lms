@extends('backend.layouts.app')
@section('title', __('labels.backend.live_lesson_slots.title').' | '.app_name())

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">@lang('labels.backend.stripe.plan.title')</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.name')</th>
                            <td>{{ $plan->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.interval')</th>
                            <td class="text-capitalize">{{ $plan->interval }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.currency')</th>
                            <td>{{ $plan->currency }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.amount')</th>
                            <td>{{ $plan->amount }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.course')</th>
                            <td>{{ $plan->course }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.bundle')</th>
                            <td>{{ $plan->bundle }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.quantity')</th>
                            <td>{!! $plan->quantity !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.stripe.plan.fields.trial_period_days')</th>
                            <td>{!! $plan->trial_period_days !!}</td>
                        </tr>


                    </table>
                </div>
            </div><!-- Nav tabs -->


            <a href="{{ route('admin.stripe.plans.index') }}"
               class="btn btn-default border">@lang('strings.backend.general.app_back_to_list')</a>
        </div>
    </div>
@stop
