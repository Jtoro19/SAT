<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJEMPLO GPS</title>
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<header>
    <h1>SAT MANIZALES</h1>
    <h3>Tenemos estaciones en toda la ciudad</h3>
</header>
<div class="contenedor">
    <aside>
        <button class="btn">VER ESTACIONES</button>
        <button class="btn" onclick="window.location.href='/reports/index'">MUESTRAS</button>
        <select id="categoria">
            <option value="pluviometricas">Pluviométricas</option>
            <option value="limnimetricas">Limnimétricas</option>
            <option value="hidrometeorologicas">Hidrometeorológicas</option>
        </select>
        <select id="alertas">
            <option value="GRIS">GRIS</option>
            <option value="AMARILLA">AMARILLA</option>
            <option value="NARANJA">NARANJA</option>
            <option value="ROJA">ROJA</option>
        </select>
        <button class="btn" onclick="window.location.href='/alerts/index'">CENTRO DE NOTIFICACIÓN</button>
    </aside>
    <main>
        <div id="map"></div>
        <div class="botones">
            <button class="btn"onclick="alternarModo()">Modo Oscuro / Claro</button>
            <button class="btn" onclick="alternarStreetView()">Alternar vista del mapa</button>
        </div>
    </main>
</div>
    </section>
    <script src="js\mapa.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-TyocE-K0o5nesrrX5QPzBEyUffZSHF8&callback=iniciarMap"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista Analista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<body>
    <header class="text-center p-3 bg-black text-white">
        <h1>SAT MANIZALES</h1>
        <h3>Bienvenido analista de datos</h3>
    </header>

    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar de botones -->
            <div class="col-md-3 d-flex flex-column gap-3 mb-3">
                <button class="btn" onclick="alternarModo()">MODO OSCURO/CLARO</button>
                <button class="btn" onclick="alternarStreetView()">VISTA DEL MAPA</button>
                <button class="btn">VER ESTACIONES</button>
                <button class="btn" onclick="window.location.href='/reports/index'">MUESTRAS</button>
                <button class="btn" onclick="window.location.href='/alerts/index'">CENTRO DE NOTIFICACION</button>
            </div>

            <!-- Contenido principal con mapa -->
            <div class="col-md-9 mb-3 text-center">
                <div id="map" class="w-100"></div>
            </div>
        </div>

        <!-- Sección de Categoría y Alertas centrada debajo del mapa con separación -->
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="d-inline-block me-3">
                    <label for="categoria" class="form-label">CATEGORIA</label>
                    <select id="categoria" class="form-select mb-3" onchange="filtrarEstaciones()">
                        <option value="pluviometricas">Pluviométricas</option>
                        <option value="limnimetricas">Limnimétricas</option>
                        <option value="hidrometeorologicas">Hidrometeorológicas</option>
                    </select>
                </div>
                <div class="d-inline-block ms-3">
                    <label for="alertas" class="form-label">ALERTAS</label>
                    <select id="alertas" class="form-select">
                        <option value="GRIS">GRIS</option>
                        <option value="AMARILLA">AMARILLA</option>
                        <option value="NARANJA">NARANJA</option>
                        <option value="ROJA">ROJA</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/mapa.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-TyocE-K0o5nesrrX5QPzBEyUffZSHF8&callback=iniciarMap"></script>
</body>
</html>


