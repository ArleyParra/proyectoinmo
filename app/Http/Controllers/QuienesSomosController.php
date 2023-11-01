<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    function listQuienesSomos(){
        return view("quienessomos");
    }
}
