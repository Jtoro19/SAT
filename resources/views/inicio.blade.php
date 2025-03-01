<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="left-section">
            <div class="content">
                <h3>Sistema de alerta temprana</h3>
                <h1>SAT MANIZALES</h1>
                <div class="buttons">
                    <button onclick="window.location.href='/login'">Iniciar Sesión</button>
                    <button onclick="window.location.href='/register'">Regístrate</button>
                </div>
            </div>
        </div>
        <div class="right-section">
            <img src="{{ asset('images/cable.png') }}" alt="Torre de Manizales">
        </div>
    </div>
</body>
</html>