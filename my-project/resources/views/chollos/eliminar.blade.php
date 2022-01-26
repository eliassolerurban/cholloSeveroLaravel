@extends('static')
@section('eliminar')
    <h4>{{$chollo->titulo}}</h4>
    <p>Categoría: {{$chollo->categoria}}</p> 
    <p>Descripción: {{$chollo->descripcion}}</p>
    <p>Precio original: {{$chollo->precio}}€</p>
    <p>Precio actual: {{$chollo->precio_descuento}}€</p>
    <p>Puntuación: {{$chollo->puntuacion}}</p>
    <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
    <form action={{ route("eliminar", $chollo->id) }} method="post">
        @csrf
        @method("delete")
        <button class="btn btn-danger btn-block" type="submit">
            Eliminar chollo
          </button>
    </form>    
@endsection
