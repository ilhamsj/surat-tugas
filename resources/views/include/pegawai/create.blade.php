@if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong>
                {{ session('status') }}
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card shadow bordered mb-4">
    <div class="card-header text-primary">
        <b>Pegawai</b>
    </div>
    <div class="card-body">
        <h4 class="title">Tambah Pegawai</h4>
        <form method="POST" action="{{ route('undangan.store') }}">
            @csrf

            <div class="form-group">
                <label for="">Perihal</label>
                <input type="text" name="perihal" class="form-control @error('perihal') is-invalid  @enderror" value="{{ old('perihal') ? old('perihal') : ' '}}">

                @error('perihal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>