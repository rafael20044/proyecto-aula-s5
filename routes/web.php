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