<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //creamos una serie de metodos para repartir entre ellos diferentes funcionalidades
    public function index()
    {
        $posts = Post::orderBy('id', 'desc') 
        ->paginate(10);
        //paginate(); tomara el valor de 15, es decir por default na paginacion debe llevar minimo 15 registros
        return view('posts.index',[ 
            'posts' => $posts   
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show', compact('post'));

    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts');
    }

    public function edit($post){
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post) {
        $post = Post::find($post);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect("/posts/{$post->id}");
        
    }

    public function destroy($post){
        $post = Post::find($post);
        $post->delete();    
        return redirect('/posts');
    }

}
