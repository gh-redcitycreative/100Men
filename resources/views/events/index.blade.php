@extends('layouts.app')

@section('content')
	
	<h1>All Events</h1>
	

	@foreach ($events as $event)
	<div class="event">
	@if($event->id == $currentEvent->id )
			
			<a href="#" class='btn btn-danger pull-right'>Current Event</a>
			<a href="/events/{{ $event->id }}/passcode" class='btn btn-danger pull-right'>show passcode</a>
		@else
			<a href="/event/{{ $event->id }}/current" class='btn btn-primary pull-right'>Make Current Event</a>
		@endif
		<h3><a href="/events/{{ $event->id }}" class="current-event">{{ $event->title }}</a></h3>
		<p><strong>Event details</strong></p>
		<p>{{ $event->location }} <br> {{$event->start_time}}</p>
		<p><strong>Charities</strong></p>
		@if(count($event->charities) > 0)
			
			@foreach($event->charities as $charity)
					<p>{{ $charity->title}}</p>
								

			@endforeach
			@if(count($event->charities) < 3)
				<p><a href="/events/{{ $event->id }}" class="current-event">Add More Charities</a></p>
			@endif
		@else
		<p><mark>No Charities have been added to event</mark></p>
		<p><a href="/events/{{ $event->id }}" class="current-event">Add Charities</a></p>	
		@endif
		
	</div>
	@endforeach

	

	

@endsection
