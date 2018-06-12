// Commercial map 
(function() {
    var mapContainer = document.querySelector('.commerc__map-container');
    var mapWindow = $('.commerc__map-container');
    var center = {lat:50.480882, lng:30.535716};
    var 
        map,
        mapState, 
        overlay,
        cMenu,
        legendState = {},
        directionsService, 
        directionsDisplay, 
        panorama, 
        customPanorama,
        buildingsArray = [],
        streetViewLayer,
        streetViewService,
        streetViewOptions,
        panoInfoWindow,
        animationId,
        legendChanged = false,
        colors = {
            medicine: '#21CCA3',
            office: '#66408E',
            trade: '#BE8296',
            restaraunt: '#FEB821',
            educational: '#0035AA'
        },
        urls = {
            building9: {
                trade: 'plan9/sections02/floor1/',
                office: 'plan9/sections01/floor1/',
                restaraunt: 'plan9/sections03/floor1/'
            },
            building3: {
                medicine: 'plan3/sections04/floor1/',
                office: 'plan3/sections01/floor1/',
                trade: 'plan3/sections02/floor1/'
            },
            building5: {
                educational: '#'
            }
        },
        streetViewOptions = {
            addressControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            },
            enableCloseButton: true,
            visible: false
        };

    function initMap() {


        customPanorama = new google.maps.StreetViewPanorama(mapContainer, streetViewOptions);

        map = new google.maps.Map(mapContainer, {
            zoom: 17,
            zoomControl: true,
            scaleControl: true,
            scrollwheel: false,
            disableDoubleClickZoom: false,
            center: center,
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: true,
            mapTypeId: google.maps.MapTypeId.HYBRID,
            mapTypeControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_LEFT
            },
            draggable: true,
            streetViewControl: true,
            streetView: customPanorama,
            styles: [
            {"featureType": "all","elementType": "all","stylers": [{"hue": "#008eff"}]},{"featureType": "poi","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "road",
            "elementType": "all","stylers": [{"saturation": "0"},{"lightness": "0"}]},{"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "water",
            "elementType": "all","stylers": [{"visibility": "simplified"},{"saturation": "-60"},{"lightness": "-20"}]
            }
        ]
    }); 

        var bounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(50.47890776534519, 30.53230084548679),
            new google.maps.LatLng(50.48199808337518, 30.537808178860814)
        );
    
        var renderOverlay = '/img/commercial/arenda/commercial_map.png';

        // The custom USGSOverlay object contains the USGS image,
        // the bounds of the image, and a reference to the map.
        overlay = new USGSOverlay(bounds, renderOverlay, map);

        mapState = new MapState();

        //cMenu = new ContextMenu('.commerc__map-context-menu');

        //directionsService = new google.maps.DirectionsService;

        // directionsDisplay = new google.maps.DirectionsRenderer({
        //   map: map
        // });

        // This streetViewlayer displays panoramic lines and dots where user can use panoramic view
        streetViewLayer = new google.maps.StreetViewCoverageLayer();
        streetViewService = new google.maps.StreetViewService();

        // To get cordiantes of click delete at the end
        // map.addListener('click', function(e) {
        //     cMenu.hide();
        // });

        // Event for menu placement and display
        // map.addListener('rightclick', function(e) {
        //     cMenu.placeonMap(e);
        //     cMenu.show();
        // });

        // Event for origin coordinate placement and marker placement
        // $('.marker_origin').click(function(e) {
        //     e.preventDefault();
        //     mapState.originSelected = true;
        //     mapState.originCoord = cMenu.coordinates;
        //     originMarker.placeMarker(cMenu.coordinates);
        // });

        // Event for legend change
        $('.commerc__map-legend').change(function() {

            $(this).find('input').each(function(index, input) {
                legendState[input.name] = input.checked;
            });

            for(var key in legendState) {
                if(legendState[key]) {
                    legendChanged = true;
                } else {
                    legendChanged = false;
                }
            }

            buildingsArray.forEach(function(building) {
                if(legendState[building.type]) {
                    building.polygon.setOptions({
                        strokeOpacity: 0.9,
                        fillOpacity: 0.9
                    });
                } else {
                    building.polygon.setOptions({
                        strokeOpacity: 0.4,
                        fillOpacity: 0.4
                    });
                }
            });
        });

        // function sartAnimation() {
        //     var opacityUp =true;
        //     var animOpacity = 0.1;
        //     var animStep = 0.01;
        //     function animatePolygons() {
        //         if(opacityUp) {
        //             animOpacity+=animStep;
        //             if(animOpacity>=0.99) {
        //                 opacityUp = false;
        //             }
        //         } else {
        //             animOpacity-=animStep;
        //             if(animOpacity<=0.1) {
        //                 opacityUp = true;
        //             }
        //         }
        //         buildingsArray.forEach(function(building) {
        //             building.polygon.setOptions({
        //                 fillOpacity: animOpacity
        //             });
        //         });
        //         if(!legendChanged) {
        //             requestAnimationFrame(animatePolygons);
        //         }
        //     };
        //     animatePolygons();
        // }
        // sartAnimation();

        
        
        
        // Event fires when panorama opens
        customPanorama.addListener('visible_changed', function() {
            if(customPanorama.getVisible()) {
                mapWindow.css('zIndex', '99999');
            }
        });

        // Event fires when panorama closes
        customPanorama.addListener('closeclick', function() {
            mapWindow.css('zIndex', 'unset');
        });

        // Event for destiination coordinate placement and marker placement
        // $('.marker_destination').click(function(e) {
        //     e.preventDefault();
        //     mapState.destinationSelected = true;
        //     mapState.destinationCoord = cMenu.coordinates;
        //     destinationMarker.placeMarker(cMenu.coordinates);
        //     getRoute(directionsService, directionsDisplay, mapState.originCoord, mapState.destinationCoord);
        //     cMenu.hide();
        // });
        
        // Event to show panoramic view lines
        // $('.panorama-view').click(function(e) {
        //     e.preventDefault();
        //     if(mapState.panorama) {
        //         streetViewLayer.setMap(null);
        //         mapState.panorama = !mapState.panorama;
        //         cMenu.hide();
        //     } else {
        //         streetViewLayer.setMap(map);
        //         mapState.panorama = !mapState.panorama;
        //         cMenu.hide();
        //     }
        // });

        // Event to call panorarma when clicking on blue panorama lines
        // map.addListener('click', function(e) {
        //     if(mapState.panorama) {
        //         streetViewService.getPanorama({location: e.latLng, radius: 50}, processSVData);
        //     }
        // });

        // This is bad CODING!!!! I could not find a right solution to display map under streetView lines!!!! Find correct solution!!!
        //$('[tabindex="0"]').children().children('div:nth-child(2)').css('z-index', '10')

        // Here occurs initialisation of all polygons on the map
        buildingsArray.forEach(function(building) {
            building.polygon.setMap(map);
        });

        buildingsArray.forEach(function(building) {
            building.polygon.addListener('click', function() {
                window.location.href = building.url;
            })
        });

        // For development purposes dawing start
        // !!!!!!!!!!!!!!!!!!!!!!!!!!Important!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!111
        // Delete &libraries=drawing from address !!!!!!!!!!!!!!!!after api key in script tag it loads drawing crap!!!!!!!!!!!!!

        // var drawingManager = new google.maps.drawing.DrawingManager({
        //     drawingMode: google.maps.drawing.OverlayType.MARKER,
        //     drawingControl: true,
        //     drawingControlOptions: {
        //       position: google.maps.ControlPosition.BOTTOM_CENTER,
        //       drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
        //     },
        //     markerOptions: {icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'},
        //     circleOptions: {
        //       fillColor: '#ffff00',
        //       fillOpacity: 1,
        //       strokeWeight: 5,
        //       clickable: false,
        //       editable: true,
        //       zIndex: 1
        //     }
        //   });
        //   drawingManager.setMap(map);

        //     google.maps.event.addListener(drawingManager, 'polygoncomplete', function (polygon) {
        //         var coordinates = (polygon.getPath().getArray());
        //         var coordArr = [];
        //         coordinates.forEach(function(coord) {
        //             coordArr.push({lat: coord.lat(), lng: coord.lng()})
        //         });
        //         console.log(JSON.stringify(coordArr));
        //     });

        //     google.maps.event.addListener(drawingManager, 'rectanglecomplete', function (rectangle) {
        //         console.log(rectangle.getBounds().getSouthWest().lat(), rectangle.getBounds().getSouthWest().lng());
        //         console.log(rectangle.getBounds().getNorthEast().lat(), rectangle.getBounds().getNorthEast().lng());
        //     });

        // For development purposes dawing 

    }//end initMap


    /* Constructor for map state end */
    function MapState() {
        this.originSelected = false;
        this.destinationSelected = false;
        this.originCoord = null;
        this.destinationCoord = null;
        this.panorama = false;
        this.panoramicWindowOpen = false;
    };
    /* Constructor for map state end */

    /* Constructor for contextual menu start */

    function ContextMenu(selector) {
        this.selector = selector;
        this.jObject = $(selector);
        this.width = this.jObject.width();
        this.height =this.jObject.height() || 40;
        this.coordinates = null;
    };

    ContextMenu.prototype.show = function() {
        this.jObject.removeClass('commerc__map-context-menu_hidden').addClass('commerc__map-context-menu_visible');
    };

    ContextMenu.prototype.hide = function() {
        this.jObject.removeClass('commerc__map-context-menu_visible').addClass('commerc__map-context-menu_hidden');
    };

    ContextMenu.prototype.placeonMap = function(event) {
        var windowWidth = mapWindow.width();
        var windowHeight = mapWindow.height();
        var x = event.pixel.x + this.width > windowWidth ? windowWidth - this.width :  event.pixel.x;
        var y = event.pixel.y + this.height > windowHeight ? windowHeight - this.height : event.pixel.y;
        this.coordinates = {lat: event.latLng.lat(), lng: event.latLng.lng()};
        this.jObject.css({'top': y, 'left': x});
    };
    
    /* Constructor for contextual menu end */

    // Creation of origin and destination markers start
    function addMarker() {
        var marker;
        return {
            placeMarker: function(location) {
                if(marker) {
                    marker.setMap(null);
                }
                marker = new google.maps.Marker({
                    position: location, 
                    map: map
                });   
            },
            destroyMarker: function() {
                marker.setMap(null);
            }
        }
    }

    var originMarker = addMarker();
    var destinationMarker = addMarker();
    // Creation of origin and destination markers end

    // Route calculation sart
    function getRoute(directionsService, directionsDisplay, origin, destination) {
        if(mapState.originSelected && mapState.destinationSelected) {
            // Destroying markers that were created earlier
            originMarker.destroyMarker();
            destinationMarker.destroyMarker();
            // Making request for route
            directionsService.route({
                origin: origin,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            }, 
            function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    // Setting directions on map
                    directionsDisplay.setDirections(response);
                } else {
                    console.log('Directions request failed due to ' + status);
                }
            });
        }
    };
    // Route calculation end

     /* Constructor for image overlay start */
     function USGSOverlay(bounds, image, map) {

        // Initialize all properties.
        this.bounds_ = bounds;
        this.image_ = image;
        this.map_ = map;

        // Define a property to hold the image's div. We'll
        // actually create this div upon receipt of the onAdd()
        // method so we'll leave it null for now.
        this.div_ = null;

        // Explicitly call setMap on this overlay.
        this.setMap(map);
      }

      USGSOverlay.prototype = new google.maps.OverlayView();

      /**
       * onAdd is called when the map's panes are ready and the overlay has been
       * added to the map.
       */
      USGSOverlay.prototype.onAdd = function() {
        var div = document.createElement('div');
        div.style.borderStyle = 'none';
        div.style.borderWidth = '0px';
        div.style.position = 'absolute';


        // Create the img element and attach it to the div.
        var img = document.createElement('img');
        img.src = this.image_;
        img.style.width = '100%';
        img.style.height = '100%';
        img.style.position = 'absolute';

        div.appendChild(img);

        this.div_ = div;

        // Add the element to the "overlayLayer" pane.
        var panes = this.getPanes();
        panes.overlayLayer.appendChild(div);
      };

      USGSOverlay.prototype.draw = function() {

        this.getPanes().overlayLayer.style['zIndex'] = 2;

        // We use the south-west and north-east
        // coordinates of the overlay to peg it to the correct position and size.
        // To do this, we need to retrieve the projection from the overlay.
        var overlayProjection = this.getProjection();

        // Retrieve the south-west and north-east coordinates of this overlay
        // in LatLngs and convert them to pixel coordinates.
        // We'll use these coordinates to resize the div.
        var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
        var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());

        // Resize the image's div to fit the indicated dimensions.
        var div = this.div_;
        div.style.left = sw.x + 'px';
        div.style.top = ne.y + 'px';
        div.style.width = (ne.x - sw.x) + 'px';
        div.style.height = (sw.y - ne.y) + 'px';
      };

      // The onRemove() method will be called automatically from the API if
      // we ever set the overlay's map property to 'null'.
      USGSOverlay.prototype.onRemove = function() {
        this.div_.parentNode.removeChild(this.div_);
        this.div_ = null;
      };
        /* Constructor for image overlay end */

        // function processSVData(data, status) {
        //     if(status === 'OK') {
        //         console.log(data);
        //         console.log(data.location.latLng.lat(), data.location.latLng.lng());
        //         var lat = data.location.latLng.lat();
        //         var lng = data.location.latLng.lng();
        //         $.get('https://maps.googleapis.com/maps/api/streetview/metadata?size=100x100&location='+ lat + ','+ lng + '&key=AIzaSyA0WRmu5Uhzt_7zQTjiki6jyQhE1WNrFn8', function(res) {
        //             panoInfoWindow = new google.maps.InfoWindow({
        //                 position: data.location.latLng,
        //                 map: map,
        //                 content: '<img src="'+ data.takeDownUrl  +'"/>'
        //             });
        //             console.log(res);
        //         });
        //     }
        // };

                // map.addListener('mousemove', debounce(function(e) {
        //     if(mapState.panorama) {
        //         streetViewService.getPanorama({location: e.latLng, radius: 10}, function(data, status) {
        //             console.log(status);
        //             if(status === "OK") {
        //                 map.setOptions({ draggableCursor: 'pointer' });
        //             } else if(status === "ZERO_RESULTS"){
        //                 map.setOptions({ draggableCursor: 'url(http://maps.google.com/mapfiles/openhand.cur), move' });
        //             }
        //         })
        //     }
        // }, 100));

        // Porcess response from click on panorama lines, show window which is hidden, and initialise panoram in it
        function processSVData(data, status) {
            if(status === 'OK') {
                panorama = new google.maps.StreetViewPanorama(
                    mapContainer, {
                        position: data.location.latLng,
                        pov: {
                            heading: 34,
                            pitch: 10
                        },
                        addressControlOptions: {
                            position: google.maps.ControlPosition.BOTTOM_LEFT
                        },
                        enableCloseButton: true
                    });
                map.setStreetView(panorama);
            }
        };
    


    // JS Event debounce function start
    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, 
            args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };
    // JS Event debounce function end

    // Getting corret urls for polygons start
    //var lastUrlPart = window.location.pathname.split('/').length - 2;
    //var correctUrl = window.location.href.replace('/'+window.location.pathname.split('/')[lastUrlPart], '');
    var testUrl = window.location.pathname;
    // Getting corret urls for polygons end


    // Building polygons coordinates start
    function PolygonWithInfo(coordinates, color, type, url) {
        this.polygon = new google.maps.Polygon({
            path: coordinates,
            strokeColor: color,
            strokeOpacity: 0.4,
            strokeWeight: 1,
            fillColor: color,
            fillOpacity: 0.4
        });
        this.type = type;
        this.url = testUrl + url || '#';
    };

    // Building 3 Medicine
    var building3MedicineCoords = [
        {lat:50.47963666779806,lng:30.53475804961522},
        {lat:50.47963666779806,lng:30.53498335517247},
        {lat:50.4791621666206,lng:30.534986037381486},
        {lat:50.47916387346791,lng:30.535951632626848},
        {lat:50.479008550110784,lng:30.535954314835863},
        {lat:50.47901196381646,lng:30.53475268519719}
    ];

    var building3Medicine = new PolygonWithInfo(building3MedicineCoords, colors.medicine, 'medicine', urls.building3.medicine);
    buildingsArray.push(building3Medicine);

    // Building 3 office
    var building3OfficeCoordinates = [
        {lat:50.47963585305249,lng:30.535716531236744},
        {lat:50.47963585305249,lng:30.535952565630055},
        {lat:50.4791698861029,lng:30.53594988342104},
        {lat:50.47917159294994,lng:30.53571921344576}
    ];
    var building3Office = new PolygonWithInfo(building3OfficeCoordinates, colors.office, 'office', urls.building3.office);
    buildingsArray.push(building3Office);

    // Buidling 3 trade
    var building3TradeCoordinates = [
        {lat:50.479784193917205,lng:30.5347568768384},
        {lat:50.479782487092294,lng:30.535953142059043},
        {lat:50.47964594090029,lng:30.535953142059043},
        {lat:50.479647647730125,lng:30.53475151242037}
    ];
    var buidling3Trade = new PolygonWithInfo(building3TradeCoordinates, colors.trade, 'trade', urls.building3.trade);
    buildingsArray.push(buidling3Trade);

    // Building 9 tade
    var building9TradeCoordinates = [
        {lat:50.48035204021527,lng:30.534750404754618},
        {lat:50.480350333410875,lng:30.534989121356944},
        {lat:50.480148930059215,lng:30.534994485774973},
        {lat:50.4801523436825,lng:30.535713317790965},
        {lat:50.480343506192675,lng:30.535713317790965},
        {lat:50.480340092583184,lng:30.535943987766245},
        {lat:50.479986782669435,lng:30.535954716602305},
        {lat:50.47999360993916,lng:30.534755769172648}
    ];
    var buidling9Trade = new PolygonWithInfo(building9TradeCoordinates, colors.trade, 'trade', urls.building9.trade);
    buildingsArray.push(buidling9Trade);

    //Building 9 office right  
    var building9OfficeRightCoordinates = [
        {lat:50.480351613035175,lng:30.53571599999998},
        {lat:50.48062128735823,lng:30.53571599999998},
        {lat:50.48062128735823,lng:30.535943987766245},
        {lat:50.480353319839544,lng:30.53594666997526}
    ];
    var building9OfficeRight = new PolygonWithInfo(building9OfficeRightCoordinates, colors.office, 'office', urls.building9.office);
    buildingsArray.push(building9OfficeRight);

    //Building 9 office left  
    var building9OfficeLeftCoordinates = [
        {lat:50.480358440252225,lng:30.534753086963633},
        {lat:50.480626407741894,lng:30.534755769172648},
        {lat:50.480624700947395,lng:30.53497571031187},
        {lat:50.480358440252225,lng:30.534978392520884}
    ];
    var building9OfficeLeft = new PolygonWithInfo(building9OfficeLeftCoordinates, colors.office, 'office', urls.building9.office);
    buildingsArray.push(building9OfficeLeft);

    //Building 9 restaraunt
    var building9RestarauntCoordinates = [
        {lat:50.48076423167253,lng:30.534761133590678},
        {lat:50.48076081809344,lng:30.53594130555723},
        {lat:50.4806242747278,lng:30.535943987766245},
        {lat:50.48062939511114,lng:30.534755769172648}
    ];
    var building9Restaraunt = new PolygonWithInfo(building9RestarauntCoordinates, colors.restaraunt, 'restaraunt', urls.building9.restaraunt);
    buildingsArray.push(building9Restaraunt);

    // Building 5 educational complex
    var building5EducationalCoordiantes = [
        {lat:50.47978298141281,lng:30.533551586091676},
        {lat:50.479786395062504,lng:30.534450126111665},
        {lat:50.4796549693707,lng:30.534455490529695},
        {lat:50.47965326254114,lng:30.533546221673646}
    ];
    var building5Educational = new PolygonWithInfo(building5EducationalCoordiantes, colors.educational, 'educational-center', urls.building5.educational);
    buildingsArray.push(building5Educational);

    // Building polygons coordinates end
    google.maps.event.addDomListener(window, 'load', initMap);

})();