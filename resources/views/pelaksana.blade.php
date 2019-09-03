@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @include('include/pelaksana/index')
            </div>
            <div class="col-md">
                @include('include/pelaksana/create')
            </div>
        </div>
    </div>
@endsection