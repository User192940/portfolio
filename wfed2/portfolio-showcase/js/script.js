const navMainMenuToggle = document.querySelector(".nav-main-menu-toggle");

// var slideIndex = 1;
// showDivs(slideIndex);

// function plusDivs(n) {
//   showDivs(slideIndex += n);
// }

// function currentDiv(n) {
//   showDivs(slideIndex = n);
// }
if(document.readyState === 'complete'){
    const card = document.querySelector(".image-card");
    const MOVE_THRESHOLD = 100;
    
    let initialX = 0;
    let moveX = 0;
    
    card?.addEventListener("touchstart", e => {
        initialX = e.touches[0].pageX;
    });
    card?.addEventListener("touchmove", e => {
        let currentX = e.touches[0].pageX;
        moveX = currentX - initialX;
      });
    
      card?.addEventListener("touchend", e => {
        //swipe left
        if (moveX < MOVE_THRESHOLD * Math.sign(moveX)) {
          plusDivs(+1);
          //swipe right
        } else if (moveX > MOVE_THRESHOLD * Math.sign(moveX)) {
            plusDivs(-1);
        }
      
        moveX = 0;
      });
}

  function slideLeft() {
    var slider = document.getElementsByClassName('image-card')[0];
    slider.scrollLeft = slider.scrollLeft - 512;
}
    function slideRight(){
    var slider = document.getElementsByClassName('image-card')[0];
    slider.scrollLeft = slider.scrollLeft + 512;
}
// function showDivs(n) {
//   var i;
//   var x = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   if (n > x.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = x.length}
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" w3-white", "");
//   }
//   x[slideIndex-1].style.display = "flex";  
//   dots[slideIndex-1].className += " w3-white";
// }

navMainMenuToggle.addEventListener("click", (e) => {
    e.preventDefault();
    const ariaControls = navMainMenuToggle.getAttribute("aria-controls");
    if (navMainMenuToggle.getAttribute("aria-expanded") === "false") {
        navMainMenuToggle.setAttribute("aria-expanded", "true");
        navMainMenuToggle.setAttribute("aria-label", "Close menu");
        navMainMenuToggle.parentElement.parentElement.querySelector(`#${ariaControls}`).toggleAttribute("hidden");
    } else {
        navMainMenuToggle.setAttribute("aria-expanded", "false");
        navMainMenuToggle.setAttribute("aria-label", "Open menu");
        navMainMenuToggle.parentElement.parentElement.querySelector(`#${ariaControls}`).toggleAttribute("hidden");
    }
});
// Run Fancybox
// when user clicks on an anchor element
// with the data-fancybox attribute
if(document.readyState === 'complete'){
    try{
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    } catch (err) {
        console.log(err);
    }
}


// Load Google Map Based on Latitude and Longitude
// Set Latitude and Longitude
// Set POPUP Content
// Set Map Base Color
// Set Map Zoom Level
var googleMapKey = "AIzaSyDrq6itjJPber61m46hdD6xu_fwZ5zvnrQ";
var lat = 44.526376;
var lon = -88.107691;

let date = `Date: 12/07/2023`;
var time = `Time: 4:30-6:30pm`;
var heading = "NWTC - Green Bay WI";
var subheading = "College of Business";

var mapBaseColor = "#00bfff";
var mapZoom = 14;

if(document.getElementById('gmap')) {
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
        animation: google.maps.Animation.DROP,
        icon: "/wfed2/portfolio-showcase/js/images/map-marker.png",
    });

    var infowindow = new google.maps.InfoWindow({
        content: `<h4>${heading}</h4><span>${subheading}s</span><ul><li>${date}</li><li>${time}</li></ul>`,
    });
    infowindow.open(map, marker);
}

