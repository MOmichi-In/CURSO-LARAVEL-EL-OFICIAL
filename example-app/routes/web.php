<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, '_summon']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/post-0', [PostController::class, 'create']);
Route::get('/post/{post}', [PostController::class, 'show']);





