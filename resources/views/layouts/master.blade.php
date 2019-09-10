<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('app_name') }}</title>
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand bg-primary navbar-dark shadow-sm">
        <div class="container">

            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
            </ul>

            <ul class="nav navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pegawai.index') }}">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('undangan.index') }}">Undangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('surat-tugas.index') }}">Surat Tugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelaksana.index') }}">Pelaksana</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Str::title(Auth::user()->name)}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('pegawai.show', Auth::user()->id) }}">Dashboard</a>
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
    </nav>
    
        
    <div id="app" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <strong>
                                    {{ session('status') }}
                            </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @yield('content')
    </div>

    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example, #tabelUndangan, #tabelPegawai').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'pdf',
                ]
            } );
        });

        $(document).ready(function() {
            $('select').select2({
                theme: 'bootstrap4',
                allowClear: true,
                placeholder: "Pilih",
            });
        });

        $(".alert").delay(2000).slideUp(200, function() {
            $(this).alert('close');
        });

        $(".card-header").click(function (e) { 
            e.preventDefault();
            $(this).next().toggle("slow", "swing");
        });
    </script>
    @stack('scripts')
</body>
</html>