$('.vote-tally .btn').click(function(){

	$('.vote-tally .btn').hide();
	$('.votes').show();
	setInterval(function() {
		$.getJSON( "/api/tally-results", function( resp ) {
			
			// getting precent of total checked people vs votes per charity
			var firstPercent = (resp.first/resp.checked)*100,
				secondPercent = (resp.second/resp.checked)*100,
				thirdPercent = (resp.third/resp.checked)*100;


			//setting the charities values 
			$('#charity-1').attr({
			    style :'width:'+firstPercent+'%', 
			    'aria-valuenow' : resp.first,
			}).html(resp.first);
			$('.vote-tally-1').html(resp.first);
			$('#charity-2').attr({
			    style :'width:'+secondPercent+'%', 
			    'aria-valuenow' : resp.second,
			}).html(resp.second);
			
			$('#charity-3').attr({
			    style :'width:'+thirdPercent+'%', 
			    'aria-valuenow' : resp.thrid,
			}).html(resp.third);
			
		});
	}, 2000);
})






