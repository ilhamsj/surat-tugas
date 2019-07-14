@extends('layouts.app')

@section('content')
{{-- {{dd($item)}} --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            {{--  --}}
            <table class="table table-bordered">
                <tr>
                    <td>Kepada</td>
                    <td>{{$item->user->name}}</td>
                </tr>
                <tr>
                    <td>Dari</td>
                    <td>{{$item->undangan->pengundang}}</td>
                </tr>
                <tr>
                    <td>Oleh</td>
                    <td>{{$item->ttd->name}}</td>
                </tr>
                <tr>
                    <td>confirmed</td>
                    <td>{{$item->confirmed}}</td>
                </tr>
            </table>

            @if (!$item->confirmed)
            <form action="{{route('surat_tugas.update', $item->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <input type="text" name="confirmed" value=1 class="form-control" hidden>
                </div>
                <button class="btn btn-primary btn-block">
                    Verivikasi
                </button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
