@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form action="{{route('surat_undangan.store')}}" method="post">
                @csrf
                
                <input type="text" name="pengundang" id="">
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
