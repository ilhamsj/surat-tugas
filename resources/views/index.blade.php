@extends('layouts.master')

@section('content')
<div class="container">
    <p id="user">
        Salam
        <a href="" id="link">Next</a>
    </p>

    <div class="table-responsive">
        <table class="table table-bordered" id="example">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Undangan</th>
                    <th>Pelaksana</th>
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

@endsection

@push('scripts')
<script>

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'pdf', 
            ]
        } );
    } );

</script>
@endpush