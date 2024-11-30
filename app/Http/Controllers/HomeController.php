<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function iniciarsesion(){
        //return view('welcome');
        return view('iniciarsesion');
    }

    public function register(){
        //return view('welcome');
        return view('register');
    }

    public function principal(){
        return view('principal');
    }
}
