@extends('template')

@section('content')
	<h1>New Member Sign In</h1>
	<p>Thanks for Attending your First 100 Men event.</p>
	<form action="check-in.php">
		<input placeholder="name">
		<input placeholder="email">
		<input placeholder="age">
		<input placeholder="example">
		<input placeholder="example">
	</form>
	<a class="btn btn-warning" href="/payment">payment</a>

@endsection