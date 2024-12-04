<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;

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

    $post->title = 'Title PiPOPpo';
    $post->content = 'Content 2';
    $post->category = 'Catagory 2';

    $post->save();

    return $post;
 */

    /* traes mediante el id  */
    $post = Post::find(1);
    /* return  $post->published_at->format('d/m/Y'); */
    dd($post->is_active);

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
  /*   $post = Post::find(1);
    $post->delete(); */

});



// Rutas con contoladores
Route::get('/exampleContrpller/{valor}', [HomeController::class, 'index']);


Route::get('/home/{post}', [PostController::class, 'home']);
Route::get('/examplePostCreate/{post}', [PostController::class, 'postCreate']);

/* Route::get('/crud', [PostController::class, 'index'])->name('crud.index');
Route::get('/crud/read/{id}', [PostController::class, 'show'])->name('crud.show');
Route::get('/crud/create', [PostController::class, 'create'])->name('crud.create');
Route::post('/crud/create', [PostController::class, 'store'])->name('crud.store');
Route::get('/crud/update/{id}', [PostController::class, 'edit'])->name('crud.edit');
Route::put('/crud/update/{post}', [PostController::class, 'update'])->name('crud.update');
Route::delete('/crud/delete/{post}', [PostController::class, 'destroy'])->name('crud.destroy'); */
/*
Route::resource('articulos', PostController::class)->parameters(['articulos'=> 'post'])->names('crud'); */
Route::resource('articulos', PostController::class)->parameters(['articulos'=> 'post'])->names('crud');
/* Route::apiResource('articulos', PostController::class)->names('crud'); */


/* Route::resource('crud', PostController::class)->except(['index','destroy']);
Route::resource('crud', PostController::class)->only(['index','create']); */





//Ruta sin expresar el metodo
Route::get('/', HomeController::class);


Route::get('relaciones/uno_uno', function () {
    /*   User::create([
          'name'=>'Jona',
          'email'=>'jja@gmail.com',
          'password'=>bcrypt('12345678')
      ]); */
  /*
      Phone::create([
          'number'=>'1234567',
          'user_id'=>1,
      ]); */
      /* $user = User::where('id',1)->with('phone')->first(); */

      $phone = Phone::find(1);
      return $phone->user;

  });

  Route::get('relaciones/uno_muchos', function(){
     $post = Post::find(2);
    $post->comments()->create([
        'content'=>'1234567',
    ]);



     $comment = Comment::find(1);
     $a = [$post->comments,$comment->post];

    return $a;
  });
