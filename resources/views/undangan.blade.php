@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md mb-4">
                @include('include/undangan/index')
            </div>
            <div class="col-md">                
                @include('include/undangan/create')
            </div>
        </div>
    </div>
@endsection