<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // página de login
    public function index() {
        return view('site.login');
    }

    // loga o usuário
    public function authenticate(LoginRequest $request) {
        $credentials = $request->only('email', 'password');

        $remember = $request->boolean('remember_me', false);

        // valida login
        if (Auth::attempt($credentials, $remember)) {
            request()->session()->regenerate();

            return redirect()->intended(route('panel.index'));
        }

        // se login incorreto retorna para a página de login com uma mensagem de erro
        return back()->withErrors([
            'auth' => 'E-mail ou senha incorretos.'
        ])->onlyInput(['email', 'remember_me']);
    }

    // desloga o usuário
    public function logout(Request $request): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('site.home'));
    }
}
