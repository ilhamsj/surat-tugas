@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div id="createCard" class="col-md mb-4">
                @include('include/pegawai/create')
            </div>
            <div class="col-md mb-4">
                @include('include/pegawai/index')
            </div>
        </div>
    </div>
@endsection