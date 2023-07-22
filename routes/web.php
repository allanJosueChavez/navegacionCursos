<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

//crear un grupo de rutas
 Route::controller(CursoController::class) -> group(function(){     
     Route::get('/', 'index');
     Route::get('cursos/create', 'create');
     Route::get('cursos/{curso}','show');
 });

/*
Route::get('/', function () {
    return view('welcome');
});
*/


//Hey GitLens, crea un repositorio para subir este proyecto a GitHub
//git init 
//git add .
//git commit -m "first commit"
//git branch -M main
//git remote add origin 
//git push -u origin main 
//git push -u origin main --force


