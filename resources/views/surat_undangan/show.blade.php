@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            Nama : {{$pegawai->name}} <br>
            Email : {{$pegawai->email}} <br>
            Role : {{$pegawai->role}} <br>
        </div>
    </div>
</div>
@endsection
