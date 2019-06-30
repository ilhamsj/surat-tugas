@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Undangan</h3>
            <a href="{{route('surat_undangan.create')}}">Tambah</a>
        </div>
            @foreach ($undangan as $item)
                <div class="col-sm-3 mb-4 py-3">
                    Pengundang
                    {{$item->pengundang}}
                    <img src="{{ 'images/'.$item->file }}" alt="" srcset="" class="img-fluid">

                    <div>
                        <a class="btn btn-primary btn-sm" href="{{route('surat_undangan.edit',  $item->id)}}">Edit</a>

                        <form action="{{route('surat_undangan.destroy', $item->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
