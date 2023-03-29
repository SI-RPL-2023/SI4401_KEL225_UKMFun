<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // TELUTIZEN
    public function index()
    {
        return view('login-ukmfun', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($request->all());
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'ukm') {
                return redirect()->intended('/home-ukm');
            } elseif (Auth::user()->role == 'mahasiswa') {
                return redirect()->intended('/home');
            }
        }

        return back()->with('LoginGagal', 'Username atau Password salah!');
    }

    // LOGOUT
    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
