// Load Google Map Based on Latitude and Longitude
// Set Latitude and Longitude
// Set POPUP Content
// Set Map Base Color
// Set Map Zoom Level
var googleMapKey = "AIzaSyDrq6itjJPber61m46hdD6xu_fwZ5zvnrQ";
var lat = 44.5133;
var lon = -88.0133;

var mapBaseColor = "#00bfff";
var mapZoom = 10;

if (document.getElementById("gmap")) {
  loadScript();
}

function loadScript() {
  var script = document.createElement("script");
  script.src = `https://maps.googleapis.com/maps/api/js?key=${googleMapKey}&callback=init`;
  document.querySelector("head").appendChild(script);
}

function init() {
  var map = new google.maps.Map(document.getElementById("gmap"), {
    center: {
      lat: lat,
      lng: lon,
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: mapZoom,
    styles: [
      {
        stylers: [{ hue: `${mapBaseColor}` }, { saturation: +50 }],
      },
      {
        featureType: "road",
        elementType: "geometry",
        stylers: [{ lightness: 100 }, { visibility: "simplified" }],
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [{ hue: `${mapBaseColor}` }, { saturation: +80 }],
      },
      {
        featureType: "transit",
        elementType: "labels",
        stylers: [{ hue: `${mapBaseColor}` }, { saturation: +80 }],
      },
      {
        featureType: "poi",
        elementType: "labels",
        stylers: [{ visibility: "off" }],
      },
      {
        featureType: "poi.park",
        elementType: "labels",
        stylers: [{ visibility: "on" }],
      },
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [{ hue: `${mapBaseColor}` }, { saturation: +60 }],
      },
    ],
  });

  var marker = new google.maps.Marker({
    position: {
      lat: lat,
      lng: lon,
    },
    map: map,
    animation: google.maps?.Animation.DROP,
    icon: "/pages/js/images/map-marker.png",
  });
}
