//Funzione che crea una mappa dell'italia
var map = AmCharts.makeChart( "chartdiv", {
  "type": "map",
  "theme": "none",
  "projection": "miller",

  "imagesSettings": {
    "rollOverColor": "#089282",
    "rollOverScale": 3,
    "selectedScale": 3,
    "selectedColor": "#089282",
    "color": "#13564e"
  },

  "areasSettings": {
    "unlistedAreasColor": "#15A892"
  },

  "dataProvider": {
    "map": "italyLow",
    "areas": [{
      // hide Corsica
      "id": "FR-H",
      "alpha": 0,
      "mouseEnabled": false
    }],
    //In images sono conservate tutte le regioni italiane 
    //con corrispettive latitudini e longitudini utili per piazzare i marker
    "images": [ 
    // #region CreazioneMarkerRegioni
    {
      "title": "Piemonte",
      "latitude": 45.2324956,
      "longitude": 7.8859904,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Valle d'Aosta",
      "latitude": 45.7438448,
      "longitude": 7.298168,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Lombardia",
      "latitude": 45.6017587,
      "longitude": 9.7486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Veneto",
      "latitude": 45.5,
      "longitude": 11.8486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Friuli-Venezia Giulia",
      "latitude": 46.26017587,
      "longitude": 12.9,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Trentino-Alto Adige",
      "latitude": 46.6017587,
      "longitude": 11.2486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Liguria",
      "latitude": 44.4017587,
      "longitude": 8.5486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Toscana",
      "latitude": 43.6017587,
      "longitude": 11.1486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Emilia Romagna",
      "latitude": 44.6017587,
      "longitude": 11.2486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Umbria",
      "latitude": 42.9017587,
      "longitude": 12.5086572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Marche",
      "latitude": 43.3017587,
      "longitude": 13.22486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Abruzzo",
      "latitude": 42.2017587,
      "longitude": 13.82486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Lazio",
      "latitude": 41.9017587,
      "longitude": 12.72486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Campania",
      "latitude": 41.0017587,
      "longitude": 14.8486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Molise",
      "latitude": 41.6817587,
      "longitude": 14.5486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Calabria",
      "latitude": 39.2017587,
      "longitude": 16.4486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Puglia",
      "latitude": 41.0017587,
      "longitude": 16.72486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Sicilia",
      "latitude": 37.5017587,
      "longitude": 14.1486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Sardegna",
      "latitude": 40.017587,
      "longitude": 9.02486572,
      "events": 0
    }, {
      "zoomLevel": 5,
      "scale": 0.5,
      "title": "Basilicata",
      "latitude": 40.517587,
      "longitude": 16.12486572,
      "events": 0
    } 
    // #endregion
    ]
  }
} );

//TODO: implementare funzione che ritorna il numero di eventi corrispondenti alla regione
function getEventsFor(region) {
  return 1;
}

// add events to recalculate map position when the map is moved or zoomed
map.addListener( "positionChanged", updateCustomMarkers );

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers( event ) {
  // get map object
  var map = event.chart;

  // go through all of the images
  for ( var x in map.dataProvider.images ) {
    // get MapImage object
    var image = map.dataProvider.images[ x ];

    //controlla se una regione ha eventi e li inserisce nel paramentro events
    image.events = image.events ? image.events : getEventsFor(image.title);

    if (image.events > 0) {
      // check if it has corresponding HTML element
      if ( 'undefined' == typeof image.externalElement )
        image.externalElement = createCustomMarker( image );

      // reposition the element accoridng to coordinates
      var xy = map.coordinatesToStageXY( image.longitude, image.latitude );
      image.externalElement.style.top = xy.y + 'px';
      image.externalElement.style.left = xy.x + 'px';
    }

  }
}

// this function creates and returns a new marker element
function createCustomMarker( image ) {
  // create holder
  var holder = document.createElement( 'div' );
  holder.className = 'map-marker';
  holder.title = image.title;
  holder.style.position = 'absolute';

  // maybe add a link to it?
  if ( undefined != image.url ) {
    holder.onclick = function() {
      window.location.href = image.url;
    };
    holder.className += ' map-clickable';
  }

  // create dot
  var dot = document.createElement( 'div' );
  dot.className = 'dot';
  holder.appendChild( dot );

  // create pulse
  var pulse = document.createElement( 'div' );
  pulse.className = 'pulse';
  holder.appendChild( pulse );

  // append the marker to the map container
  image.chart.chartDiv.appendChild( holder );

  return holder;
}