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

    <title>Modifica Film - Nerd Movies DB</title>
</head>

<body>
    
    <h1 class="title">The Nerd Movie Database</h1>

    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

            <div class="big_card_create">
                <span><a href="{{route('movies.index')}}">Torna alla home</a></span>
                <form action="{{route('movies.store')}}" method="POST">
                
                @csrf
                @method('POST')
                
                <div class="form-group">
                    <label for="titolo">Titolo Film</label>
                    <input type="text" name="titolo" class="form-control" id="titolo" value="{{$movie->titolo}}" placeholder="Inserisci il titolo del film">
                </div>
                <div class="form-group">
                    <label for="regista">Regista</label>
                    <input type="text" name="regista" class="form-control" id="regista" value="{{$movie->regista}}" placeholder="Inserisci il regista del film">
                </div>
                <div class="form-group">
                    <label for="anno">Anno</label>
                    <input type="text" name="anno" class="form-control" id="anno" value="{{$movie->anno}}" placeholder="Inserisci l'anno di uscita del film">
                </div>
                <div class="form-group">
                    <label for="plot">Trama</label>
                    <textarea class="form-control" id="plot" name="plot" rows="5" placeholder="Inserisci la trama del film">{{$movie->plot}}"</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
            
    </div>
</body>

</html>