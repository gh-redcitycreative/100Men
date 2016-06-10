<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">


     <link href="{{ asset('pickadate/compressed/themes/classic.css') }}" rel="stylesheet">
    <link href="{{ asset('pickadate/compressed/themes/classic.date.css') }}" rel="stylesheet">




    <style>

    </style>
</head>
<body id="app-layout" class='admin backend'>
    @include('includes.nav')
    <header>
        @yield('header')
    </header>
    <main>
      @yield('content')
    </main>
   @include('includes.footer')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Include library's JS files -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
   
     <script src="{{ asset('pickadate/compressed/picker.js') }}"></script>
     <script src="{{ asset('pickadate/compressed/picker.date.js') }}"></script>

        <script type="text/javascript">

        // Date Picker
        $( '#date' ).pickadate({
            formatSubmit : 'yyyy-mm-dd 00:00:00',
            hiddenName: true
        });

        // Alert

        $(".flashBox .exit").click(function(){
            $(".flashBox").hide();
        });

         // gear

         $(".admin-options").click(function(){
            $(this).find(".admin-show").toggleClass("show");
            console.log('hit that button');
        });
     
      </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
