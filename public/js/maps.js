var map;

$(function myMap() {
<<<<<<< HEAD
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(37.7216195, -122.4750845), zoom: 15
  };
    var mapMarker = new google.maps.Marker({
          position: mapOptions,
          map: mapCanvas
        });
  var map = new google.maps.Map(mapCanvas, mapOptions, mapMarker);
=======
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
>>>>>>> ca76c0b491410cfb3e9b20ff8761b375a0c3a6de

});
