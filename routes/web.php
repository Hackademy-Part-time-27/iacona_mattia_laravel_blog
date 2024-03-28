<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');  //naming delle rotte

Route::get('/contatti', [ContactController::class, 'contacts'])->name('contatti');
Route::post('/contatti/invia', [ContactController::class, 'invia'])->name('contatti.invia');

Route::get('/chi-sono', [PageController::class, 'aboutMe'])->name('chi-sono');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articoli/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('/articolo/{article}', [PageController::class, 'article'])->name('article');
