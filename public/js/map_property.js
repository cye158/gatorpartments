/*- THIS IS ONLY FOR THE PROPERTY PAGE -*/
function propMap() {

  //****- inputs should be placed here eg. -> [ 'location txt', 'lat', 'lng', 'id#' ]
  var locationInfo = ['Park Merced Office', 37.7183, 122.4810, 1];

  //-- center at coordinates
  var map = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 10,
    center: new google.maps.LatLng(locationInfo[1], locationInfo[2]),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(locationInfo[1], locationInfo[2]),
    map: map
  });

    google.maps.event.addListener(marker, 'click', (function(marker) {
      return function() {
        infowindow.setContent(locationInfo[0]);
        infowindow.open(map, marker);
      }
    })(marker));
  }

}
