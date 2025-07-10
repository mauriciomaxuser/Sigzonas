<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de tener esta vista
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validar datos recibidos
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticar
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Puedes verificar el rol si quieres hacer redirección condicional
            if (Auth::user()->rol === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/home');
            }
        }

        // Si falla el login, regresar con error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
