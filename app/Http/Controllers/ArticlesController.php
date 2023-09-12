<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

class ArticlesController extends Controller
{
    public function articles()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
    
        return view('articles.articles', compact('articles'));
    }


    public function show($id)
    {
        $article = Article::with('user')->where('id')->firstOrFail();
        // dd($article);
        // ddd($article);
        return view('articles.show', compact('article'));
    }

//     public function show(Article $article)
// {
//     $article = 
//     return view('articles.show', compact('article'));
// }
}
