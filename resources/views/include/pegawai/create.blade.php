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

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid  @enderror" value="{{ old('email') ? old('email') : ''}}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid  @enderror" value="{{ old('password') ? old('password') : ''}}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" id="role">
                <label for="role">Role</label>
                <select name="role" class="form-control @error('role') is-invalid  @enderror" required>
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

            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</div>
    