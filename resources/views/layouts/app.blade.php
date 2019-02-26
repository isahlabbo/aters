<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="color: white; background-color: seagreen">
            <div class="container">
                <a class="navbar-brand h3" href="{{ url('/') }}" style="color: white">
                    {{ config('app.name', 'Laravel') }}
                </a>
                @auth
                @if(Auth()->User()->federal == 1 || Auth()->User()->collation_id == 2 || Auth()->User()->collation_id == 1)
                <a class="navbar-brand h3" href="{{ url('/federal_incidence') }}" style="color: white">
                    {{ 'INCIDENCES' }}
                </a>
                @endif
                @if(Auth()->User()->federal == 1 || Auth()->User()->collation_id == 2 || Auth()->User()->collation_id == 1)
                <a class="navbar-brand h3" href="{{ url('/generate_result') }}" style="color: white">
                    {{ 'RESULT' }}
                </a>
                @endif
                @endauth
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a  style="color: white" class="nav-link h3" href="{{ route('login') }}">{{ __('Connect') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret h3"  style="color: white">DisConnect</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('DisConnect') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                    </a>
                                    @if(Auth()->User()->collation_id != null)
                                    <a href="/update_result" class="dropdown-item" >UPDATE RESULT</a>
                                    
                                    @endif
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
