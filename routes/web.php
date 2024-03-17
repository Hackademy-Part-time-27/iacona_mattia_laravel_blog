<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');  //naming delle rotte

Route::get('/contatti', [PageController::class, 'contacts'])->name('contatti');

Route::get('/chi-sono', [PageController::class, 'aboutMe'])->name('chi-sono');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articolo/{article}', [PageController::class, 'article'])->name('article');
