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
        // Registra al usuario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/|confirmed',
        ]);

        // Crea al nuevo usuario
        $user = new User();
        $user->nombre = $validatedData['nombre'];
        $user->apellido = $validatedData['apellido'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect()->route('iniciarsesion')->with('success', 'Usuario registrado correctamente. ¡Inicia sesión!');
    }

    public function login(Request $request)
    {
        // Validar las credenciales del usuario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('principal'); // Redirige a la página principal
        }

        // Si la autenticación falla, redirigir de vuelta con un mensaje de error
        return back()->with('error', 'Las credenciales no coinciden con nuestros registros.');
    }
}
