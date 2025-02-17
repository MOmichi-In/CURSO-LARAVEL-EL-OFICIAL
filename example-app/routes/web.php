<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use function Laravel\Prompts\select;

Route::get('/', [HomeController::class, '_summon']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/post-0', [PostController::class, 'create']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::get('prueba', function(){
    // $post = new Post;
    // $post->title = 'Titulo de prueba 2';
    // $post->content = 'Contenido de prueba 2';
    // $post->categoria = 'Categoria de prueba 2';

    // añadir contenido a la base de datos sin tener que hacer sentencias MYSQL

    // $post = Post::orderBy('id', 'asc')
    // ->select('id', 'title', 'categoria')
    // ->take(2)
    // ->get();

    // $post = Post::find(1);
    // $post->delete();

    // return $post;
});