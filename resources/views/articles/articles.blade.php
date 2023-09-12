@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
@forelse($articles as $article)
    @include('partials.article')
    {{-- <a href="/article/{ $article->id }">Article</a>  --}}
@empty
    @include('partials.no-articles')
@endforelse

@endsection
