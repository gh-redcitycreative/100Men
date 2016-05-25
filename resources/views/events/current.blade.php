@extends('layouts.app')

@section('content')
		
	<h1>{{ $currentEvent->title }}</h1>

	@foreach ($currentEvent->charities as $charity)
	<div class='charity'>
		<p></p>
		<p><a href="/charities/{{ $charity->id }}/delete" class="btn btn-danger pull-right"> Delete</a><a href="/charities/{{ $charity->id }}/edit" class="btn btn-warning pull-right" >Edit</a></p>
		<h4> {{ $charity->title }} </h4>
		<p> {{ $charity->body }} </p>
		<p>Total Votes: {{ $charity->votes->count() }}</p>
		<!-- button for voting  -->
		<form method="POST" action="/charities/{{ $charity->id }}/votes">
			<div class="form-group">
				{{ csrf_field() }}
				<a class="btn btn-primary" type="button" href="/charities/{{ $charity->id }}/voting">Vote</a>
			</div>
		</form>
	</div>	
		
		
	@endforeach	

@endsection


                   