@extends('layouts.master')

@php
    $data = [
        'Data Pegawai',
        'Data Undangan',
        'Data Surat Tugas',
    ];
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md">
                <div class="row">
                    @foreach ($total as $key => $value)            
                    <div class="col-md-12 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                {{$key}}
                            </div>
                            <div class="card-body">
                                    <h1>{{$value}} {{$key}}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}
            <div class="col-md-8">
                <div id="createForm" class="card shadow bordered mb-4">
                    <div class="card-header text-primary">
                        <b>Letter</b>
                    </div>
                    <div class="card-body">
                        <h4 id="title" class="title">Add New Letter</h4>
                        <form method="POST" action="{{ route('dashboard.store') }}">
                            @csrf
                
                            <div class="form-group">
                                <label for="perihal">Perihal</label>
                                <input type="text" name="perihal" id="perihal" class="form-control @error('perihal') is-invalid  @enderror" value="{{ old('perihal') ? old('perihal') : ''}}">
                
                                @error('perihal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
    // html2canvas(document.body).then(function(canvas) {
    //     document.body.appendChild(canvas);
    // });
    </script>
@endpush