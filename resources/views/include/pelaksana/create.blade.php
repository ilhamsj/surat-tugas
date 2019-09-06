<div class="card shadow bordered mb-4">
    <div class="card-header text-primary">
        <b>Form Tambah Petugas</b>
    </div>
    <div class="card-body">
        <h4 class="title">Pilih Pegawai</h4>
        <form method="POST" action="{{ route('pelaksana.store') }}">
            @csrf

            <div class="form-group">
                <label for="surat_tugas_id">Surat</label>
                <select name="surat_tugas_id" class="form-control @error('surat_tugas_id') is-invalid  @enderror" required>
                    @forelse ($itemsSurat as $item)
                        <option value="{{ $item->id }}">
                            {{$item->pangkat->user->name}} -
                            {{$item->nomor}} -
                            {{$item->undangan->perihal}}
                        </option>
                    @empty
                        <option>404</option>
                    @endforelse
                </select>
                @error('surat_tugas_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="user_id">Pelaksana</label>
                <select name="user_id[]" multiple="multiple" class="form-control @error('user_id') is-invalid  @enderror" required>
                    @forelse ($itemsUser as $user)
                        <option value="{{ $user->id }}">{{$user->name}}</option>
                    @empty
                        <option>404</option>
                    @endforelse
                </select>
            </div>

            @error('undangan_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>