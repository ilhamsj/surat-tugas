@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('surat_tugas.update', $surat_tugas->id)}}" method="post">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="pegawai_id">Pegawai</label>
                    <select name="pegawai_id" id="" class="form-control">
                        <option value="{{ $surat_tugas->user->id }}">{{ $surat_tugas->user->name }}</option>
                        @foreach ($pegawai as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="undangan_id">Undangan</label>
                    <select name="undangan_id" id="" class="form-control">
                        <option value="{{ $surat_tugas->undangan->id }}">{{ $surat_tugas->undangan->pengundang }}</option>
                        @foreach ($undangan as $item)
                            <option value="{{ $item->id }}">{{ $item->pengundang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="penanda_tangan_id">Atasan</label>
                    <select name="penanda_tangan_id" class="form-control">
                        @if ($item->penanda_tangan_id != null)
                            <option value="{{ $surat_tugas->ttd->id }}">{{ $surat_tugas->ttd->name }}</option>
                        @endif
                        
                        @foreach ($pegawai as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_surat">Nomor Surat</label>
                    <input type="text" name="no_surat" class="form-control" value="{{ $surat_tugas->no_surat }}">
                </div>
    
                <div class="form-group">
                    <label for="confirmed">Surat</label>
                    <select name="confirmed" class="form-control">
                        @if ($surat_tugas->confirmed == 1)
                            <option value="{{ $surat_tugas->confirmed }}">Terverivikasi</option>
                            <option value="0">Belum Terverivikasi</option>
                        @else
                            <option value="{{ $surat_tugas->confirmed }}">Belum Terverivikasi</option>
                            <option value="1">Terverivikasi</option>
                        @endif
                    </select>
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
