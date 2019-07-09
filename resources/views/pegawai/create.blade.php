@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            Pegawai Baru
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="nip">{{ __('nip') }}</label>
                    <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" autocomplete="nip" autofocus>
                    @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">{{ __('Nama') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="golongan">{{ __('Golongan') }}</label>
                    <input id="golongan" type="text" class="form-control @error('golongan') is-invalid @enderror" name="golongan" value="{{ old('golongan') }}" autocomplete="name" autofocus>

                    @error('golongan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jabatan">{{ __('jabatan') }}</label>
                    <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" autocomplete="jabatan" autofocus>

                    @error('jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="eselon">{{ __('eselon') }}</label>
                    <input id="eselon" type="text" class="form-control @error('eselon') is-invalid @enderror" name="eselon" value="{{ old('eselon') }}" autocomplete="name" autofocus>

                    @error('eselon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telp">{{ __('telp') }}</label>
                    <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" autocomplete="name" autofocus>

                    @error('telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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

                <div class="form-group">
                    <label for="password">{{ __('password') }}</label>
                    <input id="password" type="password" class="form-control" name="password" autocomplete="password">
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
