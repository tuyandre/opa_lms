@extends('frontend.layouts.app'.config('theme_layout'))
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
                        <div class="order-item mb65 course-page-section">
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
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-img">
                                                    <img src="{{asset('assets/img/course/cl-1.jpg')}}" alt="">
                                                </div>
                                                <div class="course-list-text">
                                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">$120.25</a></span>
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
                                        <td>6-06-2018</td>
                                        <td class="dlt-price relative-position">
                                            3 Months
                                            <div class="check-dlt">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-img">
                                                    <img src="{{asset('assets/img/course/cl-2.jpg')}}" alt="">
                                                </div>
                                                <div class="course-list-text">
                                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">$120.25</a></span>
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
                                        <td>6-06-2018</td>
                                        <td class="dlt-price relative-position">
                                            3 Months
                                            <div class="check-dlt">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-img">
                                                    <img src="{{asset('assets/img/course/cl-3.jpg')}}" alt="">
                                                </div>
                                                <div class="course-list-text">
                                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">$120.25</a></span>
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
                                        <td>6-06-2018</td>
                                        <td class="dlt-price relative-position">
                                            3 Months
                                            <div class="check-dlt">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-img">
                                                    <img src="{{asset('assets/img/course/cl-4.jpg')}}" alt="">
                                                </div>
                                                <div class="course-list-text">
                                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">$120.25</a></span>
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
                                        <td>6-06-2018</td>
                                        <td class="dlt-price relative-position">
                                            3 Months
                                            <div class="check-dlt">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-img">
                                                    <img src="{{asset('assets/img/course/cl-5.jpg')}}" alt="">
                                                </div>
                                                <div class="course-list-text">
                                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">$120.25</a></span>
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
                                        <td>6-06-2018</td>
                                        <td class="dlt-price relative-position">
                                            3 Months
                                            <div class="check-dlt">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="course-list-img-text">
                                                <div class="course-list-img">
                                                    <img src="{{asset('assets/img/course/cl-1.jpg')}}" alt="">
                                                </div>
                                                <div class="course-list-text">
                                                    <h3><a href="#">Fully Responsive Web Design &amp; Development.</a>
                                                    </h3>
                                                    <div class="course-meta">
                                                        <span class="course-category bold-font"><a href="#">$120.25</a></span>
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
                                        <td>6-06-2018</td>
                                        <td class="dlt-price relative-position">
                                            3 Months
                                            <div class="check-dlt">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="order-payment">
                            <div class="section-title-2  headline text-left">
                                <h2>Order <span>Payment.</span></h2>
                            </div>
                            <div class="payment-method">
                                <div class="payment-method-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="method-header-text">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
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

                                <div class="check-out-form">
                                    <form action="#" method="post">
                                        <div class="payment-info">
                                            <label class=" control-label">Name On Card :</label>
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="Enter the name of your card" value="">
                                        </div>
                                        <div class="payment-info">
                                            <label class=" control-label">Card Number :</label>
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="Enter Your Number" value="">
                                        </div>
                                        <div class="payment-info input-2">
                                            <label class=" control-label">Expired Date :</label>
                                            <input type="text" class="form-control" name="name" placeholder="MM"
                                                   value="">
                                            <input type="text" class="form-control" name="name" placeholder="YY"
                                                   value="">
                                        </div>
                                        <div class="payment-info input-2">
                                            <label class=" control-label">CVV :</label>
                                            <input type="text" class="form-control" name="name" placeholder="CVV"
                                                   value="">
                                        </div>
                                        <div class="payment-info">
                                            <label class=" control-label">Country :</label>
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="Select Your Country" value="">
                                        </div>
                                    </form>
                                    <div class="method-header-text">
                                        <div class="checkbox save-credit">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr text-uppercase bold-font"><i
                                                            class="cr-icon fa fa-check"></i></span>
                                                SAVE YOUR CREDIT CARD FOR FUTURE PURCHASES
                                                <span class="sub-text">Your payment information is stored securely. <b>Learn More</b></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-method-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="method-header-text">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                    Paypal
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

                            <div class="genius-btn mt25 gradient-bg text-center text-uppercase  bold-font">
                                <a href="#">Pay Now <i class="fas fa-caret-right"></i></a>
                            </div>
                            <div class="terms-text pb45 mt25">
                                <p>By confirming this purchase, I agree to the <b>Term of Use, Refund Policy</b> and <b>Privacy
                                        Policy</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="side-bar-widget first-widget">
                            <h2 class="widget-title text-capitalize">Order <span>Detail.</span></h2>
                            <div class="sub-total-item">
                                <span class="sub-total-title">SUBTOTAL</span>
                                <div class="purchase-list mt15 ul-li-block">
                                    <ul>
                                        <li>No Discount <span>$59.99</span></li>
                                        <li>No Discount <span>$59.99</span></li>
                                        <li>Discount 15% <span>$59.99</span></li>
                                        <li>No Discount <span>$59.99</span></li>
                                    </ul>
                                    <div class="in-total">TOTAL <span>$759.99</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
                            <div class="featured-course">
                                <div class="best-course-pic-text relative-position">
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