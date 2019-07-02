<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratTugas;

class PegawaiController extends Controller
{
    public function __construct()
    {
        // cek apakah login
        $this->middleware('auth');

        // cek apakah pegawai
        // $this->middleware('pegawai');
    }

    public function index()
    {
        $surat_tugas = SuratTugas::all();
        return view('pegawai')->with(['surat_tugas' => $surat_tugas]);
    }
}
