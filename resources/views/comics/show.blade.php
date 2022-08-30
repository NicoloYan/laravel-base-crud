@extends('layouts.app')

@section('main_content')
    <div>
        <h4>Titolo: {{ $comic->title }}</h4>
        <div>Prezzo: {{ $comic->price }}</div>
        <div>Data di uscita: {{ $comic->sale_date }}</div>
        <div>Serie: {{ $comic->series }}</div>
        <br>
    </div>
@endsection