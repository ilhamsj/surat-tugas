<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaksana;
use App\SuratTugas;
use App\User;
use Auth;

class PelaksanaController extends Controller
{
    public function index()
    {
        $items = Pelaksana::all();
        // $items = Pelaksana::where('user_id', Auth::user()->id)->get();
        $itemsSurat = SuratTugas::all();
        $itemsUser = User::all();

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
        foreach ($request->user_id as $user) {
            Pelaksana::create([
                'surat_tugas_id' => $request->surat_tugas_id,
                'user_id' => $user,
            ]);
        }
        return redirect()->route('pelaksana.index')->with([
            'status' => $request->surat_tugas_id . ' Berhasil ditambahkan'
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
