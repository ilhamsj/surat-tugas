<?php

namespace App\Http\Controllers;

use App\SuratTugas;
use Illuminate\Http\Request;

use App\Undangan;

class SuratTugasController extends Controller
{
    public function index()
    {
        $collection = SuratTugas::all();
        $undangan = Undangan::orderBy('id', 'desc')->get();

        return view('index')->with([
            'collection'  => $collection,
            'undangan'  => $undangan,
        ]);
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $item = SuratTugas::find($id); 
        return view('print')->with([
            'item' => $item
        ]);
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