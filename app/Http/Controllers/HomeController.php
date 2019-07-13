<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SuratTugas;
use Auth;
use PDF;

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
        // $pegawai = User::paginate(3);
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
        //where('pegawai_id', Auth::user()->id)
        $item = SuratTugas::find($id);
        $pdf = PDF::loadview('cetak.surat_tugas', ['item' => $item]);
        return $pdf->setPaper('a4')->stream();
        // return $pdf->download('surat-tugas-pdf');
    }
}
