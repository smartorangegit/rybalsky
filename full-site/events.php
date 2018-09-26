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
        <img src="/img/events/ev_1.jpg" alt="">
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
        <img src="/img/events/ev_2.jpg" alt="">
      </div>
      <div class="events_descr">
        <p class="block__name"><?=$mes['events-2']; ?></p>
        <div class="text__block">
          <?=$mes['events-3']; ?>
        </div>
      </div>
    </section>
    <section class="events_item">
      <div class="events_image">
        <img src="/img/events/ev_3.jpg" alt="">
      </div>
      <div class="events_descr">
        <p class="block__name"><?=$mes['events-4'];?></p>
        <div class="text__block">
          <p>
            <?=$mes['events-5']; ?>
          </p>
        </div>
      </div>
    </section>
    <section class="events_item">
      <div class="events_image events_img_gallery">
        <div class=""><img src="/img/events/ev_gal1.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal2.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal3.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal4.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal5.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal6.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal7.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal8.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal9.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal10.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal11.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal12.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal13.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal14.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal15.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal16.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal17.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal18.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal19.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal20.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal21.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal22.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal23.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal24.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal25.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal26.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal27.jpg" alt="Rybalsky Простір для івентів"></div>
        <div class=""><img src="/img/events/ev_gal28.jpg" alt="Rybalsky Простір для івентів"></div>


      </div>
      <div class="events_descr">
        <p class="block__name"><?=$mes['events-6']; ?></p>
        <div class="blue_button"><?=$mes['events-7']; ?></div>
      </div>
    </section>

  </div>

</div>
  <footer>
    <div class="foot-wrap">
      <div class="allright">
        <p><?=$mes['v01']?></p>
      </div>
      <div class="web">
        <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png" width="55px" /></a>
      </div>
      <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
      <span><?=$mes['v02']?></span>
    </div>
  </footer>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>

 <?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>
 <script src="/js/bxslider.js"></script>
 <script type="text/javascript">
 $(function(){
  $('.events_img_gallery').bxSlider({
    mode: 'fade',
    nextText: '',
    prevText: ''

  });
});

 </script>

</body>
</html>
