<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function loginProcess(Request $request){
        $credentials = $request->only('username','password');

        if (Auth::guard('user')->attempt($credentials)) {
            return redirect('admin/dashboard')->with('success','Selamat Datang AdminFes');
        } return back()->with('danger','Login Gagal');
    }

    function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();

        return redirect('login')->with('warning','Anda Telah Keluar');
    }
}
