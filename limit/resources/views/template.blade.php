<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/play">Jouer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/leaderboard">Classement</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/ideas">Idées</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register">S'inscrire</a>
        </li>
    </ul>
</nav>

@yield('body')

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

@yield('script')

</body>
</html>
