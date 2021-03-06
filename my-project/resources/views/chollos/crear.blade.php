@extends('static')
@section('crear')
  @if (session('mensaje'))
    <div class="btn btn-success">
        {{ session('mensaje') }}
    </div>
  @endif
    <form action="{{ route('crear') }}" method="POST">
    @csrf
    <input type="text mb-3" name="titulo" placeholder="Título del chollo" class="form-control mb-2" required autofocus>
    <input type="text mb-3" name="descripcion" placeholder="Descripción del chollo" class="form-control mb-2" required>
    @foreach ($categorias as $categoria)
      <input name="categorias[]" type="checkbox" value={{ $categoria->id }}>{{ $categoria->nombre }}
    @endforeach
    </select>
    <input type="url" name="url" placeholder="URL del chollo" class="form-control mb-2" required>
    <input type="number" name="precio" placeholder="Precio original del producto" class="form-control mb-2" required>
    <input type="number" name="precio_descuento" placeholder="Precio con descuento del chollo" class="form-control mb-2" required>
    
    <button class="btn btn-primary btn-block" type="submit">
    Crear nuevo chollo
    </button>
    </form>
@endsection
