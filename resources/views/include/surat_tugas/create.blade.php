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
        <b>Surat Tugas</b>
    </div>
    <div class="card-body">
        <h4 class="title">Surat Tugas Baru</h4>
        <form method="POST" action="{{ route('surat-tugas.store') }}">
            @csrf

            <div class="form-group">
                <label for="nomor">Nomor</label>
                <input type="text" name="nomor" class="form-control @error('nomor') is-invalid  @enderror" value="{{ old('nomor') ? old('nomor') : ' '}}">

                @error('nomor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="undangan_id">Undangan</label>
                <select name="undangan_id" class="form-control @error('undangan_id') is-invalid  @enderror">
                    @forelse ($undangans as $undangan)
                        <option value="{{ $undangan->id }}">{{$undangan->perihal}}</option>
                    @empty
                        <option>404</option>
                    @endforelse
                </select>
                @error('undangan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="paraf_id">Paraf</label>
                <select name="paraf_id" class="form-control @error('paraf_id') is-invalid  @enderror ">
                    @forelse ($parafs as $paraf)
                        <option value="{{ $paraf->id }}">{{$paraf->name}}</option>
                    @empty
                        <option>404</option>
                    @endforelse
                </select>

                @error('undangan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>