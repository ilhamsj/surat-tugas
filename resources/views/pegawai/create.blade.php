@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            Pegawai Baru
            <form action="{{route('pegawai.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nip">{{ __('nip') }}</label>
                    <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" autocomplete="nip" autofocus>
                </div>

                <div class="form-group">
                    <label for="name">{{ __('Nama') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="golongan">{{ __('Golongan') }}</label>
                    <input id="golongan" type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" value="{{ old('golongan') }}" autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="jabatan">{{ __('jabatan') }}</label>
                    <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" autocomplete="jabatan" autofocus>
                </div>

                <div class="form-group">
                    <label for="pangkat">{{ __('pangkat') }}</label>
                    <input id="pangkat" type="text" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat" value="{{ old('pangkat') }}" autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="telp">{{ __('telp') }}</label>
                    <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="role">{{ __('role') }}</label>
                    <select name="role" id="role" class="custom-select">
                        <option value="admin_kepegawaian">Admin Kepegawaian</option>
                        <option value="admin_bagian">Admin Bagian</option>
                        <option value="pegawai" selected>Pegawai</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
