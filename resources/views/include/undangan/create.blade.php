<div id="createForm" class="card shadow bordered mb-4">
    <div class="card-header text-primary">
        <b>Undangan</b>
    </div>
    <div class="card-body">
        <h4 id="title" class="title">Undangan Baru</h4>
        <form method="POST" action="{{ route('undangan.store') }}">
            @csrf

            <div class="form-group">
                <label for="pengundang">Pengundang</label>
                <input type="text" name="pengundang" id="pengundang" class="form-control @error('pengundang') is-invalid  @enderror" value="{{ old('pengundang') ? old('pengundang') : ''}}">

                @error('pengundang')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nomor">Nomor Surat</label>
                <input type="text" name="nomor" id="nomor" class="form-control @error('nomor') is-invalid  @enderror" value="{{ old('nomor') ? old('nomor') : ''}}">

                @error('nomor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tipe">Undangan</label>
                <select id="tipe" name="tipe" class="form-control @error('tipe') is-invalid  @enderror">
                    <option value="Surat Undangan">Surat Undangan</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                </select>
                @error('tipe')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="acara">Acara</label>
                <input type="text" name="acara" id="acara" class="form-control @error('acara') is-invalid  @enderror" value="{{ old('acara') ? old('acara') : ''}}">

                @error('acara')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="perihal">Perihal</label>
                <input type="text" name="perihal" id="perihal" class="form-control @error('perihal') is-invalid  @enderror" value="{{ old('perihal') ? old('perihal') : ''}}">

                @error('perihal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tempat">Tempat</label>
                <input type="text" name="tempat" id="tempat" class="form-control @error('tempat') is-invalid  @enderror" value="{{ old('tempat') ? old('tempat') : ''}}">

                @error('tempat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="date" name="waktu" id="waktu" class="form-control @error('waktu') is-invalid  @enderror" value="{{ old('waktu') ? old('waktu') : ''}}">

                @error('waktu')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </form>
    </div>
</div>
