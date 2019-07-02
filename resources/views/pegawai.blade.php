@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    Surat Tugas
                    @foreach ($surat_tugas as $item)
                        {{$item->SuratTugas_id}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
