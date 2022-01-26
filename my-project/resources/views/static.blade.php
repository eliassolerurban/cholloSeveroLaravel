<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chollo ░▒▓ Severo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href={{ route('inicio') }}><h1>Chollo ░▒▓ Severo</h1></a>
        <nav>
            <ul>
                <li><a href={{ route('inicio') }}>Inicio</a></li>
                <li><a href={{ route('nuevos') }}>Nuevos</a></li>
                <li><a href={{ route('destacados') }}>Destacados</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('inicio')
        @yield('nuevos')
        @yield('destacados')
        @yield('eliminar')
        <div>
            <a href={{ route('formCrear') }}>Crear un chollo</a>
        </div>
    </main>
    <footer>
        <p>Elías Soler Urbán - ©CholloSevero {{date("Y")}}</p>
    </footer>
</body>
</html>
