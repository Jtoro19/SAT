<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alerta</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>

    <header class="text-center py-4">
        <h1>SAT MANIZALES</h1>
        <h3>Centro de Notificaciones</h3>
    </header>

    <div class="container mt-4">
        <main>
            <h2 class="text-center mb-4">Editar Alerta</h2>
            
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('alerts.update', $alert->id) }}" method="POST" class="bg-dark p-4 rounded">
                        @csrf
                        @method('POST')

                        <input type="hidden" name="reportID" value="{{ $alert->reportID }}">
                        <input type="hidden" name="type" value="{{ $alert->type }}">

                        <div class="mb-3">
                            <label for="alertIntensity" class="form-label">Intensidad de Alerta</label>
                            <select id="alertIntensity" name="alertIntensity" class="form-select">
                                <option value="1" {{ $alert->alertIntensity == 1 ? 'selected' : '' }}>Gris</option>
                                <option value="2" {{ $alert->alertIntensity == 2 ? 'selected' : '' }}>Amarillo</option>
                                <option value="3" {{ $alert->alertIntensity == 3 ? 'selected' : '' }}>Naranja</option>
                                <option value="4" {{ $alert->alertIntensity == 4 ? 'selected' : '' }}>Rojo</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


