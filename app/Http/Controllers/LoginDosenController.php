<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginDosenController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.dosen-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nidn' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('dosen')->attempt($credentials)) {
            return redirect()->intended('/dosen/matakuliah');
        }

        return back()->withErrors([
            'nidn' => 'NIDN atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('dosen')->logout();
        return redirect('/login/dosen');
    }
}