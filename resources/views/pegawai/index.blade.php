@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">   
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Surat Tugas</td>
                    <td>Tanggal</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->no_surat}}</td>
                        <td>{{$item->undangan->}}</td>
                        <td>{{$item->confirmed}}</td>
                        <td>
                            <a href="">Lapor Kegiatan</a>
                        </td>
                    </tr>
                @endforeach
           </table>
        </div>
    </div>
</div>
@endsection