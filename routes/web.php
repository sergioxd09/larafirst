<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function() {
    return view('test');
});

Route:: get ('/crudy',function(){
    $age=33;
    $data=['name' => 'Sergio','age'=>20];
    return view('crud/index',$data);
})->name('crud');