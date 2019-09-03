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
}
