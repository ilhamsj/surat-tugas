<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use App\Pelaksana;
use App\Dokumentasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Pelaksana::where('user_id', Auth::user()->id)->get();

        return view('home')->with([
            'items'  => $items,
        ]);
    }

    public function print($id)
    {
        $item = Pelaksana::find($id);
    
        $pdf = PDF::loadview('print', [
            'item' => $item,
        ]);
        return $pdf->setPaper('a4')->stream();
    }

    public function storeDokumentasi(Request $request)
    {

        $request->validate([
            'pelaksana_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Dokumentasi::create($request->all());

        return redirect()->route('home')->with([
            'status' => "Create Success"
        ]);
    }

    public function updateDokumentasi(Request $request, $id){
        $item = Dokumentasi::find($id);
        $item->update($request->all());
        return redirect()->route('home')->with([
            'status' => "Update Success"
        ]);
    }

    public function destroyDokumentasi($id)
    {
        Dokumentasi::destroy($id);
        return redirect()->route('home')->with([
            'status' => 'Delete Success'
        ]);
    }
}