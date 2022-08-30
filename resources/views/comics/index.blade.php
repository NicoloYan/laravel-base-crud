@extends('layouts.app')

@section('main_content')
    <h1>Check our latest comics</h1>

    @foreach ($comics as $comic)
        <div>
            <h4>Titolo: {{ $comic->title }}</h4>
            <div>Prezzo: {{ $comic->price }}</div>
            <div>Data di uscita: {{ $comic->sale_date }}</div>
            <div>Serie: {{ $comic->series }}</div>
            <div>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">See Details</a>
            </div>
            <br>
        </div>
    @endforeach
@endsection