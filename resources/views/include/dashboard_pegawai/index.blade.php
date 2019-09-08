<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Data Surat Tugas</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Acara</th>
                        <th>Pengundang</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Pelaksana</th>
                        <th>Status</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->surattugas->undangan->acara }}</td>
                            <td>{{ $item->surattugas->undangan->pengundang }}</td>
                            <td>
                                {{\Carbon\Carbon::parse($item->surattugas->undangan->waktu)->format('d/M/Y')}} - Selesai
                            </td>
                            <td>{{ $item->surattugas->undangan->tempat }}</td>
                            <td>
                                <ol type="1">
                                    @foreach ($item->surattugas->pelaksana as $pegawai)
                                        <li>
                                            {{$pegawai->user->name}}
                                        </li>
                                    @endforeach
                                </ol>
                            </td>
                            <td class="text-center">
                                @if (count($item->dokumentasi) != null)
                                    @foreach ($item->dokumentasi as $dokumentasi)
                                        <span class="badge badge-success">Success</span>
                                        <a  data-toggle="modal" data-target="#modelId" href="" 
                                        onclick="editPost(
                                            {{$item->id}}, 
                                            '{{route('home.update', $dokumentasi->id)}}',
                                            '{{$dokumentasi->judul}}', 
                                            '{{$dokumentasi->deskripsi}}', 
                                        )">
                                        <span class="badge badge-warning">Edit</span>
                                        <a class="badge badge-danger" href="{{ route('home.destroy', $dokumentasi->id) }}" onclick="deletePost({{$dokumentasi->id}})"> 
                                            Delete
                                        </a>
                                        <form id="{{$dokumentasi->id}}" action="{{ route('home.destroy', $dokumentasi->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endforeach
                                @else
                                    <a href="" class="buatLaporan" id="{{$item->id}}">
                                        <span class="badge badge-primary" data-toggle="modal" data-target="#modelId">
                                            Buat laporan
                                        </span>
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">
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
        function deletePost(id)
        {
            event.preventDefault(); 
            document.getElementById(id).submit();
        }

        $(".buatLaporan").click(function (e) { 
            e.preventDefault();
            $("#pelaksana_id").val($(this).attr("id"));
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