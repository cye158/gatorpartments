/*- map for index page only -*/
function initMap() {

  //-- listing array
  var locations = [
    //****- inputs can be placed here eg. -> [ 'location txt', 'lat', 'lng', 'id#' ]
    ['Park Merced Office', 37.7183, 122.4810, 1],
    ['866 Junipero Serra Blvd', 37.722308, -122.473073, 2],
    ['Building B', 37.725122, -122.476012, 3],
    ['76 Denslowe Dr', 37.723501, -122.474658, 4],
  ];

  /* */
  //-- center at SFSU
  var map = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 15,
    center: new google.maps.LatLng(37.723894, -122.4782),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }

}
/*- /map for index page only -*/


/*- map for listings page only -*/
function listMap() {

  //-- listing array
  var locations = [
    //****- input eg. -> [ 'location txt', 'lat', 'lng', 'id#' ]
    ['Park Merced Office', 37.7183, 122.4810, 1],
    ['866 Junipero Serra Blvd', 37.722308, -122.473073, 2],
    ['Building B', 37.725122, -122.476012, 3],
    ['76 Denslowe Dr', 37.723501, -122.474658, 4],
  ];

  //-- center at SFSU
  var map = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 15,
    center: new google.maps.LatLng(37.723894, -122.4782),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }

}
/*- /map for listings page only -*/


/*- map for property page only -*/
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
/*- /map for property page only -*/

/*
var marker = new google.maps.Marker({
position: sfsu,
map: gmap
});
*/
