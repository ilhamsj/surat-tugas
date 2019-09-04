@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                @include('include/pegawai/index')
            </div>
            <div class="col-md-6">
                @include('include/pegawai/create')
            </div>
        </div>
    </div>
@endsection