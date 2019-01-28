@extends('frontend.layouts.app')
@push('after-styles')
    <style>
        .disabled {
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>My Cart</h1>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-dismissable alert-success fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session('success')}}
            </div>
        @endif
        @if(session()->has('failure'))
            <div class="alert alert-dismissable alert-danger fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session('failure')}}
            </div>
        @endif

        @if(count(Cart::session(auth()->user()->id)->getContent()) > 0)
            <div class="col-9">
                @foreach(Cart::session(auth()->user()->id)->getContent() as $cartItem)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @if($cartItem->attributes->image != "")
                                    <div class="col-3">
                                        <img src="{{asset('storage/uploads/'.$cartItem->attributes->image)}}" width="100%">
                                    </div>
                                @endif
                                <div class="col">
                                    <h5>{{$cartItem->name}} <span class="float-right ">
                                <span>${{$cartItem->price}}</span> &nbsp;&nbsp;
                                <span><a href="{{route('cart.remove',['course'=>$cartItem->id])}}">Remove</a></span>
                            </span></h5>
                                    <p class="mb-0">{{ str_limit($cartItem->attributes->description,200) }}</p>
                                    <p class="mb-0 font-weight-bold">By :
                                        @foreach($cartItem->attributes->teachers as $key=>$teacher)
                                            <a href="#"> {{$key}} </a></p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{route('cart.clear')}}" class="btn btn-danger my-3 float-right">Clear cart</a>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('cart.checkout')}}">
                            @csrf
                            <p class="mb-0">Total :</p>
                            <h2>${{Cart::session(auth()->user()->id)->getTotal()}}</h2>
                            <input type="hidden" name="course_id"  value="{{Cart::session(auth()->user()->id)->getContent()->keys()->implode(',')}}">
                            <button type="submit" class="btn btn-block btn-success">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="col-12">
                <h5>Cart is empty</h5>
            </div>
        @endif

    </div>
@endsection