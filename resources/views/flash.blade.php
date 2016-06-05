	@if (Session::has('status'))
		<div class="flashBox">
			<p class="col-md-10">
				{{ Session::get('status') }}
			</p>
			<span class="exit col-md-2">
				X
			</span>

		</div>
	@endif