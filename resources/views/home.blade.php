<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
<body>

    <header>
    <a href="{{ route('about') }}">
        about 
    </a>

    <a href="{{ route('contacts') }}">
        contacts
    </a>

    <a href="{{ route('github') }}">
        github 
    </a>

    </header>

    <h1>
        Hello World!
    </h1>

    <br>

    <div>
        Il mio cane si chiama: {{ $name }}, è un {{ $breed }} ed ha {{ $age }}
    </div>


</body>
</html>