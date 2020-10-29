@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', 'Subscribe -'.$plan->name.' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
    <script src='https://js.stripe.com/v3/' type='text/javascript'></script>
    <style>

        #subscribe-form {
            width: 100%;
            margin-bottom: 10px;
        }

        .subscribe-form .card-only {
            display: block;
        }

        .subscribe-form .payment-request-available {
            display: none;
        }

        .subscribe-form .row {
            display: -ms-flexbox;
            display: flex;
            margin: 0 0 10px;
        }

        .subscribe-form .field {
            position: relative;
            width: 100%;
        }

        .subscribe-form .field + .field {
            margin-left: 10px;
        }

        .subscribe-form label {
            width: 100%;
            color: #333333;
            font-size: 13px;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .subscribe-form .input {
            width: 100%;
            color: #333333;
            background: transparent;
            padding: 5px 0 6px 0;
            border-bottom: 1px solid #333333;
            transition: border-color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .subscribe-form .input.StripeElement--focus,
        .subscribe-form .input:focus {
            border-color: #fff;
        }

        .subscribe-form .input.StripeElement--invalid {
            border-color: #ffc7ee;
        }

        .subscribe-form input:-webkit-autofill,
        .subscribe-form select:-webkit-autofill {
            -webkit-text-fill-color: #333333;
            transition: background-color 100000000s;
            -webkit-animation: 1ms void-animation-out;
        }

        .subscribe-form .StripeElement--webkit-autofill {
            background: transparent !important;
        }

        .subscribe-form input,
        .subscribe-form select {
            -webkit-animation: 1ms void-animation-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            border-style: none;
            border-radius: 0;
        }

        .subscribe-form select.input,
        .subscribe-form select:-webkit-autofill {
            background-image: url('data:image/svg+xml;utf8,<svg width="10px" height="5px" viewBox="0 0 10 5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fff" d="M5.35355339,4.64644661 L9.14644661,0.853553391 L9.14644661,0.853553391 C9.34170876,0.658291245 9.34170876,0.341708755 9.14644661,0.146446609 C9.05267842,0.0526784202 8.92550146,-2.43597394e-17 8.79289322,0 L1.20710678,0 L1.20710678,0 C0.930964406,5.07265313e-17 0.707106781,0.223857625 0.707106781,0.5 C0.707106781,0.632608245 0.759785201,0.759785201 0.853553391,0.853553391 L4.64644661,4.64644661 L4.64644661,4.64644661 C4.84170876,4.84170876 5.15829124,4.84170876 5.35355339,4.64644661 Z" id="shape"></path></svg>');
            background-position: 100%;
            background-size: 10px 5px;
            background-repeat: no-repeat;
            overflow: hidden;
            text-overflow: ellipsis;
            padding-right: 20px;
        }
    </style>
@endpush

@section('content')
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold">
                        @lang('labels.subscription.plan') :<span>  {{ $plan->name }}</span><br>
                        @lang('labels.subscription.price') : <span>{{ $plan->amount }}/ {{ $plan->interval }}</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    @if(session()->get('error'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <section class="contact-page-section pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="subscribe-form" id="subscribe-form">
                        <form
                            @if(auth()->user()->subscribed('default'))
                            action="{{ route('subscription.update',['plan' => $plan]) }}"
                            @else
                            action="{{ route('subscription.subscribe',['plan' => $plan]) }}"
                            @endif
                            method="post" id="payment-form">
                            @csrf
                            <div id="subscribe-paymentRequest">
                            </div>
                            <fieldset>
                                <div class="row">
                                    <div class="field">
                                        <label for="name" data-tid="name_label">@lang('labels.subscription.form.name')</label>
                                        <input id="name" data-tid="name_placeholder" class="input" type="text"
                                               required="" value="{{ auth()->user()->name }}" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field">
                                        <label for="email" data-tid="email_label">@lang('labels.subscription.form.email')</label>
                                        <input id="email" data-tid="email_placeholder" class="input" type="text"
                                               placeholder="@lang('labels.subscription.form.email')" required=""
                                               value="{{ auth()->user()->email }}" readonly>
                                    </div>
                                </div>
                                <div data-locale-reversible>
                                    <div class="row">
                                        <div class="field">
                                            <label for="address" data-tid="address_label">@lang('labels.subscription.form.address')</label>
                                            <input id="address" name="address" data-tid="address_placeholder"
                                                   class="input" type="text" placeholder="@lang('labels.subscription.form.address')" required=""
                                                   autocomplete="address-line1">
                                        </div>
                                    </div>
                                    <div class="row" data-locale-reversible>
                                        <div class="field">
                                            <label for="city" data-tid="city_label">@lang('labels.subscription.form.city')</label>
                                            <input id="city" name="city" data-tid="city_placeholder" class="input"
                                                   type="text" placeholder="@lang('labels.subscription.form.city')" required=""
                                                   autocomplete="address-level2">
                                        </div>
                                        <div class="field">
                                            <label for="state" data-tid="state_label">@lang('labels.subscription.form.state')</label>
                                            <input id="state" name="state" data-tid="state_placeholder"
                                                   class="input empty" type="text" placeholder="@lang('labels.subscription.form.state')" required=""
                                                   autocomplete="address-level1">
                                        </div>
                                        <div class="field">
                                            <label for="zip" data-tid="postal_code_label">@lang('labels.subscription.form.zip')</label>
                                            <input id="zip" name="postal_code" data-tid="postal_code_placeholder"
                                                   class="input empty" type="text" placeholder="@lang('labels.subscription.form.zip')" required=""
                                                   autocomplete="postal-code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field">
                                        <label for="card" data-tid="card_label">@lang('labels.subscription.form.card')</label>
                                        <div id="card" class="input"></div>
                                    </div>
                                </div>
                                <div id="card-errors" role="alert"></div>
                                <button type="submit"
                                        class="text-white genius-btn mt25 gradient-bg text-center text-uppercase  bold-font mt-5"
                                        data-tid="pay_button" id="card-button"
                                        data-secret="{{ $intent->client_secret }}">@lang('labels.frontend.cart.pay_now')
                                </button>
                            </fieldset>
                        </form>
                        <div class="row mt-3">
                            <div class="col-12 error form-group d-none">
                                <div class="alert-danger alert">
                                    @lang('labels.frontend.cart.stripe_error_message')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('after-scripts')
    <script>

        const stripe = Stripe('{{ config('services.stripe.key')}}', {locale: "{{ str_replace('_', '-', app()->getLocale()) }}"}); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.

        /**
         * Card Element
         */
        var cardElement = elements.create("card", {
            iconStyle: "solid",
            style: {
                base: {
                    iconColor: "#fff",
                    color: "#333333",
                    fontWeight: 400,
                    fontFamily: "Helvetica Neue, Helvetica, Arial, sans-serif",
                    fontSize: "16px",
                    fontSmoothing: "antialiased",
                },
                invalid: {
                    iconColor: "#FFC7EE",
                    color: "#FFC7EE"
                }
            }
        });
        cardElement.mount("#card");

        const cardHolderName = document.getElementById('name');
        const cardButton = document.getElementById('card-button');
        const city = document.getElementById('city');
        const state = document.getElementById('state');
        const zip = document.getElementById('zip');
        const address = document.getElementById('address');
        var $form = $("#payment-form");
        const clientSecret = cardButton.dataset.secret;

        cardButton.addEventListener('click', (e) => {
            e.preventDefault();
            stripe.handleCardSetup(clientSecret,cardElement,{
                payment_method_data:{
                    billing_details: {
                        name: cardHolderName.value,
                        address:{
                            city: city.value,
                            country:null,
                            line1:address.value,
                            line2:null,
                            postal_code:zip.value,
                            state:state.value
                        }
                    }
                }
            }).then(function (result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    // Send the token to your server.
                    stripeTokenHandler(result.setupIntent.payment_method);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(paymentMethod) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', paymentMethod);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

    </script>
@endpush
