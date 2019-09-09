<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaksana;
use App\SuratTugas;
use App\User;
use Auth;

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
            'status' => 'Create Success'
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
        // dd($request->all());
        // dd($request->input());
        // dd(count($request->input('user_id')));
        // $a = count($request->input('user_id'));
        // $nilai = 0;
        // for ($i=0; $i < $a; $i++) { 
        //     # code...
        // }

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
