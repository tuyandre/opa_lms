@extends('frontend.layouts.app'.config('theme_layout'))
@push('after-styles')
    <style>
        .couse-pagination li.active {
            color: #333333!important;
            font-weight: 700;
        }
        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #c7c7c7;
            background-color: white;
            border: none;
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #333333;
            background-color:white;
            border:none;

        }
        ul.pagination{
            display: inline;
            text-align: center;
        }
        .cat-item.active{
            background: black;
            color: white;
            font-weight: bold;
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
                    <h2 class="breadcrumb-head black bold">@if(isset($category)){{$category->name}} @elseif(isset($tag)) {{$tag->name}} @endif  <span>Blog</span></h2>
                </div>
                <div class="page-breadcrumb-item ul-li">
                    <ul class="breadcrumb text-uppercase black">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->

    <!-- Start of blog content
        ============================================= -->
    <section id="blog-item" class="blog-item-post">
        <div class="container">
            <div class="blog-content-details">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-post-content">
                            <div class="short-filter-tab">
                                <div class="shorting-filter  float-left">
                                    <span><b>Sort</b> By</span>
                                    <select>
                                        <option value="9" selected="">Popularity</option>
                                        <option value="10">Most Read</option>
                                        <option value="11">Most View</option>
                                        <option value="12">Most Shared</option>
                                    </select>
                                </div>
                                <div class="tab-button blog-button ul-li text-center float-right">
                                    <ul class="product-tab">
                                        <li class="active" rel="tab1"><i class="fas fa-th"></i></li>
                                        <li rel="tab2"><i class="fas fa-list"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="genius-post-item">
                                <div class="tab-container">
                                    @if(count($blogs) > 0)
                                        <div id="tab1" class="tab-content-1 pt35">
                                            <div class="row">
                                                @foreach($blogs as $item)
                                                    <div class="col-md-6">
                                                        <div class="blog-post-img-content">
                                                            <div class="blog-img-date relative-position">
                                                                <div class="blog-thumnile">
                                                                    @if($item->image != "")
                                                                        <img src="{{asset('storage/uploads/'.$item->image)}}" alt="">

                                                                    @else
                                                                        <img src="http://placehold.it/420x250" alt="">

                                                                    @endif
                                                                </div>
                                                                <div class="course-price text-center gradient-bg">
                                                                    <span>{{$item->created_at->format('d M Y')}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="blog-title-content headline">
                                                                <h3><a href="{{route('blogs.index',['slug'=> $item->slug.'-'.$item->id])}}">{{$item->title}}</a></h3>
                                                                <div class="blog-content">
                                                                    {!!  mb_substr($item->content,0,100).'...'  !!}
                                                                </div>

                                                                <div class="view-all-btn bold-font">
                                                                    <a href="{{route('blogs.index',['slug'=> $item->slug.'-'.$item->id])}}">Read More <i
                                                                                class="fas fa-chevron-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach



                                            </div>
                                        </div><!-- 1st tab -->
                                        <div id="tab2" class="tab-content-1 pt35">
                                            <div class="blog-list-view">
                                                @foreach($blogs as $item)
                                                <div class="list-blog-item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="blog-post-img-content">
                                                                <div class="blog-img-date relative-position">
                                                                    <div class="blog-thumnile">
                                                                        @if($item->image != "")
                                                                            <img src="{{asset('storage/uploads/'.$item->image)}}" alt="">

                                                                        @else
                                                                            <img src="http://placehold.it/420x250" alt="">

                                                                        @endif
                                                                    </div>
                                                                    <div class="course-price text-center gradient-bg">
                                                                        <span>{{$item->created_at->format('d M Y')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="blog-title-content headline">
                                                                <h3><a href="{{route('blogs.index',['slug'=> $item->slug.'-'.$item->id])}}">{{$item->title}}</a>
                                                                </h3>
                                                                <div class="blog-content">
                                                                    {!!  mb_substr($item->content,0,100).'...'  !!}
                                                                </div>

                                                                <div class="view-all-btn bold-font">
                                                                    <a href="{{route('blogs.index',['slug'=> $item->slug.'-'.$item->id])}}">Read More <i
                                                                                class="fas fa-chevron-circle-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div><!-- 2nd tab -->

                                    @endif


                                </div>
                            </div>


                            <div class="couse-pagination text-center ul-li">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>

                    @include('frontend.blogs.partials.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- End of blog content
        ============================================= -->

@endsection