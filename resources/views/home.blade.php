@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Data Pegawai</h2>
            <hr>
            @foreach ($pegawai as $item)
                {{$item->name}} <br/>
            @endforeach
        </div>
    </div>
</div>
@endsection
