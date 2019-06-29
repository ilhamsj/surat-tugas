@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form method="POST" action="">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="pengundang">Pengundang</label>
                    <input id="pengundang" type="text" class="form-control @error('pengundang') is-invalid @enderror" name="pengundang" value="{{ old('pengundang') }}"  autocomplete="pengundang" autofocus>

                    @error('pengundang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_surat">No Surat</label>
                    <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" value="{{ old('no_surat') }}"  autocomplete="no_surat" autofocus>

                    @error('no_surat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_acara">Acara</label>
                    <input id="nama_acara" type="text" class="form-control @error('nama_acara') is-invalid @enderror" name="nama_acara" value="{{ old('nama_acara') }}"  autocomplete="nama_acara" autofocus>

                    @error('nama_acara')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input id="perihal" type="text" class="form-control @error('perihal') is-invalid @enderror" name="perihal" value="{{ old('perihal') }}"  autocomplete="perihal" autofocus>

                    @error('perihal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tempat">tempat</label>
                    <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}"  autocomplete="tempat" autofocus>

                    @error('tempat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="waktu">waktu</label>
                    <input id="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}"  autocomplete="waktu" autofocus>

                    @error('waktu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_bukti">url_bukti</label>
                    <input id="url_bukti" type="text" class="form-control @error('url_bukti') is-invalid @enderror" name="url_bukti" value="{{ old('url_bukti') }}"  autocomplete="url_bukti" autofocus>

                    @error('url_bukti')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Simpan') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
