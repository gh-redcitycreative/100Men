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
<body id="app-layout" class=@if(Auth::guest()) @elseif (Auth::user()->admin == 'admin')'admin' @endif>
    @if(Auth::guest())
    @elseif (Auth::user()->admin == 'admin')

        <nav class="navbar admin-menu navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-admin-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>   
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Admin Menu
                    </a>
                </div>

                
                <div class="collapse navbar-collapse" id="app-admin-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/events') }}">Events</a></li>
                        <li><a href="{{ url('events/add') }}">Add Event +</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Reports  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/reports/new-members') }}">New Members</a></li>
                                    <li><a href="{{ url('/reports/attendies') }}">All Members</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>    
            </div>
        </nav>
    @endif    
    <nav class="navbar user-menu navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                @if (Auth::guest())
                    <a class="navbar-brand" href="{{ url('/') }}">
                @else
                    <a class="navbar-brand" href="{{ url('/home') }}">
                @endif
                     <img src="/images/100-Men-Logo.png" alt="100 men logo">
                    </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Members Login</a></li>
                        <li><a href="{{ url('/register') }}">Not a Member Yet?</a></li>
                    @else
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li><a href="/donate">Donate</a></li>
                        
                    @endif
                </ul>
            </div>
        </div>
    </nav>
 
    @yield('header')
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    <footer>
        <p>100Men YYC &copy; {{ date("Y") }} </p>
        <div class="socials">
            <a href="http://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></i></a> |
            <a href="http://facebook.com"><i class="fa fa-twitter" aria-hidden="true"></i></i></a> |
            <a href="http://facebook.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <p id=siteby >site by: <a href="www.redcitycreative.com">RedCity Creative</a>
    </footer>
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
     
      </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
