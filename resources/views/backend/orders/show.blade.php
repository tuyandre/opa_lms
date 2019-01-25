@extends('backend.layouts.app')

@section('content')

    <div class="card">

        <div class="card-header">
            <h3 class="page-title mb-0">@lang('labels.backend.orders.title')</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('labels.backend.orders.fields.reference_no')</th>
                            <td>
                               {{$order->reference_no}}
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.orders.fields.items')</th>
                            <td>
                                @foreach($order->items as $key=>$item)
                                    @php $key++ @endphp
                                    <a class="text-decoration-none" target="_blank" href="{{route('admin.courses.show',$item->course_id)}}">{{$key.'. '.$item->course->title}}</a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.orders.fields.amount')</th>
                            <td>{{ $order->amount }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.orders.fields.amount')</th>
                            <td>{{ $order->amount }}</td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.orders.fields.payment_type.title')</th>
                            <td>

                                @if($order->status == 1)
                                    {{trans('labels.backend.orders.fields.payment_type.stripe') }}
                                @elseif($order->status == 2)
                                    {{trans('labels.backend.orders.fields.payment_type.paypal')}}
                                @else
                                    {{trans('labels.backend.orders.fields.payment_type.offline')}}
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <th>@lang('labels.backend.orders.fields.payment_status.title')</th>
                            <td>

                                @if($order->status == 0)
                                {{trans('labels.backend.orders.fields.payment_status.pending') }}
                                @elseif($order->status == 1)
                               {{trans('labels.backend.orders.fields.payment_status.completed')}}
                                @else
                                {{trans('labels.backend.orders.fields.payment_status.failed')}}
                                @endif

                            </td>
                        </tr>


                        <tr>
                            <th>@lang('labels.backend.orders.fields.date')</th>
                            <td>{{ $order->created_at->format('d M, Y | h:i A') }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <a href="{{ route('admin.orders.index') }}" class="btn btn-default border">@lang('strings.backend.general.app_back_to_list')</a>
        </div>
    </div>
@stop