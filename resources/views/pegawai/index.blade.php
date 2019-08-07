@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <table class="table table-bordered" id="users-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Golongan</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Action</th>
                        {{-- <th>Delete</th> --}}
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
            { data: 'email', name: 'email' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
            // { data: 'delete', name: 'delete', orderable: false, searchable: false }
        ]
    });
});

</script>

@endpush