{{ csrf_field() }}
{{-- <input type="number" name="user_id" placeholder="user_id"> 
<input type="text" name="title" placeholder="titre..."> 
<input type="text" name="body" placeholder="body..."> 
<input type="file" name="image" placeholder="Choisir une image..."> <br>
<br> --}}
<input type="text" name="title" value="{{ old('title',  isset($article->title) ? $article->title : null) }}" placeholder="titre..."> <br> <br>
<textarea name="body" id="" cols="30" rows="10" value="Entrez un texte">{{ old('body',  isset($article->body) ? $article->body : null) }} </textarea> <br> <br>
<input type="file" name="image"> <br> <br>
<button type="submit">Enregistrer</button>