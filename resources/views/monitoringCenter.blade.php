<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    <!-- <link rel="stylesheet" href="../styles/monitoreo.css"> -->
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>SAT MANIZALES</h1>
        <h3>centro de notificaciones</h3>
    </header>
    <div class="contenedor">
        <aside>
            <button class="btn">CREAR</button>
            <button class="btn">MODIFICAR</button>
            <button class="btn">BORRAR</button>
        </aside>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>TIPO ALERTA</th>
                        <th>FECHA EMISIÓN</th>
                        <th>ID ESTACIÓN</th>
                    </tr>
                </thead>
            </table>
        </main>
    </div>
    <div class="botones">
        <button class="btn" >NOTIFICAR</button>
    </div>
</body>
</html>