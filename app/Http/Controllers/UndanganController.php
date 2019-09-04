<?php

namespace App\Http\Controllers;

use App\Undangan;
use Illuminate\Http\Request;
use App\SuratTugas;
use App\Pelaksana;

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

        $undangan = Undangan::create($request->all());
        
        return redirect()->route('undangan.index')->with([
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
            'perihal' => 'required',
        ]);

        $item = Undangan::find($id);
        $item->update($request->all());
        return redirect()->route('undangan.index')->with([
            'status' => "Update Success"
        ]);
    }

    public function destroy($id)
    {
        Undangan::destroy($id);
        return redirect()->route('undangan.index');
    }
}
