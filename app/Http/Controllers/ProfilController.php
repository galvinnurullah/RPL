<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view("profil/index", compact('name', 'email'));
    }
}
