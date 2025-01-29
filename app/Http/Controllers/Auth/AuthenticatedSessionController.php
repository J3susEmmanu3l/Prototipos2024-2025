<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
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

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
