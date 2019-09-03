@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @include('include/surat_tugas/index')
            </div>
            <div class="col-md">
                @include('include/surat_tugas/create')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#example, #tabelUndangan').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'pdf', 
                ]
            } );
        } );
    </script>
@endpush