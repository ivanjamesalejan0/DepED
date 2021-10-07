<!DOCTYPE html>
<html>
  <head>
    <title>Simple Polygon</title>
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <script defer class="default-js" src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
    <script  class="default-js" src="{{ asset('assets/scripts/sample.js') }}"></script>
    <!-- jsFiddle will insert css and js -->
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script 
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDizQIy6SjLi48bvB4HcHq18Ur7u2FSbRo&callback=initMap&libraries=&v=weekly"
      async  class="default-js"
    ></script>
  </body>
</html>