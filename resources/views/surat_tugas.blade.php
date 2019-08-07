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
                    <td>Waktu Mulai</td>
                    <td>Action</td>
                </tr>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->no_surat }}</td>
                        <td><a href="">{{ $item->undangan->pengundang }}</a></td>
                        <td><a href="">{{ $item->undangan->waktu_mulai }}</a></td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Details
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Cetak</a>
                                    <a class="dropdown-item" href="#">Lapor Kegiatan</a>
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
