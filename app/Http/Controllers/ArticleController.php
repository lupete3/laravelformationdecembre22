<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::all();

        return view('article', [
            'articles' => $articles
        ]);
    }

    public function store(Article $article, ArticleRequest $request){
        Article::create([
            'titre' => $request->titre,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'l\'article est ajouté avec succès');
    }

    //Méthode pour récuperer un seul article dans la base de données 
    public function show($id){
        $articles = Article::find($id);
        return view('articles.show', [
            'article' => $articles
        ]);
    }
}
