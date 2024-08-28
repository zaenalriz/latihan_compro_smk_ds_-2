<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('backend.login.index');
    }
    public function aksi_login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.email' => 'Email tidak valid!',
                'password.required' => 'Password harus di isi!',
                'email.required' => 'Email harus di isi!',
            ]
        );
        $credentials = $request->only(['email', 'password']);
        // mengecek email dan password
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('backend.blog');
        }
        return redirect()->back();
    }
}
