@extends('Frontend.Real-state.master')
@section('content')

	<!-- Slider
		============================================= -->
	<section id="slider" class="slider-element dark parallax clearfix" style="background-image: url('{{asset("images/Real-state/$property->cover_image")}}'); background-size: cover; height: 550px;" data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -200px;">

		<div class="container clearfix" style="z-index: 2;">
			<div class="real-estate-info-wrap">
				<div class="heading-block nobottommargin nobottomborder d-md-flex d-block align-items-center justify-content-between">
					<h2 class="mr-auto">{{$property->title}} / <span class="h5 text-info">{{$property->type}} </span></h2>
					<div class="d-flex flex-shrink-1" data-lightbox="gallery">
						<a href="{{asset("images/Real-state/$property->image1")}}" class="button button-color button-rounded nott nomargin t500 align-self-end" data-lightbox="gallery-item"><i class="icon-picture"></i> View Gallery</a>
						<a href="{{asset("images/Real-state/$property->image2")}}" class="hidden" data-lightbox="gallery-item"></a>
						<a href="{{asset("images/Real-state/$property->image3")}}" class="hidden" data-lightbox="gallery-item"></a>
						<a href="https://www.youtube.com/watch?v=GU58qaKmZhQ" data-lightbox="iframe" class="button button-color button-rounded nott t500 align-self-end my-0 ml-2"><i class="icon-play"></i> Play Video</a>
					</div>
				</div>
				<div class="real-estate-price mb-md-0 mb-lg-4 mb-xl-0"><h3>$120<span class="text-light h6">/day</span></h3></div>
			</div>
		</div>
		<div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%;z-index: 1">
			<div class="video-overlay" style="background:linear-gradient(180deg,rgba(0,0,0,.3) 0,transparent 40%,transparent 60%,rgba(0,0,0,.8));"></div>
		</div>

	</section><!-- #slider end -->

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap notoppadding">

			<div class="section notopmargin" style="padding: 30px 0">
				<div class="container clearfix">
					<div class="row">
						{{--<div class="col-md-2 col-6 center">--}}
							{{--<img src="{{asset('assets/images/Real-state/images/user.jpg')}}" alt="" class="img-circle" style="width: 60px; height: 60px;">--}}
							{{--<h5 class="my-2"><a href="#">P. Robert/<span class="text-muted t400" style="font-family: 'Roboto'">Host</span></a></h5>--}}
						{{--</div>--}}
						<div class="col-md-2 col-6 center">
							<i class="icon-realestate-rent i-plain i-xlarge divcenter nobottommargin"></i>
							<h5 class="my-1">Rental Only</h5>
						</div>
						<div class="col-md-2 col-6 center">
							<i class="icon-realestate-bed i-plain i-xlarge divcenter nobottommargin"></i>
							<h5 class="my-1">{{$property->bed}}  Bedrooms</h5>
						</div>
						<div class="col-md-2 col-6 center">
							<i class="icon-realestate-plan2 i-plain i-xlarge divcenter nobottommargin"></i>
							<h5 class="my-1">{{$property->area}}  SqFt.</h5>
						</div>
						<div class="col-md-2 col-6 center">
							<i class="icon-realestate-bathtub i-plain i-xlarge divcenter nobottommargin"></i>
							<h5 class="my-1">{{$property->bath}}  Bathrooms</h5>
						</div>
						<div class="col-md-2 col-6 center">
							<i class="icon-realestate-garage2 i-plain i-xlarge divcenter nobottommargin"></i>
							<h5 class="my-1">Garage</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="container clearfix">

				<div class="postcontent nobottommargin clearfix">
					<p>{{$property->description ?? ""}}</p>

					<h4 class="nobottommargin topmargin">Sepicification</h4>
					<div class="line line-sm mt-1 mb-3"></div>
					<div class="row clearfix">
						<div class="col-md-4">
							<ul class="iconlist">
								<li class="mb-1"><i class="icon-line2-check"></i>Construction year: {{$property->construction_year ?? ""}} </li>
								<li class="mb-1"><i class="icon-line2-check"></i>Square Areas:{{$property->area ?? ""}} </li>
								<li class="mb-1"><i class="icon-line2-check"></i>Living rooms: {{$property->living_room ?? ""}} </li>
								<li class="mb-1"><i class="icon-line2-check"></i>Bathrooms: {{$property->bath ?? ""}}</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="iconlist">
								<li class="mb-1"><i class="icon-line2-check"></i>Bedrooms: {{$property->bed?? ""}}</li>
								<li class="mb-1"><i class="icon-line2-check"></i>Balconies: {{$property->balcony ?? ""}}</li>
								<li class="mb-1"><i class="icon-line2-check"></i>Car Parking: {{$property->car_parking ?? ""}}</li>
								<li class="mb-1"><i class="icon-line2-check"></i>Total Floors: {{$property->total_floor ?? ""}}</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="iconlist">
								<li class="mb-1"><i class="icon-line2-check"></i>Kitchens: {{$property->kitchen ?? ""}}</li>
								<li class="mb-1"><i class="icon-line2-check"></i>Garages: 1</li>
								<li class="mb-1"><i class="icon-line2-check"></i>Pools: {{$property->pool ?? ""}}</li>
								<li class="mb-1"><i class="icon-line2-check"></i>Insurance: {{$property->insurance ?? ""}}</li>
							</ul>
						</div>
					</div>

					<h4 class="nobottommargin mt-3">Amenities</h4>
					<div class="line line-sm mt-1 mb-3"></div>
					<div class="row clearfix">
						<div class="col-md-4">
							<ul class="iconlist">
								<li class="mb-1"><i class="icon-realestate-garage2"></i>Parking/Garage</li>
								<li class="mb-1"><i class="icon-realestate-realtor"></i>Porter/security</li>
								<li class="mb-1"><i class="icon-realestate-air-conditioning"></i>Air Conditioning</li>
								<li class="mb-1"><i class="icon-realestate-washing-machine"></i>Washer</li>
								<li><i class="icon-realestate-tv"></i>Television</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="iconlist">
								<li class="mb-1"><i class="icon-realestate-balcony"></i>Balcony/terrace</li>
								<li class="mb-1"><i class="icon-realestate-fireplace"></i>Fireplace</li>
								<li class="mb-1"><i class="icon-realestate-restaurant"></i>Barbeque</li>
								<li class="mb-1"><i class="icon-realestate-ventilation"></i>Ventilation</li>
								<li><i class="icon-realestate-shower"></i>Outdoor Shower</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="iconlist">
								<li class="mb-1"><i class="icon-realestate-wood"></i>Garden</li>
								<li class="mb-1"><i class="icon-realestate-barrow"></i>Rural/secluded</li>
								<li class="mb-1"><i class="icon-realestate-vacuum-cleaner"></i>Microwave</li>
								<li><i class="icon-realestate-phone2"></i>Intercom</li>
								<li><i class="icon-realestate-parking"></i>Parking</li>
							</ul>
						</div>
					</div>

					<p class="mt-3">Put this magnificent property on the top of your list, oozing quality from the moment you enter through the unique brick portico into the Tuscan style courtyard with Mural and vertical garden.. *Floors of European oak and parquetry *Award winning kitchen with limed solid American oak, bevelled glass cabinets, polished marble bench tops and separate scullery *Bi folds doors open out to the sun filled courtyard *Elegant lounge which also includes a drop down screen for a home theatre *Guest bedroom or an ideal home office Throughout this incredible residence you will find a vast array of imported features. Doors and fittings from France, stained glass windows from Europe. Wine cellar under the staircase. Upper level: Elegant master bedroom with balcony, ensuite with Emperador Scuro marble bench tops, mirrors with bevelled glass and American cherry frames. A most spacious dressing room...every woman's dream! Many fixtures have been especially commissioned, including the stand alone bath in the second bathroom, light switches and power points, door hardware is all imported from France. Even the grandchildren are catered for with their own space built into the roof area. An ideal cubby! The home has another two bedrooms with built in robes. *Quality fixtures and fittings *Reverse cycle air conditioning *Security alarm and intercom Designed by Award winner Peter Fryer this landmark Centro residence will impress and delight...a viewing is a must! Contact Susan Taylor on 0417 771 112 or Trevor Neil 0438 354 556 your private viewing.</p>

					<div class="line"></div>


				</div>
				@if($errors->any())
					@foreach($errors->all() as $error)
						<div class="alert alert-danger"> {{$error}} </div>
					@endforeach
				@endif
				<div class="sidebar sticky-sidebar-wrap nobottommargin col_last clearfix">

					<div class="sidebar-widgets-wrap">

						<div class="sticky-sidebar">

							<div class="widget quick-contact-widget form-widget clearfix">

								<div class="card bg-light">
									<div class="card-header">Reserve Now</div>
									<div class="card-body">
										<div class=""></div>
										<form action="{{route('reserves.store')}}" method="post" class="quick-contact-form nobottommargin">
											@csrf

											<label for=""  class="block">Property Name</label>
											<select name="property_id" class="required sm-form-control input-block-level" id="">
												@foreach($pros as $key => $pro)
													<option value="{{$key}}"> {{$pro}}  </option>
												@endforeach
											</select>
											<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name"
												   name="name" value="" placeholder="Full Name" />
											<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email"
												   name="email" value="" placeholder="Email Address" />
											<input type="number" class="required sm-form-control number input-block-level" id="quick-contact-form-number"
												   name="phone" value="" placeholder="Phone Number" />
											<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message"
													  name="message" rows="4" cols="30" placeholder="Message"></textarea>
											{{--<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />--}}
											{{--<input type="hidden" name="prefix" value="quick-contact-form-">--}}
											{{--<button type="submit" id="" name="quick-contact-form-submit" class="button  button-rounded btn-block nomargin" --}}
													{{--value="submit">Book Now</button>--}}
											<button type="submit"
													>Book Now</button>
										</form>
									</div>
								</div>

							</div>

							{{--<div class="widget clearfix">--}}
								{{--<h4>Map</h4>--}}
								{{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8401081815946!2d144.9537363153534!3d-37.81721397975177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1513601296579" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
							{{--</div>--}}

							<div class="widget clearfix">
								<h4>Video</h4>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/GU58qaKmZhQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							</div>

							<div class="widget clearfix">
								<h4>Share</h4>
								<div>
									<a href="#" class="social-icon si-colored si-small si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-colored si-small si-rounded si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-colored si-small si-rounded si-pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<a href="#" class="social-icon si-colored si-small si-rounded si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
									<a href="#" class="social-icon si-colored si-small si-rounded si-rss">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#" class="social-icon si-colored si-small si-rounded si-instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="clear topmargin"></div>



		</div><!-- .content-wrap end -->

	</section><!-- #content end -->

@endsection