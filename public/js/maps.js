var map;

$(function myMap() {
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(37.7216195, -122.4750845), zoom: 15
  };
    var mapMarker = new google.maps.Marker({
          position: mapOptions,
          map: mapCanvas
        });
  var map = new google.maps.Map(mapCanvas, mapOptions, mapMarker);

});
