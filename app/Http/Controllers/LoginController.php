<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function loginUser(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Ambil data
        $credentials = $request->only('email', 'password');

        // Login
        if (Auth::attempt($credentials)) {

            // regenerasi session (penting untuk keamanan)
            $request->session()->regenerate();

            return redirect()->route('dashboard')
                ->with('success', 'Login berhasil');
        }

        // Gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah'
        ])->onlyInput('email');
    }
}