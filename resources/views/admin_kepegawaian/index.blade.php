@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <h3>Pegawai</h3>
            <a href="{{route('surat_tugas.create')}}">Tambah Pegawai</a>
        </div>
        <div class="col">   
            <table class="table">
                <thead>
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
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Details
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <form action="{{ route('admin_kepegawaian.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pegawai->links() }}
        </div>
    </div>
@endsection
