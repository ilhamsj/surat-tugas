@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    Surat Tugas
                </div>
            </div>
        </div>
        <div class="col-sm mb-4">
            <div class="card">
                <div class="card-header">
                    Lapor Kegiatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="nama kegiatan" id="" class="form-control" placeholder="Nama Kegiatan">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Laporan Kegiatan"></textarea>
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
@endsection
