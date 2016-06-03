@extends('layouts.app')

@section('content')
	<h1>{{ $event->title }}</h1>
	@foreach ($event->charities as $charity)
		<div class='charity'>
			<p><a role="button" href="/charities/{{ $charity->id }}/delete" class="btn btn-danger pull-right"> Delete</a><a role='button' href="/charities/{{ $charity->id }}/edit" class="btn btn-warning pull-right" >Edit</a></p>
			<h4> {{ $charity->title }} </h4>
			<p> {{ $charity->body }} </p>
			<p>Total Votes: {{ $charity->votes->count() }}</p>
	</div>	
@include ('flash')
		
	@endforeach	
	@if($event->charities->count() < 3)
		<div class="row">
			<div class="col-xs-12">
				<h3> Add a new Charity </h3>
				<form enctype="multipart/form-data"  method="POST" action="/events/{{ $event->id }}/charities">
					<div class="form-group">
						{{ csrf_field() }}
						<input class="form-control input-lg" type="text" name="title" placeholder="Charity Name">
						<input class="form-control input-lg" type="file" name="thumbnail">
						<textarea class="form-control input-lg" name="body" id="" cols="30" rows="10" placeholder="Charity Description"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Charity</button>
					</div>
				</form>			
			</div>
		</div>
	@endif
@endsection


                   