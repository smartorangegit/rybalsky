
  var map;
  function initMap() {
    var myLatLng = {lat: 50.480697, lng: 30.532861};
    var SS = {lat: 50.480266, lng: 30.536760};/*{lat:50.406493, lng: 30.519515};*/
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      zoomControl: false,
      scaleControl: false,
      scrollwheel: false,
      disableDoubleClickZoom: true,
      center: SS,
      scrollwheel: false,
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      draggable: false,
      styles: [
        {
    "featureType": "all",
    "elementType": "all",
    "stylers": [
        {
            "hue": "#008eff"
        }
    ]
},
{
    "featureType": "poi",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
},
{
    "featureType": "road",
    "elementType": "all",
    "stylers": [
        {
            "saturation": "0"
        },
        {
            "lightness": "0"
        }
    ]
},
{
    "featureType": "transit",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
},
{
    "featureType": "water",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "simplified"
        },
        {
            "saturation": "-60"
        },
        {
            "lightness": "-20"
        }
    ]
}
]
});

var contentString = '<div id="content">'+
  '<div id="siteNotice">'+
  '<img  src="http://brist.webiart.com.ua/mt-content/uploads/2016/10/thumbnails/logo_s_125x85.png" alt="альтернативный текст">'+
  '<p><b></b>вулиця В. Лобановського, 146Б</b>'+
  '</div>'
  //http://brist.webiart.com.ua/mt-content/uploads/2016/10/thumbnails/logo_s_125x85.png
  ;

  var infowindow = new google.maps.InfoWindow({

content: contentString
});

var marker = new google.maps.Marker({
//icon: 'http://brist.webiart.com.ua/mt-content/uploads/2016/10/logo3.png',
position: myLatLng,
map: map,
title: 'Мы',
//animation: google.maps.Animation.BOUNCE,
//label: 'B',
//fillColor : 'black'
icon: 'a.png'

});

marker.addListener('click', function() {
infowindow.open(map, marker);

});
}

/**/
