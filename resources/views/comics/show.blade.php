@extends('layouts.app')
@section('main_content')
<div class="container">
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->price }}</p>
    <p>{{ $comic->image }}</p>
    <p> {{ $comic->type}}</p>
    <p>{{ $comic->sale_date }}</p>

    <a href="{{ route('comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-primary">Modifica</a>
    
    <form action="{{ route('comics.destroy', ['comic'=>$comic->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Cancella</button>
    </form>

</div>
@endsection