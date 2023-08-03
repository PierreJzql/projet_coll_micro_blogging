<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil page </title>
</head>
<body>
    <h1> nos posts </h1>
    <ul>
        @foreach ($posts as $post)
            <li> {{$post['titre']}}</li>        
        @endforeach
    </ul>
</body>
</html>