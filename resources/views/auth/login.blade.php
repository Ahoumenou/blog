@extends('layouts.master')
    
@section('title')
    Login
@endsection

@section('content')
    
<form action="/login"  method="post">
    {{ csrf_field() }}
    <input type="email" name="email" placeholder="example@gmail.com">
    <input type="password" name="password" placeholder="Mot de Pass">
    <button type="submit" name="submit">Connecter</button>
</form>
@endsection