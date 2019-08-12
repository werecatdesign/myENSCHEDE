var platform = new H.service.Platform({
    'app_id': '{YOURAPPID}',
    'app_code': '{YOURAPPCODE}'
});

var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('mapContainer'),
  defaultLayers.normal.map,{
  center: {lat: 52.220692, lng: 6.897632},
  zoom: 15
});

window.addEventListener('resize', function () {
    map.getViewPort().resize(); 
});

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);


var searchArray = new Array();
var query;

$('.mapCat').click(identifyCat);

function identifyCat (e) {
    $(e.currentTarget).toggleClass('selected');
    $(e.currentTarget).siblings().removeClass('selected');
    if ($(e.currentTarget).hasClass('selected')) {
        var cat = $(e.currentTarget).html();
        // console.log(cat);
        searchArray.shift();
        searchArray.push(cat);
        query = cat;
        console.log(query);
    } else {
        searchArray.shift();
    }
    //console.log(foodArray);
}    

$('#searchShops').click(function(){
    $('#events_redbox2').find('p').remove();
    if (searchArray.length == 0) { 
        console.log('warning');
        var warning = $('<p>Please select a category above.</p>');
        $('#events_redbox2').append(warning);
    } else {
        addInfoBubble(map);
    }        
});

function addInfoBubble(map) {
    $('.category_expand').addClass('hidden');
    $('#searchShops').html('');
    $('#searchShops').html('New search');
    $('#searchShops').click(function(){location.reload()});
    $('#mapContainer').css('height', '70vh');
    autoResize();
    
function autoResize () {
    map.getViewPort().resize(); 
}

    
var group = new H.map.Group();

window.addEventListener('resize', function () {
map.getViewPort().resize(); 
});
    
addSVGMarkers(map);    

function addSVGMarkers(map){
    
    var iconOptions = {
        // The icon's size in pixel:
        size: new H.math.Size(60 * pixelRatio, 80 * pixelRatio), // 18 and 24
        // The anchorage point in pixel, 
        // defaults to bottom-center
        anchor: new H.math.Point(30 * pixelRatio, 80 * pixelRatio) // 9 and 24
    };
    
    //Create the svg mark-up
    // var svgMarkup = '<svg  width="50" height="50" xmlns="http://www.w3.org/2000/svg">' + '<rect stroke="black" fill="red" x="1" y="1" width="50" height="50" />' + '<text x="12" y="18" font-size="12pt" font-family="Arial" font-weight="bold" ' + 'text-anchor="middle" fill="white" >B</text></svg>'; // 24 and 22

    // Add the first marker
    var broodbodeIcon = new H.map.Icon('graphics/Logos/broodbode.png', iconOptions);
    broodbodeMarker = new H.map.Marker({lat: 52.220692, lng: 6.897632 },
      {icon: broodbodeIcon});

    console.log(broodbodeIcon);
    map.addObject(broodbodeMarker);
}


map.addObject(group);

// add 'tap' event listener, that opens info bubble, to the group
group.addEventListener('tap', function (evt) {
// event target is the marker itself, group is a parent event target
// for all objects that it contains
    var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
      // read custom data
      content: evt.target.getData()
    });
    // show info bubble
    ui.addBubble(bubble);
}, false);

  // Obtain a Search object through which to submit search
    // requests:
    //var explore = new H.places.Explore(platform.getPlacesService()), exploreResult, error;
    var search = new H.places.Search(platform.getPlacesService()), searchResult, error;

    // Define search parameters:
    var params = {
    // Plain text search for places with the query
    // associated with them:
      'q': query, // 'q': 'restaurant',
    //  Search near de Broodbode in Enschede:
      'in': '52.220692,6.897632;r=500' // 'at': '52.220692,6.897632'
    };

    // Define a callback function to handle data on success:
    function onResult(data) {
      addPlacesToMap(data.results.items);
    }

    // Define a callback function to handle errors:
    function onError(data) {
      error = data;
    }

    // Run a search request with parameters, headers (empty), and
    // callback functions:
    search.request(params, {}, onResult, onError);
    
    function addPlacesToMap(items){
        for (var i = 0; i<items.length; i++){
            addMarkerToGroup(group, {lat:items[i].position[0], lng:items[i].position[1]},
            '<div class ="title"><p>'+items[i].title+'</p></div><div class = "address"><p>'+items[i].vicinity+'</p></div><div class = "route"><p><a class = "navigate" href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination='+items[i].position[0]+','+items[i].position[1]+'&travelmode=walking">Show route</a></p></div>');
        }
    }
}
      
function addMarkerToGroup(group, coordinate, html) {
    
  var iconOptions = {
        // The icon's size in pixel:
        size: new H.math.Size(60 * pixelRatio, 60 * pixelRatio), // 18 and 24
        // The anchorage point in pixel, 
        // defaults to bottom-center
        anchor: new H.math.Point(30 * pixelRatio, 80 * pixelRatio) // 9 and 24
  };  

  var markerIcon = new H.map.Icon('graphics/Icons/marker.png', iconOptions);  

  var marker = new H.map.Marker(coordinate, {icon: markerIcon});
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

 console.log('test');