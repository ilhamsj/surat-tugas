<?php

namespace App\Http\Controllers;

use App\Dokumentasi;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('welcome')->with([
            'items' => Dokumentasi::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelaksana_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Dokumentasi::create($request->all());

        return redirect()->back()->with([
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
        $item = Dokumentasi::find($id);
        $item->update($request->all());
        return redirect()->back()->with([
            'status' => "Update Success"
        ]);
    }

    public function destroy($id)
    {
        Dokumentasi::destroy($id);
        return redirect()->back()->with([
            'status' => 'Delete Success'
        ]);
    }
}
