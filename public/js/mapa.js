let map, streetViewPanorama, directionsService, directionsRenderer;
let modoOscuro = false;
const estiloOscuro = [
    { elementType: 'geometry', stylers: [{ color: '#242f3e' }] },
    { elementType: 'labels.text.stroke', stylers: [{ color: '#242f3e' }] },
    { elementType: 'labels.text.fill', stylers: [{ color: '#746855' }] },
    {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#d59563' }]
    },
    {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{ color: '#d59563' }]
    },
    {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{ color: '#263c3f' }]
    },
    {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{ color: '#38414e' }]
    },
    {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{ color: '#746855' }]
    },
    {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{ color: '#17263c' }]
    }
];
const estiloClaro = [];
function iniciarMap() {
    const maps = { lat: 5.062564, lng: -75.494950 };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: maps
    });
    var ubicaciones = [
        { lat: 5.0731, lng: -75.5132, titulo: "Estación 1 " },
        { lat: 5.0642, lng: -75.5205, titulo: "Estación 2 "},
        { lat: 5.0689, lng: -75.5321, titulo: "Estación 3 "},
        { lat: 5.0714, lng: -75.5273, titulo: "Estación 4" },
        { lat: 5.0587, lng: -75.5256, titulo: "Estación 5 "},
        { lat: 5.0668, lng: -75.5152, titulo: "Estación 6 "},
        { lat: 5.0603, lng: -75.5189, titulo: "Estación 7 " },
        { lat: 5.0745, lng: -75.5298, titulo: "Estación 8 " },
        { lat: 5.0692, lng: -75.5164, titulo: "Estación 9 " },
        { lat: 5.0673, lng: -75.5231, titulo: "Estación 10" },
        { lat: 5.0750, lng: -75.5316, titulo: "Estación 11" },
        { lat: 5.0615, lng: -75.5303, titulo: "Estación 12 " },
        { lat: 5.0762, lng: -75.5218, titulo: "Estación 13 " },
        { lat: 5.0630, lng: -75.5277, titulo: "Estación 14 " },
        { lat: 5.0591, lng: -75.5223, titulo: "Estación 15 " },
        { lat: 5.0774, lng: -75.5285, titulo: "Estación 16 " },
        { lat: 5.0622, lng: -75.5128, titulo: "Estación 17 " },
        { lat: 5.0650, lng: -75.5310, titulo: "Estación 18 " },
        { lat: 5.0719, lng: -75.5146, titulo: "Estación 19 " },
        { lat: 5.0680, lng: -75.5198, titulo: "Estación 20 " },
];
        
    
    
    // 4️⃣ Crear los marcadores y ventanas de información
    ubicaciones.forEach(ubicacion => {
        var marker = new google.maps.Marker({
            position: { lat: ubicacion.lat, lng: ubicacion.lng },
            map: map,
            title: ubicacion.titulo
        });
    
        var infoWindow = new google.maps.InfoWindow({
            content: `<h3>${ubicacion.titulo}</h3><p>${ubicacion.info}</p>`
        });
    
        // 5️⃣ Mostrar información al hacer clic en un marcador
        marker.addListener("click", () => {
            infoWindow.open(map, marker);
    
       });
                });
    
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);
    
    streetViewPanorama = new google.maps.StreetViewPanorama(document.getElementById('map'), {
        position: tiendaCoord,
        pov: { heading: 165, pitch: 0 },
        visible: false
    });
    map.setStreetView(streetViewPanorama);
}

function alternarModo() {
    if (!map) {
        console.error("El mapa aún no se ha cargado");
        return;
    }

    modoOscuro = !modoOscuro; 
    map.setOptions({
        styles: modoOscuro ? estiloOscuro : estiloClaro,
    });

    console.log(`Modo cambiado a ${modoOscuro ? "oscuro" : "claro"}`);
}

function alternarStreetView() {
    const isStreetViewVisible = streetViewPanorama.getVisible();
    streetViewPanorama.setVisible(!isStreetViewVisible);
}
