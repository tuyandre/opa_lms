@extends('frontend.layouts.app')
@push('after-styles')
    <style>
        .disabled {
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.5;
        }
        div.has-error{
            color: darkred;
        }
    </style>
@endpush
@section('content')
    <div class="row">
        <div class="col-12 ">
            <h3 class="border-bottom mb-4 pb-2">Checkout</h3>
            @if(session()->has('failure'))
                <div class="alert alert-dismissable alert-danger fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('failure')}}
                </div>
            @endif
        </div>


        <div class="col-lg-7 col-12">
            <h5>Total : ${{Cart::session(auth()->user()->id)->getTotal()}}</h5>

            <div id="accordion">
                <div class="card mb-3 ">
                    <div class="card-header">
                        <div class="radio">
                            <label><input data-toggle="collapse" href="#collapseOne" type="radio" name="paymentMethod" value="1" checked> Credit Card / Debit Card</label>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body w-75 mx-auto">
                            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                            <form accept-charset="UTF-8" action="{{route('cart.stripe.payment')}}" class="require-validation" data-cc-on-file="false"
                                  data-stripe-publishable-key="{{env('STRIPE_KEY')}}" id="payment-form"
                                  method="POST">
                                <div style="margin:0;padding:0;display:inline">
                                    <input name="utf8" type="hidden"
                                           value="✓"/>
                                    @csrf
                                </div>
                                <div class='form-row'>
                                    <div class='col-12 form-group required'>
                                        <label class='control-label'>Name on Card</label>
                                        <input class='form-control' size='4' type='text'>
                                    </div>
                                </div>
                                <div class='form-row'>
                                    <div class='col-12 form-group required'>
                                        <label class='control-label'>Card Number</label>
                                        <input autocomplete='off' class='form-control card-number' size='20'
                                               type='text'>
                                    </div>
                                </div>
                                <div class='form-row'>
                                    <div class='col-4 form-group cvc required'>
                                        <label class='control-label'>CVV</label>
                                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311'
                                               size='4' type='text'>
                                    </div>
                                    <div class='col-4 form-group expiration required'>
                                        <label class='control-label'>Expiration</label>
                                        <input class='form-control card-expiry-month' placeholder='MM' size='2'
                                               type='text'>
                                    </div>
                                    <div class='col-4 form-group expiration required'>
                                        <label class='control-label'> </label>
                                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                               type='text'>
                                    </div>
                                </div>

                                <div class='form-row'>
                                    <div class='col-md-12 form-group'>
                                        <button class='form-control btn btn-primary submit-button' type='submit'>Pay »
                                        </button>
                                    </div>
                                </div>
                                <div class='form-row'>
                                    <div class='col-md-12 error form-group d-none'>
                                        <div class='alert-danger alert'>
                                            Please correct the errors and try again.
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="radio">
                            <label class="">
                                <input type="radio" data-toggle="collapse" href="#collapseTwo" class="collapsed" name="paymentMethod" value="2"> Paypal</label>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body disabled">
                            <p>Dummy data</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="radio">
                            <label class="">
                                <input type="radio" data-toggle="collapse" href="#collapseThree" class="collapsed" name="paymentMethod" value="3"> Offline
                                Payment</label>
                        </div>

                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body disabled">
                            <p>In this payment method our executives will contact you and give you instructions
                                regarding
                                payment and course purchase.</p>
                            <form method="post" action="">

                            </form>
                            <button class="btn btn-primary">Request Assistance</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-12">
            <h5>Your Items ({{count($courses)}})</h5>
            @foreach($courses as $course)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            {{--@if($course->course_image != "")--}}
                            {{--<div class="col-3">--}}
                            {{--<img src="{{asset('storage/uploads/'.$course->course_image)}}" width="100%">--}}
                            {{--</div>--}}
                            {{--@endif--}}
                            <div class="col">
                                <h5>{{$course->title}} <span class="float-right ">
                                <span>${{$course->price}}</span> &nbsp;&nbsp;

                            </span></h5>
                                <p class="mb-0">{{ str_limit($course->description,50) }}</p>
                                <p class="mb-0 font-weight-bold">By :
                                    @foreach($course->teachers as $teacher)
                                        <a href="#"> {{$teacher->name}} </a></p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </div>

@endsection

@push('after-scripts')
    <script type="text/javascript" src="{{asset('js/stripe-form.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', 'input[type="radio"]:checked', function () {
                console.log('here')
                $('#accordion .card-body').addClass('disabled')
                $(this).closest('.card').find('.card-body').removeClass('disabled')
            })
        })
    </script>
@endpush