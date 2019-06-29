<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratUndangan;

class SuratUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $undangan = SuratUndangan::all();
        return view('surat_undangan.index')->with([
            'undangan' => $undangan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_undangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $undangan = new SuratUndangan([
            'pengundang' => $request->get('pengundang'),
        ]);
        $undangan->save();

        return redirect(route('surat_undangan.index'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $undangan = SuratUndangan::find($id);
        return view('surat_undangan.show')->with(['undangan' => $undangan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $undangan = SuratUndangan::find($id);
        return view('surat_undangan.edit')->with(['undangan' => $undangan]);
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
        $undangan = SuratUndangan::find($id);
        $undangan->pengundang = $request->get('pengundang');
        $undangan->save();

        return redirect(route('surat_undangan.index'))->with('success', 'Undangan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratUndangan::destroy($id);
        return redirect(route('surat_undangan.index'))->with('success', 'Data berhasil dihapus');
    }
}
