<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $tipo): Response
    {
        $user = $request->user();

        if ($user->tipo === 0 && $tipo === 1) {
             return redirect()->route('estudiantes.dashboard');
        }

        if ($user->tipo === 1 && $tipo === 0) {
             return redirect()->route('docentes.dashboard');
        }

        if ($request->user()->tipo !== $tipo) {
            // return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
