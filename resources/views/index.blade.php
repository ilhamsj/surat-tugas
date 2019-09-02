<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div id="app">
        <div class="container">
            @forelse ($collection as $item)
                <div>
                    Undangan : {{ $item->SuratTugas->Undangan->perihal }} <br/>
                    No Surat : {{ $item->SuratTugas->nomor }} <br/>
                    Pegawai : {{ $item->user->name }}
                </div>
            @empty
                
            @endforelse
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>