var map;

$(function myMap() {
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 15
  };
    var mapMarker = new google.maps.Marker({
          position: mapOptions,
          map: mapCanvas
        });
  var map = new google.maps.Map(mapCanvas, mapOptions, mapMarker);

});
