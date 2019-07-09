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
        // $surat_tugas = SuratTugas::where('no_surat', '17');
        // $surat_tugas = SuratTugas::findOrFail(17);
        $JohnDoe = SuratTugas::where('pegawai_id', '=', 5);
        
        dd($surat_tugas);
        return view('pegawai')->with(['items' => $surat_tugas]);    
    }
}
