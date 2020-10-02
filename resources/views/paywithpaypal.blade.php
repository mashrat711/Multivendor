
<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>

<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=AQGjuaK_GIqRSIto72_1-yi__lYweB1CD0sH8bOR0K5CZzvKdPyRsFlUXiT1V4NljZ0US713Iawxq7KB"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01'
                    }
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
        }


    }).render('#paypal-button-container');
</script>
</body>
{{--<html>--}}
{{--<head>--}}
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="w3-container">--}}
    {{--@if ($message = Session::get('success'))--}}
        {{--<div class="w3-panel w3-green w3-display-container">--}}
            {{--<span onclick="this.parentElement.style.display='none'"--}}
                  {{--class="w3-button w3-green w3-large w3-display-topright">&times;</span>--}}
            {{--<p>{!! $message !!}</p>--}}
        {{--</div>--}}
        {{--<?php Session::forget('success');?>--}}
    {{--@endif--}}

    {{--@if ($message = Session::get('error'))--}}
        {{--<div class="w3-panel w3-red w3-display-container">--}}
            {{--<span onclick="this.parentElement.style.display='none'"--}}
                  {{--class="w3-button w3-red w3-large w3-display-topright">&times;</span>--}}
            {{--<p>{!! $message !!}</p>--}}
        {{--</div>--}}
        {{--<?php Session::forget('error');?>--}}
    {{--@endif--}}

    {{--<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"--}}
          {{--action="{!! URL::to('paypal') !!}">--}}
        {{--<div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>--}}
        {{--{{ csrf_field() }}--}}
        {{--<h2 class="w3-text-blue">Payment Form</h2>--}}
        {{--<p>Demo PayPal form - Integrating paypal in laravel</p>--}}
        {{--<label class="w3-text-blue"><b>Enter Amount</b></label>--}}
        {{--<input class="w3-input w3-border" id="amount" type="text" name="amount"></p>--}}
        {{--<button class="w3-btn w3-blue">Pay with PayPal</button>--}}
    {{--</form>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}