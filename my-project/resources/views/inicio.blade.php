@extends('static')
@section('inicio')
    <h2>Bienvenido</h2>
    @foreach ($chollos as $chollo)
        <div class="container border" >
            <div class="row">
                <div class="col m-3 p-1"><a href={{ route("detalle", $chollo->id) }}><h4>{{$chollo->titulo}}</h4></a></div>
                <div class="col m-3 p-1"><a class="btn btn-primary" href={{ route("formEditar", $chollo->id) }}>Editar</button></a></div>
                <div class="col m-3 p-1"><a class="btn btn-danger" href={{ route("confirmEliminar", $chollo->id) }}>Eliminar</a></div>
                <div class="col m-3 p-1"><p>Precio original: {{$chollo->precio}}€</p></div>
                <div class="col m-3 p-1"><p>Precio actual: {{$chollo->precio_descuento}}€</p></div>
                <div class="col m-3 p-1"><p>Puntuación: {{$chollo->puntuacion}}</p></div>
                <div class="col m-3 p-1"><p>Nombre del usuario que lo ha subido: {{$chollo->user->name}}</p></div>
                <img src='{{ asset("img/$chollo->id-chollo-severo.png") }}' alt="Imagen del chollo {{$chollo->titulo}}">
                <div><p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p></div>
            </div>
        </div>
        @endforeach
        <div class="contenedorCrear">
            <a class="btn btn-primary" href={{ route('formCrear') }}>Crear un chollo</a>
        </div>
        <div class="pagination m-4">{{$chollos->links()}}</div>
@endsection