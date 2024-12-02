<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class PostController extends Controller
{
    //

    public function home($post){
        //compact y ['post'=> $post] son lo mismo
     
        return view('posts.show', compact('post'));

    }
    
    public function crud(){
        //compact y ['post'=> $post] son lo mismo
        $posts = Post::orderBy('id','desc')->get();
   
        return view('posts.crud', compact('posts'));

    }
    public function read($id){
        //compact y ['post'=> $post] son lo mismo
        $post = Post::find($id);
        $id = $post;
     
        return view('posts.read', compact('id'));

    }
    public function edit($id){
        $post = Post::select(['id','title', 'category','content'])->where('id','=', $id)->first();
        
        return view('posts.update', compact('post'));

    }
    public function update(Request $request, $post){
        $post = POST::find($post);
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect('/crud/read/'.$post->id);
       

    }
    public function delete($post){
        //compact y ['post'=> $post] son lo mismo
        $post = Post::find($post);
        $post->delete();
     
     
        return redirect('/crud');

 }
 
    public function create(){
           //compact y ['post'=> $post] son lo mismo
        
        
           return view('posts.create');
    }
    
    public function store(Request $request){
       
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect('/crud');
    }
    public function postCreate($post){
        return "Create a character {$post}";

    }
}
