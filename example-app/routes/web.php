<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use function Laravel\Prompts\select;

Route::get('/', [HomeController::class, '_summon']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);
// Route::get('prueba', function(){
    // $post = new Post;
    // $post->title = 'titulo de prueba 3';
    // $post->content = 'Contenido de prueba 3';
    // $post->categoria = 'Categoria de prueba 3';
    // $post->save();
    // añadir contenido a la base de datos sin tener que hacer sentencias MYSQL

    // $post = Post::find(1);

    // $post = Post::where('categoria', 'titulo de prueba 1')
    // ->first();
    // $post->categoria = 'desarrollo web';
    // $post->save();
    // actualizar registro

    // $post = Post::orderBy('id', 'asc')
    // ->select('id', 'title', 'categoria')
    // ->take(2)
    // ->get();

    // $post = Post::find(1);
    // $post->delete();

    // return $post->published_at->format('d-m-Y');
// });