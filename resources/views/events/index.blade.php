@extends('layouts.app')

@section('content')
	
	<h1>All Events</h1>
	

	@foreach ($events as $event)

		<div>
			<a href="/events/{{ $event->id }}">{{ $event->title }}</a>
		</div>

	@endforeach

	<h3>Add an Event</h3>



		<form method="Post" action="/events/add">
				{{ csrf_field() }}
				<input placeholder="title" name="title">
				<input placeholder="passcode" name="passcode">
				<input placeholder="event_date" name="event_date">
				<input placeholder="start_time" name="start_time">
				<input placeholder="location" name="location">
				

				<button type="submit">Add Event</button>
		</form>


@endsection
