<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alerta - SAT Manizales</title>
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>SAT MANIZALES</h1>
        <h3>Crear Notificación</h3>
    </header>
    <div class="contenedor">
        <main>
            <form action="{{ route('alerts.store') }}" method="POST">
                @csrf
                <input type="hidden" name="reportID" value="{{ $reportID }}">
                <input type="text" value="{{ $reportID }}" readonly>

                
                <label for="type">Tipo de Alerta:</label>
                <select id="type" name="type">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                
                <label for="alertIntensity">Intensidad de la Alerta:</label>
                <select id="alertIntensity" name="alertIntensity">
                    <option value="1">Gris</option>
                    <option value="2">Amarillo</option>
                    <option value="3">Naranja</option>
                    <option value="4">Rojo</option>
                </select>
                
                <button type="submit" class="btn">Crear Alerta</button>
            </form>
        </main>
    </div>
</body>
</html>
