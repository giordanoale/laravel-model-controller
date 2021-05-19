<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- /fontawesome --}}

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- /css -->

    <title>Nerd Movies DB</title>
</head>

<body>
    <header>
        <div class="main_title">
            <h1>The Nerd Movie Database</h1>
        </div>
        <div class="add_movie">
            <a href="{{route('movies.create')}}"><i class="fas fa-plus"></i> Aggiungi film </a>
        </div>
    </header>

    <div class="container">

        @foreach ($movies ?? '' as $movie)
        <div class="card">
            <h2> {{$movie->titolo}} </h2>
            <span><a href="{{route('movies.show',[$movie->id])}}">Dettagli</a></span>
            
            <a href="{{route('movies.edit', [$movie->id])}}">Modifica</a>
            
            <form action="{{route('movies.destroy',[ 'movie' => $movie->id ])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
        @endforeach
    </div>
    @if (session('message'))
        <div class="alert alert-success">
	    {{session('message')}}
        </div>
    @endif
</body>

</html>