<?php

namespace App\Http\Controllers;

use App\Undangan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        //
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

        return redirect()->route('dashboard')->with([
            'session' => 'Data berhasil ditambahkan'
        ]);

        // Undangan::create($request->all());
        // return redirect()->route('dashboard', ['parameterKey' => 'value']);

        // dd($request->all());
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
