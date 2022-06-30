<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista dei comics</h1>
    {{-- uso le key del db e non quello dell'array in config --}}
    @foreach ($comics as $comic)
        <h2>{{ $comic->title}}</h2>
        <img src="{{ $comic->image }}" alt="" srcset="">
        <p>Prezzo: {{ $comic->price }} </p>
        <p>{{ $comic->description }}</p> 
        <hr>  
    @endforeach
    
</body>
</html>