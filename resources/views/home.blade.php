@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @include('include/dashboard_pegawai/index')
                @include('include/dashboard_pegawai/show')
            </div>
        </div>
    </div>
@endsection