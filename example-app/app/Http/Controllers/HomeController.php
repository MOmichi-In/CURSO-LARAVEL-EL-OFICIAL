<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //creamos un metodo para el homepage que muestre un mensaje de bienvenida
    public function _summon()
    {
        return view('home');
    }
}
