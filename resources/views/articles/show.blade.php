{{-- <p> {{$article}} </p> --}}
<a href="\articles">Accueil</a>
<h3> {{$article['title']}} </h3>
<img src=" {{$article['image']}} " alt="image {{$article["id"]}} ">
<p> {{ $article['body']}} </p>

<p>  <em>{{$article->user['name']}}</em> </p>

<p> Date de Création:
    <strong>  {{ $article['created_at']}} </strong>
</p>
<p> Mis-à-jour :
    <strong>  {{ $article['updated_at']}} </strong>
</p>