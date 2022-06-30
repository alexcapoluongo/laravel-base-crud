@extends('layouts.app')
@section('main_content')
<div class="container">
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->price }}</p>
    <p>{{ $comic->image }}</p>
    <p> {{ $comic->type}}</p>
    <p>{{ $comic->sale_date }}</p>
</div>
@endsection