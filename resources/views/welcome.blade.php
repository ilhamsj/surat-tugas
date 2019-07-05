@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col text-center">
            <h1>Sistem Pengajuan Surat Tugas</h1>
            <h2>Kementrian Agama Yogyakarta</h2>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus perferendis est ipsam similique? Consequatur animi impedit quis illo assumenda beatae eum est dicta iste nulla, repudiandae recusandae, rerum ducimus alias!"

            <div class="mt-4">
                <a href="{{ route('admin_kepegawaian.index') }}" class="btn btn-primary">Admin Kepegawaian</a>
                <a href="{{ route('admin') }}" class="btn btn-primary">Admin Bagian</a>
                <a href="{{ route('pegawai') }}" class="btn btn-primary">Pegawai</a>
            </div>
        </div>
    </div>
@endsection
