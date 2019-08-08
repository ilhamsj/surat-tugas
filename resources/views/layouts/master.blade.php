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
        @include('layouts._nav')
        <div class="container mt-4 mb-4" style="min-height:100vh">
            <div class="row">
                <div class="col">
                    @include('layouts._left_nav')
                </div>

                <div class="col-md-9 border">
                    <main class="mt-4 mb-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="{{asset('js/app.js')}}"></script>

        <!-- DataTables -->
        <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <!-- App scripts -->
        @stack('scripts')
    </body>
</html>