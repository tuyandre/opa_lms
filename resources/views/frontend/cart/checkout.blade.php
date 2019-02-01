@extends('frontend.layouts.app'.config('theme_layout'))

@push('after-styles')
    <style>
        input[type="radio"] {
            display: inline-block !important;
        }
    </style>
@endpush

@section('content')

    <!-- Start of breadcrumb section
        ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold">Your <span>Payment Method.</span></h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->


    <!-- Start of Checkout content
        ============================================= -->
    <section id="checkout" class="checkout-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">YOUR SHOPPING CART</span>
                <h2>Complete<span> Your Purchases.</span></h2>
            </div>
            <div class="checkout-content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="order-item mb30 course-page-section">
                            <div class="section-title-2  headline text-left">
                                <h2>Order <span>Item.</span></h2>
                            </div>

                            <div class="course-list-view table-responsive">
                                <table class="table">

                                    <thead>
                                    <tr class="list-head">
                                        <th>COURSE NAME</th>
                                        <th>COURSE TYPE</th>
                                        <th>STARTS</th>
                                        <th>LENGTH</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($courses) > 0)
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>
                                                    <div class="course-list-img-text">
                                                        <div class="course-list-img">
                                                            @if($course->course_image != "")
                                                                <img src="{{asset('storage/uploads/'.$course->course_image)}}"
                                                                     alt="">
                                                            @else
                                                                <img src="http://placehold.it/70x70" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="course-list-text">
                                                            <h3>
                                                                <a href="{{ route('courses.show', [$course->slug]) }}">{{$course->title}}</a>
                                                            </h3>
                                                            <div class="course-meta">
                                                                <span class="course-category bold-font"><a
                                                                            href="#">${{$course->price}}</a></span>
                                                                <div class="course-rate ul-li">
                                                                    <ul>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="course-type-list">
                                                        <span>Graphic Design &amp; 3D</span>
                                                    </div>
                                                </td>
                                                <td>{{$course->start_date}}</td>
                                                <td class="dlt-price relative-position">
                                                    3 Months
                                                    <div class="check-dlt">
                                                        <a href="{{route('cart.remove',['course'=>$course->id])}}"><i
                                                                    class="fas fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">Your cart is empty</td>
                                        </tr>
                                    @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(count($courses) > 0)
                            <div class="order-payment">
                                <div class="section-title-2  headline text-left">
                                    <h2>Order <span>Payment.</span></h2>
                                </div>
                                <div id="accordion">
                                    <div class="payment-method w-100 mb-0">
                                        <div class="payment-method-header">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="method-header-text">
                                                        <div class="radio">
                                                            <label>
                                                                <input data-toggle="collapse" href="#collapsePaymentOne"
                                                                       type="radio" name="paymentMethod" value="1"
                                                                       checked>
                                                                Credit or Debit Card
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="payment-img float-right">
                                                        <img src="{{asset('assets/img/banner/p-1.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="check-out-form collapse show" id="collapsePaymentOne"
                                             data-parent="#accordion">
                                            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>

                                            <form accept-charset="UTF-8" action="{{route('cart.stripe.payment')}}"
                                                  class="require-validation" data-cc-on-file="false"
                                                  data-stripe-publishable-key="{{env('STRIPE_KEY')}}" id="payment-form"
                                                  method="POST">
                                                <div style="margin:0;padding:0;display:inline">
                                                    <input name="utf8" type="hidden"
                                                           value="✓"/>
                                                    @csrf
                                                </div>


                                                <div class="payment-info">
                                                    <label class=" control-label">Name On Card :</label>
                                                    <input type="text" autocomplete='off' class="form-control required card-name"
                                                           placeholder="Enter the name of your card" value="">
                                                </div>
                                                <div class="payment-info">
                                                    <label class=" control-label">Card Number :</label>
                                                    <input autocomplete='off' type="text"
                                                           class="form-control required card-number"
                                                           placeholder="Enter Your Number" value="">
                                                </div>
                                                <div class="payment-info input-2">
                                                    <label class=" control-label">CVV :</label>
                                                    <input type="text" class="form-control card-cvc required"
                                                           placeholder="CVV"
                                                           value="">
                                                </div>
                                                <div class="payment-info input-2">
                                                    <label class=" control-label">Expired Date :</label>
                                                    <input autocomplete='off' type="text"
                                                           class="form-control required card-expiry-month"
                                                           placeholder="MM"
                                                           value="">
                                                    <input autocomplete='off' type="text"
                                                           class="form-control required card-expiry-year"
                                                           placeholder="YY"
                                                           value="">
                                                </div>
                                                <button type="submit"
                                                        class="text-white genius-btn mt25 gradient-bg text-center text-uppercase  bold-font">
                                                    Pay Now <i class="fas fa-caret-right"></i>
                                                </button>
                                                <div class="row mt-3">
                                                    <div class="col-12 error form-group d-none">
                                                        <div class="alert-danger alert">
                                                            Please correct the errors and try again.
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            {{--<div class="method-header-text">--}}
                                            {{--<div class="checkbox save-credit">--}}
                                            {{--<label>--}}
                                            {{--<input type="checkbox" value="">--}}
                                            {{--<span class="cr text-uppercase bold-font"><i--}}
                                            {{--class="cr-icon fa fa-check"></i></span>--}}
                                            {{--SAVE YOUR CREDIT CARD FOR FUTURE PURCHASES--}}
                                            {{--<span class="sub-text">Your payment information is stored securely. <b>Learn More</b></span>--}}
                                            {{--</label>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="payment-method w-100 mb-0">
                                        <div class="payment-method-header">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="method-header-text">
                                                        <div class="radio">
                                                            <label>
                                                                <input data-toggle="collapse" href="#collapsePaymentTwo"
                                                                       type="radio" name="paymentMethod" value="2">
                                                                PayPal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="payment-img float-right">
                                                        <img src="{{asset('assets/img/banner/p-2.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check-out-form collapse disabled" id="collapsePaymentTwo"
                                             data-parent="#accordion">
                                            <form class="w3-container w3-display-middle w3-card-4 " method="POST"
                                                  id="payment-form" action="{{route('cart.paypal.payment')}}">
                                                {{ csrf_field() }}
                                                <p>Pay securely with PayPal</p>

                                                <button type="submit"
                                                        class="text-white genius-btn mt25 gradient-bg text-center text-uppercase  bold-font">
                                                    Pay Now <i class="fas fa-caret-right"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="payment-method w-100 mb-0">
                                        <div class="payment-method-header">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="method-header-text">
                                                        <div class="radio">
                                                            <label>
                                                                <input data-toggle="collapse"
                                                                       href="#collapsePaymentThree" type="radio"
                                                                       name="paymentMethod" value="3">
                                                                Offline Payment
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="check-out-form collapse disabled" id="collapsePaymentThree"
                                             data-parent="#accordion">
                                            <p>In this payment method our executives will contact you and give you
                                                instructions
                                                regarding
                                                payment and course purchase.</p>
                                            <form method="post" action="{{route('cart.offline.payment')}}">
                                                @csrf
                                                <button type="submit"
                                                        class="text-white genius-btn mt25 gradient-bg text-center text-uppercase  bold-font">
                                                    Request Assistance <i class="fas fa-caret-right"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </div>

                                </div>


                                <div class="terms-text pb45 mt25">
                                    <p>By confirming this purchase, I agree to the <b>Term of Use, Refund Policy</b> and
                                        <b>Privacy
                                            Policy</b></p>
                                </div>
                            </div>
                            <div id="accordion">
                                {{--<div class="card mb-3 ">--}}
                                {{--<div class="card-header">--}}
                                {{--<div class="radio">--}}
                                {{--<label><input data-toggle="collapse" href="#collapseOne" type="radio" name="paymentMethod" value="1" checked> Credit Card / Debit Card</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div id="collapseOne" class="collapse show" data-parent="#accordion">--}}
                                {{--<div class="card-body w-75 mx-auto">--}}
                                {{--<script src='https://js.stripe.com/v2/' type='text/javascript'></script>--}}
                                {{--<form accept-charset="UTF-8" action="{{route('cart.stripe.payment')}}" class="require-validation" data-cc-on-file="false"--}}
                                {{--data-stripe-publishable-key="{{env('STRIPE_KEY')}}" id="payment-form"--}}
                                {{--method="POST">--}}
                                {{--<div style="margin:0;padding:0;display:inline">--}}
                                {{--<input name="utf8" type="hidden"--}}
                                {{--value="✓"/>--}}
                                {{--@csrf--}}
                                {{--</div>--}}
                                {{--<input type="hidden">--}}
                                {{--<div class='form-row'>--}}
                                {{--<div class='col-12 form-group required'>--}}
                                {{--<label class='control-label'>Name on Card</label>--}}
                                {{--<input class='form-control' size='4' type='text'>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class='form-row'>--}}
                                {{--<div class='col-12 form-group required'>--}}
                                {{--<label class='control-label'>Card Number</label>--}}
                                {{--<input autocomplete='off' class='form-control card-number' size='20'--}}
                                {{--type='text'>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class='form-row'>--}}
                                {{--<div class='col-4 form-group cvc required'>--}}
                                {{--<label class='control-label'>CVV</label>--}}
                                {{--<input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311'--}}
                                {{--size='4' type='text'>--}}
                                {{--</div>--}}
                                {{--<div class='col-4 form-group expiration required'>--}}
                                {{--<label class='control-label'>Expiration</label>--}}
                                {{--<input class='form-control card-expiry-month' placeholder='MM' size='2'--}}
                                {{--type='text'>--}}
                                {{--</div>--}}
                                {{--<div class='col-4 form-group expiration required'>--}}
                                {{--<label class='control-label'> </label>--}}
                                {{--<input class='form-control card-expiry-year' placeholder='YYYY' size='4'--}}
                                {{--type='text'>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class='form-row'>--}}
                                {{--<div class='col-md-12 form-group'>--}}
                                {{--<button class='form-control btn btn-primary submit-button' type='submit'>Pay »--}}
                                {{--</button>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class='form-row'>--}}
                                {{--<div class='col-md-12 error form-group d-none'>--}}
                                {{--<div class='alert-danger alert'>--}}
                                {{--Please correct the errors and try again.--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</form>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="card mb-3">--}}
                                {{--<div class="card-header">--}}
                                {{--<div class="radio">--}}
                                {{--<label class="">--}}
                                {{--<input type="radio" data-toggle="collapse" href="#collapseTwo"--}}
                                {{--class="collapsed" name="paymentMethod" value="2"> Paypal</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div id="collapseTwo" class="collapse" data-parent="#accordion">--}}
                                {{--<div class="card-body disabled">--}}
                                {{--<form class="w3-container w3-display-middle w3-card-4 " method="POST"--}}
                                {{--id="payment-form" action="{{route('cart.paypal.payment')}}">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<p>Pay securely with PayPal</p>--}}

                                {{--<button class="w3-btn btn btn-success w3-blue">Proceed</button>--}}
                                {{--</form>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="card mb-3">--}}
                                {{--<div class="card-header">--}}
                                {{--<div class="radio">--}}
                                {{--<label class="">--}}
                                {{--<input type="radio" data-toggle="collapse" href="#collapseThree"--}}
                                {{--class="collapsed" name="paymentMethod" value="3"> Offline--}}
                                {{--Payment</label>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--<div id="collapseThree" class="collapse" data-parent="#accordion">--}}
                                {{--<div class="card-body disabled">--}}
                                {{--<p>In this payment method our executives will contact you and give you--}}
                                {{--instructions--}}
                                {{--regarding--}}
                                {{--payment and course purchase.</p>--}}
                                {{--<form method="post" action="{{route('cart.offline.payment')}}">--}}
                                {{--@csrf--}}
                                {{--<button class="btn btn-primary">Request Assistance</button>--}}
                                {{--</form>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>


                        @endif
                    </div>

                    <div class="col-md-3">
                        <div class="side-bar-widget first-widget">
                            <h2 class="widget-title text-capitalize">Order <span>Detail.</span></h2>
                            <div class="sub-total-item">
                                @if(count($courses) > 0)
                                    <div class="purchase-list py-3 ul-li-block">
                                        <div class="in-total">Total :
                                            <span>${{Cart::session(auth()->user()->id)->getTotal()}}</span></div>
                                    </div>
                                @else
                                    <div class="purchase-list mt15 ul-li-block">

                                        <div class="in-total">TOTAL <span>$0.00</span></div>
                                    </div>

                                @endif
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
                            <div class="featured-course">
                                <div class="best-course-pic-text pt-0 relative-position">
                                    <div class="best-course-pic relative-position">
                                        <img src="{{asset('assets/img/blog/fb-1.jpg')}}" alt="">
                                        <div class="trend-badge-2 text-center text-uppercase">
                                            <i class="fas fa-bolt"></i>
                                            <span>Trending</span>
                                        </div>
                                    </div>
                                    <div class="best-course-text">
                                        <div class="course-title mb20 headline relative-position">
                                            <h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
                                        </div>
                                        <div class="course-meta">
                                            <span class="course-category"><a href="#">Web Design</a></span>
                                            <span class="course-author"><a href="#">250 Students</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  of Checkout content
        ============================================= -->


@endsection

@push('after-scripts')
    <script type="text/javascript" src="{{asset('js/stripe-form.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', 'input[type="radio"]:checked', function () {
                $('#accordion .check-out-form').addClass('disabled')
                $(this).closest('.payment-method').find('.check-out-form').removeClass('disabled')
            })
        })
    </script>
@endpush