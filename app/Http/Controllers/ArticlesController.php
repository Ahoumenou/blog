<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
    
        return view('articles.articles', compact('articles'));
    }


    // public function show($id)
    // {
        //     // dd($article);
        //     // ddd($article);
        //     return view('articles.show', compact('article'));
        // }
        
    //     public function show($id, Article $article)
    //     {
    //         $article = Article::with('user')->where('id',$id)->firstOrFail();
   
    //     return view('articles.show', compact('article'));
    //    }
       public function show($id)
{
    // dans la méthode show()
    $article = Article::with('user')->with(['comments' => function ($query) {
        $query->with('user');
    }])->findOrFail($id);

    return view('articles.show', compact('article'));
}

public function create(){
        return view('articles.create');
}
public function store(Request $request)
{
 
    dd($request->all());
    $art = Article::create($request->all());
    dd($art);
}

public function edit(Article $article)
{
    return view('articles.edit', compact('article'));
}

public function update(Request $request, Article $article)
{
    $article->update($request->all());
    dd($article, $request->all());
}
public function delete(Article $article)
{
    // vérification des permissions plus tard
    $article->delete();

    // return view('layouts.master');
    // return view('articles.articles', compact('article'));
}


}
