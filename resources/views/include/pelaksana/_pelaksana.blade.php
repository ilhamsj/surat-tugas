<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>Table Pelaksana</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Undangan</th>
                        <th>Pelaksana</th>
                        <th>Paraf</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($collection as $item)
                        <tr>
                            <td>{{ $item->nomor }}</td>
                            <td>{{ $item->Undangan->perihal }}</td>
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
                            <td>{{ $item->Paraf->name }}</td>
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