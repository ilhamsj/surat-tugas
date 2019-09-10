<div id="createForm" class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Pegawai</b>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('pegawai.store') }}">
            @csrf

            <div class="row">
                <div class="form-group col-md">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" value="{{ old('name') ? old('name') : ''}}">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid  @enderror" value="{{ old('email') ? old('email') : ''}}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid  @enderror" value="{{ old('password') ? old('password') : ''}}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group col-md">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control @error('nip') is-invalid  @enderror" value="{{ old('nip') ? old('nip') : ''}}">

                    @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md" id="role">
                    <label for="role">Role</label>
                    <select id="role" name="role" class="form-control @error('role') is-invalid  @enderror" required>
                        <option value="pegawai">Pegawai</option>
                        <option value="admin_bagian">Admin Bagian</option>
                        <option value="admin_kepegawaian">Admin Kepegawaian</option>
                    </select>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid  @enderror" value="{{ old('jabatan') ? old('jabatan') : ''}}">

                    @error('jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md" id="roleTTD">
                    <label for="roleTTD">Pangkat</label>
                    <select id="roleTTD" name="roleTTD" class="form-control @error('roleTTD') is-invalid  @enderror">
                        <option value="kakanwil">Kakanwil</option>
                        <option value="kabag">Kabag</option>
                        <option value="kasubag">Kasubag</option>
                    </select>
                    @error('roleTTD')
                        <span class="invalid-feedback" roleTTD="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="button" id="closeForm" class="btn btn-danger">Close</button>
        </form>
    </div>
</div>
    