<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- /css -->

    <title>Nerd Movies DB</title>
</head>

<body>

    <header>
        <h1>The Nerd Movie Database</h1>
    </header>

    <div class="container">
        <div class="big_card">
            <span><a href="{{route('movies.index')}}">Torna alla home</a></span>
            <h1>Titolo: {{$movie->titolo}}</h1>
            <h2>Regista: {{$movie->regista}}</h2>
            <h3>Anno: {{$movie->anno}}</h3>
            <p><strong>Trama:</strong> {{$movie->plot}}</p>
        </div>
    </div>
</body>

</html>