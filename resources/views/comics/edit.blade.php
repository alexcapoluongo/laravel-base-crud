@extends('layouts.app')
@section('main_content')
<div class="container">

    <h1>Modifica un Fumetto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('comics.update', ['comic'=>$comic_to_update->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"
            value="{{ old('title') ? old('title') : $comic_to_update->title }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price"
            value="{{ old('price') ? old('price') : $comic_to_update->price }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image" name="image"
            value="{{ old('image') ? old('image') : $comic_to_update->image }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type"
            value="{{ old('type') ? old('type') : $comic_to_update->type }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date"
            value="{{ old('sale_date') ? old('sale_date') : $comic_to_update->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description"
            value="{{ old('description') ? old('description') : $comic_to_update->description }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection