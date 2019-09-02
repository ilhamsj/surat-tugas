@extends('layouts.master')

@section('content')
<div class="container">
    <p id="user">
        Salam
    </p>
    @forelse ($collection as $item)
        <div>
            Nomor : {{ $item->nomor }} <br/>
            Undangan : {{ $item->Undangan->perihal }} <br/>
            <ul>
                @forelse ($item->Pelaksana as $pelaksana)
                    <li>
                        {{$pelaksana->user->name}}
                    </li>
                @empty
                    <li><i>No user available</i></li>
                @endforelse
            </ul>
        </div>
        <hr>
    @empty
        Tidak ada data
    @endforelse
</div>
@endsection

@push('scripts')
<script>
    // $.get("http://surat-tugas.test/api/user", function (data) 
    // {
    //     for (const i in data) 
    //     {
    //         $("p").append(data[i].name);
    //     }
    // }, "json");

    $.ajax({
        type: "GET",
        url: "http://surat-tugas.test/api/user",
        data: "data",
        dataType: "json",
        success: function (response) {
            console.log(response)
            var user = response.data;
            var link = response.links;
            for (const i in user) {
                console.log(user[i].name)
            }
            console.log(response.links.next)
        }
    });
</script>
@endpush