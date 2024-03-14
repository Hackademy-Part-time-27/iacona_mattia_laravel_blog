<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('home', ['title' => 'Antropologia Facile']);
})->name('home');  //naming delle rotte

Route::get('/contatti', function (){
    
    return view('contatti', ['title' => 'Contatti']);
})->name('contatti');

Route::get('/chi-sono', function (){
    
    return view('chi-sono', [
        'title' => 'Chi sono', 
        'description' => 'lorem bla bla bla'
    ]);
})->name('chi-sono');

Route::get('/articoli', function (){
    
    $articles = [
        ['title' => 'Raccoglitori e Cacciatori: chi eravamo?',
         'category' => 'Antropologia',
         'description' => 'Come siamo arrivati ad essere la specie dominante'],
        ['title' => 'La Rivoluzione Agricola: quando come e perchè.',
         'category' => 'Sociologia',
         'description' => 'Pro e Contro che hanno influenzato la nostra società.'],
        ['title' => 'I grandi Padri Ridistributori: le fondamenta delle città',
         'category' => 'Antropologia',
         'description' => 'Quando un Capo ridistribuiva le ricchezze a tutta la tribù'],

    ];
    return view('articles', [ 'title' => 'Articoli', 'articles' => $articles]);
   
})->name('articles');

Route::get('/articolo/{article?}', function ($article) {

    $index = $article;

    $articles = [
        ['title' => 'Raccoglitori e Cacciatori: chi eravamo?',
         'category' => '"Antropologia"',
         'description' => 'Come siamo arrivati ad essere la specie dominante.'],
        ['title' => 'La Rivoluzione Agricola: quando come e perchè.',
         'category' => '"Sociologia"',
         'description' => 'Pro e Contro che hanno influenzato la nostra società.'],
        ['title' => 'I grandi Padri Ridistributori: le fondamenta delle città.',
         'category' => '"Antropologia"',
         'description' => 'Quando un Capo ridistribuiva le ricchezze a tutta la tribù.'],

    ];

    if(array_key_exists($index, $articles)) {

        return view('article', ['article' => $articles[$index]]);
    } else {
        abort(404);
    }

    })->name('article');
