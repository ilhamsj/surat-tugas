@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Dokumentasi Kegiatan</h4>
                            <p class="card-text">
                                @auth
                                    <a href="{{route('pegawai.show', Auth::user()->id)}}">Profile</a>
                                @else
                                    <a href="{{route('login')}}">Login</a> Or
                                    <a href="{{route('register')}}">Register</a>
                                @endauth
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($items as $item)
            <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('pegawai.show', $item->pelaksana->user->id)}}">{{$item->pelaksana->user->name}}</a> /
                            {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                            <h4 class="card-title">
                                {{$item->pelaksana->surattugas->undangan->acara}}
                            </h4>
                            <p class="card-text">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection