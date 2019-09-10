@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card shadow bordered">
                    <div class="card-header text-primary">
                        <b>About
                            {{Str::title($item->name)}}</b>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table table-borderless table-hover">
                                <tr>
                                    <th>NIP</th>
                                    <td>{{$item->nip}}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$item->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$item->email}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{$item->role}}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{$item->jabatan}}</td>
                                </tr>
                                <tr>
                                    <th>Total Surat</th>
                                    <td>{{ count($item->Pelaksana) }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    
                    <div class="card-body">
                        <h4 class="card-title">Surat Tugas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example"> 
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nomor</th>
                                        <th>Pengundang</th>
                                        <th>Acara</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Perihal</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($item->Pelaksana as $pelaksana)
                                    <tr>
                                        <td class="text-center">
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            {{$pelaksana->SuratTugas->nomor}}
                                        </td>
                                        <td>
                                            {{$pelaksana->SuratTugas->Undangan->pengundang}}
                                        </td>
                                        <td>
                                            {{$pelaksana->SuratTugas->Undangan->acara}}
                                        </td>
                                        <td>
                                            {{\Carbon\Carbon::parse($pelaksana->SuratTugas->Undangan->waktu)->format('d M Y')}} - Selesai
                                        </td>
                                        <td>
                                            {{$pelaksana->SuratTugas->Undangan->tempat}}
                                        </td>
                                        <td>
                                            {{$pelaksana->SuratTugas->Undangan->perihal}}
                                        </td>
                                        <td>
                                        @if (Auth::user()->id == $item->id || Auth::user()->role == 'admin_kepegawaian')
                                            @if (count($pelaksana->dokumentasi) != null)
                                                @foreach ($pelaksana->dokumentasi as $dokumentasi)
                                                    <span class="badge badge-success">Success</span>
                                                    <a  data-toggle="modal" data-target="#modelId" href="" 
                                                    onclick="editPost(
                                                        {{$pelaksana->id}}, 
                                                        '{{route('dokumentasi.update', $dokumentasi->id)}}',
                                                        '{{$dokumentasi->judul}}', 
                                                        '{{$dokumentasi->deskripsi}}', 
                                                    )">
                                                    <span class="badge badge-warning">Edit</span>
                                                    <a class="badge badge-danger" href="{{ route('dokumentasi.destroy', $dokumentasi->id) }}" onclick="deletePost({{$dokumentasi->id}})"> 
                                                        Delete
                                                    </a>
                                                    <form id="{{$dokumentasi->id}}" action="{{ route('dokumentasi.destroy', $dokumentasi->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                @endforeach
                                            @else
                                                @if ($pelaksana->surattugas->nomor != null)
                                                    <a href="" class="buatLaporan" id="{{$pelaksana->id}}">
                                                        <span class="badge badge-primary" data-toggle="modal" data-target="#modelId">
                                                            Buat laporan
                                                        </span>
                                                    </a>
                                                @else
                                                <span class="badge badge-info text-white">
                                                    Dalam Verivikasi
                                                </span>
                                                @endif
                                            @endif
                                        @else
                                            <span class="badge badge-danger text-white">
                                                    Silahkan Login
                                            </span>
                                        @endif
                                        </td>
                                        <td>
                                            @if ($pelaksana->SuratTugas->nomor == null)
                                                <span class="badge badge-info text-white">
                                                    Belum Tersedia
                                                </span>
                                            @else
                                                <a href="{{route('surat.cetak', $pelaksana->id)}}" target="_blank">
                                                    <i data-feather="printer"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Laporan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('dokumentasi.store') }}">
                        @csrf
                        <input type="text" name="pelaksana_id" id="pelaksana_id" class="@error('pelaksana_id') is-invalid  @enderror" value="{{ old('pelaksana_id') ? old('pelaksana_id') : ' '}}" hidden>
            
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid  @enderror" value="{{ old('judul') ? old('judul') : ' '}}">
            
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid  @enderror" name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') ? old('deskripsi') : ''}}</textarea>
            
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
            
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



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