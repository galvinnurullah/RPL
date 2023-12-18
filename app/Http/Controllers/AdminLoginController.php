<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    function index()
    {
        return view("adlog/index");
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email harus diisi',
            'password.required'=>'Password harus diisi'
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('tes')->with('success', 'Berhasil login');
        }else{
            return redirect('sesi')->with('danger','Username dan password tidak valid');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('adlog')->with('success', 'Berhasil logout');
    }
    
}
