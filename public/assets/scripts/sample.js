// This example creates a simple polygon representing the Bermuda Triangle.
function initMap() {

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9,
    center: {
      lat: 7.95364999771118,
      lng: 125.242897033691
    },

  });

  fetch("./assets/scripts/gadm36_PHL_3/c.json")
    .then(response => {
      return response.json();
    })
    .then(data => {
      const geoJson = data;
      var search = {
        province: 'Bukidnon',
        city: 'Dangcagan',
        barangay: 'Kapalaran'
      }

      var city_index = 0;

      for (var a = 0; a < geoJson.features.length; a++) {
        if (geoJson.features[a].properties.NAME_1.toLowerCase() == search.province.toLowerCase() && geoJson.features[a].properties.NAME_2.toLowerCase() == search.city.toLowerCase() && geoJson.features[a].properties.NAME_3.toLowerCase() == search.barangay.toLowerCase()) {
          city_index = a;
          break;
        }
      }

      var parsed_coordinates = [];
      var raw_coordinates = geoJson.features[city_index]['geometry']['coordinates'][0];

      for (var a = 0; a < raw_coordinates.length; a++) {
        parsed_coordinates.push({
          lng: raw_coordinates[a][0],
          lat: raw_coordinates[a][1],
        })
      }

      // Construct the polygon.
      const barangayGeo = new google.maps.Polygon({
        paths: parsed_coordinates,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 3,
        fillColor: "#FF0000",
        fillOpacity: 0.35,
      });
      barangayGeo.setMap(map);
    });
}