<div class="card shadow">
    <div class="card-header text-primary">
        <b>Data Undangan</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelUndangan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Perihal</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($undangan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td class="text-center">
                                <a class="text-danger" href="{{ route('undangan.destroy', $item->id) }}" onclick="deletePost({{$item->id}})"> 
                                    <i data-feather="x-circle"></i>
                                </a>
                                <a href="" onclick="editPost({{$item->id}}, '{{$item->perihal}}', '{{route('undangan.update', $item->id)}}')">
                                    <i data-feather="edit"></i>
                                </a>

                                <form id="{{$item->id}}" action="{{ route('undangan.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
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

@push('styles')
    <style>
        #updateForm {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function deletePost(id)
        {
            event.preventDefault(); 
            document.getElementById(id).submit();
        }

        function editPost(id, perihal, url)
        {
            event.preventDefault(); 

            $("#title").html('Edit ' + perihal);
            $("#perihal").val(perihal);
            $("#createForm form").attr("action", url);
            $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");
        }
    </script>
@endpush