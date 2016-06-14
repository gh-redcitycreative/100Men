@extends('layouts.admin')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<h3>Members</h3>
		</div>
		<div class="col-xs-6">
			<h3>Paid with cash/cheque</h3>
		</div>
	</div>	
	@foreach ($checked as $user)
	<div class="row">
		<div class="col-xs-6">{{$user->last_name}}, {{$user->first_name}}</div>
		<div class="col-xs-6">
			<form method="POST" action="/checklist/{{ $user->id }}"> 
				{{ method_field('PATCH') }}
					{{ csrf_field() }}
				@if($user->paid == 'yes')
				<input type="checkbox" name="paid" value="yes" checked class=paid-check>
				@else	
				<input type="checkbox" name="paid" value="yes" class=paid-check>
				@endif
				<button class='btn btn-secondary' type="submit">Update</button>
			</form>				

		</div>

	</div>
	@endforeach
</div>



@endsection