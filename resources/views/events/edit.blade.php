@extends('layouts.app')

@section('content')
<h3>Edit Event</h3>
		<form method="POST" action="/events/{{ $event->id }}"> 
		{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<input class="form-control input-lg"type="text" value="{{ $event->title }}" name="title"> 
				<input class="form-control input-lg"type="text" value="{{ $event->passcode}}" name="passcode">
				<input class="form-control input-lg"type="text" value="{{ $event->start_time}}" name="start_time">
				<input class="form-control input-lg"type="text" value="{{ $event->location}}" name="location">
				<input class="form-control input-lg" id="date" name="date" type="date" value="{{$event->date}}">
				<button class='btn btn-primary' type="submit">Update Event</button>
		</form>


		<!-- Date picker scripts -->
<script>

$(function() {
    $('#date').pickadate();
  });   
</script>


@endsection