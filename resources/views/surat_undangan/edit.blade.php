@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('surat_undangan.update', $undangan->id)}}" method="post">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="pengundang">Pengundang</label>
                    <input type="text" name="pengundang" id="" class="form-control" value="{{$undangan->pengundang}}">
                </div>
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
