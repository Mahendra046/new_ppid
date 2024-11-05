<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_admin'] = User::all();
        return view('admin.admin.index',$data);
    }

    public function store()
    {
        $admin = new User;
        $admin->nama = Request('nama');
        $admin->username = Request('username');
        $admin->email = Request('email');
        $admin->password = bcrypt(request('password'));
        $admin->save();
        return back()->with('success','pengguna berhasil ditambahkan');
    }

    public function update(string $id)
    {
        $admin = User::find($id);
        $admin->nama = Request('nama');
        $admin->username = Request('username');
        $admin->email = Request('email');
        $admin->password = bcrypt(request('password'));
        $admin->save();
        return back()->with('success','data pengguna berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        //
    }
}
