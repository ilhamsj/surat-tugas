<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratUndangan;
use App\User;
use App\SuratTugas;
use Auth;
use PDF;

class SuratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $surat_tugas = SuratTugas::all();
        // dd($surat_tugas->laporan_kegiatans);
        // $surat_tugas = SuratTugas::where('pegawai_id', Auth::user()->id)->get();
        $surat_tugas = SuratTugas::orderBy('created_at', 'desc')->get();
        
        return view('surat_tugas.index')->with([
            'surat_tugas' => $surat_tugas,
            'session' => 'Menampilkan data surat tugas',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $undangan = SuratUndangan::all();
        $pegawai = User::all();
        return view('surat_tugas.create')->with([
            'undangan' => $undangan,
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suratTugas = new SuratTugas([
            'pegawai_id' => $request->get('pegawai_id'),
            'undangan_id' => $request->get('undangan_id'),
            'penanda_tangan_id' => $request->get('pegawai_id'),
            'no_surat' => $request->get('pegawai_id'),
        ]);
        $suratTugas->save();
        // return $request->get('id_pegawai').' Berhasil disimpan';
        return redirect(route('surat_tugas.index'))->with('success', 'Surat tugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('golongan', 'V')->get();
        $item = SuratTugas::find($id);
        return view('surat_tugas.show')->with([
            'item' => $item,
            'atasan' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('surat_tugas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = SuratTugas::find($id);
        $items->confirmed = true;
        $items->save();
        return redirect(route('surat_tugas.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratTugas::destroy($id);
        return redirect(route('surat_tugas.index'))->with('success', 'Surat tugas berhasil dihapus');
    }
}
