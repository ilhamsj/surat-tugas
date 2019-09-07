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
                <select id="surat_tugas_id" name="surat_tugas_id" class="form-control @error('surat_tugas_id') is-invalid  @enderror" required>
                    @forelse ($itemsSurat as $item)
                        <option value="{{ $item->id }}">
                            {{$item->nomor . ' - ' . $item->undangan->pengundang . ',' .$item->undangan->nomor}}
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
                <select id="user_id" name="user_id[]" multiple="multiple" class="form-control @error('user_id') is-invalid  @enderror" required>
                    @foreach ($itemsUser as $user)
                        <option value="{{ $user->id }}">{{$user->nip}} - {{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            @error('user_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>