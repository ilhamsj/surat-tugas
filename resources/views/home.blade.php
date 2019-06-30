@extends('layouts.app')

@section('sidebar')
    <div class="row">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 mb-4">
            <div class="card">
                <div class="card-header">
                    Pengumuman
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor officia esse, sapiente ea fugit soluta assumenda perspiciatis unde magnam aspernatur distinctio, animi maiores dolorem suscipit eius recusandae, optio inventore.
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-header">
                    Surat Tugas
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor officia esse, sapiente ea fugit soluta assumenda perspiciatis unde magnam aspernatur distinctio, animi maiores dolorem suscipit eius recusandae, optio inventore.
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
