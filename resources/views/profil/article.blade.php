<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
    <h1> {{$article->titre}}</h1>
    <p> {{$article->contenu}}</p>
    <img src="{{$article->image}}"/>
    <p> auteur : {{$article->id_user}} </p>
</body>
</html>