@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Undangan</th>
                    <th>Pegawai</th>
                </tr>
                @foreach ($surat_tugas as $item)

                @endforeach
                @foreach ($surat_tugas as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->SuratTugas_id }}</td>
                        <td>{{ $item->SuratUndangan_id }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
