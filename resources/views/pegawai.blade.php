@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @include('include/pegawai/index')
            </div>
            <div class="col-md">
                @include('include/pegawai/create')
            </div>
        </div>
    </div>
@endsection