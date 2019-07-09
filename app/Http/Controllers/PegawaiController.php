<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

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
        // $surat_tugas = DB::table('surat_tugas')->where()->get();
        
        // dd($surat_tugas);
        return view('pegawai')->with(['items' => $surat_tugas]);    
    }
}
