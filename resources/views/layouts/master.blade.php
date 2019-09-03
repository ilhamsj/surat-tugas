<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand bg-primary navbar-dark shadow-sm">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('undangan.index') }}">Undangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('surat-tugas.index') }}">Surat Tugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelaksana.index') }}">Pelaksana</a>
                </li>
            </ul>
        </div>
    </nav>
        
    <div id="app" class="py-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>