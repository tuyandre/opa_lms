<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $invoice->name }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        h1, h2, h3, h4, p, span, div {
            font-family: DejaVu Sans;
        }
    </style>
</head>
<body>
<div style="display: block;clear: both">
    <div style="float: left; width:250pt;">
        <img class="img-rounded" height="50px"
             src="{{ asset('storage/logos/'.config('logo_b_image')) }}">
    </div>
    <div style="float: right;width: 180pt">
        <h5>Date: <b> {{ $invoice->date->formatLocalized('%A %d %B %Y') }}</b></h5>
        @if ($invoice->number)
            <h5>Invoice #: <b> {{ $invoice->number }}</b></h5>
        @endif
    </div>
</div>
<div style="display: inline-block;clear: both;width: 100%;">
    <hr>

    <div style="width:300pt; float:left;">
        <h4>Business Details:</h4>
        <div class="panel panel-default">
            <div class="panel-body">
                @if(config('contact_data') != "")
                    @php
                        $contact_data = contact_data(config('contact_data'));
                    @endphp
                    <h4 style="font-weight: bold">{{env('APP_NAME')}}</h4>

                    @if($contact_data["primary_address"]["status"] == 1)
                        <span>Address: </span>{{$contact_data["primary_address"]["value"]}} <br>
                    @endif

                    @if($contact_data["primary_phone"]["status"] == 1)
                        <span>Contact No.: </span>{{$contact_data["primary_phone"]["value"]}}<br>
                    @endif

                    @if($contact_data["primary_email"]["status"] == 1)
                        <span> Email: </span>{{$contact_data["primary_email"]["value"]}}<br>
                    @endif
                @else
                    <i>No business details</i><br/>
                @endif
            </div>
        </div>
    </div>
    <div style="float: right; width:200pt;height: auto;display: inline-block">
        <h4>Customer Details:</h4>
        <div class="panel panel-default" style="padding: 15px;padding-top: 0px">
            {!! $invoice->customer_details->count() == 0 ? '<i>No customer details</i><br />' : '' !!}
            <h4 style="font-weight: bold;"> {{ $invoice->customer_details->get('name') }}</h4>
            <span>Email :</span> {{ $invoice->customer_details->get('email') }}
        </div>
    </div>
</div>

<div style="clear:both;display: block">
    <h4>Items:</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Item Name</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($invoice->items as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->get('id') }}</td>
                <td>{{ $item->get('name') }}</td>
                <td>{{ $item->get('totalPrice') }} {{ $invoice->formatCurrency()->symbol }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="clear:both; position:relative;">

        <div style="float: right;">
            <h4>Total: <b>{{ $invoice->totalPriceFormatted() }} {{ $invoice->formatCurrency()->symbol }}</b></h4>

        </div>

    </div>
</div>

@if ($invoice->footnote)
    <br/><br/>
    <div class="well">
        {{ $invoice->footnote }}
    </div>
@endif
</body>
</html>
