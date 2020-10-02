@extends('Frontend.Job.master')
@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Jobs</h1>
				<span>Forms Widget</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Widgets</a></li>
					<li class="breadcrumb-item active" aria-current="page">Jobs Form</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-6">
								<form class="row" action="{{route('jobApplicants.store')}}" method="post" encType ="multipart/form-data">
									@csrf
									<div class="form-process"></div>
									<div class="col-12 form-group">
										<label>First Name:</label>
										<input type="text" name="first_name" id="jobs-application-name" class="form-control required" value="" placeholder="Enter your Full Name">
									</div>
									<div class="col-12 form-group">
										<label>Last Name:</label>
										<input type="text" name="last_name" id="jobs-application-name" class="form-control required" value="" placeholder="Enter your Full Name">
									</div>
									<div class="col-12 form-group">
										<label>Email:</label>
										<input type="email" name="email" id="jobs-application-email" class="form-control required" value="" placeholder="Enter your Email">
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-md-6 form-group">
												<label>Phone:</label>
												<input type="text" name="phone" id="jobs-application-phone" class="form-control required"
													   value="" placeholder="Enter your Phone">
											</div>
											<div class="col-md-6 form-group">
												<label>Location:</label>
												<input type="text" name="address" id="jobs-application-location" class="form-control" value="" placeholder="Enter your City as Location">
											</div>
											<div class="w-100"></div>


											<div class="w-100"></div>
											{{--<div class="col-md-6 form-group">--}}
												{{--<label>Type:</label>--}}
												{{--<select class="form-control required" name="jobs-application-type" id="jobs-application-type">--}}
													{{--<option value="">-- Select One --</option>--}}
													{{--<option value="Part-Time">Part-Time</option>--}}
													{{--<option value="Full-Time">Full-Time</option>--}}
													{{--<option value="Internship">Internship</option>--}}
													{{--<option value="Freelance">Freelance</option>--}}
												{{--</select>--}}
											{{--</div>--}}
											<div class="col-md-6 form-group">
												<label>Experience:</label>
												<select class="form-control required" name="jobs-application-experience" id="jobs-application-experience">
													<option value="">-- Select One --</option>
													<option value="Less than 1 Year">Less than 1 Year</option>
													<option value="1-4 Years">1-4 Years</option>
													<option value="4-7 Years">4-7 Years</option>
													<option value="7+ Years">7+ Years</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label>Upload CV:</label>
											<input type="file" id="jobs-application-resume" name="cv" class="file-loading required" data-show-preview="false" />
										</div>
										<div class="form-group">
											<label>Website(if Any):</label>
											<input type="text" name="phone" id="jobs-application-phone" class="form-control required"
												   value="" placeholder="">
										</div>
									</div>

									<div class="col-12">
										<button type="submit"  class="btn btn-secondary">Send Message</button>
									</div>

									<input type="hidden" name="prefix" value="jobs-application-">
								</form>
							</div>

							<div class="col-lg-6 pl-lg-5">
								<p><span class="dropcap">F</span>oster best practices effectiveness inspire breakthroughs solve immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process inclusive innovate readiness, public sector complexity. Lifting people up cornerstone partner, technology working families civic engagement activist recognize potential global network. Countries tackling solution respond change-makers tackle. Assistance, giving; fight against malnutrition experience in the field lasting change scalable. Empowerment long-term, fairness policy community progress social responsibility; Cesar Chavez recognition. Expanding community ownership visionary indicator pursue these aspirations accessibility. Achieve; worldwide, life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise vaccine Jane Jacobs community health workers Oxfam. Our ambitions informal economies.</p>

								<blockquote class="topmargin bottommargin">
									<p>Human rights healthcare immunize; advancement grantees. Medical supplies; meaningful, truth technology catalytic effect. Promising development capacity building international enable poverty.</p>
								</blockquote>

								<div class="col_full nobottommargin">

									<p>Provide, Aga Khan, interconnectivity governance fairness replicable, new approaches visionary implementation. End hunger evolution, future promising development youth. Public sector, small-scale farmers; harness facilitate gender. Contribution dedicated global change movements, prosperity accelerate progress citizens of change. Elevate; accelerate reduce child mortality; billionaire philanthropy fluctuation, plumpy'nut care opportunity catalyze. Partner deep.</p>

								</div>

								<div class="col_full nobottommargin">

									<p>Frontline harness criteria governance freedom contribution. Campaign Angelina Jolie natural resources, Rockefeller peaceful philanthropy human potential. Justice; outcomes reduce carbon emissions nonviolent resistance human being. Solve innovate aid communities; benefit truth rural development UNICEF meaningful work. Generosity Action Against Hunger relief; many voices impact crisis situation poverty pride. Vaccine carbon.</p>

								</div>

								<div class="clear"></div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->




		@endsection
