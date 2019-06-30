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
                <div class="row">
                @auth
                    <div class="col-sm-3">
                            <div class="row">

                                {{-- Admin Kepegawaian--}}
                                @if (Auth::user()->role == 'admin_kepegawaian')
                                <div class="col mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            Admin Kepegawaian
                                        </div>
                                        <div class="card-body">
                                            <nav class="nav flex-column">
                                                <a class="nav-link" href="{{ route('admin_kepegawaian.index') }}">Data Pegawai</a>
                                                <a class="nav-link" href="{{ route('surat_undangan.index') }}">Data Undangan</a>
                                                <a class="nav-link" href="#">Data Surat</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                {{-- //superadmin --}}

                                {{--  --}}
                                @elseif(Auth::user()->role == 'admin_bagian')
                                <div class="col mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            Admin Bagian
                                        </div>
                                        <div class="card-body">
                                            <nav class="nav flex-column">
                                                <a class="nav-link" href="{{ route('admin') }}">Dashboard</a>
                                                <a class="nav-link" href="{{ route('surat_undangan.create') }}">Submit Undangan</a>
                                                <a class="nav-link" href="{{ route('surat_undangan.create') }}">Buat Surat Tugas</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}

                                {{--  --}}
                                @else
                                <div class="col mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            Pegawai
                                        </div>
                                        <div class="card-body">
                                            <nav class="nav flex-column">
                                                <a class="nav-link" href="{{ route('admin') }}">Dashboard</a>
                                                <a class="nav-link" href="{{ route('surat_undangan.create') }}">Submit Undangan</a>
                                                <a class="nav-link" href="{{ route('surat_undangan.create') }}">Buat Surat Tugas</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                {{--  --}}

                            </div>
                        @yield('sidebar')
                    </div>
                @endauth
                    <div class="col">
                        @yield('content')
                    </div>
                </div>            
            </div>
        </main>
    </div>
</body>
</html>