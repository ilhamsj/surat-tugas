@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form action="{{route('surat_undangan.update', $undangan->id)}}" method="post">
                @csrf
                @method('PUT')
                
                <input type="text" name="pengundang" id="" value="{{$undangan->pengundang}}">
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
