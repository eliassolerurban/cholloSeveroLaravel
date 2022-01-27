@extends('static')
@section('inicio')
<h2>Chollos destacados</h2>
@foreach ($chollosDestacados as $chollo)
<div class="container border">
    <div class="col"><a href={{ route("detalle", $chollo->id) }}><h4>{{$chollo->titulo}}</h4></a></div>
    <div class="col"><a class="btn" href={{ route("formEditar", $chollo->id) }}>Editar</button></a></div>
    <div class="col"><a class="btn" href={{ route("confirmEliminar", $chollo->id) }}>Eliminar</a> </div>
    <div class="col">
        <p>Categoría: {{$chollo->categoria}}</p> 
    </div>
    <div class="col">
        <p>Descripción: {{$chollo->descripcion}}</p>
    </div>
    <div class="col">
        <p>Precio original: {{$chollo->precio}}€</p>
    </div>
    <div class="col">
        <p>Precio actual: {{$chollo->precio_descuento}}€</p>
    </div>
    <div class="col">
        <p>Puntuación: {{$chollo->puntuacion}}</p>
    </div>
    <div class="col">
        <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
    </div>
</div>
@endforeach
<div class="pagination">{{$chollosDestacados->links()}}</div>
@endsection