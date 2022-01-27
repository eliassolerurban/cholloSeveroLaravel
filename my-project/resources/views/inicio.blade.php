@extends('static')
@section('inicio')
    <h2>Bienvenido</h2>
    @foreach ($chollos as $chollo)
        <div class="container border" >
            <div class="row">
                <div class="col"><a href={{ route("detalle", $chollo->id) }}><h4>{{$chollo->titulo}}</h4></a></div>
                <div class="col"><a class="btn btn-primary" href={{ route("formEditar", $chollo->id) }}>Editar</button></a></div>
                <div class="col"><a class="btn btn-danger" href={{ route("confirmEliminar", $chollo->id) }}>Eliminar</a></div>
                <div class="col"><p>Precio original: {{$chollo->precio}}€</p></div>
                <div class="col"><p>Precio actual: {{$chollo->precio_descuento}}€</p></div>
                <div class="col"><p>Puntuación: {{$chollo->puntuacion}}</p></div>
                <div><p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p></div>
            </div>
        </div>
        @endforeach
        <div class="pagination">{{$chollos->links()}}</div>
@endsection