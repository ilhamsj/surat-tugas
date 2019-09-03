<div class="card shadow bordered">
    <div class="card-header">
        <b>Undangan</b>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('undangan.store') }}">
            @csrf
            @method('POST')
            <input type="text" name="perihal" value="{{ old('perihal') }}">
            @error('perihal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Save</button>
        </form>

        @foreach ($undangan as $item)
            <h6>{{$item->perihal}}</h6>
        @endforeach
    </div>
</div>