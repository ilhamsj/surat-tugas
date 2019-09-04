<div id="createForm" class="card shadow bordered mb-4">
    <div class="card-header text-primary">
        <b>Pegawai</b>
    </div>
    <div class="card-body">
        <h4 id="title" class="title">Pegawai Baru</h4>
        <form method="POST" action="{{ route('pegawai.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" value="{{ old('name') ? old('name') : ''}}">

                @error('name')
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
    