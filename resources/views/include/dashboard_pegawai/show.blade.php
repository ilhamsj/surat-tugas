<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Dokumentasi</b>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('surat-tugas.store') }}">
            @csrf

            <div class="form-group">
                <label for="nomor">Nomor</label>
                <input type="text" name="nomor" id="nomor" class="form-control @error('nomor') is-invalid  @enderror" value="{{ old('nomor') ? old('nomor') : ' '}}">

                @error('nomor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>