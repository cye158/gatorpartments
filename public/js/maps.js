$( function initMap() {
  var location = {lat: 37.723894, lng: -122.4782};
  var gmap = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: gmap
  });
});
