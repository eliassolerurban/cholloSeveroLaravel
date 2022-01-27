@extends('static')
@section('inicio')
<h2>Nuevos chollos</h2>
@foreach ($chollosNuevos as $chollo)
<div class="container border">
    <div class="col"><a href={{ route("detalle", $chollo->id) }}><h4>{{$chollo->titulo}}</h4></a></div>
    <div class="col"><p>Categoría: {{$chollo->categoria}}</p></div> 
    <div class="col"><p>Descripción: {{$chollo->descripcion}}</p></div>
    <div class="col"><p>Precio original: {{$chollo->precio}}€</p></div>
    <div class="col"><p>Precio actual: {{$chollo->precio_descuento}}€</p></div>
    <div class="col"><p>Puntuación: {{$chollo->puntuacion}}</p></div>
    <div class="col"><p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p></div>
</div>
@endforeach
<div class="pagination">{{$chollosNuevos->links()}}</div>
@endsection