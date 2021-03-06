@extends('static')
@section('inicio')
<h2>Chollos destacados</h2>
@foreach ($chollosDestacados as $chollo)
<div class="container border">
    <div class="col m-3 p-1"><a href={{ route("detalle", $chollo->id) }}><h4>{{$chollo->titulo}}</h4></a></div>
    <div class="col m-3 p-1">
        <p>Precio original: {{$chollo->precio}}€</p>
    </div>
    <div class="col m-3 p-1">
        <p>Precio actual: {{$chollo->precio_descuento}}€</p>
    </div>
    <div class="col m-3 p-1">
        <p>Puntuación: {{$chollo->puntuacion}}</p>
    </div>
    <img src='{{ asset("img/$chollo->id-chollo-severo.png") }}' alt="Imagen del chollo {{$chollo->titulo}}">
    <div class="col m-3 p-1">
        <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
    </div>
</div>
@endforeach
@endsection