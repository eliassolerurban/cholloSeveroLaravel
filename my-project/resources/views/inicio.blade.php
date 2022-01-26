@extends('static')
@section('inicio')
    <h2>Bienvenido</h2>
    @foreach ($chollos as $chollo)
        <div>
            <h4>{{$chollo->titulo}}</h4>
            <a class="btn" href={{ route("formEditar", $chollo->id) }}>Editar</button></a>
            <form action={{ route("eliminar", $chollo->id) }}>
                <button class="btn btn-danger btn-block" onclick="return confirm('¿Estás seguro de que quieres eliminar este chollo?')" type="submit">
                    Eliminar
                </button>
            </form>
            <p>Categoría: {{$chollo->categoria}}</p> 
            <p>Descripción: {{$chollo->descripcion}}</p>
            <p>Precio original: {{$chollo->precio}}€</p>
            <p>Precio actual: {{$chollo->precio_descuento}}€</p>
            <p>Puntuación: {{$chollo->puntuacion}}</p>
            <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
        </div>
    @endforeach
@endsection