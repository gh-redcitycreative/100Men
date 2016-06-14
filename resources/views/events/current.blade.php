@extends('layouts.app')

@section('header')
    <div class="container">
		<h1>{{ $currentEvent->title }}</h1>
		<h3 class=page-sub-title>Charity Nominees</h3>
	</div>
@endsection

@section('content')

@include ('flash')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				@if($currentEvent->checkin()->where('checkins.user_id', $user->id)->count() < 1 )
					<div class="alert alert-danger" role="alert">
						<p class="lead text-center">We give a damn about you being here. </p>
						<p class='lead text-center'>Make sure you check in to the event. </p>
						<p class='lead text-center'>If you didn't bring cash or a cheque to this event you can pay through the donate button in the menu.</p>
						<form method="POST" action="/events/{{ $currentEvent->id }}/check-in">
							<div class="form-group text-center">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-primary">Check-in</a>
							</div>
						</form>		
					</div>
				@else


					<h3 class="lead text-center">Once voting has begun we will display the passcode so that you can submit your vote.</h3>			
				@endif	
			</div>

		</div>
		<div class="row">
			<div class="col-xs-12">
				
	@foreach ($currentEvent->charities as $key => $charity)
	
	<div class='charity'>
		<div class="row ">
			<div class="col-xs-12 charity-logo">
				@if (Auth::user()->admin == 'admin')
				<div class="admin-options">
					<p class="admin-gear"><i class="fa fa-gear"></i></p>
					<div class="admin-show">
						<p class="text-right">
							<a href="/charities/{{ $charity->id }}/edit" class="btn btn-warning pull-right" >Edit</a>
							<a href="/charities/{{ $charity->id }}/delete" class="btn btn-danger pull-right"> Delete</a>
						</p> 
					</div>
				</div>
				@endif			
				<img src='{{ asset($charity->thumbnail) }}'>

			</div>
			<div class="col-xs-12 charity-description">
				
				<h4> {{ $charity->title }} </h4>
				<h5><a href="{{ $charity->url }}">View Charity Website</a></h5>
				<div class=social-media>
					@if ($charity->facebook_url == null)                        
					@else 
						<a href="{{ $charity->facebook_url }}"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
					@endif
					@if ($charity->twitter_url == null)                        
					@else 
						<a href="{{ $charity->twitter_url }}"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
					@endif
					@if ($charity->youtube_url == null)                        
					@else 
						<a href="{{ $charity->youtube_url }}"><i class="fa fa-youtube" aria-hidden="true"></i></a> 
					@endif
					@if ($charity->instagram_url == null)                        
					@else 
						<a href="{{ $charity->instagram_url }}"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
					@endif
				</div>	
				<p > {{ $charity->body }} </p>

			</div>
			<!-- button for voting  -->
			@if($currentEvent->votes()->where('votes.user_id', $user->id)->count() == 0)
				<div class="col-xs-12">
					<button class="btn btn-secondary passcode-show-{{$key+1}}">Vote!</button>
					<div class="passcode passcode-{{$key+1}}" style="display:none;" >
						<h4>Almost there brah!</h4>
						<p>Enter the passcode to submit your vote!</p>
						<form method="POST" action="/charities/{{ $charity->id }}/createVote">
							<div class="form-group">
								{{ csrf_field() }}
								<input class="form-control passcode-input" type="text" name="passcode" placeholder="passcode">
								<br>
								<button type="submit" class="btn btn-secondary">Submit Vote</button>
							</div>
						</form>
					</div>


				</div>
				
			@endif
		</div>
	</div>



	

		
	@endforeach	
			</div>
		</div>
	</div>




@endsection


@section('scripts')

	 <script src="/js/votes.js"></script>

@endsection

                   