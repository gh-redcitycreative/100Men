@extends('layouts.app')

@section('header')
<header>
	<div class="container">
		<h1>Donate Now</h1>
	</div>
</header>

@endsection


@section('content')
	<div class="container text-center">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5 welcomelogo">
                <img src="/images/100-Men-Logo-White.png" alt="#">
            </div>
        </div>
	
		<div class="row">
			<div class="col-xs-12">
				<br>
				<form action="/stripe/payment" method="POST">
				 {{ csrf_field() }}
				  <script
				    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				    data-key="pk_live_g5a87a8s4QtIcze6ZBpugphR"
				    data-amount="10300" 
				    data-name="100 Men Who Give A Damn Society Of Alberta"
				    data-description="Charity Donation"
				    data-image="https://s3.amazonaws.com/stripe-uploads/acct_17lPfaBU2zDDaeommerchant-icon-1457124321408-600x600.png"
				    data-label="Donate with Card"
				    data-locale="auto"
				    data-currency="cad">
				  </script>
				</form>
			</div>
		</div>	
			<div class="row ">
			<div class="col-xs-12">
				<h2>Online Donations</h2>
				<p>Note: 100 Men Calgary now accepts your donations directly, holds them for the charity, and provides one lump sum donation to the charity that includes a list of people that make up that donation.</p>
				<p>As such, we have added $3.30 for credit card processing costs on top of the $100 donation. This ensures that your $100 makes it to the receiving charity and that you get a tax receipt for it.</p>
			</div>
		</div>
	</div>
@endsection