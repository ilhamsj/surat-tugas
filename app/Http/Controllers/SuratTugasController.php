<?php

namespace App\Http\Controllers;

use App\SuratTugas;
use Illuminate\Http\Request;

class SuratTugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
        $items = SuratTugas::all();
        $undangan = \App\Undangan::all();
        $pangkat = \App\Pangkat::all();

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
            'undangan_id' => 'required|unique:surat_tugas',
            'pangkat_id' => 'required',
        ]);

        SuratTugas::create($request->all());

        return redirect()->route('surat-tugas.index')->with([
            'status' => "Create Success"
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
        $request->validate([
            'undangan_id' => 'required',
            'pangkat_id' => 'required',
        ]);

        $item = SuratTugas::find($id);
        $item->update($request->all());
        return redirect()->route('surat-tugas.index')->with([
            'status' => "Update Success"
        ]);
    }

    public function destroy($id)
    {
        SuratTugas::destroy($id);
        return redirect()->route('surat-tugas.index')->with([
            'status' => 'Delete Success'
        ]);
    }
}