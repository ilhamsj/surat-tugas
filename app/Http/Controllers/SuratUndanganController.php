<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratUndangan;
use App\SuratTugas;
use Carbon\Carbon;

class SuratUndanganController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin_kepegawaian')->except('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $undangan = SuratUndangan::all();
        return view('surat_undangan.index')->with([
            'items' => $undangan,
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
        $undangan = SuratUndangan::create([
            'pengundang'    => $request->pengundang,
            'admin_id'      => $request->admin_id,
            'no_surat'      => $request->no_surat,
            'pengundang'    => $request->pengundang,
            'perihal'       => $request->perihal,
            'nama_acara'    => $request->nama_acara,
            'waktu_mulai'   => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'tempat'        => $request->tempat,
            'file'          => $request->file('file')->hashName(),
        ]);
        $request->file('file')->store('files', 'public');
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

    /**x
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $undangan = SuratUndangan::find($id);

        Carbon::macro('toAtomStringWithNoTimezone', function () {
            return $this->format('Y-m-d\TH:i:s');
        });
        
        return view('surat_undangan.edit')->with([
            'item' => $undangan,
            'waktu_mulai' => Carbon::parse($undangan->waktu_mulai)->toAtomStringWithNoTimezone(),
            'waktu_selesai' => Carbon::parse($undangan->waktu_selesai)->toAtomStringWithNoTimezone(),
        ]);
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
        $items = SuratUndangan::find($id);
        $items->update($request->all());

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
        // SuratUndangan::destroy($id);

        $surat = SuratUndangan::find($id);
        $surat->surat_tugas()->delete();
        $surat->delete();

        return redirect(route('surat_undangan.index'))->with('success', 'Data berhasil dihapus');
    }
}
