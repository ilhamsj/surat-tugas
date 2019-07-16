<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DataTables</title>

        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        
        <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- DataTables -->
        <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <!-- App scripts -->
        @stack('scripts')
    </body>
</html>