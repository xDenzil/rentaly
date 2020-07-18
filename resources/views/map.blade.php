@extends('layouts.mainlayout')

@section('title', 'Property Name')

@section('body-class','bg-light')

@section('content')


<div style="height:80vh; position: relative">
  <div id="map" class="bg-primary" style="height:100%">
  </div>
  @foreach($users as $user)
  <footer class="p-4 bg-primary w-50" style="position: absolute; bottom: 0;">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-sm-6 col-md-9 text-white">
          <p class="m-0 p-0 text-white">Owner</p>
          <h3>{{$user->fname}} {{$user->lname}}</h3>
        </div>
      </div>
      <div class="col-sm-12 p-0">

        <a class="btn sagi-green btn-block mr-2 text-white rounded"
          href="https://wa.me/{{$user->id}}?text=Good%20Day%2C%20I%20saw%20your%20property%20on%20Rentaly%20and%20I%27m%20interested%20in%20viewing."
          target="_blank"><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp</a>

        <a class="btn sagi-green btn-block mr-2 rounded text-white" href="tel:{{$user->id}}" target="_blank"><i
            class="fa fa-phone"></i>&nbsp;
          Call</a>

      </div>
    </div>
</div>
</footer>
@endforeach
</div>

<?php 

$url = "https://maps.googleapis.com/maps/api/geocode/xml?address={{$user->community}},Kingston,Jamaica&key=AIzaSyBYUKZbRX7DAtkqTI3IFN-0dmn3L_cYjjc";
$xml = simplexml_load_file($url);
$lat = $xml->result->geometry->location->lat;
$long = $xml->result->geometry->location->lng;


?>


<script
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo env('MAPS_API_KEY', false) ?>&callback=initMap&libraries=&v=weekly"
  defer></script>

<script>
  (function(exports) {
  "use strict";

  function initMap() {
    exports.map = new google.maps.Map(document.getElementById("map"), {
      center: {
        lat: <?php echo $lat ?>,
        lng: <?php echo $long ?>
      },
      zoom: 14
    });
    /*var rectangle = new google.maps.Rectangle({
            strokeColor: "#84bd00",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: "#84bd00",
            fillOpacity: 0.35,
            map: map,
            bounds: {
              north: 18.0316302,
              south: 18.0183858,
              east: -76.7636311,
              west: -76.7817502
            }
          });*/

          var cityCircle = new google.maps.Circle({
              strokeColor: "#84bd00",
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: "#84bd00",
              fillOpacity: 0.35,
              map: map,
              center: {
        lat: <?php echo $lat ?>,
        lng: <?php echo $long ?>
      },
              radius: 350
            });
  }

  exports.initMap = initMap;
})((this.window = this.window || {}));
</script>

@endsection