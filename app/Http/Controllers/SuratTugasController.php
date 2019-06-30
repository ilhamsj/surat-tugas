<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratUndangan;
use App\User;
use App\SuratTugas;

class SuratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_tugas = SuratTugas::all();
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
            'id_pegawai' => $request->get('id_pegawai'),
            'id_undangan' => $request->get('id_undangan'),
        ]);
        $suratTugas->save();
        // return redirect(route('surat_tugas.create'));
        return $request->get('id_pegawai').' Berhasil disimpan';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
