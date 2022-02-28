// This example creates a simple polygon representing the Bermuda Triangle.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9.5,
    center: {
      lat: 7.95364999771118,
      lng: 125.242897033691
    },

  });

  
  const infoWindow = new google.maps.InfoWindow();


  const setBg = () => {
    const randomColor = Math.floor(Math.random() * 16777215).toString(16);
    document.body.style.backgroundColor = "#" + randomColor;
    color.innerHTML = "#" + randomColor;
  }

  function showArrays(event) {
    // Since this polygon has only one path, we can call getPath() to return the
    // MVCArray of LatLngs.
    const polygon = this;
    //console.log(polygon);
    const vertices = polygon.getPath();
    let contentString =
      "<b>Name</b><br>" +
      polygon.name +
      "<br>";
    // Replace the info window's content and position.
    infoWindow.setContent(contentString);
    infoWindow.setPosition(event.latLng);
    infoWindow.open(map);
  }

  fetch("./assets/scripts/gadm36_PHL_3/bukidnon.json")
    .then(response => {
      return response.json();
    })
    .then(data => {
      const geoJson = data;
      var city_name = '';

      for (var a = 0; a < geoJson.features.length; a++) {
        for (var b = 0; b < geo.length; b++) {
          if (geoJson.features[a].properties.NAME_1.toLowerCase() == geo[b].province.toLowerCase() && geoJson.features[a].properties.NAME_2.toLowerCase() == geo[b].municipality.toLowerCase() && geoJson.features[a].properties.NAME_3.toLowerCase() == geo[b].barangay.toLowerCase()) {
            city_name  = geo[b].province.toLowerCase() + ", " + geoJson.features[a].properties.NAME_2 + ", " +geo[b].barangay.toLowerCase();
            
            let e = a;
        var parsed_coordinates = [];
        var raw_coordinates = geoJson.features[e]['geometry']['coordinates'][0][0];
        for (var c = 0; c < raw_coordinates.length; c++) {
          parsed_coordinates.push({
            lng: raw_coordinates[c][0],
            lat: raw_coordinates[c][1],
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
          name: city_name
        });

        geoMap.setMap(map);
        geoMap.addListener("click", showArrays);
          }
        }
      }
    });
}