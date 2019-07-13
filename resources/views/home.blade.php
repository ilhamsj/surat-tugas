@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-4">
            <div class="card">
                <div class="card-header">
                    Lapor Kegiatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tugas">Pilih Tugas</label>
                            <input type="text" name="nama kegiatan" id="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tugas">Laporan Kegiatan</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Foto Kegiatan</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <button type="submit" class="btn btn-success btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
