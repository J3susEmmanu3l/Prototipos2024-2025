<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function main()
    {
        return view('main');
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
        return view('reset.olvidar');
    }

    public function codigorecuperacion()
    {
        return view('reset.codigorecuperacopm');
    }

    public function restaurar()
    {
        return view('reset.restaurar');
    }

    public function docente()
    {
        $nombre = Auth::user();
        return view('pag.docente', ['nombre' => $nombre->nombre]);
    }

    public function estudiante()
    {
        $nombre = Auth::user();
        return view('pag.estudiante' ,['nombre' => $nombre->nombre]);
    }

    public function upload(Request $request)
{
    // Validación de los datos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'user-type' => 'required|string|max:15', // Asegúrate de que este campo exista
        'password' => 'required|string|min:8|confirmed', // Regla más simple para la contraseña
    ]);

    // Crear al nuevo usuario
    $user = new User();
    $user->nombre = $validatedData['nombre'];
    $user->apellido = $validatedData['apellido'];
    $user->email = $validatedData['email'];
    $user->tipo = $validatedData['user-type']; // Reemplazar con el nombre correcto si es necesario
    $user->password = bcrypt($validatedData['password']);
    $user->save();

    // Redirigir al formulario de inicio de sesión con mensaje de éxito
    return redirect()->route('iniciarsesion')->with('success', 'Usuario registrado correctamente. ¡Inicia sesión!');
}


    public function login(Request $request){
        // Validar las credenciales del usuario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Regenerar la sesión para prevenir ataques de fijación de sesión
            $request->session()->regenerate();

            // Obtener el usuario autenticado
            $user = Auth::user();

            // Verificar el rol del usuario y redirigir
            if ($user->tipo === 'docente') {
                return redirect()->route('docente'); // Redirigir a la ruta docente
            } elseif ($user->tipo === 'estudiante') {
                return redirect()->route('estudiante'); // Redirigir a la ruta estudiante
            }

            // Opcional: redirigir a una página predeterminada si el rol no coincide
            return redirect('/'); // Página predeterminada
        }

        // Si la autenticación falla, redirigir de vuelta con un mensaje de error
        return back()->with('error', 'Las credenciales no coinciden con nuestros registros.');
    }
}   