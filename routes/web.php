<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('post',PostController::class);
/*
Route::get('/contact',function() {

    /*return redirect()->route('contact2'); //redirrecciones de maneras distintas
    return to_route('contact2');
   // return redirect('/contact2',303); //redirecciones
    $data=['name'=> 'Sergio'];
    return view('contact',$data);
})->name('contact');

Route::get('/contact2',function() {
    return view('contact2',['edad' => '20']);
})->name('contact2');

//Con controlador
Route::get('test', [PrimerControlador::class,'index'/*iNDEX nombre de la funcion ]);
Route::get('test2', [SegundoControlador::class,'index'/*iNDEX nombre de la funcion ]);

//Parametros con rutas 
Route::get('otro/{post}/{otro} ', [PrimerControlador::class,'otro'/*iNDEX nombre de la funcion ]);



Route::resource('post', PrimerControlador::class);*/