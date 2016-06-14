@extends('layouts.admin')
@section('header')
<div class="container">
	<h1>{{ $event->title }}</h1>
	<h4 class="page-sub-title">Charities</h2>
</div>

@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<p><a href="/events" class="btn btn-secondary"><i class="fa fa-angle-left "></i> Return to Events</a></p>
		</div>
	</div>
	@foreach ($event->charities as $charity)
		<div class="row">
			<div class="col-xs-12">
				<div class=' charity'>
				<div class="admin-options">
					<p class="admin-gear"><i class="fa fa-gear"></i></p>
					<div class="admin-show">
						<p class="text-right">
							<a role="button" href="/charities/{{ $charity->id }}/delete" class="btn btn-danger pull-right"> Delete</a><a role='button' href="/charities/{{ $charity->id }}/edit" class="btn btn-warning pull-right" >Edit</a>
						</p>
					</div>


				</div>
					<p></p>
					<h4> {{ $charity->title }} </h4>
					<p> {{ $charity->body }} </p>
					<p>Total Votes: {{ $charity->votes->count() }}</p>

			</div>	

		@include ('flash')

			
		</div>	
</div>	
<hr>
		@endforeach	
	
	@if($event->charities->count() < 3)
		<div class="row">
			<div class="col-xs-12">
				<h3> Add a new Charity </h3>
				<form enctype="multipart/form-data"  method="POST" action="/events/{{ $event->id }}/charities">
					<div class="form-group">
						{{ csrf_field() }}
						<input class="form-control input-lg" type="text" name="title" placeholder="Charity Name">
						<br>
						<input class="form-control input-lg" type="file" name="thumbnail">
						<br>
						<input class="form-control input-lg" type="text" name="url" placeholder="Charity Website">
						<br>
						<input class="form-control input-lg" type="text" name="url" placeholder="Facebook url">
						<br>
						<input class="form-control input-lg" type="text" name="url" placeholder="Twitter url">
						<br>
						<input class="form-control input-lg" type="text" name="url" placeholder="YouTube url">
						<br>
						<input class="form-control input-lg" type="text" name="url" placeholder="Instagram url">
						<br>
						<textarea class="form-control input-lg" name="body" id="" cols="30" rows="10" placeholder="Charity Description"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-secondary">Add Charity</button>
					</div>
				</form>			
			</div>
		</div>
	@endif

</div>


@endsection

                   