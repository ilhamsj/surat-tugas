<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Dokumentasi</b>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('home.store') }}">
            @csrf
            <input type="text" name="pelaksana_id" id="pelaksana_id" class="@error('pelaksana_id') is-invalid  @enderror" value="{{ old('pelaksana_id') ? old('pelaksana_id') : ' '}}" hidden>

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid  @enderror" value="{{ old('judul') ? old('judul') : ' '}}">

                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid  @enderror" name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') ? old('deskripsi') : ''}}</textarea>

                @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>