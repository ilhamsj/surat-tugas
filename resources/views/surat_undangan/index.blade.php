@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <h3>Data Undangan</h3>
            <a href="{{route('surat_undangan.create')}}">Buat Surat Undangan</a>
        </div>
        <div class="col">   
            <table class="table table-bordered">
                    <tr>
                        <td>Admin</td>
                        <td>Pengundang</td>
                        <td>File</td>
                        <td>Tanggal</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <a href="{{ route('pegawai.show', $item->user->id) }}">{{$item->user->name}}</a>
                            </td>
                            <td>
                                <a href="{{ route('surat_undangan.show', $item->id) }}">{{$item->pengundang}}</a>
                            </td>
                            <td>
                                <img src="{{Storage::url('files/'.$item->file)}}" style='max-width:100px' alt="" srcset="">
                            </td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Details
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('surat_undangan.show', $item->id) }}">Lihat Undangan</a>
                                        <a class="dropdown-item" href="{{ route('surat_undangan.edit', $item->id) }}">Edit</a>
                                        <form action="{{ route('surat_undangan.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
