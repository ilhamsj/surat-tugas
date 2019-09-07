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
                        <th>Nomor</th>
                        <th>Pengundang</th>
                        <th>Tipe</th>
                        <th>Acara</th>
                        <th>Perihal</th>
                        <th>Tempat</th>
                        <th>Waktu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($undangan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nomor }}</td>
                            <td>{{ $item->pengundang }}</td>
                            <td>{{ $item->tipe }}</td>
                            <td>{{ $item->acara }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->waktu }}</td>
                            <td class="text-center">
                                <a class="text-danger" href="{{ route('undangan.destroy', $item->id) }}" onclick="deletePost({{$item->id}})"> 
                                    <i data-feather="x-circle"></i>
                                </a>
                                <a href="" onclick="editPost(
                                    {{$item->id}}, 
                                    '{{$item->pengundang}}', 
                                    '{{$item->nomor}}', 
                                    '{{$item->tipe}}', 
                                    '{{$item->acara}}',
                                    '{{$item->perihal}}',
                                    '{{$item->tempat}}',
                                    '{{$item->waktu}}',
                                    '{{route('undangan.update', $item->id)}}')
                                    ">
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

        function editPost(id, pengundang, nomor, tipe, acara, perihal, tempat, waktu, url)
        {
            event.preventDefault(); 

            $("#title").html('Edit ' + pengundang);
            $("#createForm form").attr("action", url);
            $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");
            $("#pengundang").val(pengundang);
            $("#nomor").val(nomor);
            $("#acara").val(acara);
            $("#perihal").val(perihal);
            $("#tempat").val(tempat);
            $("#waktu").val(waktu);
            
            $("#tipe [value='"+tipe+"']").remove();
            $("select option:first-child").before("<option value='"+tipe+"' selected>"+tipe+"</option>");
        }
    </script>
@endpush