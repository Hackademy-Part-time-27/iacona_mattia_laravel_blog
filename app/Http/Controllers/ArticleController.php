<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{

    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);        
    }


    public function create()
    {
        return view('articles.create', ['categories' => Category::all()]);
    }


    public function store(StoreArticleRequest $request)
    {

        $article = Article::create(array_merge($request->all(), ['user_id' => auth()->user()->id]));

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $extension = $request->file('image')->extension();

            $fileName = uniqid('image_') . '.' . $extension;

            $article->image = $request->file('image')->storeAs('public/images/' . $article->id, $fileName);

            $article->save();

        }

        return redirect()->route('articles.index')->with(['success' => 'Articolo caricato correttamente!']);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article, 'categories' => Category::all()]);
    }

    public function update(Request $request, Article $article,)
    {
        $article->update($request->all());

        return redirect()->back()->with(['success' => 'Articolo modificato correttamente!']);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['success' => 'Articolo eliminato!']);
    }

}
