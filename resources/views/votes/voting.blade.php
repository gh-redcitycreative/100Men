@extends('layouts.app')

@section('content')
	
	<h1>Almost there brah!</h1>
	<p>Enter the passcode to submit your vote!</p>

			<form method="POST" action="/charities/{{ $charity->id }}/createVote">
				<div class="form-group">
					{{ csrf_field() }}
					<input class="form-control" type="text" name="passcode" placeholder="passcode">
					<button type="submit" class="btn btn-primary">Vote</button>
				</div>
			</form>

@endsection
	