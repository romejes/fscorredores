import loadGoogleMapsApi from 'load-google-maps-api';

/**
 * Call and load Google Maps API in order to render maps
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 * @param {string} mapContainerId
 * @param {number} latitude
 * @param {number} longitude
 */
export function init(mapContainerId, latitude, longitude) {
  loadGoogleMapsApi({
    key: 'AIzaSyD7v81-YqJPCL_Qen8t4QVqtIqYcU4LrfY',
  }).then(googleMaps => {
    const map = buildMap(mapContainerId, latitude, longitude, googleMaps);
    const marker = addMarker(googleMaps, map);
    const infoWindow = buildInfoWindow(googleMaps);

    //  Attach infowindow to a marker
    infoWindow.open(map, marker);

    //  Delegates click event on marker to show info window
    googleMaps.event.addListener(marker, 'click', () =>
      infoWindow.open(map, marker),
    );
  });
}

/**
 * Build a map using Google Maps API
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @param {string} mapContainerId
 * @param {number} latitude
 * @param {number} longitude
 * @param {google.maps} objGoogleMaps
 * @returns {google.maps.Map}
 */
function buildMap(mapContainerId, latitude, longitude, objGoogleMaps) {
  const locationCoordinates = {
    lat: latitude,
    lng: longitude,
  };

  const mapSettings = {
    zoom: 18,
    center: locationCoordinates,
    mapTypeId: 'roadmap',
    mapTypeControl: false,
    disableDefaultUI: true,
    gestureHandling: 'none',
  };

  return new objGoogleMaps.Map(
    document.getElementById(mapContainerId),
    mapSettings,
  );
}

/**
 * Add a marker on map
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @param {google.maps} objGoogleMaps
 * @param {google.maps.Map} map
 * @returns {google.maps.Marker}
 */
function addMarker(objGoogleMaps, map) {
  return new objGoogleMaps.Marker({
    map,
    position: map.getCenter(),
  });
}

/**
 * Build info window will be used on marker
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @param {google.maps} objGoogleMaps
 * @returns {google.maps.InfoWindow}
 */
function buildInfoWindow(objGoogleMaps) {
  return new objGoogleMaps.InfoWindow({
    content:
      '<b>FS Corredores de Seguros</b><br/>Agrup. Rosa Ara A-12<br/> Tacna - Perú',
  });
}
