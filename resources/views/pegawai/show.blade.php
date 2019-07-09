@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <td>nip</td>
                    <td>{{$pegawai->nip}}</td>
                </tr>
                <tr>
                    <td>name</td>
                    <td>{{$pegawai->name}}</td>
                </tr>
                <tr>
                    <td>golongan</td>
                    <td>{{$pegawai->golongan}}</td>
                </tr>
                <tr>
                    <td>jabatan</td>
                    <td>{{$pegawai->jabatan}}</td>
                </tr>
                <tr>
                    <td>eselon</td>
                    <td>{{$pegawai->eselon}}</td>
                </tr>
                <tr>
                    <td>telp</td>
                    <td>{{$pegawai->telp}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$pegawai->email}}</td>
                </tr>
                <tr>
                    <td>role</td>
                    <td>{{$pegawai->role}}</td>
                </tr>
                <tr>
                    <td>Tanggal Registrasi</td>
                    <td>{{$pegawai->created_at}}</td>
                </tr>
                <tr>
                    <td>Total Surat Tugas</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
