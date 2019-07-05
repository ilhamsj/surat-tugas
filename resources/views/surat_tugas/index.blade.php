@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 mb-4">
            <h3>Undangan</h3>
            <a href="{{route('surat_tugas.create')}}">Buat Surat Tugas</a>
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <th>No Surat</th>
                    <th>Undangan</th>
                    <th>Pegawai</th>
                    <th>Disetujui Oleh</th>
                    <th>Action</th>
                </tr>

                @foreach ($surat_tugas as $item)
                    <tr>
                        <td>{{ $item->no_surat }}</td>
                        <td>{{ $item->undangan->pengundang }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Details
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <form action="{{ route('surat_tugas.destroy', $item->id) }}" method="post">
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
