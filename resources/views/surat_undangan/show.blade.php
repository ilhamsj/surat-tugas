@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12"><h3>Undangan</h3> <hr></div>
        <div class="col-sm-3 mb-4 py-3">
            <h6>Pengundang</h6>
            <h4>{{$undangan->pengundang}}</h4>

            <h6>Nama Acara</h6>
            <h4>
                <a href="{{route('surat_undangan.show', $undangan->id)}}">{{$undangan->nama_acara}}</a>
            </h4>

            <h6>perihal</h6>
            <h4>{{$undangan->perihal}}</h4>

            <h6>waktu</h6>
            <h4>{{$undangan->waktu}}</h4>

            <h6>tempat</h6>
            <h4>{{$undangan->tempat}}</h4>

            {{-- pengundang no_surat nama_acara perihal waktu tempat url_bukti --}}
        </div>
        </div>
</div>
@endsection
