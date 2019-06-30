@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">   
            <div class="py-2">
                <h3>Data Pegawai</h3>
            </div>
            <table class="table border">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $item)
                        <tr>
                            <td><a href="{{ route('admin_kepegawaian.show', $item->id) }}">{{$item->name}}</a></td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->role}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="" class="btn btn-secondary btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pegawai->links() }}
        </div>
    </div>
</div>
@endsection
