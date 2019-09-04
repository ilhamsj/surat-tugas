@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @include('include/undangan/index')
            </div>
            <div class="col-md">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <strong>
                                {{ session('status') }}
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                
                @include('include/undangan/create')
                {{-- @include('include/undangan/edit') --}}
            </div>
        </div>
    </div>
@endsection