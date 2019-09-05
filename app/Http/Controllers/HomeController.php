<?php

namespace App\Http\Controllers;

use App\Pelaksana;
use Illuminate\Http\Request;
use Auth;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
}