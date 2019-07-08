@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8 text-center">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Admin Kepegawaian
                        </div>
                        <div class="card-body">
                            <a href="{{ route('admin_kepegawaian.index') }}">Pegawai</a> <br/>
                            <a href="{{ route('surat_undangan.index') }}">Undangan</a> <br/>
                            <a href="{{ route('surat_tugas.index') }}">Surat Tugas</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Admin Bagian
                        </div>
                        <div class="card-body">
                            <a href="{{ route('admin') }}">Admin Bagian</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Pegawai
                        </div>
                        <div class="card-body">
                            <a href="{{ route('pegawai') }}">Pegawai</a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection
