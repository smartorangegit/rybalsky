<?php  include_once('include/lang.php'); ?>

<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['events-description']; ?>">
  <title><?=$mes['events-title']?></title>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
	<?php //alternateAdd($_SERVER["REQUEST_URI"]);
	   $url_origin = $_SERVER["REQUEST_URI"];
	   $url_str = explode("/",$url_origin);
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){ ?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo substr($url_origin, 3);?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo substr($url_origin, 3);   ?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo substr($url_origin, 3);   ?>" />
   <?php }
	else {?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo $url_origin;?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo $url_origin;?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo $url_origin;?>" />
   <?php }
	?>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="/js/jquery-1.12.0.min.js"></script>
  <script src="/js/scripts.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/events.css" />
</head>
<style media="screen">
  footer{ margin-top: 0;}
</style>
<body>
  <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <div class="loader">
       <div class="loader__background">
           <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
        </div>
    </div>

<div class="events">
  <div class="events_header">
    <h1><?=$mes['events-h1']; ?></h1>

  </div>
  <div class="events_wrapper">

    <section class="events_item">
      <div class="events_image">
        <img src="/img/events/ev_1.jpg" alt="<?=$mes['events-h1'];?>">
      </div>
      <div class="events_descr">
        <div class="text__block">
          <p>
            <?=$mes['events-1']; ?>
          </p>
        </div>
      </div>
    </section>
    <section class="events_item">
      <div class="events_image">
        <img src="/img/events/ev_2.jpg" alt="<?=$mes['events-h1'];?>">
      </div>
      <div class="events_descr">
        <h2 class="block__name"><?=$mes['events-2']; ?></h2>
        <div class="text__block">
          <?=$mes['events-3']; ?>
        </div>
      </div>
    </section>
    <section class="events_item">
      <div class="events_image">
        <img src="/img/events/ev_3.jpg" alt="<?=$mes['events-h1'];?>">
      </div>
      <div class="events_descr">
        <h2 class="block__name"><?=$mes['events-4'];?></h2>
        <div class="text__block">
          <p>
            <?=$mes['events-5']; ?>
          </p>
        </div>
      </div>
    </section>
    <section class="events_item">
      <div class="events_image events_img_gallery">
        <div class=""><img src="/img/events/ev_gal1.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal2.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal3.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal4.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal5.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal6.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal7.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal8.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal9.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal10.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal11.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal12.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal13.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal14.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal15.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal16.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal17.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal18.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal19.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal20.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal21.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal22.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal23.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal24.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal25.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal26.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal27.jpg" alt="<?=$mes['events-h1'];?>"></div>
        <div class=""><img src="/img/events/ev_gal28.jpg" alt="<?=$mes['events-h1'];?>"></div>


      </div>
      <div class="events_descr">
        <h2 class="block__name"><?=$mes['events-6']; ?></h2>
        <div class="blue_button" id="call_ma_please_events"><?=$mes['events-7']; ?></div>
      </div>
    </section>

  </div>

</div>
  <footer>
<<<<<<< HEAD
    <div class="foot-wrap">
      <div class="allright">
        <p><?=$mes['v01']?></p>
      </div>
      <div class="web">
        <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png" width="55px" /></a>
      </div>
      <a class="footer__jurdoc_link" href="<?=$mes['events_url_documents']?>" ><?=$mes['jur-mes-menu']?></a>
      <span><?=$mes['v02']?></span>
    </div>
=======
          <div class="foot-wrap">
            <div class="allright">
               <p>
                 <?=$mes['v01']?>
                </p>
            </div>
            <div class="web">
              <a href="https://smarto.agency/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartorOrange')?>  src="/img/logo-smart.png" /></a>
            </div>
			<a class="footer__jurdoc_link" href="<?=$mes['events_url_documents']?>"><?=$mes['jur-mes-menu']?></a>
            <a href="https://smarto.agency/" rel="nofollow" target="_blank" class="smarto_agency"><span><?=$mes['v02']?></span></a>
          </div>
>>>>>>> 09eaf810a8dda434a0968fe6ed6f8ff751fb0307
  </footer>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
  <?php /*Залишити заявку на проведення заходу*/ include_once('include/call_events.php'); ?>

 <?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>
 <script src="/js/bxslider.js"></script>
 <script type="text/javascript">
 $(function(){
  $('.events_img_gallery').bxSlider({
    mode: 'fade',
	nextText: '<span class="bxSlider__custom-controls_arrow bxSlider__custom-controls_arrow_right"></span>',
    prevText: '<span class="bxSlider__custom-controls_arrow bxSlider__custom-controls_arrow_left"></span>',
	/* touchEnabled: false, */
	controls: true

  });
});

</script>
<style>

.bx-prev, .bx-next {
  line-height: 40px;
  text-align: center;
  bottom: 20px;
  right: 70px;
  border-radius: 3px;
  background: white;
  text-decoration: none;
  background-color: rgba(0, 57, 168, .5);
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all .5s;
}
.bx-next {right: 20px;}
.bx-prev:before, .bx-next:before {
  font-size: 16px;
  color: #9a9a9a;
  font-family: "FontAwesome";
}
.bx-prev:before {content: "\f104";}
.bx-next:before {content: "\f105";}

.bxSlider__custom-controls_arrow {
    width: 17px;
    height: 28px;
    background-image: url(/img/gallery/arrows-spritesheet.png);
    background-repeat: no-repeat;
}
.bxSlider__custom-controls_arrow_right {
    background-position: right;
}
.bxSlider__custom-controls_arrow_left {
    background-position: left;
}
.events_li {
  font-family: "PFDinTextUniversal-Light";
  line-height: 1.5;
  text-align: left;
  letter-spacing: 1px;
  font-size: 16px;
}
</style>
</body>
</html>
