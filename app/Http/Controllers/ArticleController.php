<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{

    public function index(){
        return view('articles.index', ['articles' => Article::all()]);        
    }


    public function create(){
        return view('articles.create');
    }


    public function store(StoreArticleRequest $request){

        $article = Article::create($request->all());

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $extension = $request->file('image')->extension();

            $fileName = uniqid('image_') . '.' . $extension;

            $article->image = $request->file('image')->storeAs('public/images/' . $article->id, $fileName);

            $article->save();

        }

        return redirect()->route('articles.index')->with(['success' => 'Articolo caricato correttamente!']);
    }

}
