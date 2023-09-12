<article>
    <h3>Article écrit par: <strong> <em> {{ $article->user->name }}</em> </strong> </h3>
    <a href="/article/{{ $article->id }}">
        <p>{{ $article['title'] }}</p>
    </a>
    {{-- <a href="/article/{{ $article->id }}">Article</a> --}}
</article>

