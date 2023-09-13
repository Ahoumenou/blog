<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <title>Laravel</title> --}}
        <title>@yield('title')</title>
     <style>
        .container{
            width: 80%;
            margin: auto;
            text-align: center
        }
        header ul{
            display: flex;
            justify-content: center;
            gap: 5rem;
            list-style: none;

        }
        header ul li a{
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
                </ul>
            </nav>
        </header> 
        <body>
          
                @yield('content')        
        </body>
    </body>
</html>