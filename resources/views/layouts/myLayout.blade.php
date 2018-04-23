<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/glowna1.css" />
</head>

<body>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
    <div id="title">
    <header>
        <img src="asd.png" class="logo" alt="asd">
    </header>
    </div>
        
    <div id="option">
    <ul id="menu3">
        <li id="menu3_1"><a href="/">O nas</a></li>
        <li id="menu3_2"><a href="/oferta">Oferta</a></li>
        <li id="menu3_3"><a href="/kontakt">Kontakt</a></li>
        <li id="menu4_4"><a href="zdjecia.html">Zdjęcia</a></li>
    </ul>
    </div>
    
    <div id="menu">
        <div class="container">
        @yield('body')
        </div>
`
        
    </div>
    
</body>
</html>