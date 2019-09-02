@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="surat" class="col-md-6 border">
            <b>Data surat tugas :</b>
            {{ $item->nomor }} <br/>

            <b>Data Undangan :</b>
            {{ $item->Undangan->perihal }} <br/>
            
            <b>Pegawai : </b>
            @foreach ($item->Pelaksana as $pelaksana)
                {{$pelaksana->user->name}}, 
            @endforeach
            <br/>

            <b>Paraf :</b>
            {{ $item->Paraf->name }} <br/>

        </div>
    </div>
</div>
@endsection