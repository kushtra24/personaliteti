
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="@yield('ogurl')" />
    <meta property="og:title" content="@yield('ogTitle', config('app.name', 'personalitetet'))" />
	<meta property="og:description" content="@yield('ogDescription')" />
	<meta property="og:image" content="@yield('ogImage')" />

	<meta property="og:image:alt" content="{{ config('app.name', 'personalitetet') }}" />
	<meta property="og:type" content="personalitet, blog, carl jung, shqip" />
	<meta property="og:site_name" content="{{ config('app.name', 'personalitetet') }}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Personaliteti') }}</title>

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">



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
                        <img src="{{asset('images/logo.png')}}" height="50px" alt="personaliteti.com">
                    </a>
                </div>{{-- nabar-header --}}

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   {{--  <ul class="nav navbar-nav">
                        
                    </ul> --}}
                    {{-- navbar-nav --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="/">Ballina</a>
                        </li>
                        <li>
                            <a href="{{ route('tipet') }}">Tipet</a>
                        </li>
                        {{-- <li>
                            <a href="/faqe/rreth_nesh">Rreth nesh</a></li>
                        </li> --}}
                        <li>
                            <a href="{{ route('blog') }}">Blog</a></li>
                        </li>
                        {{-- <li>
                            <a href="{{ route('testi') }}" class="btn btn-primary btn-sm">Fillo Vlersimin</a>
                        </li> --}}

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Kyqu</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     {{ Auth::user()->first_name }} {{-- {{ Auth::user()->last_name }} --}} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        @if (Auth::user() && Auth::user()->hasAnyRole('admin')) 
                                            <a href="{{ route('admin') }}">Admin Area</a>
                                         @endif
                                         @if (Auth::user() && Auth::user()->hasAnyRole('User')) 
                                            <a href="/profile">Profili</a>
                                            <a href="/home">Resultatet</a>
                                         @endif

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
                    </ul>{{-- navbar-nav navbar-right --}}
                </div>{{-- navbar-colaps --}}

            </div>{{-- container --}}
        </nav>

        @yield('content')
    </div> {{-- app --}}

<footer>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Branding Image -->
                <a class="" href="{{ url('/') }}">
                    <img src="{{asset('images/logo.png')}}" height="40px">
                </a>
                <p class="footer-description">Merr një përshkrim të vetvetes, mëso më tepër rreth fuqive dhe dobësive tua.</p>
                <p>Vlersime deri më tani {{ $counter }}</p>
                <div class="footer-solcial-icons">
                    <a href="https://www.facebook.com/personalitetet"><i class="fab fa-facebook fa-2x"></i></a>
                    {{-- <a href="#"><i class="fab fa-instagram fa-2x"></i></i></a> --}}
                     <a href="https://www.youtube.com/channel/UCVUGCXlw8t5Re4Mtyhssnyw"><i class="fab fa-youtube-square fa-2x"></i></i></a>
                </div>
            <a href="{{ route('testi') }}" class="btn btn-default footer-assesment-button">Fillo Vlersimin</a>
            </div>
            <div class="col-md-3">
                <h4>
                    Artikujt
                </h4>
                <ul>
                    @foreach($posts as $post)
                    <li> <a href="/blog/{{ $post->id }}" title="{{$post->title}}">{!! str_limit($post->title, 40) !!}...</a></li>
                    <hr>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <h4>
                    Më shumë
                </h4>
                <ul>
                    <li><a href="/faqe/teoria_jone"><i class="fas fa-caret-right"></i> Teoria Jonë</a></li>
                    <li><a href="/faq"><i class="fas fa-caret-right"></i> Pyetje të Shpeshta</a></li>
                    <li><a href="/about"><i class="fas fa-caret-right"></i> Rreth nesh</a></li></li>
                    <li><a href="{{ route('login') }}"><i class="fas fa-caret-right"></i> Kyqu</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h4>
                    E nevojshme
                </h4>
                <ul>
                    <li> <a href="/faqe/impressum"><i class="fas fa-caret-right"></i> Impresum</a></li>
                    <li> <a href="/faqe/kushtet_perdorimit"><i class="fas fa-caret-right"></i> Kushtet e përdorimit</a></li>
                    <li> <a href="/faqe/politikat_privatesise"><i class="fas fa-caret-right"></i> Politika e privatesisë</a></li>
                </ul>
            </div>
        </div><!-- row -->
        <hr>
        <div class="row">
            <div class="copyRight col-md-6">
                <p> &copy; {{ config('app.name', 'personalitetet') }}
                    {{ date("Y") }}. Të gjitha të drejtat e rezervuara. </p>
            </div>
            <div class="designedBy col-md-6">
                <p> Dizajnuar dhe ndërtuar nga: <a href="http://kushtrim.net" target="_blank"> Kushtrim.net</a></p>
            </div>
        </div>
    </div>
</footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116301118-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-116301118-1');
    </script>

</body>
</html>
