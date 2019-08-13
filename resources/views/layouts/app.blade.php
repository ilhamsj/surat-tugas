<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    {{-- selec2 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
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

        <div class="container mt-3">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
                <button class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>

        <div class="container">
            
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        @auth                            
                        @if (Auth::user()->role == 'pegawai' || Auth::user()->role == 'admin_bagian' || Auth::user()->role == 'admin_kepegawaian')
                            <li class="list-group-item disabled">Pegawai</li>
                            <li class="list-group-item">
                                <a href="{{ route('surat') }}">Surat Tugas</a>
                            </li>

                            @if (Auth::user()->role == 'admin_bagian' || Auth::user()->role == 'admin_kepegawaian')
                                <li class="list-group-item disabled">Admin</li>
                                <li class="list-group-item">
                                    <a href="{{ route('surat_undangan.create') }}">Submit Undangan</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('surat_tugas.create') }}">Buat Surat Tugas</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('surat_undangan.index') }}">Data Undangan</a>
                                </li>

                                @if (Auth::user()->role == 'admin_kepegawaian')
                                    <li class="list-group-item disabled">Superadmin</li>
                                    <li class="list-group-item">
                                        <a href="{{ route('pegawai.index') }}">Data Pegawai</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('surat_tugas.index') }}">Data Surat Tugas</a>
                                    </li>
                                @endif
                            @endif
                        @endif
                        @endauth

                    </ul>
                </div>

                <div class="col-md-9">
                    <main class="mb-4 py-3 bg-white border row" style="min-height:100vh">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script defer src="https://friconix.com/cdn/friconix-0.695.js"></script>
    {{-- select2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    @stack('scripts')
</body>
</html>