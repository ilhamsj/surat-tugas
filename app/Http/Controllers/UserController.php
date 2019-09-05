<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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
        $role = $request->role
        ;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Role::create([
            'user_id' => $user->id,
            'name' => "admin_kepegawaian",
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
        $item = User::find($id);
        $item->update($request->all());
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
