<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome', ['title' => 'Benvenuto']);
})->name('welcome');  //naming delle rotte

Route::get('/contatti', function (){
    
    return view('contatti', ['title' => 'Contatti']);
});

Route::get('/chi-sono', function (){
    
    return view('chi-sono', [
        'title' => 'Chi sono', 
        'description' => 'lorem bla bla bla'
    ]);
});