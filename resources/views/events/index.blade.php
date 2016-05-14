@extends('template')

@section('content')
	
	<h1>All Events</h1>
	

	@foreach ($events as $event)

		<div>
			{{ $event->title }}
		</div>

	@endforeach

	<h3>Add an Event</h3>
	<form method="Post" action="/Events/{{ $event->id }}">
			<input placeholder="title" name="title">
			<input placeholder="passcode" name="passcode">
			<input placeholder="event_date" name="event_date">
			<input placeholder="start_time" name="start_time">
			<input placeholder="location" name="location">

			<button type="submit">Add Event</button>
	</form>
	

@endsection
