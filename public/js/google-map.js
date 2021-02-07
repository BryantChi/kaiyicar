
var google;

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    // var myLatlng = new google.maps.LatLng(40.71751, -73.990922);
    var myLatlng = new google.maps.LatLng(22.9612803,120.1917625);
    // 39.399872
    // -8.224454

    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 15,

        // The latitude and longitude to center the map (always required)
        center: myLatlng,

        // How you would like to style the map.
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            }
        ]
    };



    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    var addresses = '台南市中華南路2段151號';

    // $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+addresses+'&sensor=false', null, function (data) {
    //         console.log(data);
    //         var p = data.results.geometry.location
            var latlng = new google.maps.LatLng(22.9612803, 120.1917625);
            new google.maps.Marker({
                position: latlng,
                map: map,
                icon: 'images/loc.png'
            });

            // const marker = new google.maps.Marker({
            //     position: uluru,
            //     map: map,
            //   });

        // });

}
google.maps.event.addDomListener(window, 'load', init);

// const uluru = { lat: -25.344, lng: 131.036 };
//         // The map, centered at Uluru
//         const map = new google.maps.Map(document.getElementById("map"), {
//           zoom: 4,
//           center: uluru,
//         });
        // The marker, positioned at Uluru

