@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-2">
            <a href="{{ route('admin_kepegawaian.create') }}" class="">Surat Baru</a>
        </div>
        <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $item)
                        <tr>
                            <td><a href="{{ route('admin_kepegawaian.show', $item->id) }}">{{$item->name}}</a></td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->role}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pegawai->links() }}
        </div>
    </div>
</div>
@endsection
