@extends('layouts.admin')
@section('header')
<div class="container">
	<h1>Add a New Event</h1>
</div>
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<p>The passcode will be used at the event to let people submit their votes.</p>
			<form method="Post" action="/events/addEvent">
					{{ csrf_field() }}
					<input class="form-control input-lg"type="text" placeholder="title" name="title">
					<br>
					<input class="form-control input-lg"type="text" placeholder="passcode" name="passcode">
					<br>
					<input class="form-control input-lg"type="text" placeholder="start time" name="start_time">
					<br>
					<input class="form-control input-lg"type="text" placeholder="location" name="location">
					<br>
					<input class="form-control input-lg" id="date" name="date" type="date" placeholder="Event date">
					<br>
					<button class='btn btn-secondary' type="submit">Add Event</button>
			</form>			
		</div>
	</div>
</div>







@endsection