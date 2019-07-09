@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <h3>Pegawai</h3>
            <a href="{{route('pegawai.create')}}">Tambah Pegawai</a>
        </div>
        <div class="col">   
            <table class="table table-bordered">
                    <tr>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Tanggal Pendaftaran</td>
                        <td>            
                            <a href="{{route('register')}}">Tambah Pegawai</a>
                        </td>
                    </tr>
                    @foreach ($pegawai as $item)
                        <tr>
                            <td><a href="{{ route('pegawai.show', $item->id) }}">{{$item->name}}</a></td>
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
                                        <form action="{{ route('pegawai.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
           </table>
        </div>
    </div>
</div>
@endsection