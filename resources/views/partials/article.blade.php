<article>
    <h3>Article écrit par: <strong> <em> {{ $article->user->name }}</em> </strong> </h3> 
        <p>Titre: <a href="/article/{{ $article->title }}">{{ $article['title'] }} </a></p>   
    <a href="/article/{{ $article->id}}">Détails</a>
    {{-- <a href="/article/{{ $article->id }}">Article</a> --}}
</article>

