<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Article $article, ArticleRequest $request){
        Article::create([
            'titre' => $request->titre
        ]);
    }
}
