@extends('layouts.app')

@section('content')
	
	<h1>All Events</h1>

@include ('flash')

	@foreach ($events as $event)
	<div class="event row">


		<div class="col-xs-6">



			<h3><a href="/events/{{ $event->id }}" class="current-event">{{ $event->title }}</a>
			</h3>

			<h4 class="text-muted">Event details</h4>
			<address>
				<strong>{{ $event->location }}</strong><br> 
				{{$event->start_time}}
			</address>
			<h4>Charities</h4>
			@if(count($event->charities) > 0)
				@foreach($event->charities as $charity)
						<p>{{ $charity->title}}</p>
				@endforeach
				@if(count($event->charities) < 3)
					<p><a href="/events/{{ $event->id }}" class="current-event">Add More Charities</a></p>
				@endif
			@else
				<p class="text-muted">No Charities have been added to event</p>
				<p><a href="/events/{{ $event->id }}" class="current-event">Add Charities</a></p>	
			@endif
		</div>
		<div class="col-xs-6">

		<p class="text-right clearfix">
			@if($event->id == $currentEvent->id )
				@else
					<a role="button" href="/events/{{ $event->id }}/delete" class="btn btn-danger pull-right"> 
						Delete
					</a>
				@endif

				<a role="button" href="/events/{{ $event->id }}/edit" class="btn btn-warning pull-right">
					Edit
				</a>
			</p>

			<p class="text-right">
				@if($event->id == $currentEvent->id )
					<a href="#" class='btn btn-danger'>Current Event</a><br>
					<a href="/events/{{ $event->id }}/passcode" class='btn btn-danger'>Show Passcode</a>	
				@else
					<a href="/event/{{ $event->id }}/current" class='btn btn-primary'>Make Current Event</a>
				@endif
			</p>
		</div>		
	</div>
	<hr>
	@endforeach
@endsection
