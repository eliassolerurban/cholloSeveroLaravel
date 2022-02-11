@extends('static')
@section('eliminar')
    <div class="previsualizacion">
        <h3>Previsualización del chollo</h3>
        <h4>{{$chollo->titulo}}</h4>
        <p>Descripción: {{$chollo->descripcion}}</p>
        <p>Categorías:</p>
        <ul>
            @foreach ($chollo->categoria as $categoria)
                <li>{{ $categoria["nombre"] }}</li>
            @endforeach

        </ul>
        <p>Precio original: {{$chollo->precio}}€</p>
        <p>Precio actual: {{$chollo->precio_descuento}}€</p>
        <p>Puntuación: {{$chollo->puntuacion}}</p>
        <img src='{{ asset("img/$chollo->id-chollo-severo.png") }}' alt="Imagen del chollo {{$chollo->titulo}}">
        <p>URL: <a href={{$chollo->url}}>{{$chollo->url}}</a></p>
        <form action={{ route("eliminar", $chollo->id) }} method="post">
            @csrf
            @method("delete")
            <button class="btn btn-danger btn-block" onclick="return confirm('¿Estás seguro de que quieres eliminar este chollo?')" type="submit">
                Eliminar chollo
              </button>
        </form>
    </div>
@endsection
