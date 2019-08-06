<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SuratTugas;
use Auth;
use PDF;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pegawai = User::all();
        return view('home')->with(['pegawai' => $pegawai]);
    }
    public function surat_tugas()
    {
        $items = SuratTugas::where('pegawai_id', Auth::user()->id)->get();
        return view('surat_tugas')->with(['items' => $items]);
    }

    public function cetak_surat_tugas($id)
    {
        $item       = SuratTugas::where('undangan_id', $id);
        $pdf        = PDF::loadview('cetak.index', [
            'items'         => $item->get(),
            'surat'         => $item->first(),
            'penanda_tangan'=> $item->first()->ttd->name,
            'ttd'           => Carbon::now()->isoFormat('d MMMM Y'),
            'tgl_terbit'    => Carbon::now()->isoFormat('M/Y'),
        ]);
        return $pdf->setPaper('a4')->stream();
    }
}
