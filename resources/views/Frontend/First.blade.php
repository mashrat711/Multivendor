@extends('Frontend.Car.master')
@section('content')

	{{--<!DOCTYPE html>--}}
{{--<html dir="ltr" lang="en-US">--}}
{{--<head>--}}

	{{--<meta http-equiv="content-type" content="text/html; charset=utf-8" />--}}
	{{--<meta name="author" content="SemiColonWeb" />--}}

	{{--<!-- Stylesheets--}}
	{{--============================================= -->--}}


	{{--<meta name="viewport" content="width=device-width, initial-scale=1" />--}}
	{{--<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />--}}
	{{--<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />--}}
	{{--<link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />--}}
	{{--<link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />--}}

	{{--<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />--}}
	{{--<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />--}}
	{{--<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />--}}

	{{--<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />--}}
	{{--<link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}" type="text/css" />--}}


	{{--<!-- Document Title--}}
	{{--============================================= -->--}}
	{{--<title>MultiVendor</title>--}}

{{--</head>--}}

{{--<body class="stretched">--}}

	{{--<!-- Document Wrapper--}}
	{{--============================================= -->--}}
	{{--<div id="wrapper" class="clearfix">--}}

		{{--<!-- Header--}}
		{{--============================================= -->--}}
		{{--<header id="header" class="full-header">--}}

			{{--<div id="header-wrap">--}}

				{{--<div class="container clearfix">--}}

					{{--<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>--}}

					{{--<!-- Logo--}}
					{{--============================================= -->--}}
					{{--<div id="logo">--}}
						{{--<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{asset('assets/images/brian/brian.png')}}" alt=" Logo"></a>--}}
						{{--<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Logo"></a>--}}
					{{--</div><!-- #logo end -->--}}


				{{--</div>--}}

			{{--</div>--}}

		{{--</header><!-- #header end -->--}}

		<!-- Page Title
		============================================= -->
		{{--<section id="page-title">--}}

			{{--<div class="container clearfix">--}}
				{{--<h1>Flip Cards</h1>--}}
				{{--<ol class="breadcrumb">--}}
					{{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
					{{--<li class="breadcrumb-item"><a href="#">Shortcodes</a></li>--}}
					{{--<li class="breadcrumb-item active" aria-current="page">Flip Cards</li>--}}
				{{--</ol>--}}
			{{--</div>--}}

		{{--</section><!-- #page-title end -->--}}

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row grid-container" data-layout="masonry" style="overflow: visible">
						<div class="col-lg-4 mb-4">
							<div class="flip-card text-center">
								<div class="flip-card-front dark" style="background-image: url('{{asset('assets/images/f.png')}}')">
									<div class="flip-card-inner">
										<div class="card nobg noborder text-center">
											<div class="card-body">
												<i class="icon-line2-camera h1"></i>
												<h3 class="card-title">Fashion</h3>
												<p class="card-text t400">With supporting text below as a natural lead-in to additional content.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="flip-card-back bg-danger no-after">
									<div class="flip-card-inner">
										<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>
										<button type="button" class="btn btn-outline-light mt-2"><a href="/productLists">View Details</a></button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 mb-4">
							<div class="flip-card text-center top-to-bottom">
								<div class="flip-card-front dark" style="background-image: url('{{asset('assets/demos/real-estate/images/hero/3.jpg')}}');">
									<div class="flip-card-inner">
										<div class="card nobg noborder text-center">
											<div class="card-body">
												<h3 class="card-title">Real-State Propery Here</h3>
												<p class="card-text t400">With supporting text below as a natural lead-in to additional content.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="flip-card-back" style="background-image: url('{{asset('assets/demos/real-estate/images/hero/2.jpg')}}');">
									<div class="flip-card-inner">
										<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>
										<button type="button" class="btn btn-outline-light mt-2"><a href="/propertyLists">View Details</a></button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 mb-4">
							<div class="flip-card text-center">
								<div class="flip-card-front dark" data-height-xl="505" style="background-image: url('{{asset('assets/demos/ecommerce/images/catagories/1.jpg')}}');">
									<div class="flip-card-inner">
										<div class="card nobg noborder text-center">
											<div class="card-body">
												<i class="icon-line2-briefcase h1"></i>
												<h3 class="card-title">Looking For Job???</h3>
												<p class="card-text t400">With supporting text below as a natural lead-in to additional content.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="flip-card-back" data-height-xl="505" style="background-image: url('{{asset('assets/demos/ecommerce/images/catagories/2.jpg')}}');">
									<div class="flip-card-inner">
										<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>
										<button type="button" class="btn btn-outline-light mt-2"><a href="/jobLists">View Details</a></button>
						</div>
					</div>
				</div>
						</div>

						<div class="col-lg-4 mb-4">
							<div class="flip-card text-center top-to-bottom">
								<div class="flip-card-front bg-info dark" data-height-xl="200">
									<div class="flip-card-inner">
										<div class="card nobg noborder text-center">
											<div class="card-body">
												<i class="icon-line2-check h1"></i>
												<h3 class="card-title">Autos,Parts,Computers</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="flip-card-back" data-height-xl="200" style="background-image: url('{{asset('assets/demos/ecommerce/images/catagories/3.jpg')}}');">
									<div class="flip-card-inner">
										<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>
										<button type="button" class="btn btn-outline-light mt-2"><a href="/autoLists">View Details</a></button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 mb-4">
							<div class="flip-card top-to-bottom">
								<div class="flip-card-front dark" data-height-xl="200" style="background-image: url('{{asset('assets/demos/car/images/single/911cars/11.jpg')}}');">
													<div class="flip-card-inner">
														<div class="card nobg noborder">
											<div class="card-body">
												<h3 class="card-title mb-0">Looking For Cars?</h3>
												<span class="font-italic">Choose Your one</span>
											</div>
										</div>
									</div>
								</div>
								<div class="flip-card-back" data-height-xl="200" style="background-image: url('{{asset('assets/demos/photography/images/items/2.jpg')}}');">
									<div class="flip-card-inner">
										<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>
										<button type="button" class="btn btn-outline-light mt-2"><a href="/car_list">View Details</a></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					{{--<div class="fancy-title title-center title-dotted-border topmargin-sm">--}}
						{{--<h3>Flip Card Carousel</h3>--}}
					{{--</div>--}}

					{{--<div class="owl-carousel image-carousel carousel-widget flip-card-wrapper clearfix" --}}
						 {{--data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3" style="overflow: visible;">--}}

						{{--<div class="flip-card">--}}
							{{--<div class="flip-card-front dark" style="background-image: url('{{asset('assets/demos/photography/images/items/18.jpg')}}')">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<div class="card nobg noborder">--}}
										{{--<div class="card-body">--}}
											{{--<h3 class="card-title mb-0">Trekking</h3>--}}
											{{--<span class="font-italic">Chiang Mai</span>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="flip-card-back bg-danger no-after">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>--}}
									{{--<button type="button" class="btn btn-outline-light mt-2">View Details</button>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}

						{{--<div class="flip-card">--}}
							{{--<div class="flip-card-front dark" style="background-image: url('{{asset('assets/demos/business/images/featured/2.jpg')}}');">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<div class="card nobg noborder">--}}
										{{--<div class="card-body">--}}
											{{--<h3 class="card-title mb-0">Flexible Workspace</h3>--}}
											{{--<span class="font-italic">Bali, Indonesia</span>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="flip-card-back" style="background-image: url('{{asset('assets/demos/business/images/featured/3.jpg')}}');">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>--}}
									{{--<button type="button" class="btn btn-outline-light mt-2">View Details</button>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}

						{{--<div class="flip-card">--}}
							{{--<div class="flip-card-front dark" style="background-image: url('{{asset('assets/demos/photography/images/items/8.jpg')}}');">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<div class="card nobg noborder">--}}
										{{--<div class="card-body">--}}
											{{--<h3 class="card-title mb-0">Wedding</h3>--}}
											{{--<span class="font-italic">London</span>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="flip-card-back" style="background-image: url('{{asset('assets/demos/photography/images/items/9.jpg')}}');">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>--}}
									{{--<button type="button" class="btn btn-outline-light mt-2">View Details</button>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}

						{{--<div class="flip-card">--}}
							{{--<div class="flip-card-front dark" style="background-image: url('{{asset('assets/demos/photography/images/items/3.jpg')}}');">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<div class="card nobg noborder">--}}
										{{--<div class="card-body">--}}
											{{--<h3 class="card-title mb-0">Beautiful Nature</h3>--}}
											{{--<span class="font-italic">New Zealand</span>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="flip-card-back" style="background-image: url('{{asset('assets/demos/photography/images/items/3.jpg')}}');">--}}
								{{--<div class="flip-card-inner">--}}
									{{--<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit.</p>--}}
									{{--<button type="button" class="btn btn-outline-light mt-2">View Details</button>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}

					{{--</div>--}}

				</div>
			</div>
		</section><!-- #content end -->

		@endsection