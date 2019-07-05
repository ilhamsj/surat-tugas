@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            Surat Tugas

            <table class="table table-responsive">
                <thead class="thead-dark">
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
                            <td>{{$item->penanda_tangan_id}}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
