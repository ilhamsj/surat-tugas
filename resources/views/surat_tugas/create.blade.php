@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <h3>Surat Tugas Baru</h3>
            <form action="{{route('surat_tugas.store')}}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="pegawai_id">Pegawai</label>
                    <select name="pegawai_id" id="" class="form-control">
                        @foreach ($pegawai as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="undangan_id">Undangan</label>
                    <select name="undangan_id" id="" class="form-control">
                        @foreach ($undangan as $item)
                            <option value="{{ $item->id }}">{{ $item->pengundang }}</option>
                        @endforeach
                    </select>
                </div>
                    
                @if (Auth::user()->role == 'admin_kepegawaian')
                <div class="form-group">
                    <label for="penanda_tangan_id">Atasan</label>
                    <select name="penanda_tangan_id" class="form-control">
                        @foreach ($pegawai as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="no_surat">Nomor Surat</label>
                    <input type="text" name="no_surat" value="/Kw.12.1/2/KP.01.1/{{date('m/Y')}}" class="form-control">
                </div>
                @endif

                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
