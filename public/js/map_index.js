/*- THIS IS ONLY FOR THE INDEX PAGE -*/
function initMap() {

  //****- add the data input inside locations here eg. -> [ 'location_info', 'lat', 'lng', 'id#' ]
  var locations = [
    ['Park Merced Office', 37.7183, -122.4810, 1],
    ['866 Junipero Serra Blvd', 37.722308, -122.473073, 2],
    ['Building B', 37.725122, -122.476012, 3],
    ['Koopa Castle', 37.726466, -122.477187, 4],
    ['Super Pretty House', 37.721442, -122.474097, 5],
    ['Super Tiny House', 37.723275, -122.472524, 6],
    ['Disneyland House', 37.722189, -122.47364, 7],
  ];

  /* below functions process the input locations above */
  //-- center at SFSU
  var map = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 14,
    center: new google.maps.LatLng(37.723894, -122.4782),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
      icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=' + locations[i][3] + '|005500|ffffff'
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }

}
