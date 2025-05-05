<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('preguntas');
});

Route::get('/preguntas', function (){
    return view('preguntas');
})->name('pregunta');

Route::get('/nosotros', function(){
    return view('nosotros');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('singup');
});