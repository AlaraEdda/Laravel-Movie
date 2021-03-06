<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Movie-List') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @guest
                @else
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bekeken</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/overzicht">Overzicht Films</a>
                        <a class="dropdown-item" href="/genre">Genre's</a>
                        <!-- <div class="dropdown-divider"></div> -->
                    </div>
                </li> --}}
                <!--
                <li class="nav-item">
                  <a class="nav-link" href="/services">Gedeelde Lijst</a>
                </li>
                -->
                <li class="nav-item">
                  <a class="nav-link" href="/overzicht">Overzicht Films</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/watchlist">Watchlist</a>
                </li>
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authenticatie Linkjes -->
                @guest
                    <!-- Login -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <!-- Register -->
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                <!--Geen Guest, al ingelogt -->
                <a class="nav-link" href="/sharedlist">Gedeelde Lijst</a>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/information">All Made Users</a>
                        {{-- <a class="dropdown-item" href="#">Instellingen</a> --}}

                        <!-- Log-out Button -->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>