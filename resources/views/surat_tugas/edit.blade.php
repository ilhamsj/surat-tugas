@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('surat_tugas.store')}}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="no_surat">Nomor Surat</label>
                    <input type="text" name="no_surat" class="form-control">
                </div>

                <div class="form-group">
                    <label for="pegawai">Pegawai</label>
                    <select name="pegawai" class="form-control">
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="undangan">Undangan</label>
                    <select name="undangan" class="form-control">
                    </select>
                </div>

                <div class="form-group">
                    <label for="penanda_tangan">Paraf</label>
                    <select name="penanda_tangan" class="form-control">

                    </select>
                </div>

                <div class="form-group">
                    <label for="penanda_tangan">Verivikasi</label>
                    <select name="penanda_tangan" class="form-control">

                    </select>
                </div>

                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
