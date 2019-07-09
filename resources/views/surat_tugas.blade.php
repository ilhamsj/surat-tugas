@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 mb-4">
            <h3>Data Surat Tugas</h3>
            <a href="{{route('surat_tugas.create')}}">Buat Surat Tugas</a>
        </div>
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <td>No Surat</td>
                    <td>Undangan</td>
                    <td>Pegawai</td>
                    <td>Disetujui Oleh</td>
                    <td>Tanggal Verivikasi</td>
                    <td>Action</td>
                </tr>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->no_surat }}</td>
                        <td><a href="">{{ $item->undangan->pengundang }}</a></td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td></td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Details
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Cetak</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <form action="{{ route('surat_tugas.destroy', $item->id) }}" method="post">
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
