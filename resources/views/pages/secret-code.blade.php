@extends('template')


@section('content')
	<p>please enter your user name and the secret code</p>
	<input type="text" placeholder="username">
	<input type="text" placeholder="secretcode">
	<a href="/vote" class="btn btn-primary"type=submit>let me vote</a>
@endsection