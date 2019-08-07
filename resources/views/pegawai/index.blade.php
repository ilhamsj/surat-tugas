@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-bordered" id="users-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Golongan</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
<script>

$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'json_pegawai',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'golongan', name: 'golongan' },
            { data: 'jabatan', name: 'jabatan' },
        ]
    });
});

</script>

@endpush