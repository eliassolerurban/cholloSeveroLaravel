<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
    <title>Chollo Severo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="titulo">
                <a href={{ route('inicio') }}><img class="logo" src="{{ asset('logo.png') }}" alt="Logo de CholloSevero"></a>
                <a href={{ route('inicio') }}><h1 class="display-5">Chollo Severo</h1></a>
            </div>
            </button>          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href={{ route('inicio') }}>Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('nuevos') }}>Nuevos</a>
                </li>                <li class="nav-item">
                    <a class="nav-link" href={{ route('destacados') }}>Destacados</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
        @yield('inicio')
        @yield('nuevos')
        @yield('destacados')
        @yield('eliminar')
        @yield('detalle')
        @yield('editar')
        @yield('crear')
        @yield('error')
        <div class="contenedorCrear">
            <a class="btn btn-primary" href={{ route('formCrear') }}>Crear un chollo</a>
        </div>
    </main>
    <footer>
        <p>Elías Soler Urbán - ©CholloSevero {{date("Y")}}</p>
    </footer>
</body>
</html>
