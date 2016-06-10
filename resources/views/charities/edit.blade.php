@extends('layouts.admin')

@section('content')
<div class="container">

	<div class="row">
		<div class="col col-xs-12">
			<h3>Edit Charity Information</h3>
			<p><a href="/events/{{ $charity->event->id }}">Back to Event</a></p>

			<form enctype="multipart/form-data" method="POST" action="/charities/{{ $charity->id }}">
			{{ method_field('PATCH') }}
				<div class="form-group">
					{{ csrf_field() }}
					<input class="form-control" type="text" name="title" value="{{ $charity->title }}">
					<br>
					
					<img src='{{ asset($charity->thumbnail) }}' style="width:200px;">

					<br>
					<input class="form-control" type="text" name="title" value="{{ $charity->url }}">
					<br>
					<textarea class="form-control" name="body" id="" cols="30" rows="10" placeholder="Charity Description">{{ $charity->body }}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-secondary">Update Charity</button>
				</div>
			</form>			
		</div>
	</div>


</div>	
@stop