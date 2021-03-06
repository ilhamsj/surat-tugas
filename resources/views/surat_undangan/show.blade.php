@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <td>Admin</td>
                    <td>{{$undangan->user->name}}</td>
                </tr>
                <tr>
                    <td>Pengundang</td>
                    <td>{{$undangan->pengundang}}</td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>
                        {{ $undangan->file }}
                    </td>
                </tr>
                <tr>
                    <td>Nama Acara</td>
                    <td>
                        <a href="{{route('surat_undangan.show', $undangan->id)}}">{{$undangan->nama_acara}}</a>
                    </td>
                </tr>
                <tr>
                    <td>perihal</td>
                    <td>{{$undangan->perihal}}</td>
                </tr>
                <tr>
                    <td>waktu</td>
                    <td>{{ $undangan->waktu_mulai . ' - ' . $undangan->waktu_selesai }}</td>
                </tr>
                <tr>
                    <td>tempat</td>
                    <td>{{$undangan->tempat}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection