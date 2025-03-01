<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/Admin.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Sección superior con imagen de fondo -->
    <div class="header">
        <img src="{{ asset('images/admin.jpg') }}" alt="Pantallas con diseño web">
    </div>

    <!-- Contenido en fondo negro -->
    <div class="content">
        <h1>SAT <br> MANIZALES</h1>
        <p>BIENVENIDO ADMINISTRADOR</p>
        
        <div class="buttons">
            <button class="btn" onclick="window.location.href='{{ url('/users/index') }}'">USUARIOS</button>
            <button class="btn" onclick="window.location.href='{{ url('/adminMap') }}'">ESTACIONES</button>
            <button class="btn" onclick="window.location.href='{{ url('/alerts/index') }}'">ALERTAS</button>
        </div>
    </div>
</body>
</html>