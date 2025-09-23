<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Kasus 1: Admin
        if (Str::startsWith($username, 'admin_')) {
        if (Auth::guard('web')->attempt([
            'username' => $username,
            'password' => $password,
            'role'     => 'admin',
        ])) {
            return redirect()->intended('/admin');
        }
    }

        // // Kasus 2: Guru
        // if (Str::startsWith($username, 'guru_')) {
        //     if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password, 'role' => 'guru'])) {
        //         return redirect()->route('guru.dashboard');
        //     }
        // }

        // Kasus 3: Siswa (login pakai NISN)
        if (Auth::guard('student')->attempt(['nisn' => $username, 'password' => $password])) {
            return redirect()->route('student.dashboard');
        }
        return back()->withErrors(['login' => 'Username/NISN atau password salah!']);
    }

    public function logout(Request $request)
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        if (Auth::guard('student')->check()) {
            Auth::guard('student')->logout();
        }

        return redirect()->route('login');
    }
}

