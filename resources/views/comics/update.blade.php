@extends('layouts.main')

@section('page-title', 'Aggiorna comic' . $comic->title)


@section('main-content')

    <h1>
        Aggiorna comic
    </h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb"
                placeholder="inserisci l'immagine di copertina" value="{{ $comic->src }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input class="form-control" id="price" name="price" placeholder="inserisci il prezzo del fumetto"
                value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="inserisci la serie"
                value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input class="form-control" id="sale_date" name="sale_date" placeholder="inserisci la data di vendita"
                value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" id="type" name="type">
                <option value="comic_book">comic_book</option>
                <option value="fumetto">fumetto</option>
                <option value="graphic_novel">graphic_novel</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-warning w-100">Aggiorna</button>

        </div>
    </form>
@endsection

</html>
