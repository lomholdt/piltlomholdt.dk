var maps = require('google-maps-api')('AIzaSyDb287-9XzIGsao9cOCljoR5FdQOS8U09s')

maps().then((maps) => {
  var kirkevej = {lat: 55.280988, lng: 12.0894373};
  
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: kirkevej,
    scrollwheel: false
  });

  var marker = new google.maps.Marker({
    position: kirkevej,
    map: map
  });

  var infowindow = new google.maps.InfoWindow({
    content: '<div>Camilla &amp; André 2017</div>'
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
})