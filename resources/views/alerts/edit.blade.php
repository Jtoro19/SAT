<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alerta</title>
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>SAT MANIZALES</h1>
        <h3>Centro de Notificaciones</h3>
    </header>
    <div class="contenedor">
        <main>
            <h2 class="text-center">Editar Alerta</h2>
            <div class="formulario">
                <form action="{{ route('alerts.update', $alert->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    
                    <input type="hidden" name="reportID" value="{{ $alert->reportID }}">
                    <input type="hidden" name="type" value="{{ $alert->type }}">

                    <label for="alertIntensity">Intensidad de Alerta</label>
                    <select id="alertIntensity" name="alertIntensity" class="form-select">
                        <option value="1" {{ $alert->alertIntensity == 1 ? 'selected' : '' }}>Gris</option>
                        <option value="2" {{ $alert->alertIntensity == 2 ? 'selected' : '' }}>Amarillo</option>
                        <option value="3" {{ $alert->alertIntensity == 3 ? 'selected' : '' }}>Naranja</option>
                        <option value="4" {{ $alert->alertIntensity == 4 ? 'selected' : '' }}>Rojo</option>
                    </select>

                    <button type="submit" class="btn">Actualizar</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>

