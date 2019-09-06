@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md mb-4">
                @include('include/pegawai/index')
            </div>
            <div class="col-md" id="createCard">
                @include('include/pegawai/create')
            </div>
        </div>
    </div>
@endsection