@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
