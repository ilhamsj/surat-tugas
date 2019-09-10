<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Undangan;
use App\SuratTugas;
use App\Pelaksana;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin')->with([
            'total' => [
                "Pegawai" => User::count(),
                "Undangan" => Undangan::count(),
                "Surat Tugas" => SuratTugas::count(),
            ]
        ]);
    }
}
