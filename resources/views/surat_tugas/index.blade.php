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
                        <td><a href="{{ route('surat_undangan.show', $item->undangan->id) }}">{{ $item->undangan->pengundang }}</a></td>
                        <td>
                            <a href="{{ route('pegawai.show', $item->user->id) }}">
                                {{ $item->user->name }}
                            </a>
                        </td>
                        <td>{{ $item->confirmed }}</td>
                        <td>{{ $item->ttd->name }}</td>
                        <td>
                                @if ($item->confirmed)
                                    <i class="fi-cwsuxl-check"></i>
                                    <a class="d-inline" target="_blank" href="{{ route('cetak_surat', $item->undangan_id) }}">
                                        <i class="fi-xwsuxl-external-link-solid"></i>
                                        
                                    </a>
                                @else
                                    <a class="d-inline" href="{{ route('surat_tugas.update', $item->id) }}">
                                        <i class="fi-cwsuxl-check"></i>
                                    </a>
                                @endif

                                <a class="d-inline" href="{{ route('surat_tugas.edit', $item->id) }}"><i class="fi-xnsuxl-edit-solid"></i></a>
                                <a class="d-inline" href="{{ route('surat_tugas.destroy', $item->id) }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete{{$item->id}}').submit();">
                                    <i class="fi-xnsuxl-trash-bin"></i>
                                </a>

                                <form id="delete{{$item->id}}" action="{{ route('surat_tugas.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                        </td>
                    </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
