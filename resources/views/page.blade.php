@extends('layout.base')
@section('pageTitle', 'Home')
@section('content')

    <div class="box-movies">
        
        @foreach ($movies as $movie)
        <a href="#" class="movie-card">
            <h3>{{$movie->title}}</h3>
            <ul>
                <li>
                    <span>Titolo Originale: </span><br>
                    {{$movie->original_title}}
                </li>
                <li>
                    <span>Nazionalità: </span><br>
                    {{$movie->nationality}}
                </li>
                <li>
                    <span>Voto: </span><br>
                    {{$movie->vote}}
                </li>
                <li>
                    <span>Data di uscita: </span><br>
                    {{$movie->date}}
                </li>
            </ul>
        </a>
        @endforeach

    </div>


@endsection