<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(){
        return view('auth.login',[
            'name' => 'Halaman'
        ]);
    }

    public function AuthLogin(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/pages/dashboard')->with('success', 'login berhasil');
        }
        return back()->with('error', 'login wrong!!!');

    }
            public function logout(){
                auth()->logout();

                return redirect('/');
            }
}
