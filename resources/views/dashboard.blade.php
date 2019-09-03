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
        <div class="row">

            @foreach ($data as $key => $value)            
            <div class="col-md mb-4">
                <div class="card p shadow border-0 ">
                    <div class="card-body">
                        <h4 class="card-title">{{$value}}</h4>
                        <p class="card-text">
                            Lorem ipsum 
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection