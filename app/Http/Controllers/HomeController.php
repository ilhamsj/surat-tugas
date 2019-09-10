<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use App\Pelaksana;
use App\Dokumentasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only('index');
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

    public function print($id)
    {
        $item = Pelaksana::find($id);
        $pdf = PDF::loadview('print', [
            'item' => $item,
        ]);
        return $pdf->setPaper('a4')->stream();
    }
}