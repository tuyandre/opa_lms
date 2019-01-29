@extends('frontend.layouts.app'.config('theme_layout'))
@section('content')

	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Genius <span>Online Shop</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Shop</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of shop product section
		============================================= -->
		<section id="shop-product" class="shop-product-section">
			<div class="container">
				<div class="product-item">
					<div class="row">
						<div class="col-md-9">
							<div class="shop-product-item">
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
											<li rel="tab2"> <i class="fas fa-list"></i></li>
										</ul>
									</div>
								</div>
								<div class="product-showcase">
									<div class="genius-shop-item">
										<div class="tab-container">
											<div id="tab1" class="tab-content-1 best-product-section">
												<div class="row">
													<div class="col-md-4">
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

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
													</div>

													<div class="col-md-4">
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
											</div><!-- tab-1 -->

											<div id="tab2" class="tab-content-1 course-page-section">
												<div class="course-list-view">
													<table>
														<tr class="list-head">
															<th>COURSE NAME</th>
															<th>COURSE TYPE</th>
															<th>STARTS</th>
															<th>LENGTH</th>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('assets/img/course/cl-1.jpg')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('assets/img/course/cl-2.jpg')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('assets/img/course/cl-3.jpg')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('assets/img/course/cl-4.jpg')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('assets/img/course/cl-5.jpg')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="{{asset('assets/img/course/cl-1.jpg')}}" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
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
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
													</table>
												</div>
											</div><!-- /tab-2 -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="side-bar-widget first-widget">
								<h2 class="widget-title text-capitalize">Shop <span>Categories.</span></h2>
								<div class="post-categori ul-li-block">
									<ul>
										<li class="cat-item"><a href="#">Design Graphic Book</a></li>
										<li class="cat-item"><a href="#">Student Bag’s</a></li>
										<li class="cat-item"><a href="#">Education T-shirt</a></li>
										<li class="cat-item"><a href="#">Student Watch</a></li>
										<li class="cat-item"><a href="#">Tutorial Videos</a></li>
										<li class="cat-item"><a href="#">Other Products</a></li>
									</ul>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize">Sort By <span>Price.</span></h2>
								<div class="price-range relative-position">
									<div class="inner-title text-uppercase">Price </div>
									<input class="price-txt" type="text" id="amount">
									<div id="slider-range"></div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize">Product <span>Highlights.</span></h2>
								<div class="product-highlights ul-li-block">
									<ul>
										<li class="inner-title text-uppercase">DEALS OF THE DAY</li>
										<li class="inner-title text-uppercase">FREE SHIPPING</li>
										<li class="inner-title text-uppercase">BEST SELLERS</li>
										<li class="inner-title text-uppercase">FEATURED PRODUCTS</li>
									</ul>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize">Best <span>Sellers.</span></h2>
								<div class="best-sellers-item">
									<div class="best-sellers-pic-text">
										<div class="best-sell-pic">
											<img src="{{asset('assets/img/product/bs-1.png')}}" alt="">
										</div>
										<div class="best-sell-title-price">
											<h3><a href="#">ELEGANT WOMEN HANDBAG’S</a></h3>
											<div class="b-price">
												$130.25
											</div>
										</div>
									</div>
									<div class="best-sellers-pic-text">
										<div class="best-sell-pic">
											<img src="{{asset('assets/img/product/bs-1.png')}}" alt="">
										</div>
										<div class="best-sell-title-price">
											<h3><a href="#">ELEGANT WOMEN HANDBAG’S</a></h3>
											<div class="b-price">
												$130.25
											</div>
										</div>
									</div>

									<div class="couse-pagination text-center ul-li">
										<ul>
											<li class="pg-text"><a href="#"><i class="fas fa-long-arrow-alt-left"></i> PREV</a></li>
											<li><a href="#">01</a></li>
											<li class="active"><a href="#">02</a></li>
											<li><a href="#">03</a></li>
											<li class="pg-text"><a href="#">NEXT <i class="fas fa-long-arrow-alt-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Product </span>Tags.</h2>
								<div class="tag-clouds ul-li">
									<ul>
										<li><a href="#">fruits</a></li>
										<li><a href="#">veegetable</a></li>
										<li><a href="#">juices</a></li>
										<li><a href="#">natural food</a></li>
										<li><a href="#">food</a></li>
										<li><a href="#">bread</a></li>
										<li><a href="#">natural</a></li>
										<li><a href="#">healthy</a></li>
									</ul>
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
	<!-- End of shop product section
		============================================= -->


	<!-- Start of recent view product
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
	<!-- End of recent view product
		============================================= -->

@endsection