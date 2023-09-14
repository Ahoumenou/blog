<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
{
    $this->middleware('auth')->except('index', 'show');
}
    public function articles()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
    
        return view('articles.articles', compact('articles'));
    }


    // public function show(Article $article)
    // {
    //         // dd($article);
    //         // ddd($article);
    //         return view('articles.show', compact('article'));
    //     }
        
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
    $this->authorize('create', Article::class);
        return view('articles.create');
}
public function store(Request $request)
{
    $user = User::find(1);
    $request['user_id'] = $user->id;
    $this->authorize('create', Article::class);

    $this->validate($request, [
        'title' => 'required|string',
        'body' => 'required|string',
        'user_id' => 'required|numeric|exists:users,id',
    ]);
 
    // dd($request->all());
    // dd($art);
    $art = Article::create($request->all());
    Article::create($request->all());
    return redirect('/articles')->with(['success_message' => 'L\'article a été crée !']);
}

public function edit(Article $article)
{
    $this->authorize('update', $article);
    return view('articles.edit', compact('article'));
}

public function update(Request $request, Article $article)
{
    $this->authorize('update', $article);
    $article->update($request->all());
    // dd($article, $request->all());
    $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
    return view('articles.articles', compact('articles'));
    
}
public function delete(Article $article)
{
    $this->authorize('update', $article);
    // vérification des permissions plus tard
    $article->delete();

    // return view('layouts.master');
    // return view('articles.articles', compact('article'));
}


}
