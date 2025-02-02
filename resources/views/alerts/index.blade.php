<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
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
            <table>
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
                            <button class="btn" onclick="window.location='{{ route('alerts.edit', $alert->id) }}'">Editar</button>
                            <form action="{{ route('alerts.destroy', $alert->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
    <div class="botones">
        <button class="btn" onclick="window.location='/reports/index'">NOTIFICAR</button>
    </div>
</body>
</html>
