@extends('layouts.master')

@php
    $data = [
        'Data Pegawai',
        'Data Undangan',
        'Data Surat Tugas',
    ];
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($total as $key => $value)
            <div class="col-md mb-4">
                <div class="card shadow">
                    <div class="card-header">
                        {{$key}}
                    </div>
                    <div class="card-body">
                            <h1>{{$value}} {{$key}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection