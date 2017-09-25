<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Personaliteti.com') }}</title>

    <!-- font awesome  -->
    <script src="https://use.fontawesome.com/94c81482d0.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('testi') }}">Testi</a>
                        <li>
                            <a href="#">Tipet</a>
                        </li>
                        <li>
                            <a href="#">Rreth nesh</a></li>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
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
    <div class="container">
        <div class="col-md-5">
                <img src="https://laracasts.com/images/logo-footer.png" alt="footer logo" class="img img-responsive">
            
            <p>Get a concrete, accurate description of who you are and why you do things the way you do, for free.</p>
            <div class="footer-solcial-icons">
                <a href="#"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>

            </div>
        </div>
        <div class="col-md-2 col-md-offset-1">
            
            <h4>
                <a href="https://www.16personalities.com/articles" title="Articles">Articles</a>
            </h4>
            <nav class="highlighted">
                                    <a href="/articles/personality-bites-the-types-and-stress-eating">Personality Bites: The Types and Stress Eating</a>
                                    <a href="/articles/whats-wrong-with-ferris-bueller-rule-bending-by-personality-type">What’s Wrong with Ferris Bueller? Rule Bending by Personality Type</a>
                                    <a href="/articles/when-in-rome-which-personality-types-do-as-the-romans-do">When in Rome: Which Personality Types Do as the Romans Do?</a>
                                    <a href="/articles/the-perfectionism-and-the-turbulent-identity">The Perfectionism and the Turbulent Identity</a>
                                    <a href="/articles/waiting-to-respond-who-listens-and-who-doesnt-during-a-conversation">Waiting to Respond: Who Listens and Who Doesn’t During a Conversation</a>
                            </nav>

        </div>
        <div class="col-md-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eaque expedita eligendi molestias minus autem sint quo praesentium maxime, voluptates, sit vitae. Minus distinctio pariatur repudiandae nulla reiciendis dolorum quod!</div>
        <div class="col-md-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione, magnam, suscipit perspiciatis ducimus nam adipisci doloremque sunt, tenetur eos in. Sed autem quo aspernatur accusantium molestiae, dicta et. Sit.</div>

        <div class="col-md-6"> <p> &copy; Personaliteti.com <?php echo date("Y"); ?>. Të gjitha të drejtat e rezervuara. </p></div>
        <div class="col-md-6"> <p class="pull-right"> Designed and developed by: <a href="http://kushtrim.com"> Kushtrim.com</a></p> </div>
    </div>
</footer>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</body>
</html>
