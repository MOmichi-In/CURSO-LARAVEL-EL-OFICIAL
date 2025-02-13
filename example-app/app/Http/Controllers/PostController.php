<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //creamos una serie de metodos para repartir entre ellos diferentes funcionalidades
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post)
    {
        return view('posts.show');
    }
}
