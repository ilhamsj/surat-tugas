@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <h3>Undangan</h3>
            <a href="{{route('surat_undangan.create')}}">Buat Surat Undangan</a>
        </div>
        <div class="col">   
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Admin</th>
                        <th scope="col">Pengundang</th>
                        <th scope="col">File</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->pengundang}}</td>
                            <td>
                                <img src="{{Storage::url('files/'.$item->file)}}" style='max-width:100px' alt="" srcset="">
                            </td>
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
        </div>
    </div>
</div>
@endsection
