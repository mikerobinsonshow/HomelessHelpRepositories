<!DOCTYPE html>
<html>
  <head>
    <title>NYC HELPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      /* Set the size of the div element that contains the map */
      #map {
        height: 800px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>

    <?php 
    //$search = 'drug';
    include 'getmaparray.php'; 
    ?>

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: new google.maps.LatLng(<?php echo $locations[0]['latitude']; ?>, <?php echo $locations[0]['longitude']; ?>),
          mapTypeId: 'roadmap'
        });

        var features = [
            <?php
          foreach ($locations as $location)//iterate through the array of locations.
          {
            //It creates an XML string of all locations to be passed onto map.
            $contentString = $location['name'] . " <br> " .  $location['address'] . "<br>" . $location['zipcode'] . "<br><strong>" . "Save ID: ". $location['id'] .  "</strong><br>" .$location['comments'];
            echo "{ position: new google.maps.LatLng(" . $location['latitude'] . ", ". $location['longitude']  . ")," .
            " title: '". $location['name'] . "' ," .
            " contentString: '". $contentString . "' ," .
            " } , ";
          } 
          ?>
        ];

        // Create markers.
        features.forEach(function(feature) {
           var infowindow = new google.maps.InfoWindow({
          content: feature.contentString
          });
          var marker = new google.maps.Marker({
            position: feature.position,
            map: map,
            title: feature.title,
          });
          marker.addListener('click', function() {
          infowindow.open(map, marker);
          });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGr2u0tOgjsbCvAwdUVohf1c2IavZ-GA8&callback=initMap">
    </script>
  </body>
</html>