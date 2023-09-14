{{ csrf_field() }}
{{-- <input type="number" name="user_id" placeholder="user_id"> 
<input type="text" name="title" placeholder="titre..."> 
<input type="text" name="body" placeholder="body..."> 
<input type="file" name="image" placeholder="Choisir une image..."> <br>
<br> --}}
<input type="text" name="title"  value="{{ old('title',  isset($article->title) ? $article->title : null) }}" placeholder="titre..."> <br>
@error('title')
    <div> Impossible d'enregistrer : Veuillez entrer le titre de l'article </div>
@enderror
<textarea name="body" id="" cols="30" rows="10">{{ old('body',  isset($article->body) ? $article->body : null) }}</textarea> <br> <br>
@error('body')
    <div> Impossible d'enregistrer : Entrez la description de votre article {{ $message }}</div>
@enderror
<input type="file" name="image"  placeholder="Inserer une image..."> <br> <br>
@error('image')
    <div> Impossible d'enregistrer : Inserer une image </div>
@enderror
<button type="submit">Enregistrer</button>