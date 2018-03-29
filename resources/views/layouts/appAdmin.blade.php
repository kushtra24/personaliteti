<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Personaliteti') }}</title>

    <!-- font awesome  -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.init.js') }}"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    @yield('style')


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" target="_blank">Welcome</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> --}}
                        {{-- </li> --}}
                        {{-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> --}}
                        {{-- </li> --}}
                        {{-- <li class="divider"></li> --}}
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-images"></i> Galeria</a>
                        </li>  
                        @if (Auth::user() && Auth::user()->hasAnyRole('Admin'))                        
                             <li>
                                <a href="/admintipet"><i class="fas fa-users"></i> Tipet</a>
                            </li> 
                            <li>
                                <a href="/pyetjet"><i class="fas fa-braille"></i> Pyetjet</a>
                            </li>
                            <li>
                                <a href="/faqet"><i class="fas fa-file-alt"></i> Faqet</a>
                            </li>                
                        @endif
                        <li>
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-newspaper"></i> Artikujtë <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="/post"><i class="far fa-newspaper"></i> Artikujë</a></li>
                                <li><a href="/post/create"><i class="fas fa-plus-circle"></i> Shto Artikull</a></li>
                                <li><a href="/comments"><i class="fas fa-comments"></i> Komentet</a></li>
                                <li><a href="/categories"><i class="fas fa-archive"></i> Kategoritë</a></li>
                              </ul>
                        </li> 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       @yield('dashboard')

    </div>
    <!-- /#wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('adminscripts')

</body>

</html>
