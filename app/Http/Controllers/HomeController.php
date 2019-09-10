<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin')->with([
            'total' => [
                "Pegawai" => \App\User::count(),
                "Undangan" => \App\Undangan::count(),
                "Surat Tugas" => \App\SuratTugas::count(),
            ]
        ]);
    }
}