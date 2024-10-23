@extends('layouts.main')

@section('page-title', $comic->title)


@section('main-content')
<h1>
    {{$comic->title}}
</h1>

<div class="card">
    <ul>
        <li>
            Serie:{{$comic->series}}
        </li>
        <li>
            Data:{{$comic->sale_date}}
        </li>
        <li>
            Tipo:{{$comic->type}}
        </li>
    </ul>
    Scrittori:
    @foreach (explode('|', $comic->writers) as $writer)
    <li>{{$writer}}</li>
    @endforeach

    Artisti:
    @foreach (explode('|', $comic->artists) as $artist)
    <li>{{$artist}}</li>
    @endforeach

    <p>Descrizione:{{$comic->description}}</p>
    <div class="card-body"></div>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-bottom">
</div>
@endsection

</html>