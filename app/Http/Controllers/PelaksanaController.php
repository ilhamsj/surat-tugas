<?php

namespace App\Http\Controllers;

use App\Pelaksana;
use Illuminate\Http\Request;

class PelaksanaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $items = Pelaksana::all();
        $itemsSurat = \App\SuratTugas::all();
        $itemsUser = \App\User::all();

        return view('pelaksana')->with([
            'items'         => $items,
            'itemsSurat'    => $itemsSurat,
            'itemsUser'     => $itemsUser,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'surat_tugas_id' => 'required',
            'user_id' => 'required'
        ]);

        foreach ($request->user_id as $user) {
            Pelaksana::create([
                'surat_tugas_id' => $request->surat_tugas_id,
                'user_id' => $user,
            ]);
        }
        return redirect()->route('pelaksana.index')->with([
            'status' => 'Create Success'
        ]);
    }

    public function show($id)
    {
        $item = Pelaksana::find($id);
        $pdf = \PDF::loadview('print', [
            'item' => $item,
        ]);
        return $pdf->setPaper('a4')->stream();
        // return view('print')->with([
        //     'item' => $item
        // ]);
    }

    public function edit($id)
    {

        //
    }

    public function update(Request $request, $id)
    {
        $item = Pelaksana::find($id);
        $item->update($request->all());
        return redirect()->route('pelaksana.index')->with([
            'status' => "Update Success"
        ]);
    }

    public function destroy($id)
    {
        Pelaksana::destroy($id);
        return redirect()->route('pelaksana.index')->with([
            'status' => 'Delete Success'
        ]);
    }
}
