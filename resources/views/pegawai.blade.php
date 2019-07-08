@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <h3>Surat Tugas</h3>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Pegawai</th>
                    <th scope="col">Detail Undangan</th>
                    <th scope="col">Di setujui oleh</th>
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
