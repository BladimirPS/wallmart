<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ClienteLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.cliente_login');
    }

    public function login(Request $request)
{
    
    $credentials = $request->only('codigo', 'password');

    $cliente = \App\Models\Cliente::where('codigo', $credentials['codigo'])->first();

    if ($cliente && Hash::check($credentials['password'], $cliente->password)) {
        Auth::guard('cliente')->login($cliente);
        $request->session()->regenerate();
        return redirect()->intended('/productos');
    }

    return back()->withErrors([
        'código' => 'Cliente no cuenta con accesos.',
    ]);
}

    public function logout(Request $request)
    {
        Auth::guard('cliente')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
