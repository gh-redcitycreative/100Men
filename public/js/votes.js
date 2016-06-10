$('.passcode-show-1').click(function(){
	$('.passcode-show-1').hide();
	console.log('hit that button');
	$('.passcode-1').show();
});

$('.passcode-show-2').click(function(){
	$('.passcode-show-2').hide();
	console.log('hit that button');
	$('.passcode-2').show();
});


$('.passcode-show-3').click(function(){
	$('.passcode-show-3').hide()
	console.log('hit that button');
	$('.passcode-3').show();
});



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

			$('.vote-tally-1').html(resp.first);
			$('#charity-1').attr({
			    style :'width:'+firstPercent+'%', 
			    'aria-valuenow' : resp.first,
			}).html(resp.first);



			$('.vote-tally-2').html(resp.second);
			$('#charity-2').attr({
			    style :'width:'+secondPercent+'%', 
			    'aria-valuenow' : resp.second,
			}).html(resp.second);


			$('.vote-tally-3').html(resp.third);
			$('#charity-3').attr({
			    style :'width:'+thirdPercent+'%', 
			    'aria-valuenow' : resp.thrid,
			}).html(resp.third);
			
		});
	}, 2000);
})






