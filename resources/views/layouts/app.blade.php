<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Menukaart') }}</title>
    <link rel="icon" href="{{ url('./food.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('script')
    @yield('style')

    <link rel="stylesheet" type="text/css" href="./style.css"/>

    <script src="./index.js"></script>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaGiQoBtiT9ySNgjyAjiLhGkfOkO30pnc&callback=initMap&v=weekly"
        async
    ></script>

</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Welkom bij {{$restaurant->name??''}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" target="_blank"
                               href="{{ route('contact.index', [request()->restaurant]) }}">{{ __('Contact') }}</a>
                        </li>
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ route('login',[request()->restaurant]) }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ route('register',[request()->restaurant]) }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ route('daypart.index', [request()->restaurant]) }}">{{ __('Dagdelen') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('foodtype.index',[request()->restaurant]) }}">{{ __('Gerecht type') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('ingredient.index',[request()->restaurant]) }}">{{ __('Ingredienten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('recipe.index',[request()->restaurant]) }}">{{ __('Recepten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('user.index',[request()->restaurant]) }}">{{ __('Users') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('dish.index',[request()->restaurant]) }}">{{ __('Gerechten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('contact.index',[request()->restaurant]) }}">{{ __('Contact') }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout',[request()->restaurant]) }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout',[request()->restaurant]) }}"
                                      method="POST"
                                      class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="p-2 m-2">
        <div class="container border rounded-3 p-3">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger mt-1 pb-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

        </div>
    </main>
</div>
</body>

<footer class="site-footer">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-none d-md-block">
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" target="_blank"
                       href="{{ route('contact.index', [request()->restaurant]) }}">{{ __('Contact') }}</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login',[request()->restaurant]) }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register', $restaurant) }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('daypart.index',[request()->restaurant]) }}">{{ __('Dagdelen') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('dish.index',[request()->restaurant]) }}">{{ __('Gerechten') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('foodtype.index',[request()->restaurant]) }}">{{ __('Gerecht type') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('ingredient.index',[request()->restaurant]) }}">{{ __('Ingredienten') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('recipe.index',[request()->restaurant]) }}">{{ __('Recepten') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('contact.index',[request()->restaurant]) }}">{{ __('Contact') }}</a>
                </li>
            @endguest
        </ul>
    </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</footer>
</html>
