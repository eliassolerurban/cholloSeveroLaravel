@extends('static')
@section('inicio')
<h2>Chollos destacados</h2>
@foreach ($chollosDestacados as $chollo)
<div>
    <h4>{{$chollo->titulo}}</h4>
    <a class="btn" href={{ route("formEditar", $chollo->id) }}>Editar</button></a>
    <a class="btn" href={{ route("confirmEliminar", $chollo->id) }}>Eliminar</a> 
    <p>Categoría: {{$chollo->categoria}}</p> 
    <p>Descripción: {{$chollo->descripcion}}</p>
    <p>Precio original: {{$chollo->precio}}€</p>
    <p>Precio actual: {{$chollo->precio_descuento}}€</p>
    <p>Puntuación: {{$chollo->puntuacion}}</p>
    <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
</div>
@endforeach
@endsection