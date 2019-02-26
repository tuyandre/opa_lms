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
						<h2 class="breadcrumb-head black bold">Genius <span>Teacher</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Teachers</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->



	<!-- Start of teacher section
		============================================= -->
		<section id="teacher-page" class="teacher-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="teachers-archive">
							<div class="row">
                                @if(count($teachers) > 0)
                                @foreach($teachers as $item)
								<div class="col-md-4 col-sm-6">
									<div class="teacher-pic-content">
										<div class="teacher-img-content relative-position">
											<img src="{{$item->picture}}" alt="">
											<div class="teacher-hover-item">
												<div class="teacher-social-name ul-li-block">
													<ul>
                                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                                        <li><a href="{{route('admin.messages',['teacher_id'=>$item->id])}}"><i class="fa fa-comments"></i></a></li>
													</ul>
												</div>
												{{--<div class="teacher-text">--}}
													{{--Lorem ipsum dolor  consectuer adipiscing elit, nonummy nibh euismod tincidunt.--}}
												{{--</div>--}}
											</div>
											<div class="teacher-next text-center">
												<a href="{{route('teachers.show',['id'=>$item->id])}}"><i class="text-gradiant fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="teacher-name-designation">
											<span class="teacher-name">{{$item->full_name}}</span>
											{{--<span class="teacher-designation">Mobile Apps</span>--}}
										</div>
									</div>
								</div>
                                @endforeach
                                @else
                                    <h4>No Teachers</h4>
                                @endif


							</div>
							<div class="couse-pagination text-center ul-li">
                                {{ $teachers->links() }}
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="side-bar">


							@if($recent_news->count() > 0)
								<div class="side-bar-widget first-widget">
									<h2 class="widget-title text-capitalize"><span>Recent  </span>News</h2>
									<div class="latest-news-posts">
										@foreach($recent_news as $item)
											<div class="latest-news-area">

												<div class="latest-news-thumbnile relative-position">
													@if($item->image != "")
														<img src="{{asset('storage/uploads/'.$item->image)}}"
															 alt="">
													@else
														<img src="http://placehold.it/80x80" alt="">
													@endif

													<div class="blakish-overlay"></div>
												</div>
												<div class="date-meta">
													<i class="fas fa-calendar-alt"></i> {{$item->created_at->format('d M Y')}}
												</div>
												<h3 class="latest-title bold-font"><a href="{{route('blogs.index',['slug'=>$item->slug.'-'.$item->id])}}">{{$item->title}}</a></h3>
											</div>
											<!-- /post -->
										@endforeach


										<div class="view-all-btn bold-font">
											<a href="{{route('blogs.index')}}">View All News <i class="fas fa-chevron-circle-right"></i></a>
										</div>
									</div>
								</div>

							@endif


							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
								<div class="featured-course">
									<div class="best-course-pic-text relative-position pt-0">
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
	<!-- End of teacher section
		============================================= -->

		

	<!-- Start of best product section
		============================================= -->
		<section id="best-product" class="best-product-section best-product-4">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Genius <span>Best Products.</span></h2>
				</div>
				<div id="best-product-slide-item" class="best-product-slide">
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-1.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>

					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-2.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-3.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-4.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-5.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-6.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('assets/img/product/bp-1.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End  of best product section
		============================================= -->

@endsection