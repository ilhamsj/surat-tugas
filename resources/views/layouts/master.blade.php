<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-image: url(../images/undraw_visual_data_b1wx.svg);
            background-size: 50%;
            background-repeat: no-repeat;
            background-position-y: bottom;
            background-position-x: right;
            min-height: 100vh;
        }
    </style>
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand bg-primary navbar-dark shadow-sm">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
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
            </ul>
        </div>
    </nav>
        
    <div id="app" class="py-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example, #tabelUndangan').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'pdf', 
                ]
            } );
        });

        $(document).ready(function() {
            $('select').select2({
                theme: 'bootstrap4',
                placeholder: "Pilih Opsi",
                allowClear: true,
            });
        });
    </script>
    @stack('scripts')
</body>
</html>