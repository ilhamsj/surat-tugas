<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PegawaiController extends Controller
{
    public function __construct()
    {
        // cek apakah login
        $this->middleware('auth');

        // cek apakah pegawai
        // $this->middleware('pegawai');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = User::orderBy('role', 'desc')->get();
        // $pegawai = User::all();
        // $pegawai = User::first(); 
        // $pegawai = User::where('name', 'budi')->get(); // menampilkan seleksi data
        // $pegawai = User::where('name', 'like', '%i%')->get(); // menampilkan seleksi data
        return view('pegawai.index')->with(['pegawai' => $pegawai]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = User::find($id);
        return view('pegawai.show')->with(['pegawai' => $pegawai]);
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
        $user = User::find($id);
        $user->surat_tugas()->delete();
        $user->surat_undangan()->delete();
        $user->delete();
        return redirect(route('pegawai.index'))->with('success', 'User berhasil dihapus');
    }
}
