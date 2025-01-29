<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
