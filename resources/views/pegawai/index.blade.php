@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
                <h3>Data Pegawai</h3>
                <a href="{{ route('pegawai.create')}}">Tambah data pegawai</a>
        </div>
        <div class="col-md">
            <table class="table table-bordered" id="users-table">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Golongan</th>
                        <th>Jabatan</th>
                        <th>Pangkat</th>
                        <th>Role</th>
                        <th>Actions</th>
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
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'json_pegawai',
        columns: [
            { data: 'nip', name: 'nip' },
            { data: 'name', name: 'name' },
            { data: 'golongan', name: 'golongan' },
            { data: 'jabatan', name: 'jabatan' },
            { data: 'pangkat', name: 'pangkat' },
            { data: 'role', name: 'role' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    $('body').on('click', '.deleteUser', function () {
        var user_id = $(this).data("id");
        confirm("Are You sure want to delete " + user_id);

        $.ajax({
            type: "DELETE",
            url: "pegawai/"+user_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});

</script>

@endpush