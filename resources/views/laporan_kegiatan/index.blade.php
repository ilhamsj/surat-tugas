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
                    <td>Konfrimasi</td>
                    <td>Paraf</td>
                    {{-- <td>Laporan</td> --}}
                    <td>Action</td>
                </tr>

                @foreach ($surat_tugas as $item)
                    <tr>
                        <td>
                            <a href="{{ route('surat_tugas.show', $item->id) }}">
                                {{ $item->no_surat }}</td>
                            </a>
                        <td><a href="">{{ $item->undangan->pengundang }}</a></td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->confirmed }}</td>
                        <td>{{ $item->ttd->name }}</td>
                        {{-- <td>{{ $item->LaporanKegiatan->content }}</td> --}}
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Details
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    @if (!$item->confirmed)
                                        <a class="dropdown-item" href="{{ route('surat_tugas.update', $item->id) }}">Verivikasi</a>
                                    @endif
                                    <a class="dropdown-item" target="_blank" href="{{ route('cetak_surat', $item->id) }}">Cetak</a>
                                    <a class="dropdown-item" href="{{ route('surat_tugas.edit', $item->id) }}">Edit</a>
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
