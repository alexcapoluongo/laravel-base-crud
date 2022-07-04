@extends('layouts.app')
@section('main_content')  
<h1>Lista dei comics</h1>
{{-- uso le key del db e non quello dell'array in config --}}
@foreach ($comics as $comic)
    <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}">
        <h2>{{ $comic->title}}</h2>
    </a>
    <img src="{{ $comic->image }}" alt="" srcset="">
    <p>Prezzo: {{ $comic->price }} </p>
    <p>{{ $comic->description }}</p> 
    <hr>  
@endforeach
@endsection
 
    
