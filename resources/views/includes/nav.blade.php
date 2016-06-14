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
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Admin Menu
                    </a>
                </div>

                
                <div class="collapse navbar-collapse" id="app-admin-collapse">
                    <ul class="nav navbar-nav">
<!--                         <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
 -->                        <li><a href="{{ url('/events') }}">Events</a></li>
                        <li><a href="{{ url('/events/add') }}">Add Event +</a></li>
                        <li><a href="{{ url('/events/live-results') }}">Live Results</a></li>
                        <li><a href="{{ url('/checklist') }}">Checklist</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Reports  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/reports/new-members') }}">New Members</a></li>
                                    <li><a href="{{ url('/reports/attendies') }}">Event Attendies</a></li>
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
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
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