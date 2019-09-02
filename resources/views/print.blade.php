@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Data surat tugas </h2>
            {{ $item->nomor }}

            <h2>Data Undangan</h2>
            {{ $item->Undangan->perihal }}
            
            <h2>Data Pegawai</h2>
            <ul>
                @foreach ($item->Pelaksana as $pelaksana)
                    <li>
                        {{$pelaksana->user->name}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection