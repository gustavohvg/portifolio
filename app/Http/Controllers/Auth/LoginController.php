<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {

        $credencials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credencials)) {
            request()->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'email' => 'Login ou senha incorreto',
            ]);
        }

    }

    public function logout() {
        return view("login");
    }
}
