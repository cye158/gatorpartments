
function initMap() {
  var i = j = 0;
  //-- listing array
  var locations_index = [
    //****- inputs can be placed here eg. -> [ 'location txt', 'lat', 'lng', 'id#' ]
    ['Park Merced Office', 37.7183, 122.4810, 1],
    ['866 Junipero Serra Blvd', 37.722308, -122.473073, 2],
    ['Building B', 37.725122, -122.476012, 3],
    ['76 Denslowe Dr', 37.723501, -122.474658, 4],
  ];

  /* */
  //-- center at SFSU
  var map_index = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 15,
    center: new google.maps.LatLng(37.723894, -122.4782),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow_index = new google.maps.InfoWindow();

  var marker_index;

  for (i = 0; i < locations.length; i++) {
    marker_index = new google.maps.Marker({
      position: new google.maps.LatLng(locations_index[i][1], locations_index[i][2]),
      map: map_index
    });

    google.maps.event.addListener(marker_index, 'click', (function(marker_index, i) {
      return function() {
        infowindow.setContent(locations_index[i][0]);
        infowindow.open(map_index, marker_index);
      }
    })(marker_index, i));
  }
  /*- /map for index page only -*/
}


/*
var marker = new google.maps.Marker({
position: sfsu,
map: gmap
});
*/
