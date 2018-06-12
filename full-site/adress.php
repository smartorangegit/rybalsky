<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$mes['p-mes-description'];?>">
	<title><?=$mes['p-mes0']?></title>
	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'> -->
	<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
	<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
	<script src="/js/scroll/jquery-2.1.4.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
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
	<script src="/js/scripts.js"></script>	<!-- <link rel="stylesheet" href="/css/reset.css"> -->
</head>
<body>
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
	</style>
	<div class="header_map">
	      <div id="map">
	      <script type="text/javascript">
				
				if(window.innerWidth  <= 767) {
					var SS = {lat:50.471682, lng:30.532716};
				} else {
					var SS = {lat:50.481682, lng:30.532716};
				}
	            var map;
	            function initMap() {
	              var myLatLng = {lat: 50.480697, lng: 30.532861};
	              var mobileCenter = {lat:50.471682, lng:30.532716};
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
											'<a class="adress-pdf-file-link" href="http://kga.gov.ua/images/rbl_16_02_22_urban_concept_pres_opt2.pdf"><img src="/img/adress/pdf-icon.png"></a>'+
	                    '<p id="mapN"><?=$mes['p-mes6']?></p>'+
	                      '</div></div>';

	                    //  var infowindow = new google.maps.InfoWindow({
	                    //     content: contentString
											// 	});
												
												var infoBubble = new InfoBubble({
													content: contentString,
													borderRadius: 120,
													minWidth: 240,
													maxWidth: 240,
													minHeight: 240,
													maxHeight: 240,
													backgroundColor: '#0135ab',
													borderColor: '#0135ab',
													padding: 0,
													arrowPosition: 0
												});

												infoBubble.setBubbleOffset(80,200);

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
	                        infoBubble.open(map, marker);
	                      });
						/*
						  marker.addListener('mouseover', function() {

	                        infowindow.open(map, marker);
							 infowindow.setContent(contentString)

	                      });
						  marker.addListener('mouseout', function() {
              infowindow.close();
            });

						  */
	                    }
	              /**/
				</script>
				<script src="/js/infobubble.js"></script>
	      <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0WRmu5Uhzt_7zQTjiki6jyQhE1WNrFn8&amp;callback=initMap"></script>

	      </div>
	        <div class="wrap_header map">
	          <div class="map-wrap">
							<?php /*Меню*/ include_once('include/top-menu.php'); ?>

	            <div class="wrap_map_pop">
	              <div id="pop-map" class="map-pop-up">
	                <!-- <div id="map-close" class="map-up-close">
	                  <img <?AltImgAdd($mes['p-mes1'])?>  src="/img/icons/close-bold.svg" alt="close" width="20px" />
	                </div> -->
	                <div class="logo-name vp blue">
	                  <h1 class="block__name"><?=$mes['p-mes1']?></h1>
										<div class="text__block">
											<p><?=$mes['p-mes3']?></p>
										</div>
	                </div>
	              </div>
	            </div>

	              <div class="header-bottom" >
	                  <div class="map_flex">
					  				<a class="nomobile" href="/<?=$_POST['lang']?>">
	                    <div class="logo nomobile"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-w-".(substr($_POST['lang'], 0, 2));?>.png"  /></div>
										</a>
	                    <div class="map_flex_items clearfix">
	                      <div class="map-min">5</div>
	                      <div class="app-text"><?=$mes['p-mes4']?></div>
	                      <div class="app_com"><?=$mes['p-mes5']?></div>
	                    </div>
	                    <div class="map_flex_items clearfix">
	                      <div class="map-min">5</div>
	                      <div class="app-text"><?=$mes['p-mes4']?></div>
	                      <div class="app_com"><?=$mes['p-mes11']?></div>
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
	              <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
	            </div>
				<a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
	            <span><?=$mes['v02']?></span>
	          </div>
	        </footer>
	      </div>

		<!-- <a href="#0" class="modal-close"><img src="/img/icons/close-bold.svg" alt="close" width="40px"/></a> -->
<style media="screen">
	h1{margin: auto;}
	.logo.nomobile, .top-menu {
	  pointer-events: all;
	}
	#siteNotic {
		width: 100%;
		height: 100%;
		text-align: center;
		padding: 0;
	}
	#mapN {
		display: block;
		color: #ffffff;
		margin: 35px auto 0px auto;
		width: 128px;
	}
	.adress-pdf-file-link {
		display: block;
		margin-top: 25px;
	}
	@media only screen and (max-width:768px) {
		.map_flex a {
			display: none;
		}
		footer {
			position: static;
		}
	}
</style>
	<script type="text/javascript">
	// $(document).ready(function(){
	$('.header-bottom').click(function(){
		$('#pop-map').css('right','-20px').css('opacity','0').css('display','none');
		$('.wrap_header.map').css('pointer-events','none');
		$('.my_menu').css('pointer-events','auto');
	});
	// });



	</script>

<script src="/flipclock.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>
