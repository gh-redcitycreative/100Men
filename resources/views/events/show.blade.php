@extends('template')

@section('content')
	
	<h1>{{ $event->title }}</h1>
	@foreach ($event->charities as $charity)
		<h4> {{ $charity->title }} </h4>
		<p> {{ $charity->body }} </p>
	@endforeach	
@endsection