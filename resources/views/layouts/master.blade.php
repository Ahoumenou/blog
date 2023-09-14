<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>Laravel</title> --}}
    <title>@yield('title')</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            text-align: center
        }

        header ul,
        .hh {
            display: flex;
            justify-content: center;
            gap: 5rem;
            list-style: none;

        }

        header ul li a {
            text-decoration: none;
        }

        /* .articles{
            width: fit-content;
            border: 1px solid;
            margin: auto;
        } */
    </style>
</head>

<body class="container">
    <header>
        <h1>Laravel 101</h1>
        <nav>
            <ul>
                <li><a href="/articles">Accueil</a></li>
                <li><a href="/about">A propos</a></li>
                <li><a href="/contact-us">Contactez-nous</a></li>
                <li><a href="/enregistrement">Enregistrement</a></li>
                @guest
                    <li>
                        {{-- @can('see-admin-menu')
                            <a href="/articles/create">Créer un article</a>
                        @endcan --}}
                        {{-- le modèle User contient une méthode 'can' et une méthode 'cant' ... --}}
                        @auth
                            @if (auth()->user()->can('create', 'App\Models\Article'))
                                <a href="/articles/create">Créer un article</a>
                            @endif
                        @endauth
                        {{-- ou --}}
                        {{-- @can('create', 'App\Models\Article')
                            <a href="/articles/create">Créer un article</a>
                        @endcan --}}
                    </li>
                    <li><a href="{{ route('register') }}">Créer un compte</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endguest
                <li class="hh">
                    @auth
                        <a href="{{ route('profile') }}">Votre profil</a>
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" value="Se déconnecter">
                        </form>
                    @endauth
                </li>
                {{-- <li>{{ time() }}.</li> --}}
            </ul>
        </nav>
    </header>

    <body>
        @yield('content')
        @include('messages.success')
    </body>
</body>

</html>
