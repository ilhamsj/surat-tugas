@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 mb-4">
            <h3>Hi, {{ Auth::user()->name}}</h3>
        </div>
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <td>No Surat</td>
                    <td>Undangan</td>
                    <td>Waktu Mulai</td>
                    <td>Action</td>
                </tr>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->no_surat }}</td>
                        <td><a href="">{{ $item->undangan->pengundang }}</a></td>
                        <td><a href="">{{ $item->undangan->waktu_mulai }}</a></td>
                        <td>
                                <i class="fi-cwsuxl-check"></i>
                                <a class="d-inline" target="_blank" href="{{ route('cetak_surat', $item->undangan_id) }}">
                                    <i class="fi-xwsuxl-external-link-solid"></i>
                                </a>
                                <a class="laporin" id="target" href="">Lapor Kegiatan</a>
                        </td>
                    </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        var selector = '#target';
        $(selector).click(function () { 
            console.log('helo');
        });
    </script>
@endpush