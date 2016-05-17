<!DOCTYPE html>
<html>
    <head>
        <title>100 Men YYC</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div class="container">
          @yield('content')
        </div>
    </body>
</html>
