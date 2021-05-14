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
        @foreach ($movies as $movie)
        <div class="card">
            <h2> {{$movie->titolo}} </h2>
            <span><a href="{{route('movies.show',[$movie->id])}}">Dettagli</a></span>
        </div>
        @endforeach
    </div>
</body>

</html>