<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJEMPLO GPS</title>
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<header>
    <h1>SAT MANIZALES</h1>
    <h3>Tenemos estaciones hidrometeorológicas en toda la ciudad</h3>
</header>
<div class="contenedor">
    <aside>
        <button class="btn">VER ESTACIONES</button>
        <button class="btn" onclick="window.location.href='../Monitoreo/tablaprecipitacion.html'">MUESTRAS</button>
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
        <button class="btn" onclick="window.location.href='../Monitoreo/centroDemonitoreo.html'"">CENTRO DE NOTIFICACION</button>
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
</html>