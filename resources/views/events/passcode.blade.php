@extends('layouts.white')


@section('content')
	<div id="password">
		<p class="text-underline">Secret Password</p>
		<h1>{{ $event->passcode }}</h1>
	</div>
@endsection
