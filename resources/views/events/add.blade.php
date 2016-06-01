@extends('layouts.app')

@section('content')
<h3>Add a New Event</h3>
		<form method="Post" action="/events/add">
				{{ csrf_field() }}
				<input class="form-control input-lg"type="text" placeholder="title" name="title">
				<input class="form-control input-lg"type="text" placeholder="passcode" name="passcode">
				<input class="form-control input-lg"type="text" placeholder="start time" name="start_time">
				<input class="form-control input-lg"type="text" placeholder="location" name="location">
				<input class="form-control input-lg" id="date" name="date" type="date" placeholder="Event date">
				<button class='btn btn-primary' type="submit">Add Event</button>
		</form>


		<!-- Date picker scripts -->
<script>

$(function() {
	alert("Date");
    $('#date').pickadate();
    alert("Date");
  });   
</script>


@endsection