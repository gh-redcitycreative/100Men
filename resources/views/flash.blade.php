@if (Session::has('status'))
<div class="flashBox">
	<div class="flashBG col-xs-12">
			<div class="flashContainer col-xs-10 col-xs-offset-2">
				<p class="col-xs-9 col-xs-offset-1">
					{{ Session::get('status') }}
				</p>
				<span class="exit col-xs-2">
					 <img src="/images/close.png" alt="close">
				</span>
			</div>
		</div>
	</div>
@endif