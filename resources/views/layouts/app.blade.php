<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bank Sampah') }}</title>
    
    
    <link rel="apple-touch-icon" sizes="57x57" href="https://img.bsdrajat.nix.id/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://img.bsdrajat.nix.id/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://img.bsdrajat.nix.id/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://img.bsdrajat.nix.id/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://img.bsdrajat.nix.id/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://img.bsdrajat.nix.id/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://img.bsdrajat.nix.id/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://img.bsdrajat.nix.id/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://img.bsdrajat.nix.id/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://img.bsdrajat.nix.id/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://img.bsdrajat.nix.id/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://img.bsdrajat.nix.id/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://img.bsdrajat.nix.id/icon/favicon-16x16.png">
<link rel="manifest" href="https://img.bsdrajat.nix.id/icon/manifest.json">
<meta name="msapplication-TileColor" content="green">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="green">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('tempAdmin')}}/dist/css/adminlte.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/anim.css') }}" rel="stylesheet">
    <style type="text/css">
        body{
          font-family: Ariel, Helvetica, sans-serif;
          line-height: 1.6;
          text-align: center;
        }
        .container{
          max-width: 960px;
          margin: auto;
          padding: 0 30px;
        }

        #showcase{
          height: 300px;
          margin-top: -100px;
        }

        #showcase h1{
          font-size: 50px;
          line-height: 1.3;
          position: relative;
          animation: heading;
          color: white;
          animation-duration: 3s;
          animation-fill-mode: forwards;
        }

        @keyframes heading{
          0% {top: -50px;}
          100% {top: 200px;}
        }

        #content {
          position: relative;
          animation-name: content;
          animation-duration: 3s;
          animation-fill-mode: forwards;
        }

        @keyframes content{
          0% {left: -1000px;}
          100% {left: 0px;}
        }

        .btnn{
            display: inline-block;
            color: white;
            text-decoration: none;
            margin-top: 40px;
            opacity: 0;
            animation-name: btn;
            animation-duration: 3s;
            animation-delay: 3s;
            animation-fill-mode: forwards;
            transition-property: transform;
            transition-duration: 1s;
          }

        @keyframes btn {
          0%{opacity: 0}
          100%{opacity: 1}
        }
        .pad{
          margin-top: 300px;
          margin-bottom: 300px;
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Halaman Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
