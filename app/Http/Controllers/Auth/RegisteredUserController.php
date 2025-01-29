<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validación de los datos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'user-type' => 'required|string|max:15', // Asegúrate de que este campo exista
        'password' => 'required|string|min:8|confirmed', // DEBERIA DE JALAR PENE
    ]);

    // Crear al nuevo usuario
    $user = new User();
    $user->nombre = $validatedData['nombre'];
    $user->apellido = $validatedData['apellido'];
    $user->email = $validatedData['email'];
    $user->tipo = $validatedData['user-type']; // Reemplazar con el nombre correcto si es necesario
    $user->password = bcrypt($validatedData['password']);
    $user->save();

    //Evento Registrar usuario (beta)
    event(new Registered($user));

    // Redirigir al formulario de inicio de sesión con mensaje de éxito
    return redirect()->route('login')->with('success', 'Usuario registrado correctamente. ¡Inicia sesión!');
    }
}
