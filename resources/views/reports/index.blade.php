<!-- resources/views/reports/index.blade.php -->

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
        <h3>Tabla de precipitación</h3>
    </header>
    <div class="contenedor">
        <main>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Estación ID</th>
                        <th>Fecha</th>
                        <th>Cantidad</th>
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
                                <button class="btn" onclick="window.location='{{ route('alerts.create', $report->id) }}'">Notificar</button>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
