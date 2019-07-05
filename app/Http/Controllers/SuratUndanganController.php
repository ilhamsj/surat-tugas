<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratUndangan;

class SuratUndanganController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
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
        $request->file('file')->store('files', 'public');
        // https://laravel.com/docs/5.0/filesystem
        // $request->file('file')->store('files', 's3');
        // $request->file('file')->store('avatars', 's3');

        $request->validate([
            'pengundang' => 'required',
            'file' => 'required|image',
        ]);

        $undangan = SuratUndangan::create([
            'pengundang' => $request->pengundang,
            'admin_id' => $request->admin_id,
            'file' => $request->file('file')->hashName(),
        ]);

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
