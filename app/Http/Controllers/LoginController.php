<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);

        $infoLogin =[
            'email' =>$request->email,
            'password' =>$request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            echo 'Login successful';
        }else 
        {
            return back()->withErrors('Email dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

}
