<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorkController;
use App\Http\Controllers\ProblemController;
// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/',[HelloWorkController::class,'holaMundo'])->name('introduccion');  
// Ruta dinámica para los navbar
Route::get('/problema/{numero}', [ProblemController::class, 'show'])->name('problema');    
// Ruta para el triangulo
Route::get('/triangulo', [ProblemController::class, 'showTriangulo'])->name('triangulo');  
// Ruta para tabla de multiplicar
Route::get('/tabla',[ProblemController::class ,'showTablaMultiplicar'])->name('tabla');  


Route::get('/cifrado', [ProblemController::class, 'showTablaCifrado'])->name('cifrado'); 
Route::get('/ver-cifrado', [ProblemController::class, 'verCifrado'])->name('verCifrado');




