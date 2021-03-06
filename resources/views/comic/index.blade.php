@extends('/app')
@section('content')
    <h1>Lista fumetti:</h1>
    <div class="d-flex flex-wrap justify-content-center gap-2 contents">
        @foreach ($comics as $comic)
            <div class="card">
                <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>Titolo: </h3>
                <p>{{ $comic->title }}</p>
                <h5>Serie: {{ $comic->series }}</h5>
                <h3>Prezzo: </h3>
                <p>{{ $comic->price }}€</p>
                <h3>Data d'uscita: </h3>
                <p>{{ $comic->sale_date }}</p>
                <h3>Genere: </h3>
                <p>{{ $comic->type }}</p>
                <div class="text-center mb-2">
                    <a class="text-dark rounded-2 mb-3" href="{{ route('comic.show', $comic->id) }}">
                        MOSTRA DESCRIZIONE
                    </a>
                </div>
                <div class="text-center">

                    <a class="text-dark rounded-2 p-1 " href="{{ route('comic.edit', $comic->id) }}"> Modifica</a>
                </div>
                <div class="text-center">

                    <a class="text-dark rounded-2 p-1 " href="{{ route('comic.destroy', $comic->id) }}"> Elimina</a>
                </div>

            </div>
        @endforeach
    </div>
    <div class="text-center mb-3 ">
        <a class="bg-secondary rounded-3 p-2 text-white text-decoration-none" href="{{ route('comic.create') }}">
            Aggiungi
            fumetto</a>
    </div>
@endsection()
