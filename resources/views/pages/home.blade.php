@extends('template')


@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>Welcome to 100MenYYC!</h1>
			<p>Thanks for Coming to our Event</p>
			
			<h2>Have you checked in yet?</h2>
			<a href="/returning-member" class="btn btn-primary">Returning Member</a>
			<a href="/new-member" class="btn btn-danger">New Member</a>
		</div>	
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>voting time!</h2>
			<a href="/secret-code" class="btn btn-primary">
				enter the secret code
			</a>
		</div>
	</div>

	
@endsection