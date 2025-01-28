<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function docente()
    {
        $nombre = Auth::user();
        return view('pag.docente', ['nombre' => $nombre->nombre]);
    }

    public function estudiante()
    {
        $nombre = Auth::user();
        return view('pag.estudiante', ['nombre' => $nombre->nombre]);
    }
}
