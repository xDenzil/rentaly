@extends('layouts.mainlayout')

@section('title', 'Property Name')

@section('body-class','bg-light')

@section('content')

<div style="height:80vh; position: relative">
  <div id="map" class="bg-primary" style="height:100%;">
  </div>
  <div class="position-absolute bg-primary rounded text-white p-3" style="bottom:5%; left: 5%; width: 300px;">
    <h4>3 Properties Near You</h4>
    <p>Click their markers to see more.</p>
  </div>
</div>


<script>
  // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      
      /*

      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 10
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You\'re here.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

      */


</script>

<script type="text/javascript">
  var markers = [
  {
      "title": 'University Cres',
      "lat": '18.0142',
      "lng": '-76.7453',
      "description": '<h4><a href="/feed/HHG63">HHG63</a></h4> Single and Shared Rooms available. $21,000 - $24,000.'
  },
  {
      "title": 'Tavern',
      "lat": '18.0191',
      "lng": '-76.7408',
      "description": '<h4><a href="/feed/QRT14">QRT14</a></h4> Single and Shared Rooms available. $12,000 - $28,000.'
  },
  {
      "title": 'Mona',
      "lat": '18.0124',
      "lng": '-76.7481',
      "description": '<h4><a href="/feed/ZKY35">ZKY35</a></h4> Single and Shared Rooms available. $24,000 - $36,000.'
  }
  ];
  window.onload = function () {
      LoadMap();
  }
  function LoadMap() {
      var mapOptions = {
          center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var infoWindow = new google.maps.InfoWindow();
      var latlngbounds = new google.maps.LatLngBounds();
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      

      for (var i = 0; i < markers.length; i++) {
          var data = markers[i]
          var myLatlng = new google.maps.LatLng(data.lat, data.lng);
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: data.title
          });
          (function (marker, data) {
              google.maps.event.addListener(marker, "click", function (e) {
                  infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                  infoWindow.open(map, marker);
              });
          })(marker, data);
          latlngbounds.extend(marker.position);
      }
      var bounds = new google.maps.LatLngBounds();
      map.setCenter(latlngbounds.getCenter());
      map.fitBounds(latlngbounds);
  }
  

  
</script>


<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('MAPS_API_KEY', false) ?>&callback=initMap">
</script>
</script>

@endsection