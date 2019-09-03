<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Data Undangan</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelUndangan">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($undangan as $item)
                        <tr>
                            <td>{{ $item->perihal }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <form action="{{ route('undangan.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>