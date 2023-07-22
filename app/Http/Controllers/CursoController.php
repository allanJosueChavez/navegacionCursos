<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Esta es la página principal";
    }

    public function create(){
        return "Esta es la página para crear un curso";
    }

    public function show($curso){
        return "Bienvenido al curso: $curso";
    }

    public function edit($curso){
        return "Bienvenido al curso: $curso";
    }

    
}
