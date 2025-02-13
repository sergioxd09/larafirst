<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index()  {   
        return view('contact',['name'=>'Sergio']);
    }
    function otro($post,$otro)  {   
        echo $post;
        echo $otro;
    }
}

