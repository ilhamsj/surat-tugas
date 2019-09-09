<?php

namespace App\Http\Controllers;

use App\User;
use App\Pangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = User::orderBy('id', 'desc')->get();
        return view('pegawai')->with([
            'items'  => $items,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
        ]);

        $user = Pangkat::create([
            'user_id' => $user->id,
            'nama' => $request->roleTTD,
        ]);

        return redirect()->route('pegawai.index')->with([
            'status' => "Success Added"
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
        ]);
        
        $item = User::find($id);
        $item->update($request->all());
        

        $pangkat = Pangkat::where('user_id', $id)->get();

        if (count($pangkat) == null) {
            Pangkat::create([
                'user_id' => $id,
                'nama' => $request->roleTTD,
            ]);
        } else {
            foreach ($pangkat as $item) {
                if ($request->roleTTD == 'null') 
                {
                    Pangkat::destroy($item->id);
                }
                else
                {
                    $updatePangkat = Pangkat::find($item->id);
                    $updatePangkat->update([
                        'user_id' => $id,
                        'nama' => $request->roleTTD
                    ]);
                }
            }
        }
                
        return redirect()->route('pegawai.index')->with([
            'status' => "Update Success"
        ]);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('pegawai.index')->with([
            'status' => 'Successfully deleted'
        ]);
    }
}
