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
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="py-4 bg-white" style="min-height:100vh">
            <div class="container">

                <div class="row mb-4  justify-content-center">
                    <div class="col-sm-8 text-center">
                        <h1 class="display-3">Sistem Pengajuan Surat Tugas</h1>
                        <p class="lead">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio quam, nam facilis reprehenderit unde aut enim perspiciatis nemo ipsam quidem perferendis beatae saepe sed quaerat nostrum praesentium officia voluptate maiores?
                        </p>
                        @auth
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            <a href="" class="btn btn-secondary">Daftar</a>
                        @endauth
                        
                    <hr>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8 text-center">
                        <h1 class="display-6 p-4">Kegiatan</h1>
                        <div class="row">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">Sunatan</div>
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>