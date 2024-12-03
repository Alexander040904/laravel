<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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
    public function postCreate($post){
        return "Create a character {$post}";

    }
    public function index(){
        // Usamos paginate() en lugar de get() para la paginación
        $posts = Post::orderBy('id', 'desc')->paginate(10); // 10 es el número de posts por página
        
        // Pasamos los posts paginados a la vista
        return view('posts.crud', compact('posts'));
    }
    
    public function show(Post $post){
        //compact y ['post'=> $post] son lo mismo
        /* $posts = Post::find($post); */
   
     
        return view('posts.read', compact('post'));

    }
    public function edit(Post $post){
        //$post = Post::select(['id','title', 'category','content'])->where('id','=', $post)->first();
        
        return view('posts.update', compact('post'));

    }
    
    public function destroy(Post $post){
        //compact y ['post'=> $post] son lo mismo
     /*    $post = Post::find($post); */
        $post->delete();
     
     
        return redirect(route('crud.index'));

 }
 
    public function create(){
           //compact y ['post'=> $post] son lo mismo
        
        
           return view('posts.create');
    }
    
    public function store(StorePostRequest $request){

        /* $request->validate(
            [
                'title' => 'required|min:4|max:255',
                'slug'=> 'required|unique:pots',
                'category'=> 'required',
                'content'=> 'required'
            ]
            ); */
       
        Post::create($request->all());
/*         $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content; */

       /*  $post->save(); */
        return redirect(route('crud.index'));
    }
    public function update(UpdatePostRequest $request, Post $post){
       
        /*     $post->title = $request->title;
            $post->slug = $request->slug;
            $post->category = $request->category;
            $post->content = $request->content;
    
            $post->save();
            
             */
           /*  $request->validate(
                [
                    'title' => 'required|min:4|max:255',
                    'slug'=> "required|unique:pots,slug,{$post->id}",
                    'category'=> 'required',
                    'content'=> 'required'
                ]
                ); */
                
            $post->update($request->all());
            return redirect(route('crud.show',$post->slug));
           
    
        }
   
}
