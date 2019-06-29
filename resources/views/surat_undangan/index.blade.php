@extends('layouts.app')

@section('content')
<div class="container">


    <div class="alert alert-success" role="alert">
        Data berhasil dihapus
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h3>Undangan</h3>
            <a href="{{route('surat_undangan.create')}}">Tambah</a>
        </div>
        @foreach ($undangan as $item)
        <div class="col-sm-3 mb-4 py-3">
            <h6>Pengundang</h6>
            <h4>{{$item->pengundang}}</h4>

            <h6>Nama Acara</h6>
            <h4>
                <a href="{{route('surat_undangan.show', $item->id)}}">{{$item->nama_acara}}</a>
            </h4>

            <h6>perihal</h6>
            <h4>{{$item->perihal}}</h4>

            <h6>waktu</h6>
            <h4>{{$item->waktu}}</h4>

            <h6>tempat</h6>
            <h4>{{$item->tempat}}</h4>

            <a class="btn btn-primary" href="{{route('surat_undangan.edit',  $item->id)}}">Edit</a>

            <form action="{{route('surat_undangan.destroy', $item->id)}}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
        @endforeach
        </div>
</div>
@endsection
