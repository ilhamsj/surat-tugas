<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Data Surat Tugas</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomor</th>
                        <th>Undangan</th>
                        <th>Pelaksana</th>
                        <th>Paraf</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nomor }}</td>
                            <td>
                                {{ $item->Undangan->pengundang }} ({{ $item->Undangan->acara }})
                            </td>
                            <td>
                                <ul>
                                    @forelse ($item->Pelaksana as $pelaksana)
                                        <li>
                                            {{$pelaksana->user->name}}
                                        </li>
                                    @empty
                                        
                                    @endforelse
                                </ul>
                            </td>
                            <td>
                                {{ $item->Pangkat->nama }} - 
                                {{ $item->Pangkat->user->name }}
                            </td>
                            <td>
                                @if ($item->nomor == null)                                    
                                    <span class="badge badge-primary">
                                        Verivikasi
                                    </span>
                                @else
                                    <span class="badge badge-success">
                                        Sukses
                                    </span>
                                    
                                @endif
                            </td>
                            <td class="text-center">

                                @if (Auth::user()->role == 'admin_kepegawaian')
                                    <a class="text-danger" href="{{ route('surat-tugas.destroy', $item->id) }}" onclick="deletePost({{$item->id}})"> 
                                        <i data-feather="x-circle"></i>
                                    </a>
                                @endif

                                <a href="" 
                                    onclick="editPost(
                                        {{$item->id}}, 
                                        '{{$item->nomor}}', 
                                        '{{$item->undangan_id}}', 
                                        '{{$item->pangkat_id}}', 
                                        '{{Str::title($item->undangan->pengundang) . ' | ' . $item->undangan->nomor}}', 
                                        '{{$item->pangkat->nama . ' - ' . $item->pangkat->user->name}}', 
                                        '{{route('surat-tugas.update', $item->id)}}'
                                    )">
                                    <i data-feather="edit"></i>
                                </a>

                                <form id="{{$item->id}}" action="{{ route('surat-tugas.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Tidak ada data</td>
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

    function editPost(id, nomor, undangan_id, pangkat_id, undangan, pangkat, url)
    {
        event.preventDefault(); 
        $("#dataCard").toggle("slow", "swing");
        $("form").attr("action", url);
        $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");

        $(".title").html('Edit ' + nomor);
        $("#nomor").val(nomor);

        $("#undangan_id [value='"+undangan_id+"']").remove();
        $("#undangan_id option:first-child").before("<option value='"+undangan_id+"' selected>"+undangan+"</option>");
        
        $("#pangkat_id [value='"+pangkat_id+"']").remove();
        $("#pangkat_id option:first-child").before("<option value='"+pangkat_id+"' selected>"+pangkat+"</option>");
    }
</script>
@endpush