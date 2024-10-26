@extends('layouts.main')

@section('page-title', 'crea comic')


@section('main-content')
    @csrf
    <h1>
        crea comic
    </h1>

    @if ($errors->any())
        <div class="alert alert-danger my-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        <div class="mb-3">
            <label for="thumb" class="form-label">copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb"
                placeholder="inserisci l'immagine di copertina">
            @error('src')
                <div class="alert alert-danger mt-1">
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input class="form-control" id="price" name="price" placeholder="inserisci il prezzo del fumetto">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="inserisci la serie">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input class="form-control" id="sale_date" name="sale_date" placeholder="inserisci la data di vendita">
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
            <button type="submit" class="btn -success w-100">invia</button>
        </div>
    </form>
@endsection

</html>
