@extends('Frontend.Car.master')
@section('content')

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{asset('assets/demos/car/images/hero-slider/4.jpg')}}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Car Listing</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Cars</a></li>
					<li class="breadcrumb-item active" aria-current="page">Listing</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content" class="clearfix" style="overflow: visible">

			<div class="content-wrap notoppadding">

				<div class="container">

					<div class="card p-4 shadow" style="top: -60px;">
						<form action="{{route('carByCategory')}}" method="post" class="nobottommargin">
							@csrf
							<div class="row clearfix">
								<div class="col-md-2 col-sm-12">
									<label for="" class="d-block">Type</label>
									<input class="bt-switch" name='type' type="checkbox" checked data-on-text="New" data-off-text="Used" data-on-color="themecolor" data-off-color="themecolor">
								</div>
								<div class="col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
									<label for=""  class="block">Brand Name</label>
									<select class="selectpicker form-control customjs" name="car_brand_id" id="">
										@foreach($carBrand  as $key => $brand)
											<option value="{{$key}}"> {{$brand}}  </option>
										@endforeach
									</select>
								</div>
								<div class="col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
									<div class="col-sm-6">
										<label for=""  class="block">Modal Name</label>
										<select class="selectpicker customjs form-control" name="car_model_id" id="">
											@foreach($carModel as $key => $student)
												<option value="{{$key}}"> {{$student}}  </option>
											@endforeach
										</select>
									</div>
								</div>
							<div class="col-md-2 col-sm-6 col-6">
								<button class="button button-3d button-rounded btn-block noleftmargin" style="margin-top: 29px;">Search</button>
							</div>

							</div>
						</form>
					</div>

				</div>

				<div class="section nomargin pt-0 nobg">
					<div class="container clearfix">

						<!-- Portfolio Filter
						============================================= -->
						<ul class="portfolio-filter style-2 clearfix" data-container="#portfolio">
							@foreach($carTypes as $carType)
								<li><a href="#" data-filter=".cf-{{$carType}}"><i class="icon-car-cuv"></i><span>{{$carType}}</span></a></li>
							@endforeach
							<!-- Show All Button -->
							 <li class="fright activeFilter"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
						</ul> <!-- #portfolio-filter end -->

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">

							@foreach($cars as $car)
							<!-- Car 1 -->
							<article class="portfolio-item cf-{{$car->type}}" style="padding-bottom: 40px">
								<div class="portfolio-image">
									<a href="{{route('car_specifications.show',$car->id)}}">
										<img src="{{asset('assets/demos/car/images/filter-cars/1.jpg')}}" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">${{$car->price}}</span>
											<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">{{$car->carModel->title}}</a></h3>
									<span>{{$car->short_description}}</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> {{$car->acceleration}}</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> {{$car->seat}} Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span>{{$car->power_kw}}</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> {{$car->system}}</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> {{$car->length}}Inch</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span>{{$car->min_year}}</span></div>
								</div>
							</article>
							@endforeach


						</div>
					</div>
				</div>

				<div class="section center nbottomomargin mt-3 footer-stick" style="padding:80px 0 ">
					<div class="container clearfix">
						<h3 class="font-primary">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
						<a href="contact.html" class="button button-color button-large button-rounded">Contact Now</a>
					</div>
				</div>

			</div>

		</section><!-- #content end -->
@endsection