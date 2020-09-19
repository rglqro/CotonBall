// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPJI9v9jqW-RGVNkwnPtiO7AkvXFfCzY8&callback=initAutocomplete&libraries=places&v=weekly"">

let infoWindow;
let map;
let markers = [];
var latubi=0.0,lngubi=0.0;
var latlng;

function initAutocomplete() {
    
    map  = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 19.42847, lng:  -99.12766 },
      zoom: 15,
      mapTypeId: "roadmap"
    });
    
    
    // Create the search box and link it to the UI element.
    const input = document.getElementById("origen");
    const input2 = document.getElementById("destino");
    const searchBox = new google.maps.places.SearchBox(input,
    {
        types: ['(cities)'],
        componentRestrictions: {country: 'mx'}
      });
    const searchBox2 = new google.maps.places.SearchBox(input2,
    {
        types: ['(cities)'],
        componentRestrictions: {country: 'mx'}
      });
      
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input2);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
      searchBox.setBounds(map.getBounds());
      searchBox2.setBounds(map.getBounds());
    });
    
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
        setorigendest(0,searchBox);
    });
    
    searchBox2.addListener("places_changed", () => {
        setorigendest(1,searchBox2);
    });
    
    infoWindow = new google.maps.InfoWindow;
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        latubi=position.coords.latitude;
        lngubi=position.coords.longitude;
        latlng = [
        new google.maps.LatLng(parseFloat(latlng), parseFloat(lngubi)),
        new google.maps.LatLng(parseFloat(latlng), parseFloat(lngubi)),
        ]; 
        infoWindow.setPosition(pos);
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
}

function setorigendest(pos,searchBox){
    const places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }
      console.log(latubi+" --- "+lngubi);
      markers[pos] = null;
      // For each place, get the icon, name and location.
      const bounds = new google.maps.LatLngBounds();
      places.forEach(place => {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        const icon = {
          url: pos==0?place.icon:"http://maps.google.com/mapfiles/ms/icons/green-dot.png",
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };
        // Create a marker for each place.
        markers[pos]=new google.maps.Marker({
            map,
            icon,
            title: place.name,
            position: place.geometry.location
          })
          if(pos==0)
            $("#coord_origen").val(place.geometry.location.lat());
          if(pos==1)
            $("#coord_destino").val(place.geometry.location.lng());
        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
        latlng[pos]=place.geometry.location;
      });
      
      
    var latlngbounds = new google.maps.LatLngBounds();
    if(pos==1){
        for (var i = 0; i <= pos; i++) {
            latlngbounds.extend(latlng[i]);
        }
          map.fitBounds(latlngbounds);
      }else
          map.fitBounds(bounds);
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

