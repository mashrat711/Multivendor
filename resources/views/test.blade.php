@extends('Frontend.Car.master')
@section('content')


	<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('../../../../public/assets/demos/car/images/accessories/page-title.jpg'); background-size: cover; padding: 140px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Car Accessories</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Cars</a></li>
					<li class="breadcrumb-item active" aria-current="page">Accessories</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">
			<div id="page-menu-wrap" class="not-dark shadow-sm">
				<div class="container clearfix">

					<nav class="one-page-menu fnone d-xl-flex d-lg-flex justify-content-xl-center justify-content-lg-center" data-easing="easeInOutExpo" data-offset="120">
						<ul>
							<li><a href="#" data-href="#section-wheel" data-highlight="yellow"><div>Tyres & Wheels</div></a></li>
							<li><a href="#" data-href="#section-music" data-highlight="yellow"><div>Music Systems</div></a></li>
							<li><a href="#" data-href="#section-engines" data-highlight="yellow"><div>Engines & Parts</div></a></li>
							<li><a href="#" data-href="#section-seats" data-highlight="yellow"><div>Seat Covers</div></a></li>
							<li><a href="#" data-href="#section-lights" data-highlight="yellow"><div>Lights</div></a></li>
						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>
			</div>
		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content" class="clearfix">

			<div class="content-wrap">

				<div class="container">

					<div id="section-wheel" class="page-section">
						<div class="heading-block center section nobottomborder py-5 mt-0">
							<h3 class="highlight-me px-2 d-inline-block">Tyres & Wheels</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?</p>
						</div>

						<div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-autoplay="5000">
							@foreach($products as $pro)
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="/images/{{ $pro->image_path }}"
													 class="card-img-top mx-auto"
													 style="height: 150px; width: 150px;display: block;"
													 alt="{{ $pro->image_path }}"
										></a>
								</div>
								<form action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" value="{{ $pro->id }}" id="id" name="id">
									<input type="hidden" value="{{ $pro->name }}" id="name" name="name">
									<input type="hidden" value="{{ $pro->price }}" id="price" name="price">
									<input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
									<input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
									<input type="hidden" value="1" id="quantity" name="quantity">
									<div class="card-footer" style="background-color: white;">
										<div class="row">
											<button class="button button-rounded button-small nomargin"  title="add to cart">
												<i class="fa fa-shopping-cart"></i> add to cart
											</button>
										</div>
									</div>
								</form>
								{{--<div class="product-desc">--}}
									{{--<div class="product-title"><h3><a href="#">{{$list->title}}</a></h3></div>--}}
									{{--<div class="product-price"><ins>${{$list->price}}</ins></div>--}}
									{{--<p>{{$list->description}}</p>--}}
									{{--<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i>Book Now</a>--}}
								{{--</div>--}}
							</div>
							@endforeach
					</div>


					<div id="section-music" class="page-section">
						<div class="heading-block section nobottomborder py-5 center">
							<h3 class="highlight-me px-2 d-inline-block">Music Systems</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?</p>
						</div>
						<div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-autoplay="5000">
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="{{asset('assets/demos/car/images/accessories/music/1.jpg')}}" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Double Deck Music</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="{{asset('assets/demos/car/images/accessories/music/2.jpg')}}" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Woofer Music</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="{{asset('assets/demos/car/images/accessories/music/3.jpg')}}" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Double Deck Music</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="{{asset('assets/demos/car/images/accessories/music/4.jpg')}}" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Double Deck Music</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
						</div>
					</div>

					<div id="section-engines" class="page-section">
						<div class="heading-block section nobottomborder py-5 center">
							<h3 class="highlight-me px-2 d-inline-block">Engines & Parts</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?</p>
						</div>
						<div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-autoplay="5000">
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="{{asset('assets/demos/car/images/accessories/engines/1.jpg')}}" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/engines/2.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/engines/3.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo spare Parts</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/engines/4.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Parts</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/engines/5.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/engines/6.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
						</div>
					</div>

					<div id="section-seats" class="page-section">
						<div class="heading-block section nobottomborder py-5 center">
							<h3 class="highlight-me px-2 d-inline-block">Seat Covers</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?</p>
						</div>
						<div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-autoplay="5000">
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/seats/1.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/seats/2.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/seats/3.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>


							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/seats/4.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo Engine</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
						</div>
					</div>

					<div id="section-lights" class="page-section">
						<div class="heading-block section nobottomborder py-5 center">
							<h3 class="highlight-me px-2 d-inline-block">Lights</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?</p>
						</div>
						<div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-autoplay="5000">
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/lights/1.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Buddyclub GT86/BRZ Light</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/lights/2.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Buddyclub LED</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/lights/3.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Ford Focus Backlight</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/lights/4.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Turbo LED</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="#"><img src="../../../../public/assets/demos/car/images/accessories/lights/5.jpg" alt=""></a>
								</div>

								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Spyder Backlight</a></h3></div>
									<div class="product-price"><ins>$12.49</ins></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
									<a href="#" class="button button-rounded button-small nomargin"><i class="icon-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="section nomargin footer-stick clearfix" style="background: #FFF url('../../../../public/assets/demos/car/images/features/section-bg.jpg') left bottom no-repeat; background-size: cover; padding: 120px 0">
					<div class="container clearfix">
						<div class="row">
							<div class="col-md-6">
								<h2 class="h2 t700 mb-4">You still can't find your Car's Parts, then please Contact Us!</h2>
								<a href="contact.html" class="button button-color button-large button-rounded">Contact Now</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

	@endsection