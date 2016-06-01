@extends('layouts.app')

@section('header')
   <header>
        <div class="container">

			<h1>{{ $currentEvent->title }}</h1>
			<h4 class=page-sub-title>Charity Nominees</h4>
		</div>
	</header>
@endsection







@section('content')
	<h2 class="lead">Thank you for coming <br>this evening!</h2>
	<p class="lead text-center">Here are your nominees, once voting has begun we will display the secret word so that you can submit your vote.</p>

		<form method="POST" action="/events/{{ $currentEvent->id }}/check-in">
		<div class="form-grou text-center">
			{{ csrf_field() }}
			<button type="submit" class="btn btn-primary">Check-in</a>
		</div>
	</form>


	@foreach ($currentEvent->charities as $charity)
	
	<div class='charity'>
		<div class="row ">
			<div class="col-xs-12 col-sm-3 charity-logo">
			
					<img src='{{ asset($charity->thumbnail) }}'>
				
				<!-- <img class='' src="/images/imgres.png" alt="#"> -->
			</div>
			<div class="col-xs-12 col-sm-9 charity-description">
				@if (Auth::user()->admin == 'admin')
					<p><a href="/charities/{{ $charity->id }}/delete" class="btn btn-danger pull-right"> Delete</a><a href="/charities/{{ $charity->id }}/edit" class="btn btn-warning pull-right" >Edit</a></p>
				@endif
				<h4> {{ $charity->title }} </h4>
				<h5> <a href="#">www.kickstarter.com</a></h5>
				<p > {{ $charity->body }} </p>
				@if($currentEvent->votes()->count() != 0)
					<p>Total Votes: {{ $charity->votes->count() }}</p>
				@endif
				<!-- button for voting  -->
				@if($currentEvent->votes()->where('votes.user_id', $user)->count() == 0)
					<!-- <form method="POST" action="/charities/{{ $charity->id }}/votes">
						<div class="form-group">
							{{ csrf_field() }} -->
							<a class="btn btn-primary vote" type="button" href="/charities/{{ $charity->id }}/voting">Vote</a>
					<!-- 	</div>
					</form> -->
				@endif

			</div>

		</div>
	</div>

		
	@endforeach	

@endsection


                   