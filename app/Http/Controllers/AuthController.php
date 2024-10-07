<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus di isi'
        ]);

        // Jika validasi gagal
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Autentikasi
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])){
            $request->session()->regenerate();
            return redirect()->intended();// Perbaiki ini jika rute dashbord berbeda
        }

        // Jika login gagal
        Session::flash('status', 'failed');
        Session::flash('message', 'Login gagal!');
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
