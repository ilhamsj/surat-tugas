<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Undangan;
use App\SuratTugas;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard')->with([
            'total' => [
                "Pegawai" => User::count(),
                "Undangan" => Undangan::count(),
                "Surat Tugas" => SuratTugas::count(),
            ]
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'perihal' => 'required',
        ]);

        $undangan = Undangan::create($request->all());

        $surat = SuratTugas::create([
            'nomor' => '999999',
            'undangan_id' => $undangan->id,
            'paraf_id' => '4',
        ]);

        $pelaksana = Pelaksana::create([
            'surat_tugas_id' => $surat->id,
            'user_id' => '1'
        ]);
        
        return redirect()->route('surat-tugas.index')->with([
            'status' => "Create Success"
        ]);
    }
}
