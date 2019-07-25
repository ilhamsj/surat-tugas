@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Surat Undangan Baru
                </div>
                <div class="card-body">
                    <form action="{{route('surat_undangan.update', $item->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <input type="text" value="{{Auth::user()->id}}" name="admin_id" class="form-control" readonly hidden>
                        </div>

                        {{--  --}}
                        <div class="form-group">
                            <label for="no_surat">Nomor Surat</label>
                            <input type="text" name="no_surat" class="form-control @error('no_surat') is-invalid @enderror" value={{ $item->no_surat }} autocomplete="no_surat" autofocus>
                        </div>
                        @error('no_surat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}

                        {{--  --}}
                        <div class="form-group">
                            <label for="pengundang">Asal Undangan</label>
                            <input type="text" name="pengundang" class="form-control @error('pengundang') is-invalid @enderror" value="{{ $item->pengundang }}" autocomplete="pengundang" autofocus>
                        </div>
                        @error('pengundang')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}

                        {{-- perihal --}}
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" name="perihal" class="form-control @error('perihal') is-invalid @enderror" value="{{ $item->perihal }}" autocomplete="perihal" autofocus>
                        </div>
                        @error('perihal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}

                        {{-- nama_acara --}}
                        <div class="form-group">
                            <label for="nama_acara">nama_acara</label>
                            <input type="text" name="nama_acara" class="form-control @error('nama_acara') is-invalid @enderror" value="{{ $item->nama_acara }}" autocomplete="nama_acara" autofocus>
                        </div>
                        @error('nama_acara')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}
                        
                        {{-- waktu_mulai --}}
                        <div class="form-group">
                            <label for="waktu_mulai">waktu_mulai</label>
                        <input type="datetime-local" name="waktu_mulai" class="form-control @error('waktu_mulai') is-invalid @enderror" value="{{$waktu_mulai}}" autocomplete="waktu_mulai" autofocus>
                        </div>
                        @error('waktu_mulai')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}

                        {{-- waktu_selesai --}}
                        <div class="form-group">
                            <label for="waktu_selesai">waktu_selesai</label>
                            <input type="datetime-local" name="waktu_selesai" class="form-control @error('waktu_selesai') is-invalid @enderror" value="{{$waktu_selesai}}" autocomplete="waktu_selesai" autofocus>
                        </div>
                        @error('waktu_selesai')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}

                        {{-- tempat --}}
                        <div class="form-group">
                            <label for="tempat">tempat</label>
                            <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror" value={{ $item->tempat }} autocomplete="tempat" autofocus>
                        </div>
                        @error('tempat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{--  --}}

                        {{-- 
                        <div class="form-group">
                          <label for="">File</label>
                          <img src="{{ $item->file }}" class="img-fluid">
                        </div>
                        
                        <div class="form-group">
                            <input type="file"  name="file" class="form-control-file @error('file') is-invalid @enderror" value={{ $item->file }} placeholder="file" autocomplete="file" autofocus>
                        </div>
                        @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                         --}}

                        <button type="submit" class="btn btn-success btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
