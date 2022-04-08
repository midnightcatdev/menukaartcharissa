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
