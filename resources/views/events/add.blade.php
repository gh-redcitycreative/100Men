@extends('layouts.app')

@section('content')
<h3>Add a New Event</h3>
		<form method="Post" action="/events/add">
				{{ csrf_field() }}
				<input class="form-control input-lg"type="text" placeholder="title" name="title">
				<input class="form-control input-lg"type="text" placeholder="passcode" name="passcode">
				<input class="form-control input-lg"type="text" placeholder="start time" name="start_time">
				<input class="form-control input-lg"type="text" placeholder="location" name="location">
				<button class='btn btn-primary' type="submit">Add Event</button>
		</form>
@endsection