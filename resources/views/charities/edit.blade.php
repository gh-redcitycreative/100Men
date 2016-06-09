@extends('layouts.admin')

@section('content')
<div class="container">

	<div class="row">
		<div class="col col-xs-12">
			<h3>Edit Charity Information</h3>
			<p><a href="/events/{{ $charity->event->id }}">Back to Event</a></p>
			<form method="POST" action="/charities/{{ $charity->id }}">
			{{ method_field('PATCH') }}
				<div class="form-group">
					{{ csrf_field() }}
					<input class="form-control" type="text" name="title" value="{{ $charity->title }}">
					<img id="edit-image" src="{{asset($charity->thumbnail)}}">
					<input class="form-control input-lg" type="file" name="thumbnail" value="{{ asset($charity->thumbnail)}}">
					<input class="form-control" type="text" name="title" value="{{ $charity->url }}">
					<textarea class="form-control" name="body" id="" cols="30" rows="10" placeholder="Charity Description">{{ $charity->body }}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-secondary">Update Note</button>
				</div>
			</form>			
		</div>
	</div>


</div>	
@stop