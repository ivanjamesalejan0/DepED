// This example creates a simple polygon representing the Bermuda Triangle.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9.5,
    center: {
      lat: 7.95364999771118,
      lng: 125.242897033691
    },

  });

  const setBg = () => {
    const randomColor = Math.floor(Math.random() * 16777215).toString(16);
    document.body.style.backgroundColor = "#" + randomColor;
    color.innerHTML = "#" + randomColor;
  }

  fetch("./assets/scripts/gadm36_PHL_3/bukidnon.json")
    .then(response => {
      return response.json();
    })
    .then(data => {
      const geoJson = data;
      var city_index = [];

      for (var a = 0; a < geoJson.features.length; a++) {
        for (var b = 0; b < geo.length; b++) {
          if (geoJson.features[a].properties.NAME_1.toLowerCase() == geo[b].province.toLowerCase() && geoJson.features[a].properties.NAME_2.toLowerCase() == geo[b].municipality.toLowerCase() && geoJson.features[a].properties.NAME_3.toLowerCase() == geo[b].barangay.toLowerCase()) {
            city_index.push(a);
          }
        }
      }

      city_index.forEach(e => {
        var parsed_coordinates = [];
        var raw_coordinates = geoJson.features[e]['geometry']['coordinates'][0][0];
        for (var a = 0; a < raw_coordinates.length; a++) {
          parsed_coordinates.push({
            lng: raw_coordinates[a][0],
            lat: raw_coordinates[a][1],
          })
        }

        // Construct the polygon.
        const geoMap = new google.maps.Polygon({
          paths: parsed_coordinates,
          strokeColor: "#FF0000",//setBg,
          strokeOpacity: 0.8,
          strokeWeight: 3,
          fillColor: "#FF0000",//setBg,
          fillOpacity: 0.35,
        });
        geoMap.setMap(map);
      });
    });
}