<div class="card shadow bordered mb-4">
    <div class="card-header text-primary">
        <b>Surat Tugas</b>
    </div>
    <div class="card-body">
        <h4 class="title">Surat Tugas Baru</h4>
        <form method="POST" action="{{ route('surat-tugas.store') }}">
            @csrf

            @if (Auth::user()->role == 'admin_kepegawaian')                
            <div class="form-group">
                <label for="nomor">Nomor</label>
                <input type="text" name="nomor" id="nomor" class="form-control @error('nomor') is-invalid  @enderror" value="{{ old('nomor') ? old('nomor') : ' '}}">

                @error('nomor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endif
            
            <div class="form-group">
                <label for="undangan_id">Undangan</label>
                <select name="undangan_id" id="undangan_id" class="form-control @error('undangan_id') is-invalid  @enderror">
                    @foreach ($undangans as $undangan)
                        <option value="{{ $undangan->id }}">{{Str::title($undangan->pengundang) . ' | ' .$undangan->nomor}}</option>
                    @endforeach
                </select>
                @error('undangan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="paraf_id">Paraf</label>
                <select name="pangkat_id" id="pangkat_id" class="form-control @error('pangkat_id') is-invalid  @enderror ">
                    @foreach ($pangkats as $pangkat)
                        <option value="{{ $pangkat->id }}">
                            {{Str::title($pangkat->nama . ' - ' . $pangkat->user->name)}}
                        </option>
                    @endforeach
                </select>

                @error('pangkat_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>