<script class="default-js" >
	var geo = <?php echo json_encode($geo) ?? "{}"  ?>;
</script>
<script>
var requiredCSS = [
  "{{ asset('assets/css/map-style.css') }}",
];
loadCSS(requiredCSS);

var requiredJS = [
  "https://requirejs.org/docs/release/2.3.5/minified/require.js",
  "{{ asset('assets/scripts/google-map.js') }}",
  "https://maps.googleapis.com/maps/api/js?key=AIzaSyDR-WtdpF1Qm8SBkDSmTpN9nkewpvCOfVk&callback=initMap&libraries=&v=weekly",
]
loadJS(requiredJS);
</script>

<div id="map"></div>