<?php

namespace App\Http\Controllers;

use App\Undangan;
use Illuminate\Http\Request;
use App\SuratTugas;

class UndanganController extends Controller
{
    public function index()
    {
        $undangan = Undangan::orderBy('id', 'desc')->get();

        return view('undangan')->with([
            'undangan'  => $undangan,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'perihal' => 'required',
        ]);

        Undangan::create($request->all());

        return redirect()->route('undangan.index')->with([
            'status' => $request->perihal . " berhasil ditambahkan"
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Undangan::destroy($id);
        return redirect()->route('undangan.index');
    }
}
