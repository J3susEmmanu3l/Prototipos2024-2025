<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //se le declara normalmente index para la página principal
        return view('curso.index');
    }

    public function create(){ //se le declara normalmente create para crear un curso o lo que gustes
        return view('curso.create');
    }
    public function show($curso){ //se le declara normalmente show para crear un curso o algo especificamente
        return view('curso.show', compact('curso'));
    }
}
