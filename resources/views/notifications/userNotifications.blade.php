<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <!-- Botón "Volver" alineado a la izquierda -->
        <a class="btn btn-outline-primary" href="/userMap">Volver</a>
        
        <!-- Contenedor para centrar el texto -->
        <div class="mx-auto">
          <a class="navbar-brand text-center">BIENVENIDO AL CENTRO DE NOTIFICACIONES</a>
        </div>
        
        <!-- Formulario de búsqueda alineado a la derecha -->
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
    
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="table-responsive">
            <table class="table table-dark table-striped table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">GRIS</th>
                  <th scope="col">AMARILLA</th>
                  <th scope="col">NARANJA</th>
                  <th scope="col">ROJA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Notificación Gris 1</td>
                  <td>Notificación Amarilla 1</td>
                  <td>Notificación Naranja 1</td>
                  <td>Notificación Roja 1</td>
                </tr>
                <tr>
                  <td>Notificación Gris 2</td>
                  <td>Notificación Amarilla 2</td>
                  <td>Notificación Naranja 2</td>
                  <td>Notificación Roja 2</td>
                </tr>
                <tr>
                  <td>Notificación Gris 3</td>
                  <td>Notificación Amarilla 3</td>
                  <td>Notificación Naranja 3</td>
                  <td>Notificación Roja 3</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>