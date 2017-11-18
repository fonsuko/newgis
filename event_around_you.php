


<!DOCTYPE html>
<html>
    <title>Go Vent Gone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <!-- leaflet -->
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <link rel="stylesheet" href="./dist/leaflet-routing-machine.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="./dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="./dist/Control.Geocoder.css" />
    <script src="./dist/Control.Geocoder.js"></script>


    <!-- User position------------------------------------------------------------>
    <script src="./dist/jquery-3.2.1.min.js"></script>

<!-- Style-------------------------------------------------------------------->
<head>
      <link rel="stylesheet" href="default_earoundyou.css">
</head>

<body>

    <!-- Left menu---------------------------------------------------------------->
    <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%;">
      <a href="main."><img src="picture/gvg_logo.png" style="padding-left:15px;padding-top:15px;height:50px;"></a>
      <br></br>
      <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Explore Event <i class="fa fa-caret-down"></i></button>
        <div id="demoAcc" class="w3-hide w3-white w3-card">
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Art</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Business</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Community</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Education</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Fashion</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Film &amp; Medias</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Food &amp; Drink</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Health</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Music</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Science &amp; Technology</a>
          <a href="#" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;Sport &amp; Fitness</a>
        </div>
      <a href="event_around_you.php" class="w3-bar-item w3-button">Event around you</a>
      <a href="#" class="w3-bar-item w3-button">Free ticket event</a>
      <a href="#" class="w3-bar-item w3-button">Selected event</a>
      <a href="#" class="w3-bar-item w3-button">History</a>
    </div>

    <!-- Right Content------------------------------------------------------------>
    <div style="margin-left:20%;">
      <!-- Topic ----------------------------------------------------------------->
      <div class="column">
        <h1>
          Please select
          <div class="w3-dropdown-click">
            <button onclick="selectionDropdown()" class="w3-button w3-black">Distance <i class="fa fa-caret-down"></i></button>
            <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
              <a href="#" class="w3-bar-item w3-button">1 km</a>
              <a href="#" class="w3-bar-item w3-button">10 km</a>
              <a href="#" class="w3-bar-item w3-button">30 km</a>
              <a href="#" class="w3-bar-item w3-button">100 km</a>
            </div>
          </div>

          and
          <div class="w3-dropdown-click">
            <button onclick="selectionDropdown()" class="w3-button w3-black">Time <i class="fa fa-caret-down"></i></button>
            <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
              <a href="#" class="w3-bar-item w3-button">15 min</a>
              <a href="#" class="w3-bar-item w3-button">30 min</a>
              <a href="#" class="w3-bar-item w3-button">1 hr</a>
              <a href="#" class="w3-bar-item w3-button">1 day</a>
            </div>
          </div>
          << Bug

        </h1>
        <hr width="98%">
          <div id="map"class="map">
          </div>
        <!--<p id="timeFunc">time</p> Bug not display-->
    </div>


<script>
initmap();

var lat = geoplugin_latitude();
var lng = geoplugin_longitude();

//Map//
//Insert your code here

