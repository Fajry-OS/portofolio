<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            return redirect()->intended('profile');
        }
        return redirect()->back()->withErrors(['message' => 'Login Gagal. Mohon Periksa Kembali Email dan Password Anda!!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
