@extends('layouts.admin')
@section('header')
<div class="container">
	<h3>Edit Event</h3>
</div>
@stop
@section('content')
<div class="container">
	<form method="POST" action="/events/{{ $event->id }}"> 
	{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<input class="form-control input-lg"type="text" value="{{ $event->title }}" name="title"> 
		<br>
		<input class="form-control input-lg"type="text" value="{{ $event->passcode}}" name="passcode">
		<br>
		<input class="form-control input-lg"type="text" value="{{ $event->start_time}}" name="start_time">
		<br>
		<input class="form-control input-lg"type="text" value="{{ $event->location}}" name="location">
		<br>
		<input class="form-control input-lg" id="date" name="date" type="date" value="{{$event->date}}" placeholder="Event Date">
		<br>
		<button class='btn btn-secondary' type="submit">Update Event</button>
	</form>
</div>


		<!-- Date picker scripts -->
<script>

$(function() {
    $('#date').pickadate();
  });   
</script>


@endsection