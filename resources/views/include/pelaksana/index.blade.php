<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Data Pelaksana</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelUndangan">
                <thead>
                    <tr>
                        <th>Nomor Surat Tugas</th>
                        <th>Pegawai</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->surattugas->nomor }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td class="text-center">
                                <a class="text-danger" href="{{ route('pelaksana.destroy', $item->id) }}" onclick="deletePost({{$item->id}})"> 
                                    <i data-feather="x-circle"></i>
                                </a>
                                <a href="" 
                                    onclick="editPost(
                                        {{$item->id}}, 
                                        '{{route('pelaksana.update', $item->id)}}',
                                        '{{$item->surattugas->nomor . ' - ' . $item->surattugas->undangan->pengundang}}',
                                        {{$item->SuratTugas->id}}, 
                                        {{$item->User->id}}, 
                                        '{{$item->User->nip. ' - ' .$item->User->name}}', 
                                    
                                    )">
                                    <i data-feather="edit"></i>
                                </a>
                                <form id="{{$item->id}}" action="{{ route('pelaksana.destroy', $item->id) }}" method="post">
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

@push('scripts')
    <script>
        function deletePost(id)
        {
            event.preventDefault(); 
            document.getElementById(id).submit();
        }

        function editPost(id, url, nomor, surat_tugas_id, user_id, user)
        {
            event.preventDefault()
            $("#createForm form").attr("action", url);
            $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");

            $("#surat_tugas_id [value='"+surat_tugas_id+"']").remove();
            $("#surat_tugas_id option:first-child").before("<option value='"+surat_tugas_id+"' selected>"+nomor+"</option>");
            
            $("#user_id [value='"+user_id+"']").remove();
            $("#user_id option:first-child").before("<option value='"+user_id+"' selected>"+user+"</option>");

            $("#user_id").removeAttr("name");
            $("#user_id").removeAttr("multiple");
            $("#user_id").attr("name", "user_id");
        }

    </script>
@endpush