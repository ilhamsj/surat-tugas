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
                        <td>Nomor Undangan</td>
                        <td>Pengundang</td>
                        <td>Perihal</td>
                        <td>Nama Acara</td>
                        <td>Waktu</td>
                        <td>Tempat</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <a href="{{ route('surat_undangan.show', $item->id) }}">{{$item->no_surat}}</a>
                            </td>

                            <td>{{ $item->pengundang }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>{{ $item->nama_acara }}</td>
                            <td>{{ $item->waktu_mulai . ' - ' . $item->waktu_selesai }}</td>
                            <td>{{ $item->tempat }}</td>

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
