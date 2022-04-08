<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
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
                               href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
                        </li>
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('daypart.index') }}">{{ __('Dagdelen') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dish.index') }}">{{ __('Gerechten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('foodtype.index') }}">{{ __('Gerecht type') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ingredient.index') }}">{{ __('Ingredienten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('recipe.index') }}">{{ __('Recepten') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

    <main class="p-2 m-2">
        <div class="container border rounded-3 p-3">
            <div class="border rounded-3">
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mb-1 pb-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>

<footer class="site-footer">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('daypart.index') }}">{{ __('Dagdelen') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dish.index') }}">{{ __('Gerechten') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('foodtype.index') }}">{{ __('Gerecht type') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ingredient.index') }}">{{ __('Ingredienten') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recipe.index') }}">{{ __('Recepten') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
                </li>
            @endguest
        </ul>
    </nav>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</footer>
</html>
