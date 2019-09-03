@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-md mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <i data-feather="plus-square"></i>
                        <i data-feather="edit"></i>
                        <h4 class="card-title">Total Pegawai </h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection