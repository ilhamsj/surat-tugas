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
                                <span class="text-success"><i data-feather="check"></i></span>
                                <a href="{{route('surat.cetak', $item->id)}}">
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