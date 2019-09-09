@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('include/surat_tugas/index')
            </div>
            <div class="col-md">
                @include('include/surat_tugas/create')
            </div>
        </div>
    </div>
@endsection