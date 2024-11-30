<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio(){
        //return view('welcome');
        return view('inicio');
    }

    public function iniciarsesion(){
        //return view('welcome');
        return view('inr.iniciarsesion');
    }
    public function register(){
        //return view('welcome');
        return view('inr.register');
    }
    public function olvidar(){
        //return view('welcome');
        return view('inr.olvidar');
    }

    public function principal(){
        return view('pag.principal');
    }
}
