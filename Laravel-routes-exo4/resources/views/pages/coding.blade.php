<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Page Coding</h1>
<a href="welcome">Page Welcome</a>
<a href="contact">Page Contact</a>
<a href="coding">Page Coding</a>

    {{ $personne ->nom }}
    {{ $personne ->prenom }}
    {{ $personne ->age }}
    @foreach ($prenoms as $prenom)
            {{ $prenom}} 
    @endforeach
</body>
</html>