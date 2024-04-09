<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');  //naming delle rotte

Route::get('/contatti', [ContactController::class, 'contacts'])->name('contatti');
Route::post('/contatti/invia', [ContactController::class, 'invia'])->name('contatti.invia');

Route::get('/chi-sono', [PageController::class, 'aboutMe'])->name('chi-sono');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articolo/{article}', [PageController::class, 'article'])->name('article');


// Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account.index')->middleware('auth');
// si possono anche scrivere le rotte in questo modo ma dovresti farlo per ogni rotta.
//usando la funzione group possiamo includere in un middleware tutte le rotte che hanno bisogno di auth

Route::prefix('account')->middleware('auth')->group(function () {

    Route::get('/', [AccountController::class, 'index'])->name('account.index');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::put('/articles/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::get('/articles/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::delete('/articles/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('/categories', CategoryController::class);

});