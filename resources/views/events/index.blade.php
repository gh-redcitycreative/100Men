@extends('layouts.app')

@section('content')
	
	<h1>All Events</h1>
	

	@foreach ($events as $event)
	<div class="event">
		@if($event->id == $currentEvent->id )
			<a href="/events/{{ $event->id }}" class="current-event">{{ $event->title }}</a>
			<a href="#" class='btn btn-danger pull-right'>Current Event</a>
			<a href="/events/{{ $event->id }}/passcode" class='btn btn-danger pull-right'>show passcode</a>
		@else
			<a href="/events/{{ $event->id }}">{{ $event->title }}</a>
			<a href="/event/{{ $event->id }}/current" class='btn btn-primary pull-right'>Make Current Event</a>
		@endif
	</div>
	@endforeach

	


	<h2>current event</h2>
	<p>{{ $currentEvent->title }} </p>



	<h3>Add an Event</h3>



		<form method="Post" action="/events/add">
				{{ csrf_field() }}
				<input type="text" placeholder="title" name="title">
				<input type="text" placeholder="passcode" name="passcode">
				<input type="text" placeholder="start time" name="start_time">
				<input type="text" placeholder="location" name="location">
				

				<button class='btn btn-primary' type="submit">Add Event</button>
		</form>


@endsection
