<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Mis Tareas</h1>
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">Inicio</a></li>
                {{-- <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                <li><a href="{{ route('proyecto', 1) }}">Proyecto</a></li> --}}
            </ul>
        </nav>
    </header>
    <div class="container">
        <main class="main">
            @yield('main')
        </main>
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
        <footer class="footer">
            <p>2025 proyecto_bienvenida. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>
