<div id="updateForm">
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
        <b>Undangan</b>
    </div>
    <div class="card-body">
        <h4 id="titlezzz">Undangan Baru</h4>

        {{-- Edit --}}
        <form method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="perihal">Perihal</label>
                <input type="text" name="perihalEdit" id="perihalEdit" class="form-control @error('perihalEdit') is-invalid  @enderror" value="{{ old('perihalEdit') ? old('perihalEdit') : ''}}" required>
        
                @error('perihalEdit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">
                Update
            </button>
            <button type="button" id="reset" class="btn btn-primary">
                Cancel
            </button>
        </form>
        {{-- End Edit Form --}}
    </div>
</div>
</div>
