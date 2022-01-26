@extends('static')
@section('inicio')
    <h2>Bienvenido</h2>
    @foreach ($chollos as $chollo)
        <div>
            <a href={{ route("detalle", $chollo->id) }}><h4>{{$chollo->titulo}}</h4></a>
            <a class="btn btn-primary" href={{ route("formEditar", $chollo->id) }}>Editar</button></a>
            <a class="btn btn-danger" href={{ route("confirmEliminar", $chollo->id) }}>Eliminar</a> 
            <p>Precio original: {{$chollo->precio}}€</p>
            <p>Precio actual: {{$chollo->precio_descuento}}€</p>
            <p>Puntuación: {{$chollo->puntuacion}}</p>
            <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
        </div>
    @endforeach
@endsection