@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Surat Undangan Baru
                </div>
                <div class="card-body">
            <form action="{{route('surat_undangan.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <input type="text" value="{{Auth::user()->id}}" name="admin_id" id="admin_id" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <input type="text" id="pengundang"  name="pengundang" class="form-control @error('pengundang') is-invalid @enderror" value="{{ old('pengundang') }}" placeholder="Pengundang" autocomplete="pengundang" autofocus>
                </div>
                
                @error('pengundang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{--  --}}

                {{--  --}}
                <div class="form-group">
                    <input type="file" id="file"  name="file" class="form-control-file @error('file') is-invalid @enderror" value="{{ old('file') }}" placeholder="file" autocomplete="file" autofocus>
                </div>
                
                @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{--  --}}

                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>                  
            </div>
        </div>
        </div>
    </div>
@endsection
