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
                    <h2 class="breadcrumb-head black bold">Your <span>Payment Status.</span></h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->
    <section id="checkout" class="checkout-section">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                @if(session()->has('success'))
                    <h2>  {{session('success')}}</h2>
                    <h3>Congratulations. Enjoy your course</h3>
                    <h4><a href="{{route('courses.all')}}">See more courses</a></h4>
                @endif
                @if(session()->has('failure'))
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h2>  {{session('failure')}}</h2>
                    <h4><a href="{{route('cart.index')}}">Go back to Cart</a></h4>
                @endif
            </div>
        </div>
    </section>
@endsection