function initmap() {
  //initial map position before ask permission
  var map = L.map('map').setView([13.751908, 100.539029], 13);
  var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
  var mapTiles = new L.TileLayer(osmUrl, {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
    maxZoom: 18
  });

  // add the CloudMade layer to the map set the view to a given center and zoom
  map.addLayer(mapTiles);

  // ask permission position
  function displayLocation(position) {
      console.log('position', position);
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      var current = L.marker([lat, lng],{icon: L.icon({iconSize: [50,50],iconAnchor: [15,15],iconUrl: 'picture/marker.png'})}).bindPopup("Current Position").addTo(map);
      var foodFest= L.marker([13.981730, 100.550467],{icon: L.icon({iconSize: [50,50],iconAnchor: [15,15],iconUrl: 'picture/event_food.png'})}).addTo(map);

      foodFest.on('click', function(e) {
  		var container = L.DomUtil.create('div'),
  		//startBtn = createButton('Start from this location', container),
  		destBtn = createButton('Go to this location', container);
  		L.popup()
  		.setContent(container)
  		.setLatLng(e.latlng)
  		.openOn(map);
  		L.DomEvent.on(destBtn, 'click', function() {
  		control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
  		map.closePopup();
  		});
  });


      console.log('{longitude:' + lng + ', latitude:' + lat + '}');
      map.setView([lat, lng], 16);
  }

  navigator.geolocation.getCurrentPosition(displayLocation);

  // get location via geoplugin.net
  jQuery(document).ready(function($) {
      jQuery.getScript('http://www.geoplugin.net/javascript.gp', function() {
      var country = geoplugin_countryName();
      var zone = geoplugin_region();
      var district = geoplugin_city();
      console.log("Your location is: " + country + ", " + zone + ", " + district);
      //var lat = geoplugin_latitude();
      //var lng = geoplugin_longitude();
      L.marker([lat, lng]).addTo(map);
      console.log('{longitude:' + lng + ', latitude:' + lat + '}');
      map.setView([lat, lng], 13);
      });
  });

  var control = L.Routing.control({
  		//Customer marker icon

  		waypoints: [
  		L.latLng(lat, lng), //starting point
  		L.latLng(13.980708, 100.554199) //end point
  		],

  		CreateMarker: function(i,wp){
  			return L.marker(wp.latLng,{
  					draggable: true,
  					iconSize: [30,30],
  					iconAnchor: [15,15],
  					icon: L.icon({iconUrl: './image/marker.png'})
  					})
  			},
  			showAlternatives: true,
  			altLineOptions:{
  				styles: [{color: 'blue', opacity: 0.5, weight: 9}]
  		},

  		routeWhileDragging: true,
  		useZoomParameter: true,
  		geocoder: L.Control.Geocoder.nominatim()
  		}).addTo(map);

  	control.on('routesfound', function(e){
  		var distance = e.routes[0].summary.totalDistance;
  		var time = e.routes[0].summary.totalTime;
  		//alert(distance);
  	});

    function createButton(label, container) {
		var btn = L.DomUtil.create('button', '', container);
		btn.setAttribute('type', 'button');
		btn.innerHTML = label;
		return btn;
		}
		map.on('click', function(e) {
		var container = L.DomUtil.create('div'),
		destBtn = createButton('Go to this location', container);
		L.popup()
		.setContent(container)
		.setLatLng(e.latlng)
		.openOn(map);

		//Replace with new Destination Button
		L.DomEvent.on(destBtn, 'click', function() {
		control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
		map.closePopup();
		});
});


/*
  // Marker
  var musicFest= L.marker([13.752, 100.495],{icon: L.icon({iconSize: [50,50],iconAnchor: [15,15],iconUrl: 'picture/event_music.png'})}).bindPopup("Music Festival").addTo(map),
      musicJazz= L.marker([13.752, 100.4886],{icon: L.icon({iconSize: [50,50],iconAnchor: [15,15],iconUrl: 'picture/event_music.png'})}).bindPopup("Jazz Music Concert").addTo(map),
      midnightSale = L.marker([13.730882, 100.442731],{icon: L.icon({iconSize: [50,50],iconAnchor: [15,15],iconUrl: 'picture/event_sale.png'})}).bindPopup("Central Midnight Sale").addTo(map),
      foodFestival = L.marker([13.786513, 100.467724],{icon: L.icon({iconSize: [50,50],iconAnchor: [15,15],iconUrl: 'picture/event_food.png'})}).bindPopup("Food Festival").addTo(map);

  var music = L.layerGroup([musicFest, musicJazz]);
  var sale = L.layerGroup([midnightSale]);
  var food = L.layerGroup([foodFestival]);

  var overlayMaps = { "Music": music,"Sale": sale,"Food": food};
  L.control.layers(overlayMaps).addTo(map);
*/

}

// Create button//
function createButton(label, container) {
		var btn = L.DomUtil.create('button', '', container);
		btn.setAttribute('type', 'button');
		btn.innerHTML = label;
		return btn;
}

//Clock//
// Set the date we're counting down to
var countDownDate = new Date("Nov 14, 2017 9:37:00").getTime();

// Update the count down every 1 second
var count = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="timeFunc"
    document.getElementById("timeFunc").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(count);
        document.getElementById("timeFunc").innerHTML = "EXPIRED";
        removeMarker();
    }
}, 1000);

//Accordion menu//
function myAccFunc(){
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-show", "");
    }
}

//Dropdown button//
function selectionDropdown() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>

</body>
</html>
