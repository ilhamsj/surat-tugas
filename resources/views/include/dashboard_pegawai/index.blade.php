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
                        <th>Nomor Surat</th>
                        <th>Undangan</th>
                        <th>Pelaksana</th>
                        <th>Status</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->surattugas->nomor }}</td>
                            <td>{{ $item->surattugas->undangan->perihal }}</td>
                            <td>
                                <ul>
                                    @foreach ($item->surattugas->pelaksana as $pegawai)
                                        <li>
                                            {{$pegawai->user->name}}
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-center">
                                @if (count($item->dokumentasi) != null)
                                    @foreach ($item->dokumentasi as $dokumentasi)
                                        <span class="text-success"><i data-feather="check"></i></span>
                                        <a href="" 
                                        onclick="editPost(
                                            {{$item->id}}, 
                                            '{{route('home.update', $dokumentasi->id)}}',
                                            '{{$dokumentasi->judul}}', 
                                            '{{$dokumentasi->deskripsi}}', 
                                        )">
                                        <i data-feather="edit"></i>
                                    @endforeach
                                @else
                                    <a href="" class="buatLaporan" id="{{$item->id}}">
                                        Buat laporan
                                    </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('surat.cetak', $item->id)}}" target="_blank">
                                    <i data-feather="printer"></i>
                                </a>
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
        $(".buatLaporan").click(function (e) { 
            e.preventDefault();
            $("#pelaksana_id").val($(this).attr("id"));
            $("div.form-group").first().hide();
        });

        function editPost(id, url, judul, deskripsi) 
        {
            event.preventDefault()
            $("form").attr("action", url);
            $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");

            $("#pelaksana_id").val(id);
            $("#judul").val(judul);
            $("#deskripsi").val(deskripsi);
            
            console.log(judul);
            
        }
    </script>
@endpush