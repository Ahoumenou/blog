<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function article()
    {
        return view('layouts.master');
    }
    
    public function contact()
    {
        return view('layouts.contact');
    }
    public function about()
    {
        return view('layouts.about');
    }
    public function show($id)
    {
        $article = Article::with('user')->where('id', $id)->firstOrFail();
        // dd($article);
        // ddd($article);
        return view('articles.show', compact('article'));
        // return view('articles.show');
    }
}
