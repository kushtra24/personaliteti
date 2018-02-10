<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Personaliteti') }}</title>

    <!-- font awesome  -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{--{{ config('app.name', 'Personaliteti') }}--}}
                        <img src="{{asset('images/personaliteti-logo.png')}}" height="30px" alt="personaliteti.com">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/tipet">Tipet</a>
                        </li>
                        <li>
                            <a href="#">Rreth nesh</a></li>
                        </li>
                        <li>
                            <a href="#">Blog</a></li>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Kyqu</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="/home">Profile</a>

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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

<footer>
    <hr>
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <!-- Branding Image -->
            <a class="" href="{{ url('/') }}">
                {{--{{ config('app.name', 'Personaliteti') }}--}}
                <img src="{{asset('images/personaliteti-logo.png')}}" height="40px">
            </a>
            <p class="footer-description">Merr një përshkrim të vetvëtes, njihu më tepër rreth fuqive dhe dobësive tuaja.</p>
            <div class="footer-solcial-icons">
                <a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            </div>
            {{--<a href="/testi" class="btn btn-default">Fillo testin</a>--}}
        </div>
        <div class="col-md-3">
            
            <h4>
                <a href="https://www.16personalities.com/blog" title="Articles">Artikujt</a>
            </h4>
            <ul>
                <li> <a href="#"> This is an aticle title that needs to change</a></li>
                <li> <a href="#"> This is an aticle title that needs to change</a></li>
                <li> <a href="#"> This is an aticle title that needs to change</a></li>
                <li> <a href="#"> This is an aticle title that needs to change</a></li>
            </ul>

        </div>

        <div class="col-md-3">

            <h4>
                <a href="https://www.16personalities.com/articles" title="Articles">Më shum</a>
            </h4>
            <ul>
                <li> <a href="#"> Teoria Jonë</a></li>
                <li> <a href="{{ route('login') }}"> Kyqu</a></li>
            </ul>
        </div>

        <div class="col-md-3">

            <h4>
                <a href="https://www.16personalities.com/articles" title="Articles">E nevojshme</a>
            </h4>
                <ul>
                    <li> <a href="#"> Kontakt</a></li>
                    <li> <a href="#"> Kushtet e përdorimit</a></li>
                    <li> <a href="#"> Politika e privatesisë</a></li>
                </ul>
        </div>
    </div>
    <hr>
        <div class="row">
            <div class="col-md-6"> <p> &copy; Personaliteti.com <?php echo date("Y"); ?>. Të gjitha të drejtat e rezervuara. </p></div>
            <div class="col-md-6"> <p class="pull-right"> Designed and developed by: <a href="http://kushtrim.net" target="_blank"> Kushtrim.net</a></p> </div>
        </div>
    </div>
</footer>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</body>
</html>
