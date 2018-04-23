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
    <link rel="stylesheet" href="css/onas.css" />
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
        <li id="menu3_4"><a href="/zdjecia2">Zdjęcia</a></li>
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

     <p><br/>Nasza firma jest na rynku nieprzerwanie od 2003 roku i zajmuje się
        wymianą stolarki okiennej, drzwiowej i aluminiowej. Ponadto, zajmujemy się
        budową domów i wykończeniem wnętrz.<br/>Usługi które świadczymy to:<br/>
        - ukłdanie glazury i terakoty<br/>- układanie paneli podłogowych<br/>- położenie gładzi<br/>
        - malowanie wnętrz<br/>- położenie tynku<br/>- ocieplenie poddasza<br/>oraz wszystkie usługi budowalne.<br/>
        <br/>Współpracujemy z firmami: KSM-System,<a href="http://http://www.art-okna.com.pl/"> Lubelska Fabryka Okien Art-Okna</a>,<a href="http://http://www.stenmar.lublin.pl/"> Stenmar</a>,
        <a href="http://www.alston.net.pl/">Alston</a>,<a href="http://www.greinplast.pl/"> Greinplast</a> oraz <a href="https://multiform.pl/">Mulit-Form</a>.
    </p>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
