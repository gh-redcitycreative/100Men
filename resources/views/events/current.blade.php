@extends('layouts.app')

@section('content')
		
	<h1>{{ $currentEvent->title }}</h1>


	<form method="POST" action="/events/{{ $currentEvent->id }}/check-in">
		<div class="form-group">
			{{ csrf_field() }}
			<button typoe="submit" class="btn btn-primary">Check-in</a>
		</div>
	</form>

	@foreach ($currentEvent->charities as $charity)

	<div class='charity'>
		@if (Auth::user()->admin == 'admin')
			<p><a href="/charities/{{ $charity->id }}/delete" class="btn btn-danger pull-right"> Delete</a><a href="/charities/{{ $charity->id }}/edit" class="btn btn-warning pull-right" >Edit</a></p>
		@endif
		<h4> {{ $charity->title }} </h4>
		<p> {{ $charity->body }} </p>
		@if($currentEvent->votes()->count() != 0)
			<p>Total Votes: {{ $charity->votes->count() }}</p>
		@endif
		<!-- button for voting  -->
		@if($currentEvent->votes()->where('votes.user_id', $user)->count() == 0)
			<form method="POST" action="/charities/{{ $charity->id }}/votes">
				<div class="form-group">
					{{ csrf_field() }}
					<a class="btn btn-primary" type="button" href="/charities/{{ $charity->id }}/voting">Vote</a>
				</div>
		@endif

		</form>
	</div>
		
	@endforeach	

@endsection


                   