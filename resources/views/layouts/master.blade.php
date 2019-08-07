<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME')}}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    </head>
    <body>

        <main class="mt-4 mb-4">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                Kementrian Agama Yogyakarta{{date('Y')}}
            </div>
        </footer>

        <!-- jQuery -->
        <script src="{{asset('js/app.js')}}"></script>

        <!-- DataTables -->
        <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <!-- App scripts -->
        @stack('scripts')
    </body>
</html>