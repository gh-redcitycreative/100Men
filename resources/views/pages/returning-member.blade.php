@extends('template')

@section('content')
	<h1>Returing Member Sign In</h1>
	<p>Thanks for Attending another 100 Men event.</p>
	<form action="check-in.php">
		<input placeholder="name">
		<input placeholder="email">
		<submit>check-in</submit>
	</form>
	<a class="btn btn-warning" href="/payment">payment</a>
@endsection