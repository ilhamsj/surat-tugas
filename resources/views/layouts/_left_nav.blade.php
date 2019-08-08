<ul class="list-group">
        @auth                            
        @if (Auth::user()->role == 'pegawai' || Auth::user()->role == 'admin_bagian' || Auth::user()->role == 'admin_kepegawaian')
            <li class="list-group-item disabled">Pegawai</li>
            <li class="list-group-item">
                <a href="{{ route('surat') }}">Surat Tugas</a>
            </li>

            @if (Auth::user()->role == 'admin_bagian' || Auth::user()->role == 'admin_kepegawaian')
                <li class="list-group-item disabled">Admin</li>
                <li class="list-group-item">
                    <a href="{{ route('surat_undangan.create') }}">Submit Undangan</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('surat_tugas.create') }}">Buat Surat Tugas</a>
                </li>

                @if (Auth::user()->role == 'admin_kepegawaian')
                    <li class="list-group-item disabled">Superadmin</li>
                    <li class="list-group-item">
                        <a href="{{ route('pegawai.index') }}">Data Pegawai</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('surat_undangan.index') }}">Data Undangan</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('surat_tugas.index') }}">Data Surat Tugas</a>
                    </li>
                @endif
            @endif
        @endif
        @endauth

    </ul>