@extends('layouts.no-footer-layout')

@section('title', 'Near Me')

@section('body-class','bg-light')

@section('content')

<div style="height:92vh; position: relative">
  <div id="map_canvas" class="bg-primary" style="height:100%;">
  </div>
  <div id="status-box" class="position-absolute rounded text-white p-3"
    style="bottom:5%; left: 5%; width: 300px; background-color:black;">
    <h4>Searching..</h4>
  </div>
</div>


<script>
  // requires that you consent to location sharing
      
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
  function initMap() {

    var markers = [
    {
        title: "Altamont Cres",
        lat: "18.0041745",
        lng: "-76.7880111",
        description:
            '<h4><a href="/feed/AMP59">AMP59</a></h4> Single and Shared Rooms available. $19,000 - $30,000.'
    },
    {
        title: "Pawsey Road",
        lat: "18.006788",
        lng: "-76.7861211",
        description:
            '<h4><a href="/feed/ZKY35">ZKY35</a></h4> Single and Shared Rooms available. $24,000 - $36,000.'
    }
];
    
    var LatLng = 'o';

    navigator.geolocation.getCurrentPosition(function(p) {
        LatLng = new google.maps.LatLng(
            p.coords.latitude,
            p.coords.longitude
        );

        
        la = p.coords.latitude;
        lo = p.coords.longitude;

        map.setCenter(LatLng);

        var cityCircle = new google.maps.Circle({
            strokeColor: "#2780E3",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: "#2780E3",
            fillOpacity: 0.15,
            map: map,
            center: LatLng,
            radius: 1000
        });
        
        
    });

    console.log('ltlng:');
    console.log(LatLng);

      var mapOptions = {
          /*center: new google.maps.LatLng(markers[0].lat, markers[0].lng),*/
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          streetViewControl: false,
    streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
    },
    fullscreenControl: false,
    zoomControl: true,
    zoomControlOptions: {
        position: google.maps.ControlPosition.RIGHT_TOP
    },
          styles: [
  {
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
] 
      };
      var infoWindow = new google.maps.InfoWindow();
      var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    
/*
      var cityCircle = new google.maps.Circle({
            strokeColor: "#2780E3",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: "#2780E3",
            fillOpacity: 0.15,
            map: map,
            center: {lat: 18.0029051, lng: -76.790194},
            radius: 1000
        });
        */
      
      var image = new google.maps.MarkerImage(
							'assets/img/blue_circle.png',
							null, // size
							null, // origin
							new google.maps.Point( 8, 8 ), // anchor (move to center of marker)
							new google.maps.Size( 20, 20 ) // scaled size (required for Retina display icon)
						);
            
            
            setTimeout(function(){  
      for (var i = 0; i < markers.length; i++) {
          var data = markers[i]
          var myLatlng = new google.maps.LatLng(data.lat, data.lng);
          var marker = new google.maps.Marker({
              flat: true,
							icon: image,
							map: map,
							optimized: false,
							position: myLatlng,
							title: 'I might be here',
							visible: true
          });
          (function (marker, data) {
              google.maps.event.addListener(marker, "click", function (e) {
                  infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                  infoWindow.open(map, marker);
              });
          })(marker, data);

          document.getElementById("status-box").innerHTML = "<h4>Results Disabled</h4>"
          document.getElementById("status-box").innerHTML += "<p>Click their markers to see more.</p>";

      } }, 3000);
  }
  

  
</script>


<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('MAPS_API_KEY', false) ?>&callback=initMap">
</script>
</script>

@endsection