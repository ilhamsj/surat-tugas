<?php

namespace App\Http\Controllers;

use App\User;
use App\Pangkat;

use App\Undangan;
use App\SuratTugas;
use Illuminate\Http\Request;

class SuratTugasController extends Controller
{
    public function index()
    {
        $items = SuratTugas::all();
        $undangan = Undangan::all();
        $pangkat = Pangkat::all();

        return view('surat_tugas')->with([
            'items'  => $items,
            'undangans'  => $undangan,
            'pangkats'  => $pangkat,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'undangan_id' => 'required',
            'paraf_id' => 'required',
            'nomor' => 'required',
        ]);

        SuratTugas::create($request->all());

        return redirect()->route('surat-tugas.index')->with([
            'status' => $request->nomor . " berhasil ditambahkan"
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
        //
    }
}