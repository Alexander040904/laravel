<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index($post){
        //compact y ['post'=> $post] son lo mismo
       
        return view('posts.show', compact('post'));

    }
    
    public function postCreate($post){
        return "Create a character {$post}";

    }
}
