<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        // cek apakah login
        $this->middleware('auth');

        // cek apakah pegawai
        $this->middleware('pegawai');
    }

    public function index()
    {
        return 'Halaman pegawai';
    }
}
