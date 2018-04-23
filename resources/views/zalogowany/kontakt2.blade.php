<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OMEGA - Hrubieszów</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/kontakt2.css" />
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
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
                <a class="navbar-brand" href="{{ url('/onas') }}">
                    {{ config('/onas', 'OMEGA') }}
                </a>
            </div>

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
    </nav>


</div>
<div id="title">
    <header>
        <img src="image/asd.png" class="logo" alt="asd">
    </header>
</div>

<div id="option">
    <ul id="menu3">
        <li id="menu3_1"><a href="/onas">O nas</a></li>
        <li id="menu3_2"><a href="/oferta2">Oferta</a></li>
        <li id="menu3_3"><a href="/kontakt2">Kontakt</a></li>
        <li id="menu4_4"><a href="/zdjecia2">Zdjęcia</a></li>
        <li id="menu3_5"><a href="">Moje konto</a>
            <ul>
                <li id="menu3_6"><a href="/zamow">Zamów pomiar</a></li>
                <li id="menu3_7"><a href="/historia">Wyświetl historię</a></li>
                <li id="menu3_8"><a href="/o_mnie">Zmień hasło</a></li>
            </ul>
        </li>
    </ul>
</div>

<div id="menu">
    <div class="container">
        @yield('body')
        <p><br/>
            OMEGA Art. Bud. i Usługi<br/>Barbara Gałan<br/><br/>
            Adres sklepu:<br/>ul.Targowa 17<br/>22-500 Hrubieszów<br/><br/>
            tel. 84 696 33 94<br/>
            tel/fax 84 696 33 94<br/>
            tel. kom. 501 641 512<br/><br/>
            Zapraszamy również na nasz <a href="https://www.facebook.com/Omega-Hrubiesz%C3%B3w-1078754655538996/">Facebook.</a>
            <br/><br/>
            Tu jesteśmy:
            <br/><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.369662548987!2d23.89097421520546!3d50.80578936957871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47248f2f70c0986b%3A0x257581b16b258635!2sTargowa+17%2C+22-500+Hrubiesz%C3%B3w!5e0!3m2!1spl!2spl!4v1494696370981" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </p>
    </div>
    `

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jskont.js')}}"></script>
</body>
</html>