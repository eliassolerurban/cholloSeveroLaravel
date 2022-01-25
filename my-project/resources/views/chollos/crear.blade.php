@if (session('mensaje'))
    <div>
        {{ session('mensaje') }}
    </div>
@endif
<form action="{{ route('crear') }}" method="POST">
  @csrf
  <input type="text" name="titulo" placeholder="Título del chollo" class="form-control mb-2" required autofocus>
  <input type="text" name="descripcion" placeholder="Descripción del chollo" class="form-control mb-2" required>
  <input type="text" name="categoria" placeholder="Categoría del chollo" class="form-control mb-2" required>
  <input type="url" name="url" placeholder="URL del chollo" class="form-control mb-2" required>
  <input type="number" name="precio" placeholder="Precio original del producto" class="form-control mb-2" required>
  <input type="number" name="precio_descuento" placeholder="Precio con descuento del chollo" class="form-control mb-2" required>

  <button class="btn btn-primary btn-block" type="submit">
    Crear nuevo chollo
  </button>
</form>

