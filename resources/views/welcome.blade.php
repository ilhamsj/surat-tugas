@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <a href="{{route('home')}}" class="btn btn-primary">Home</a>
            <a href="{{route('pegawai')}}" class="btn btn-primary">Pegawai</a>
            <a href="{{route('admin')}}" class="btn btn-primary">Admin Bagian</a>
            <a href="{{route('superadmin')}}" class="btn btn-primary">Admin Kepegawaian</a>
        </div>
    </div>
</div>
@endsection
