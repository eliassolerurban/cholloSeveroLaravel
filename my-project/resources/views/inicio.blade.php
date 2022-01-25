@extends('static')
@section('inicio')
    <h2>Bienvenido</h2>
    @foreach ($chollos as $chollo)
        <div>
            <h4>{{$chollo->titulo}}</h4>
            <a class="btn" href={{ route("formEditar", $chollo->id) }}>Editar</button></a>
            {{-- para eliminar no tengo que crear vista,
            sólo una ruta delete que lleve a la función del controlador y un confirm de js--}}
            <a class="btn" href="">Eliminar</a> 
            <p>Categoría: {{$chollo->categoria}}</p> 
            <p>Descripción: {{$chollo->descripcion}}</p>
            <p>Precio original: {{$chollo->precio}}€</p>
            <p>Precio actual: {{$chollo->precio_descuento}}€</p>
            <p>Puntuación: {{$chollo->puntuacion}}</p>
            <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
        </div>
    @endforeach
@endsection