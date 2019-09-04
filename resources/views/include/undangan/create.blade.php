<div id="createForm" class="card shadow bordered mb-4">
    <div class="card-header text-primary">
        <b>Undangan</b>
    </div>
    <div class="card-body">
        <h4 id="title" class="title">Undangan Baru</h4>
        <form method="POST" action="{{ route('undangan.store') }}">
            @csrf

            <div class="form-group">
                <label for="perihal">Perihal</label>
                <input type="text" name="perihal" id="perihal" class="form-control @error('perihal') is-invalid  @enderror" value="{{ old('perihal') ? old('perihal') : ''}}">

                @error('perihal')
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
