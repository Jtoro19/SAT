<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
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
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Report ID</th>
                            <th>Tipo</th>
                            <th>Intensidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alerts as $alert)
                        <tr>
                            <td>{{ $alert->id }}</td>
                            <td>{{ $alert->reportID }}</td>
                            <td>{{ $alert->type }}</td>
                            <td>{{ $alert->alertIntensity }}</td>
                            <td>
                                <a href="{{ route('alerts.edit', $alert->id) }}" class="btn btn-sm">Editar</a>
                                <form action="{{ route('alerts.destroy', $alert->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <div class="botones">
        <button class="btn" onclick="window.location='/reports/index'">NOTIFICAR</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

