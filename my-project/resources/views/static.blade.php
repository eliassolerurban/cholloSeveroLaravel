<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chollo ░▒▓ Severo</title>
</head>
<body>
    <header>
        <h1>Chollo ░▒▓ Severo</h1>
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
    </main>
    <footer>
        <p>Elías Soler Urbán - ©CholloSevero {{date("Y")}}</p>
    </footer>
</body>
</html>
