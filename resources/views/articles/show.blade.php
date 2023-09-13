<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <a href="\articles">Accueil</a>
    <h3> {{$article['title']}} </h3>
    <img src=" {{$article['image']}} " alt="image {{$article["id"]}} ">
    <p> {{ $article['body']}} </p>
    <p> Date de Création:
        <strong>  {{ $article['created_at']}} </strong>
    </p>
    <p> Mis-à-jour :
        <strong>  {{ $article['updated_at']}} </strong>
    </p>
    <a href="/article/{{ $article->id }}/edit">Éditer l'article</a>
    <p><strong>COMMENTAIRES :</strong></p>
    @foreach($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach
</body>
</html>

