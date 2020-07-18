var la;
var lo;

var markers = [
    {
        title: "University Cres",
        lat: "18.0142",
        lng: "-76.7453",
        description:
            '<h4><a href="/feed/HHG63">HHG63</a></h4> Single and Shared Rooms available. $21,000 - $24,000.'
    },
    {
        title: "Tavern",
        lat: "18.0191",
        lng: "-76.7408",
        description:
            '<h4><a href="/feed/QRT14">QRT14</a></h4> Single and Shared Rooms available. $12,000 - $28,000.'
    },
    {
        title: "Mona",
        lat: "18.0124",
        lng: "-76.7481",
        description:
            '<h4><a href="/feed/ZKY35">ZKY35</a></h4> Single and Shared Rooms available. $24,000 - $36,000.'
    }
];
window.onload = function() {
    LoadMap();
};
function LoadMap() {
    navigator.geolocation.getCurrentPosition(function(p) {
        var LatLng = new google.maps.LatLng(
            p.coords.latitude,
            p.coords.longitude
        );
        la = p.coords.latitude;
        lo = p.coords.longitude;
        console.log(lo);

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

    var mapOptions = {
        center: new google.maps.LatLng(la, lo),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var infoWindow = new google.maps.InfoWindow();
    var latlngbounds = new google.maps.LatLngBounds();
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    for (var i = 0; i < markers.length; i++) {
        var data = markers[i];
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: data.title
        });
        (function(marker, data) {
            google.maps.event.addListener(marker, "click", function(e) {
                infoWindow.setContent(
                    "<div style = 'width:200px;min-height:40px'>" +
                        data.description +
                        "</div>"
                );
                infoWindow.open(map, marker);
            });
        })(marker, data);
    }
}
