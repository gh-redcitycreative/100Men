@extends('layouts.white')


@section('content')



<div class="vote-tally">
	<div class="password">
		<h5> Event Secret Password </h5>
		<h2 class="lead">{{ $event->passcode}}</h2>
	</div>
	<h1 ><img src="/images/100-men-logo.png"> Live Vote Tally </h1>
	
	<button class="btn btn-secondary">Get Live results</button>
	<div class="votes" style='display:none;'>
		@foreach($event->charities as $key => $charity)
			<h2>{{$charity->title}}<br><span class="small">Total Votes:</span> <span class="small vote-tally-{{$key+1}}"></span></h2>
			<div class="progress">
		    	<div id="charity-{{$key+1}}" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
			</div>
		@endforeach
	</div>
		
		
@stop