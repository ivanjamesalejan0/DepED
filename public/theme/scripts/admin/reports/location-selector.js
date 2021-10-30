fetch("./assets/scripts/gadm36_PHL_3/bukidnon.json")
  .then(response => {
    return response.json();
  })
  .then(data => {
    const geoJson = data;

    var cur_city = '';
    var parsed_geo = {};

    for (var a = 0; a < geoJson.features.length; a++) {
      var city_name = geoJson.features[a].properties.NAME_2;
      if (city_name.toLowerCase() != cur_city.toLowerCase()) {
        cur_city = city_name;
        parsed_geo[cur_city] = [];
      }
      parsed_geo[cur_city].push(geoJson.features[a].properties.NAME_3);
    }

    $.each(parsed_geo, function(key) {
      $('.report-municipality').append(`<option value="${key}">${key}</option>`);
    });

    var city = $(".report-municipality option:selected").val();
    parsed_geo[city].forEach(el => {
      $('.report-barangay').append(`<option value="${el}">${el}</option>`);
    });

    $('body').on('change', '.report-municipality', function(e){
      var city = $(".report-municipality option:selected").val();
      $('.report-barangay').html('');
      parsed_geo[city].forEach(el => {
        $('.report-barangay').append(`<option value="${el}">${el}</option>`);
      });
    });

  });