@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <h3>Data Pegawai</h3>
            <a href="{{route('surat_tugas.create')}}">Pegawai Baru</a>
        </div>
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Pegawai</td>
                        <td>Detail Undangan</td>
                        <td>Di setujui oleh</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->undangan->pengundang}}</td>
                            <td>{{$item->user->name}}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
