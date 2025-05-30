<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>SAT MANIZALES</h1>
        <h3>Tenemos estaciones hidrometeorológicas en toda la ciudad</h3>
    </header>
    <div class="contenedor">
        <aside>
            <button class="btn">VER ESTACIONES</button>
            <select id="categoria">
                <option value="pluviometricas">Pluviométricas</option>
                <option value="limnimetricas">Limnimétricas</option>
                <option value="hidrometeorologicas">Hidrometeorológicas</option>
            </select>
        </aside>
        <main>
            <div id="map"></div>
            <div class="botones">
                <button class="btn"onclick="alternarModo()">Modo Oscuro / Claro</button>
                <button class="btn" onclick="alternarStreetView()">Alternar vista del mapa</button>
            </div>
        </main>
    </div>
    <script src="js\mapa.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-TyocE-K0o5nesrrX5QPzBEyUffZSHF8&callback=iniciarMap"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Manizales</title>
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>SAT MANIZALES</h1>
        <h3>Tenemos estaciones en toda la ciudad</h3>
    </header>
    <div class="contenedor">
        <aside>
            <button class="btn" onclick="window.location.href='/notifications/userNotifications'">NOTIFICACIONES</button>
            <button class="btn"onclick="alternarModo()">MODO OSCURO/CLARO</button>
            <button class="btn" onclick="alternarStreetView()">VISTA DEL MAPA</button>
            <button class="btn">VER ESTACIONES</button>
            <label>CATEGORIA</label>
            <select id="categoria">
                <option value="pluviometricas">PLUVIOMETRICAS</option>
                <option value="limnimetricas">LINIMETRICAS</option>
                <option value="hidrometeorologicas">HIDROMETEOROLOGICAS</option>
            </select>
        </aside>
        <main>
            <div id="map"></div>
        </main>
    </div>
    <script src="js\mapa.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-TyocE-K0o5nesrrX5QPzBEyUffZSHF8&callback=iniciarMap"></script>
</body>
</html>
