

@extends('layouts.master')

@section('title')
    Articles
@endsection


@section('content')
<h2>Articles</h2>

<div class="articles">
    @forelse($articles as $article)
        @include('partials.article')
        {{-- <a href="/article/{ $article->id }">Article</a>  --}}
 </div>

    @empty
        @include('articles.no-articles')
    @endforelse
    
    @endsection



