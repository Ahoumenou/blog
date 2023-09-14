

@extends('layouts.master')

{{-- @section('title')
    Articles
@endsection --}}

@section('content')
<h2>Articles</h2>

<div class="articles">
    @forelse($articles as $article)
    @section('title', 'Lire l\'article' . $article->title)
        @include('partials.article')
        {{-- <a href="/article/{ $article->id }">Article</a>  --}}
        
    @empty
        @include('articles.no-articles')
    @endforelse
@endsection
</div>





