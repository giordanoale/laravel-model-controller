<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($movies as $movie)
    <h1> {{$movie->titolo}} </h1>
    <h2>film del {{$movie->anno}} diretto da {{$movie->regista}}</h2>
    <p> <strong>La trama: </strong>{{$movie->plot}}</p>
    @endforeach
</body>

</html>