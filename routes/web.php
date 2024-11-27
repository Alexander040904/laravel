<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

use function Pest\Laravel\post;

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

Route::get('/example/{valor}', function (string $valor) {
    return "este es el valor" . $valor;
});

Route::get('/prueba', function () {


    /*     $post = new Post;

    $post->title = 'Title 2';
    $post->content = 'Content 2';
    $post->category = 'Catagory 2';

    $post->save();

    return $post; */


    /* traes mediante el id 
$post = Post::find(1);
return $post; */

//Ocupa el filtro where
/* 
    $post = Post::where('title','Title 1')->first();
    $post->category = 'Desarrollo';
    $post->save();
    return $post; */


//Mostrar todos 

    /*     $post = Post::all();
    return $post; */

    //Traer varios registro con where, ordeBy, select and take
/*  
   $post = Post::where('id','<','3')->orderBy('id','desc')->select('id','title')->get();

    $post2 = Post::take(1)->orderBy('title','asc')->get();
    

    $arr = [$post, $post2];

    return $arr; */

    //Eliminar
    $post = Post::find(1);
    $post->delete();

});



// Rutas con contoladores 
Route::get('/exampleContrpller/{valor}', [HomeController::class, 'index']);


Route::get('/home/{post}', [PostController::class, 'home']);
Route::get('/examplePostCreate/{post}', [PostController::class, 'postCreate']);

//Ruta sin expresar el metodo 
Route::get('/', HomeController::class);
