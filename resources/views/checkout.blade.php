@extends('Frontend.Car.master')
@section('content')


	<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Checkout</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Shop</a></li>
					<li class="breadcrumb-item active" aria-current="page">Checkout</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Phoenix InterNational Group') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
							@endguest
					</ul>
				</div>
			</div>
		</nav>

		<main class="py-4">
			@yield('content1')
		</main>
	</div>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					{{--<div class="col_half">--}}
						{{--<div class="card">--}}
							{{--<div class="card-body">--}}
								{{--Returning customer? <a href="login-register.html">Click here to login</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="col_half col_last">--}}
						{{--<div class="card">--}}
							{{--<div class="card-body">--}}
								{{--Have a coupon? <a href="login-register.html">Click here to enter your code</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}

					<div class="clear"></div>

					<div class="row clearfix">

						<div class="col-lg-6">
							<h3>Billing Address</h3>
						<form id="" name="" class="nobottommargin" action="{{route('checkout.store')}}" method="post">
							@csrf


							{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. --}}
								{{--Unde, vel odio non dicta provident sint ex autem mollitia dolorem illu--}}
								{{--m repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>--}}



								<div class="col_half">
									<label for="billing-form-name">Name:</label>
									<input type="text" id="billing-form-name" name="first_name" value="" class="sm-form-control" />
								</div>

								<div class="col_half col_last">
									<label for="billing-form-lname">Last Name:</label>
									<input type="text" id="billing-form-lname" name="billing-form-lname" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="billing-form-companyname">Company Name:</label>
									<input type="text" id="billing-form-companyname" name="last_name" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<label for="billing-form-address">Address:</label>
									<input type="text" id="billing-form-address" name="address" value="" class="sm-form-control" />
								</div>

								{{--<div class="col_full">--}}
									{{--<input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />--}}
								{{--</div>--}}

								<div class="col_full">
									{{--<label for="billing-form-city">City / Town</label>--}}
									{{--<input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />--}}
								{{--</div>--}}
									<label for=""  class="block">City</label>
									<select name="city_id" id="">
										@foreach($cities as $key => $city)
											<option value="{{$key}}"> {{$city}}  </option>
										@endforeach
									</select>
									</div>

								{{--<div class="col_half">--}}
									{{--<label for="billing-form-email">Email Address:</label>--}}
									{{--<input type="email" id="" name="email" value="" class="sm-form-control" />--}}
								{{--</div>--}}

								{{--<div class="col_half col_last">--}}
									{{--<label for="billing-form-phone">Phone:</label>--}}
									{{--<input type="text" id="" name="phone" value="" class="sm-form-control" />--}}
								{{--</div>--}}
							<div class="col_full">
								<label for="billing-form-companyname">Email:</label>
								<input type="text" id="billing-form-companyname" name="email" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<label for="billing-form-address">Phone:</label>
								<input type="text" id="billing-form-address" name="phone" value="" class="sm-form-control" />
							</div>

							{{--</form>--}}
						</div>
						<div class="col-lg-6">
							<h3 class="">Shipping Address</h3>

							{{--<form id="shipping-form" name="shipping-form" class="nobottommargin" action="#" method="post">--}}

								<div class="col_half">
									<label for="shipping-form-name">Name:</label>
									<input type="text" id="shipping-form-name" name="shipping-form-name" value="" class="sm-form-control" />
								</div>

								<div class="col_half col_last">
									<label for="shipping-form-lname">Last Name:</label>
									<input type="text" id="shipping-form-lname" name="shipping-form-lname" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="shipping-form-companyname">Company Name:</label>
									<input type="text" id="shipping-form-companyname" name="company_name" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<label for="shipping-form-address">Address:</label>
									<input type="text" id="shipping-form-address" name="shipping-form-address" value="" class="sm-form-control" />
								</div>

								{{--<div class="col_full">--}}
									{{--<input type="text" id="shipping-form-address2" name="shipping-form-adress" value="" class="sm-form-control" />--}}
								{{--</div>--}}

								<div class="col_full">
									<label for=""  class="block">City</label>
									<select name="city_id" id="">
										@foreach($cities as $key => $city)
											<option value="{{$key}}"> {{$city}}  </option>
										@endforeach
									</select>
								</div>
							<div class="col_full">
								<label for="shipping-form-companyname">Company Name:</label>
								<input type="text" id="shipping-form-companyname" name="company_name" value="" class="sm-form-control" />
							</div>
							<div class="col_full">
								<label for="billing-form-companyname">Email:</label>
								<input type="text" id="billing-form-companyname" name="email" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<label for="billing-form-address">Phone:</label>
								<input type="text" id="billing-form-address" name="phone" value="" class="sm-form-control" />
							</div>
								{{--<div class="col_full">--}}
									{{--<label for="shipping-form-message">Notes <small>*</small></label>--}}
									{{--<textarea class="sm-form-control" id="shipping-form-message" name="shipping-form-message" rows="6" cols="30"></textarea>--}}
								{{--</div>--}}


						</div>

						<div class="w-100 bottommargin"></div>
						<div class="col-lg-6">
							<h4>Your Orders</h4>

							<div class="table-responsive">
								<table class="table cart">
									<thead>
										<tr>
											<th class="cart-product-thumbnail">&nbsp;</th>
											<th class="cart-product-name">Product</th>
											<th class="cart-product-quantity">Quantity</th>
											<th class="cart-product-subtotal">Total</th>
										</tr>
									</thead>
									<tbody>
									@foreach( $cartCollection as $data)
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="/images/{{ $data->attributes->image }}" alt="Pink Printed Dress"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">{{$data->name}}</a>
											<input type="hidden" name="product_id" value="{{$data->id}}">
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													{{$data->quantity}}
													<input type="hidden" name="quantity" value="{{$data->quantity}}">
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">{{$data->price}}</span>
												<input type="hidden" name="price" value="{{$data->price}}">
											</td>
										</tr>

										@endforeach
									</tbody>

								</table>
							</div>
						</div>
						<div class="col-lg-6">
							<h4>Cart Totals</h4>

							<div class="table-responsive">
								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="notopborder cart-product-name">
												<strong>Cart Subtotal</strong>
											</td>

											<td class="notopborder cart-product-name">
												<span class="amount">${{ \Cart::getTotal() }}</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Shipping</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">Free Delivery</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Total</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount color lead"><strong>${{ \Cart::getTotal() }}</strong></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="accordion clearfix">
								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Direct Bank Transfer</div>
								<div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Cheque Payment</div>
								<div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

								<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Paypal</div>
								<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>
							</div>
							<button type="submit">Submit</button>
							{{--<a href="#" class="button button-3d fright">Place Order</a>--}}
						</div>
</form>
					</div>
				</div>
			</div>

		</section><!-- #content end -->

@endsection