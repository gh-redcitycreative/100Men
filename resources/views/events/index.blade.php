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

	

	

@endsection
