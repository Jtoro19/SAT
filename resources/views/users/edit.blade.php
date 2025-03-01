<!-- resources/views/users/edit.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/monitoreo.css') }}" rel="stylesheet">
</head>
<body>

    <header class="text-center py-4">
        <h1>Gestión de Usuarios</h1>
        <h3>Editar Usuario</h3>
    </header>

    <div class="container mt-4">
        <main>
            <h2 class="text-center mb-4">Editar Usuario</h2>
            
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-dark p-4 rounded text-light">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ $user->address }}">
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Teléfono</label>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="{{ $user->phoneNumber }}">
                        </div>

                        <div class="mb-3">
                            <label for="roleID" class="form-label">Rol</label>
                            <select id="roleID" name="roleID" class="form-select">
                                <option value="1" {{ $user->roleID == 1 ? 'selected' : '' }}>Administrador</option>
                                <option value="2" {{ $user->roleID == 2 ? 'selected' : '' }}>Analista</option>
                                <option value="3" {{ $user->roleID == 3 ? 'selected' : '' }}>Usuario</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-warning">Actualizar</button>
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


