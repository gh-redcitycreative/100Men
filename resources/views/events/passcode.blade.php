<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>100 Men Event Secret Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		html, body{
			min-height:100%;
			height:100%;
		}
		div{
			display:flex;
			align-items:center;
			min-height:100%;
			height:100%;
			justify-content:center;
			flex-direction:column;
		}
	</style>
</head>
<body>
	<div>
	<p class="text-underline">Secret Password</p>
	<h1>{{ $event->passcode }}</h1>
	</div>
</body>
</html>

