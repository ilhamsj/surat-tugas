@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('surat_tugas.store')}}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="undangan_id">Asal Undangan</label>
                    <select name="undangan_id" id="" class="form-control">
                        @foreach ($undangan as $item)
                            <option value="{{ $item->id }}">{{ $item->pengundang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pegawai_id">Pegawai</label>
                    <select name="pegawai_id" id="" class="form-control">
                        @foreach ($pegawai as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
