@extends('Frontend.Car.master')
@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark" style="padding: 160px 0;">

			<div class="container clearfix" style="z-index: 9;">
				<h1>Get in Touch</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Cars</a></li>
					<li class="breadcrumb-item active" aria-current="page">contact</li>
				</ol>
			</div>

			<div id="page-title-gmap" class="gmap-bg gmap" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

			<div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%;">
				<div class="video-overlay" style="background-color: rgba(0,0,0,0.6);"></div>
			</div>

		</section><!-- #page-title end -->


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="heading-block">
								<h2>contact Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum tempore autem distinctio qui iure aspernatur doloribus porro blanditiis perspiciatis alias.</p>
							</div>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="nobottommargin" id="" name="" action="{{route('car_contacts.store')}}" method="post">

									<div class="form-process"></div>

									<div class="col_one_third">
										<label for="template-contactform-name">Name <small>*</small></label>
										<input type="text"  id="template-contactform-name" name="name" value="" class="sm-form-control border-form-control required" />
									</div>

									<div class="col_one_third">
										<label for="template-contactform-email">Email <small>*</small></label>
										<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control border-form-control" />
									</div>

									<div class="col_one_third col_last">
										<label for="template-contactform-phone">Phone</label>
										<input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control border-form-control" />
									</div>

									<div class="clear"></div>

									<div class="col_two_third">
										<label for="template-contactform-subject">Subject <small>*</small></label>
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" />
									</div>

									{{--<div class="col_one_third col_last">--}}
										{{--<label for="template-contactform-service">Services</label>--}}
										{{--<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control custom-select border-form-control">--}}
											{{--<option value="">-- Select One --</option>--}}
											{{--<option value="Wordpress">Wordpress</option>--}}
											{{--<option value="PHP / MySQL">PHP / MySQL</option>--}}
											{{--<option value="HTML5 / CSS3">HTML5 / CSS3</option>--}}
											{{--<option value="Graphic Design">Graphic Design</option>--}}
										{{--</select>--}}
									{{--</div>--}}

									<div class="clear"></div>

									<div class="col_full">
										<label for="template-contactform-message">Message <small>*</small></label>
										<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="message" rows="5" cols="30"></textarea>
									</div>

									<div class="col_full hidden">
										<input type="text" id="" name="" value="" class="sm-form-control border-form-control" />
									</div>

									<div class="col_full">

										<script src="https://www.google.com/recaptcha/api.js" async defer></script>
										<div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT"></div>

									</div>

									<div class="col_full">
										<button class="button button-3d nomargin" type="submit"  value="submit">Send Message</button>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">
									{{--<button type="submit">Submit</button>--}}
								</form>

							</div>
						</div>

						<div class="col-md-4">
							<div class="card mt-4">
								<img class="card-img-top" src="{{asset('assets/demos/car/images/call.jpg')}}" alt="Card image cap">
								<div class="card-body">
									<h4 class="mb-1 color">Call Toll Free:</h4>
									<h2 class="card-title mb-2"><i class="icon-phone-sign position-relative mr-1 color" style="top: 4px;"></i> 1800(2345)(6789)</h2>
									<p class="card-text">We are 24/7 available. Our expert staff is standing by to answer your questions. You can also contact by email: <a class="btn-link" href="mailto:noreply@canvas.com">noreply@canvas.com</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #content end -->
@endsection