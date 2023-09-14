@extends('layouts.master')
    
@section('title')
    Connexion
@endsection
@section('content')
<form action="/register" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Nom d'Utilisateur"> <br> <br>
    <input type="email" name="email" placeholder="example@gmail.com"> <br> <br>
    <input type="password" name="password" placeholder="Mot de Pass"> <br> <br>
    <input type="password" name="password" placeholder="confirmation">
    <button type="submit">S'enregistrer</button>
</form>
    
@endsection