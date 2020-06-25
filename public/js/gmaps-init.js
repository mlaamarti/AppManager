  var map,markermap,goemetrymap,rectangle, polygon, circle,kmllayermap,infowindow,maptype,overlaymap;
    
    $(document).ready(function() {
        map = new GMaps({
            el: '#map',
            lat: -12.043333,
            lng: -77.028333,
            zoomControl: true,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'TOP_LEFT'
            },
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false
        });

        //marker

          markermap = new GMaps({
        el: '#markermap',
        lat: -12.043333,
        lng: -77.028333
      });
      markermap.addMarker({
        lat: -12.043333,
        lng: -77.03,
        title: 'Lima',
        details: {
          database_id: 42,
          author: 'HPNeo'
        },
        click: function(e){
          if(console.log)
          
          alert('You clicked in this marker');
        },
        mouseover: function(e){
          if(console.log)
            
        }
      });
      markermap.addMarker({
        lat: -12.042,
        lng: -77.028333,
        title: 'Marker with InfoWindow',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });
      //geometry

      goemetrymap = new GMaps({
        el: '#goemetrymap',
        lat: -12.043333,
        lng: -77.028333
      });
      var bounds = [[-12.030397656836609,-77.02373871559225],[-12.034804866577001,-77.01154422636042]];
      rectangle = goemetrymap.drawRectangle({
        bounds: bounds,
        strokeColor: '#BBD8E9',
        strokeOpacity: 1,
        strokeWeight: 3,
        fillColor: '#BBD8E9',
        fillOpacity: 0.6
      });

      var paths = [[-12.040397656836609,-77.03373871559225],[-12.040248585302038,-77.03993927003302],[-12.050047116528843,-77.02448169303511],[-12.044804866577001,-77.02154422636042]];
      polygon = map.drawPolygon({
        paths: paths,
        strokeColor: '#25D359',
        strokeOpacity: 1,
        strokeWeight: 3,
        fillColor: '#25D359',
        fillOpacity: 0.6
      });
      var lat = -12.040504866577001;
      var lng = -77.02024422636042;
      circle = goemetrymap.drawCircle({
        lat: lat,
        lng: lng,
        radius: 350,
        strokeColor: '#432070',
        strokeOpacity: 1,
        strokeWeight: 3,
        fillColor: '#432070',
        fillOpacity: 0.6
      });
      for(var i in paths){
        bounds.push(paths[i]);
      }
      var b = [];
      for(var i in bounds){
        latlng = new google.maps.LatLng(bounds[i][0], bounds[i][1]);
        b.push(latlng);
      }
      for(var i in paths){
        latlng = new google.maps.LatLng(paths[i][0], paths[i][1]);
        b.push(latlng);
      }
      goemetrymap.fitLatLngBounds(b);

      // kml layer

      infoWindow = new google.maps.InfoWindow({});
      kmllayermap = new GMaps({
        el: '#kmllayermap',
        zoom: 12,
        lat: 40.65,
        lng: -73.95
      });
      kmllayermap.loadFromKML({
        url: 'http://api.flickr.com/services/feeds/geo/?g=322338@N20&lang=en-us&format=feed-georss',
        suppressInfoWindows: true,
        events: {
          click: function(point){
            infoWindow.setContent(point.featureData.infoWindowHtml);
            infoWindow.setPosition(point.latLng);
            infoWindow.open(kmllayermap.kmllayermap);
          }
        }
      });
      //map type
      maptype = new GMaps({
        el: '#maptype',
        lat: -12.043333,
        lng: -77.028333,
        mapTypeControlOptions: {
          mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
        }
      });
      maptype.addMapType("osm", {
        getTileUrl: function(coord, zoom) {
          return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenStreetMap",
        maxZoom: 18
      });
      maptype.addMapType("cloudmade", {
        getTileUrl: function(coord, zoom) {
          return "http://b.tile.cloudmade.com/8ee2a50541944fb9bcedded5165f09d9/1/256/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "CloudMade",
        maxZoom: 18
      });
      maptype.setMapTypeId("osm");

      // overlay
       overlaymap = new GMaps({
        el: '#overlaymap',
        lat: -12.043333,
        lng: -77.028333
      });
      overlaymap.drawOverlay({
        lat: overlaymap.getCenter().lat(),
        lng: overlaymap.getCenter().lng(),
        layer: 'overlayLayer',
        content: '<div class="overlay">Lima<div class="overlay_arrow above"></div></div>',
        verticalAlign: 'top',
        horizontalAlign: 'center'
      });

      //routemap
       routemap = new GMaps({
        el: '#routemap',
        lat: -12.043333,
        lng: -77.028333
      });
      routemap.drawRoute({
        origin: [-12.044012922866312, -77.02470665341184],
        destination: [-12.090814532191756, -77.02271108990476],
        travelMode: 'driving',
        strokeColor: '#131540',
        strokeOpacity: 0.6,
        strokeWeight: 6
      });


    });
    

  