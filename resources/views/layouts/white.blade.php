<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>100 Men Calgary Voting App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
	<style>
		html, body{
			min-height:100%;
			height:100%;
		}

	</style>
</head>
<body class="no-menu">

 	@yield('content')
   


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Include library's JS files -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>

 <script src="/js/votes.js"></script>

</body>
</html>

