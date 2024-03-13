<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Benvenuto';
    $link1 = 'http://127.0.0.1:8000/';
    // $link2 = 
    // $link3 =
    return view('welcome', ['title' => 'Benvenuto'], '/');
});

Route::get('/contatti', function (){
    $title = 'Contatti';
    return view('contatti', ['title' => 'Contatti']);
});

Route::get('/chi_sono', function (){
    $title = 'Chi Sono';
    $description = 'lorem bla bla bla';
    return view('chi_sono', ['title' => 'Chi sono', 'description' => 'lorem bla bla bla']);
});