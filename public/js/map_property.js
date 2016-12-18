/*- THIS IS ONLY FOR THE PROPERTY PAGE -*/
function propMap() {

  //****- inputs should be placed here eg. -> [ 'location txt', 'lat', 'lng', 'id#' ]
  var location = ['Park Merced Office', 37.7183, -122.4810, 1];

  /* below functions process the input location above */
  //-- center at coordinates
  var map = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 16,
    center: new google.maps.LatLng(location[1], location[2]),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(location[1], location[2]),
    map: map,
    icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=' + locations[i][3] + '|005500|ffffff'
  });

  google.maps.event.addListener(marker, 'click', (function(marker) {
    return function() {
      infowindow.setContent(location[0]);
      infowindow.open(map, marker);
    }
  })(marker));

}
