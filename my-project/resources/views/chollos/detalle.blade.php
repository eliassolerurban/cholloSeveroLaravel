@extends('static')
@section('detalle')
    <h2>Detalle del chollo {{ $chollo->titulo }}</h2>
        <div>
            <p>Categoría: {{$chollo->categoria}}</p> 
            <p>Descripción: {{$chollo->descripcion}}</p>
            <p>Precio original: {{$chollo->precio}}€</p>
            <p>Precio actual: {{$chollo->precio_descuento}}€</p>
            <p>Puntuación: {{$chollo->puntuacion}}</p>
            <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
        </div>
@endsection