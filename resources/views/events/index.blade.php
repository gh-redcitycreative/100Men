@extends('layouts.admin')
@section('header')
	<div class="container">
		<h1>All Events</h1>		
	</div>
@stop

@section('content')
	

@include ('flash')
	<div class="container">
		
		
		@foreach ($events as $event)
		<div class="event row">
			<div class="col-xs-12">
				<h3>{{ $event->title }}</h3>
				<h4 class="text-muted">Event details</h4>
				<address>
					<strong>{{ $event->location }}</strong><br> 
					{{$event->start_time}}
				</address>
				<h4><a href="/events/{{ $event->id }}" class="current-event">Charities</a></h4>
				@if(count($event->charities) > 0)
				<ol class="charity-list">
					@foreach($event->charities as $charity)
							<li>{{ $charity->title}}</li>
					@endforeach
				</ol>
					
					@if(count($event->charities) < 3)
						<p><a href="/events/{{ $event->id }}" class=" btn btn-secondary current-event">Add More Charities <i class="fa fa-plus"></i></a></p>
					@endif
					
				@else
					<p class="text-muted">No Charities have been added to event</p>
					<p><a href="/events/{{ $event->id }}" class="current-event">Add Charities</a></p>	
				@endif
			</div>
			<div class="col-xs-12 admin-options">
				<p class="admin-gear"><i class="fa fa-gear"></i></p>
				<div class="admin-show">
					<p class="text-right">
						@if($event->id == $currentEvent->id )
							<a role='button' class='btn btn-danger'>Current Event</a>	
						@else
							<a href="/event/{{ $event->id }}/current" class='btn btn-secondary'>
								Make Current Event
							</a>
						@endif

						<a role="button" href="/events/{{ $event->id }}/edit" class="btn btn-warning">
							Edit Event
						</a>
						<a href="/events/{{ $event->id }}" class="btn btn-warning">Edit/Add Charities</a>
					</p>
				
					@if($event->id == $currentEvent->id )
					@else
						<hr>
						<p class="text-right">
							<a role="button" href="/events/{{ $event->id }}/delete" class="btn btn-danger"> 
								Delete Event
							</a>
						</p>
					@endif
				
				</div>
				
			</div>		
		</div>

		<hr>
		@endforeach
<!-- =======
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
>>>>>>> 870f71198c9b06b2d0f3530c79d157a1b84b017b -->
	</div>
@endsection

