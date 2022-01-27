@extends('static')
@section('editar')
  @if (session('mensaje'))
  <div>
      {{ session('mensaje') }}
  </div>
  @endif
  <div class="container">
    <form action="{{ route('editar', $chollo->id) }}" method="POST">
    @method('put')
    @csrf
    <label for="titulo">Título: </label><input type="text" name="titulo" class="form-control mb-2" required autofocus value="{{$chollo->titulo}}">
    <label for="descripcion">Descripción: </label><input type="text" name="descripcion" class="form-control mb-2" required value="{{$chollo->descripcion}}">
    <label for="categoria">Categoría: </label><input type="text" name="categoria" class="form-control mb-2" required value="{{$chollo->categoria}}">
    <label for="url">URL:<input type="url" name="url" class="form-control mb-2" required value="{{$chollo->url}}">
    <label for="precio">Precio:<input type="number" name="precio" class="form-control mb-2" required value="{{$chollo->precio}}">
    <label for="precio_descuento">Precio actual:<input type="number" name="precio_descuento" class="form-control mb-2" required value="{{$chollo->precio_descuento}}">
    <label for="puntuacion">Puntuación:<input type="number" name="puntuacion" class="form-control mb-2" required value="{{$chollo->puntuacion}}">
    
    <button class="btn btn-primary btn-block" type="submit">
    Actualizar chollo
    </button>
    </form>
  </div>
@endsection
