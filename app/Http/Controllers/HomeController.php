<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function iniciarsesion()
    {
        return view('inr.iniciarsesion');
    }

    public function register()
    {
        return view('inr.register');
    }

    public function olvidar()
    {
        return view('inr.olvidar');
    }

    public function principal()
    {
        return view('pag.principal');
    }

    public function upload(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->nombre = $validatedData['nombre'];
        $user->apellido = $validatedData['apellido'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect()->with('success', 'Usuario registrado correctamente. Inicia sesión.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('principal'); // Redirige a la página principal
        }

        return back()->with('error', 'Las credenciales no coinciden con nuestros registros.');
    }
}
