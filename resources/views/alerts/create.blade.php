<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alerta - SAT Manizales</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>

    <header class="text-center py-4">
        <h1>SAT MANIZALES</h1>
        <h3>Crear Notificación</h3>
    </header>

    <div class="container mt-4">
        <main>
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('alerts.store') }}" method="POST" class="bg-dark p-4 rounded">
                        @csrf

                        <div class="mb-3">
                            <label for="reportID" class="form-label">ID del Reporte</label>
                            <input type="text" id="reportID" name="reportID" value="{{ $reportID }}" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo de Alerta</label>
                            <select id="type" name="type" class="form-select">
                                <option value="1">Precipitación</option>
                                <option value="2">Inundación</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="alertIntensity" class="form-label">Intensidad de la Alerta</label>
                            <select id="alertIntensity" name="alertIntensity" class="form-select">
                                <option value="1">Gris</option>
                                <option value="2">Amarillo</option>
                                <option value="3">Naranja</option>
                                <option value="4">Rojo</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn">Crear Alerta</button>
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

