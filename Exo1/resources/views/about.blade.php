@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>je suis dans about</h1>
    <nav>
        <a href="{{ url('/about') }}"> about</a>
        <a href="{{ url('/welcome') }}"> welcome</a>


    </nav>
</body>
</html>
    
@endsection