@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4" id="capture">
                @include('include/dashboard_pegawai/index')
            </div>
            <div class="col-md">
                @include('include/dashboard_pegawai/show')
            </div>
        </div>
    </div>
@endsection