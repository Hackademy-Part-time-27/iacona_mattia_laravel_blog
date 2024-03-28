<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create(){

        Article::create([
            'title' => 'Siamo davvero la specie dominante?',
            'category' => 'Antropologia',
            'description' => 'Un breve riassunto su come siamo arrivati a ciò che siamo.',
            'body' => '...',
        ]);
    }
}
