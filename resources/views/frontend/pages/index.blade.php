@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', ($page->meta_title) ? $page->meta_title : app_name())
@section('meta_description', ($page->meta_description) ? $page->meta_description :'' )
@section('meta_keywords', ($page->meta_keywords) ? $page->meta_keywords : app_name())

@push('after-styles')
    <style>
        .content img{
            margin: 10px;
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
                    <h2 class="breadcrumb-head black bold">{{env('APP_NAME')}} <span>{{$page->title}}</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->

    <section id="about-page" class="about-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if($page->image != "")
                        <img class="mx-auto" src="{{asset('storage/uploads/'.$page->image)}}" alt="">

                    @endif
                </div>
                <div class="col-md-12 mt-4 content">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>

@endsection