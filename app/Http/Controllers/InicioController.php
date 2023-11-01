<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    function listInicio(){
        return view("inicio");
    }
}
