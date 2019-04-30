// Add Google Maps
function initMap() {
    var map;
    var myLatlng = {lat: 35.134429, lng: 129.103095};

    var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 15,
        center: myLatlng
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Click to zoom'
    });

    // 3 seconds after the center of the map has changed, pan back to the marker.
    map.addListener('center_changed', function() {
        window.setTimeout(function() {
        map.panTo(marker.getPosition());
        }, 3000);
    });
    
    // if you click the marker, the zoom of the map will be changed.
    marker.addListener('click', function() {
        map.setZoom(8);
        map.setCenter(marker.getPosition());
    });
}

// Change style of navbar on scroll // 수정 필요
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("topbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "nav-topbar";
    } else {
        navbar.className = "";
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

