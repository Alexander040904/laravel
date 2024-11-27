<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Ruta normales de origen
Route::get('/post/{post}', function ($post) {
    #return view('welcome');
    return "hola {$post}";
});

Route::get('/example/{valor}', function(String $valor){
        return "este es el valor". $valor;
});



// Rutas con contoladores 
Route::get('/exampleContrpller/{valor}', [HomeController::class, 'index']);


Route::get('/home/{post}', [PostController::class, 'home']);
Route::get('/examplePostCreate/{post}', [PostController::class, 'postCreate']);

//Ruta sin expresar el metodo 
Route::get('/', HomeController::class);

