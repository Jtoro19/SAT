<!-- resources/views/reports/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>

    <header class="text-center py-4">
        <h1>SAT MANIZALES</h1>
        <h3>Tabla de Precipitación</h3>
    </header>

    <div class="container mt-4">
        <main>
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Estación ID</th>
                            <th>Fecha</th>
                            <th>Cantidad (mm³)</th>
                            <th>Notificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->id }}</td>
                            <td>{{ $report->stationID }}</td>
                            <td>{{ $report->date }}</td>
                            <td>{{ $report->quantity }}</td>
                            <td>
                                @if ($report->alerts->isEmpty())
                                    <a href="{{ route('alerts.create', $report->id) }}" class="btn btn-sm btn-secondary">Notificar</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



