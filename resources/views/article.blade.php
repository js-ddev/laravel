@extends('template')


@section('titre')

    Les articles

@stop


@section('contenu')

    <p>C'est l'article n° {{ $numero }}</p>

@stop

<!-- <!doctype html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Test de \resources\views\article.php</title>

<body>

    Hello World !
    <br/>
    Test de \resources\views\article.blade.php
    <br />
    page {{$numero}}

</body>

</html> -->
