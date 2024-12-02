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
    
    public function index(){
        //compact y ['post'=> $post] son lo mismo
        $posts = Post::orderBy('id','desc')->get();
   
        return view('posts.crud', compact('posts'));

    }
    public function show($post){
        //compact y ['post'=> $post] son lo mismo
        $posts = Post::find($post);
        $post = $posts;
     
        return view('posts.read', compact('post'));

    }
    public function edit($post){
        $post = Post::select(['id','title', 'category','content'])->where('id','=', $post)->first();
        
        return view('posts.update', compact('post'));

    }
    public function update(Request $request, $post){
        $post = POST::find($post);
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        
        return redirect(route('crud.show',$post->id));
       

    }
    public function destroy($post){
        //compact y ['post'=> $post] son lo mismo
        $post = Post::find($post);
        $post->delete();
     
     
        return redirect(route('crud.index'));

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
        return redirect(route('crud.index'));
    }
    public function postCreate($post){
        return "Create a character {$post}";

    }
}
