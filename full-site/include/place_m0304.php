<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$mes['p-mes-description'];?>">
	<title><?=$mes['p-mes1']?></title>
	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
	<script src="/js/scroll/jquery-2.1.4.js"></script>
	<script src="https://vjs.zencdn.net/5.11.9/video.js"></script>
	<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<![endif]-->
	<link href="https://vjs.zencdn.net/5.11.9/video-js.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="/css/scroll.css" /> -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/css/menu.css" />
	<script src="/js/scroll/modernizr.js"></script>
	<link rel="stylesheet" href="/css/normalize.css">
	 <!-- CSS reset -->
	<!-- <link rel="stylesheet" href="/css/modal.css"> -->
	<link rel="stylesheet" href="/css/modal.css"> <!-- Resource style -->
	<link rel="stylesheet" href="/css/style.css">
	<?php
	   $url_origin = $_SERVER["REQUEST_URI"];
	   $url_str = explode("/", $url_origin);
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){ ?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo substr($url_origin, 3);?>" />
    <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo substr($url_origin, 3);   ?>" />
    <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo substr($url_origin, 3);?>" />
	<?php }
	else {?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo $url_origin;?>" />
    <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo $url_origin;?>" />
    <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo $url_origin;?>" />
	<?php } ?>
	<script src="/js/scroll/modernizr.js"></script> <!-- Modernizr -->

	<title><?=$mes['p-mes1']?></title>
	<!-- <script type="text/javascript">
	$(function() {
		var BV = new $.BigVideo({useFlashForFirefox:false});
		BV.init();
		BV.show('/video/shutterstock_v4692824.mp4', {altSource:'/video/river.ogv'});
});

	</script> -->
	<script src="/js/scripts.js"></script>	<!-- <link rel="stylesheet" href="/css/reset.css"> -->
</head>
<body style = "height=100%">
	<div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
	<style media="screen">
		body {
			overflow: hidden;
		}
		.wrap_header.map{
			pointer-events: auto;
		}
#siteNotic{
    width: 635px;
    /* background: #fc0; */
    padding: 5px;
    /*border: solid 3px black;*/
    float: left;
    position: relative;
    /* top: 40px; */
    left: 0;
    height: 100px;
}
#b_mp{
font-family: "PFDinTextUniversal-Light";
    color: #0032af;
    font-size: x-large;
}
#mapN{
    color:#0032af;
    font-size: 20px;
    font-weight: bold;
    font-family: "PFDinTextUniversal-Light";
}

	</style>

			<div class="header_map">
	      <div id="map">
	      <script type="text/javascript">
	            var map;
	            function initMap() {
	              var myLatLng = {lat: 50.480697, lng: 30.532861};
	              var SS = {lat:50.481682, lng:30.532716};/*{lat:50.406493, lng: 30.519515};*///50.481682, 30.532716   lat: 50.475266, lng: 30.514760
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
	                draggable: true,
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
	                  '<div id="siteNotic">'+
	                    '<a id="mapN"><?=$mes['p-mes6']?></a></br></br>'+
	                    '<b ><a id="b_mp" href="http://kga.gov.ua/images/rbl_16_02_22_urban_concept_pres_opt2.pdf">kga.gov.ua/images/rbl_16_02_22_urban_concept_pres_opt2.pdf</a></b>'+
	                      '</div></div>'
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
	                        icon: '/img/icons/a.png'

	                      });

	                      marker.addListener('click', function() {
	                        infowindow.open(map, marker);

	                      });
	                    }
	              /**/
	      </script>
	      <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0WRmu5Uhzt_7zQTjiki6jyQhE1WNrFn8&amp;callback=initMap"></script>

	      </div>
	        <div class="wrap_header map">
	          <div class="map-wrap">
							<?php /*Меню*/ include_once('include/top-menu.php'); ?>

	           <div class="clearfix"></div>
	            <!-- <div class="build-name"><h1><?=$mes['p-mes1']?></h1> </div> -->

	            <div class="wrap_map_pop">

	              <div id="pop-map" class="map-pop-up">
	                <!-- <div id="map-close" class="map-up-close">
	                  <img <?AltImgAdd($mes['p-mes1'])?>  src="/img/icons/close-bold.svg" alt="close" width="20px" />

	                </div> -->
	                <div class="logo-name vp blue">
	                  <p class="main-text vp"><h1><?=$mes['p-mes1']?></h1></p>
	                  <p class="bottom-text vp"><?=$mes['p-mes3']?></p>
	                </div>
	              </div>
	            </div>

	              <div class="header-bottom" >
	                  <div class="map_flex">
					  				<a class="nomobile" href="/">
	                    <div class="logo nomobile"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  /></div>
										</a>
	                    <div class="map_flex_items clearfix">
	                      <div class="map-min">5</div>
	                      <div class="app-text"><?=$mes['p-mes4']?></div>
	                      <div class="app_com"><?=$mes['p-mes5']?></div>
	                    </div>
	                    <div class="map_flex_items clearfix">
	                      <div class="map-min">5</div>
	                      <div class="app-text"><?=$mes['p-mes4']?></div>
	                      <div class="app_com"><?=$mes['p-mes6']?></div>
	                    </div>
	                    <div class="map_flex_items clearfix">
	                      <div class="map-min">7</div>
	                      <div class="app-text"><?=$mes['p-mes4']?></div>
	                      <div class="app_com"><?=$mes['p-mes7']?></div>
	                    </div>
	                    <div class="map_flex_items last clearfix">
	                      <div class="map-min">10</div>
	                      <div class="app-text"><?=$mes['p-mes4']?></div>
	                      <div class="app_com"><?=$mes['p-mes8']?></div>
	                    </div>
	                  </div>
	                </div>
	            </div>
	        </div>

	        <footer>
	          <div class="foot-wrap">
	            <div class="allright"><p> <?=$mes['v01']?></p></div>
	            <div class="web">
	              <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png" alt="smart" width="55px" /></a>
	            </div>
	            <span><?=$mes['v02']?></span>
	          </div>
	        </footer>
	      </div>

		<!-- <a href="#0" class="modal-close"><img src="/img/icons/close-bold.svg" alt="close" width="40px"/></a> -->
<style media="screen">
	.map_flex a{
		display: block;
    position: relative;
    width: 180px;
    margin-right: 20px;
    height: 237px;
	}
	.logo.nomobile {
		position: absolute;
    z-index: 333;
    pointer-events: all;
	}
</style>
	<script type="text/javascript">
	// $(document).ready(function(){
	$('.header-bottom').click(function(){
		$('#pop-map').css('right','-20px').css('opacity','0').css('display','none');
		$('.wrap_header.map').css('pointer-events','none');
	});
	// });
	</script>
<script src="/js/scroll/jquery-2.1.4.js"></script>
<script src="/js/bigvideo.js"></script>
<script src="/js/svg-modal-window/js/snap.svg-min.js"></script>
<script src="/js/svg-modal-window/js/main.js"></script> <!-- Resource jQuery -->


</body>
</html>
