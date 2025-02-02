<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>SAT MANIZALES</h1>
        <h3>tabla de precipitacion </h3>
    </header>
    <div class="contenedor">
        <!-- Campo de búsqueda -->
         <label>filtrar</label>
        <input type="text" id="filtro" placeholder="Filtrar por nombre o categoría...">

        <main>
            <table>
                <thead>
                    <tr>
                        <th scope=" col">ID ESTACION</th>
                        <th scope=" col">FECHA</th>
                        <th scope=" col">HORA</th>
                        <th scope=" col">PRECIPITACION (MM)</th>
                    </tr>
                </thead>
                
            </table>
        </main>
    </div>
</body>
</html>