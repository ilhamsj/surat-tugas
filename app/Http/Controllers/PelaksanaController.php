<?php

namespace App\Http\Controllers;

use App\Pelaksana;
use Illuminate\Http\Request;

class PelaksanaController extends Controller
{
    public function index()
    {
        return Pelaksana::all();
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
