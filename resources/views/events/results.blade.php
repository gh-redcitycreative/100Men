@extends('layouts.app')


@section('content')

<div class="vote-tally">
	<h1> votes </h1>

	<button class="btn"> click me</button>
	<div class="votes" style='display:none;'>
		@foreach($event->charities as $key => $charity)
			<h2>{{$charity->title}} <span class="small">Total Votes:</span><span class="small vote-tally-{{$key+1}}"></span></h2>
			<div class="progress">
		    	<div id="charity-{{$key+1}}" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
			</div>
		@endforeach
	</div>
		
		
@stop