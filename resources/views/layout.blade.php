<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Etudiant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a @class(['nav-link', 'active' => Route::currentRouteName() == 'home']) href="{{ route('home') }}" >Accueil</a>
                </li>
                <li class="nav-item">
                <a @class(['nav-link', 'active' => Route::currentRouteName() == 'new']) href="{{ route('new') }}" >Nouvel étudiant</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
