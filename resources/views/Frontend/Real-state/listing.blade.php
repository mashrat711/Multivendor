<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
   ============================================= -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />





	<!-- Real Estate Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('assets/demos/real-estate/real-estate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/demos/real-estate/css/font-icons.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('assets/demos/real-estate/fonts.css')}}" type="text/css" />

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/components/bs-select.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/components/bs-switches.css')}}" type="text/css" />

	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/components/ion.rangeslider.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{asset('assets/css/colors.php?color=2C3E50')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Listing - Real Estate | Canvas</title>

	<style>
		.slider-element { padding: 250px 0 150px; }

		.device-md .slider-element,
		.device-sm .slider-element,
		.device-xs .slider-element { padding: 60px 0; }

		.expand-link { display: none; }
		.more-search {
			display: block;
			margin-top: 10px;
			float: right;
			text-align: right;
			color: #FFF;
			cursor: pointer;
		}

		label {font-family: 'Raleway', sans-serif !important;}

		.bootstrap-select.btn-group > .dropdown-toggle {
			background-color: #dae0e5;
			border-color: #d3d9df;
		}
	</style>

</head>

<body class="stretched side-push-panel">

	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">

				<h4 class="t400">Login with Social Profiles</h4>

				<a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-facebook">Facebook</a>
				<a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-gplus">Google</a>

				<div class="line"></div>

				<h4 class="t400">Existing Account?</h4>

				<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

					<div class="col_full">
						<label for="login-form-username" class="t400">Username:</label>
						<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="login-form-password" class="t400">Password:</label>
						<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
					</div>

					<div class="col_full nobottommargin">
						<button class="button button-rounded t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						<a href="#" class="fright">Forgot Password?</a>
					</div>

				</form>


			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		{{--<!-- Top Bar--}}
		{{--============================================= -->--}}
		{{--<div id="top-bar" class="transparent-topbar">--}}

			{{--<div class="container clearfix">--}}

				{{--<div class="col_half nobottommargin clearfix">--}}

					{{--<!-- Top Links--}}
					{{--============================================= -->--}}
					{{--<div class="top-links">--}}
						{{--<ul>--}}
							{{--<li><a href="#">All Cities</a>--}}
								{{--<ul>--}}
									{{--<li><a href="#">New York</a></li>--}}
									{{--<li><a href="#">Los Angeles</a></li>--}}
									{{--<li><a href="#">California</a></li>--}}
									{{--<li><a href="#">Miami</a></li>--}}
									{{--<li><a href="#">Las Vegas</a></li>--}}
								{{--</ul>--}}
							{{--</li>--}}
						{{--</ul>--}}
					{{--</div><!-- .top-links end -->--}}

				{{--</div>--}}

				{{--<div class="col_half fright col_last clearfix nobottommargin">--}}

					{{--<!-- Top Links--}}
					{{--============================================= -->--}}
					{{--<div class="top-links">--}}
						{{--<ul>--}}
							{{--<li class="d-sm-none d-md-none"><a href="#"><i class="icon-call"></i> +1800-123-7890</a></li>--}}
							{{--<li><a href="#"><i class="icon-download-alt"></i> Download App</a></li>--}}
							{{--<li class="top-bar-highlight"><a href="#">Sell/Rent your Property</a>--}}
								{{--<div class="top-link-section" style="font-size: 14px;">--}}
									{{--Genuine Clients, 100% Trust Assurance and Lowest Fees on the Market. <a href="#" class="more-link font-secondary" style="border-bottom-style: dotted;">Learn More &rarr;</a>--}}
								{{--</div>--}}
							{{--</li>--}}
							{{--<li><a href="#" class="side-panel-trigger">Login/Register</a></li>--}}
						{{--</ul>--}}
					{{--</div><!-- .top-links end -->--}}

				{{--</div>--}}

			{{--</div>--}}

		{{--</div><!-- #top-bar end -->--}}

		<!-- Header
		============================================= -->
		@include('Frontend.Elements.header')

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element clearfix" style="background: url({{asset('assets/demos/real-estate/images/items/page-title.jpg')}}) center center no-repeat; background-size: cover; overflow: visible;">

			<div class="container clearfix" style="z-index: 2">
				<div class="tabs advanced-real-estate-tabs clearfix">

					<div class="tab-container">

						<div class="tab-content clearfix" id="tab-properties">
							<form action="{{route('propertyFiltering')}}" method="post" class="nobottommargin">
								@csrf
								<div class="row clearfix">
									{{--<div class="col-md-2 col-sm-12">--}}
										{{--<label for="" class="d-block">Type</label>--}}
										{{--<input class="bt-switch" name="status"type="checkbox" checked data-on-text="Buy" data-off-text="Rent" data-on-color="themecolor" data-off-color="themecolor">--}}
									{{--</div>--}}
									<div class="col-md-4 col-sm-6 col-12">
										<label for="">Locations</label>

										<select class="selectpicker form-control" name="location_id" multiple data-live-search="true" data-size="5" style="width:100%;">
											@foreach($locations  as $key => $location)
												<option value="{{$key}}"> {{$location}}  </option>
											@endforeach
										</select>
									</div>
									<div class="col-md-4 col-sm-6 col-12">
										<label for="">Property Type</label>
										<select class="selectpicker form-control" name="property_type"  style="width:100%; line-height: 30px;">
											@foreach($property_types as $key => $type)
												<option value="{{$type}}"> {{$type}}  </option>
											@endforeach
										</select>

									</div>
									<div class="col-md-2 col-sm-6 col-6">
										<button class="button button-3d button-rounded btn-block nomargin" style="margin-top: 29px !important;">Search</button>
									</div>
								</div>
								<div class="clear"></div>

								<div class="expand-link">
									<div class="row justify-content-between mt-3">
										<div class="col-md-4 col-sm-6 col-12">
											<label for="" style="margin-bottom: 20px !important;">Price Range</label>
											<input class="price-range-slider" />
										</div>
										<div class="clear d-xl-none d-lg-none d-md-none d-sm-none bottommargin-sm"></div>
										<div class="col-md-4 col-sm-6 col-12">
											<label for="" style="margin-bottom: 20px !important;">Property Area</label>
											<input class="area-range-slider" />
										</div>
										<div class="col-md-2 col-sm-6 bottommargin-sm">
											<label for="">Beds</label>
											<select class="selectpicker form-control" multiple data-size="6" data-placeholder="Any" style="width:100%; line-height: 30px;">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5+">5+</option>
											</select>
										</div>
										<div class="col-md-2 col-sm-6 bottommargin-sm">
											<label for="">Baths</label>
											<select class="selectpicker form-control" multiple data-size="6" data-placeholder="Any" style="width:100%; line-height: 30px;">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5+">5+</option>
											</select>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<span class="more-search"><i class="icon-line-plus"></i> Advanced Search</span>
				</div>
			</div>
			<div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
				<div class="video-overlay" style="background: rgba(0,0,0,0.3); z-index: 1;"></div>
			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap notoppadding">

				<div class="section nobg nomargin clearfix">
					<div class="container clearfix">


						<div class="real-estate topmargin grid-container portfolio-3 portfolio w-100 mw-100 clearfix" data-layout="fitRows">

                        @foreach($lists as $list)
							<div class="real-estate-item portfolio-item bottommargin-sm">
								<div class="real-estate-item-image">
									<div class="label badge badge-danger bgcolor-2">For {{$list->status}}</div>
									<a href="{{route('properties.show',$list->id)}}">
										<img src="{{asset("images/Real-state/$list->cover_image")}}" alt="Image 1">
									</a>
									<div class="real-estate-item-price">
										${{$list->price}}<span>{{$list->payment_type}}</span>
									</div>
									<div class="real-estate-item-info clearfix" data-lightbox="gallery">
										<a href="{{asset("images/Real-state/$list->image1")}}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="{{asset("images/Real-state/$list->image2")}}" class="hidden" data-lightbox="gallery-item"></a>
										<a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
									</div>
								</div>

								<div class="real-estate-item-desc nopadding">
									<h3><a href="#">{{$list->bed}}Bedroom Villa</a></h3>
									<span>{{$list->location}}</span>

									<a href="{{route('properties.show',$list->id)}}" class="real-estate-item-link"><i class="icon-info"></i></a>

									<div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

									<div class="real-estate-item-features row t500 font-primary px-3 clearfix">
										<div class="col-lg-4 col-6 nopadding">Beds: <span class="color">{{$list->bed}}</span></div>
										<div class="col-lg-4 col-6 nopadding">Baths: <span class="color">{{$list->bath}}</span></div>
										<div class="col-lg-4 col-6 nopadding">Area: <span class="color">{{$list->area}} sqm</span></div>
										<div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
										<div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
										<div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-danger"><i class="icon-minus-sign-alt"></i></span></div>
									</div>
								</div>
							</div>

						@endforeach

						</div>
					</div>
				</div>

				<div class="container clearfix">
					<div class="section center nomargin" style="padding:80px 0 ">
						<h3 class="t400 ls1">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
						<a href="../../../../public/assets/demos/real-estate/contact.html" class="button button-color button-large button-rounded">Contact Now</a>
					</div>
				</div>

			</div><!-- .content-wrap end -->

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_fifth">

						<div class="widget clearfix">

							<img src="images/logo@2x.png" style="position: relative; opacity: 0.85; left: -10px; max-height: 80px; margin-bottom: 20px;" alt="Footer Logo">

							<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

							<div class="line" style="margin: 30px 0;"></div>

							<p class="ls1 t300" style="opacity: 0.6; font-size: 13px;">Copyrights &copy; 2017 Canvas: Real Estate</p>

						</div>

					</div>

					<div class="col_three_fifth col_last">

						<div class="col_half">
							<div class="row clearfix">

								<h4 class="ls1 t400 uppercase">Popular Locations</h4>

								<div class="col-6 bottommargin-sm widget_links widget_real_estate_popular">
									<ul>
										<li><a href="#"><i class="icon-map-marker2"></i> California</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Nevada</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Hawaii</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Washington</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Ottawa</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Virginia</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Ohio</a></li>
									</ul>
								</div>

								<div class="col-6 bottommargin-sm widget_links widget_real_estate_popular">
									<ul>
										<li><a href="#"><i class="icon-map-marker2"></i> Oregon</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Colorado</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Kentucky</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Texas</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Miami</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> New Jersey</a></li>
									</ul>
								</div>

							</div>
						</div>

						<div class="col_half col_last">

							<h4 class="ls1 t400 uppercase">Connect Socially</h4>

							<div class="bottommargin-sm clearfix">
								<a href="#" class="social-icon si-colored si-small si-rounded si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-twitter" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-instagram" title="Instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-apple" title="App Store">
									<i class="icon-apple"></i>
									<i class="icon-apple"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-android" title="Play Store">
									<i class="icon-android"></i>
									<i class="icon-android"></i>
								</a>

								<a href="#" class="social-icon si-colored si-small si-rounded si-skype" title="Skype">
									<i class="icon-skype"></i>
									<i class="icon-skype"></i>
								</a>
							</div>

							<div class="widget subscribe-widget subscribe-form clearfix" data-loader="button">
								<div class="widget-subscribe-form-result"></div>
								<form action="../../../../public/assets/include/subscribe.php" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="sm-form-control not-dark required email" placeholder="Enter your Email">
									<button class="button button-3d button-black noleftmargin norightmargin" style="margin-top: 15px;" type="submit">Subscribe</button>
								</form>
							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="{{asset('assets/js/components/bs-select.js')}}"></script>

	<!-- Bootstrap Switch Plugin -->
	<script src="{{asset('assets/js/components/bs-switches.js')}}"></script>

	<!-- Range Slider Plugin -->
	<script src="{{asset('assets/js/components/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('assets/js/functions.js')}}"></script>

	<script type="text/javascript">

		jQuery(document).ready(function(){

			$(".price-range-slider").ionRangeSlider({
				type: "double",
				prefix: "$",
				min: 200,
				max: 10000,
				max_postfix: "+"
			});

			$(".area-range-slider").ionRangeSlider({
				type: "double",
				min: 50,
				max: 20000,
				from: 50,
				to: 20000,
				postfix: " sqm.",
				max_postfix: "+"
			});

			jQuery(".bt-switch").bootstrapSwitch();

			jQuery('.more-search').click(function(){
				jQuery('.expand-link').slideToggle(400);
			});

		});


	</script>

</body>
</html>