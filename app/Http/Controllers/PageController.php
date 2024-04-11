<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    
    public function home(){
        
        $articles = Article::orderBy('created_at', 'DESC')->take(5)->get();
        return view('home', ['title' => 'Antropologia Facile', 'articles' => $articles]);
    
    }

    

    public function aboutMe(){
        return view('chi-sono', [
            'title' => 'Chi sono', 
            'description' => 'lorem bla bla bla'
        ]);
    }

    public function articles(){
        
        $articles = Article::where('visible', true)->get();

        return view('articles', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        return view('article', ['article' => $article]);
    }
}
