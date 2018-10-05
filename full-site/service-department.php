<?php  include_once('include/lang.php'); ?>

<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['service-description']?>">
  <title><?=$mes['service-title']?></title>
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
  <link rel="stylesheet" type="text/css" href="/css/kvartira.css" />
  <link rel="stylesheet" type="text/css" href="/css/service-department.css" />
</head>
<style media="screen">
  footer{ margin-top: 0;}
</style>
<body>
  <div class="parking">
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <div class="loader">
       <div class="loader__background">
           <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png" alt="<?=$mes['service-h1']?>" title="<?=$mes['service-h1']?>"></div>
        </div>
    </div>
    <div class="parking__hero service__hero">
      <h1 class="parking__hero-heading"><?=$mes['service-h1']?></h1>
    </div>
    <div class="parking__container parking__container_1 parking__container_last">
      <div class="parking__text">
          <div class="parking__sub-heading"></div>
          <?=$mes['service-text-1']?>
      </div>
      <div class="parking__image parking__image_1">
  		  <img src="/img/service-department/service-department-1.jpg" alt="<?=$mes['service-h1']?>" title="<?=$mes['service-h1']?>">
  	  </div>
    </div>

    <div class="services-container">
      <h2 class="parking__sub-heading services__heading">
       <?=$mes['service-text-2']?>
      </h2>
      <ul class="services-list">
        <li class="services-list__item">
          <div class="services-list__icon services-list__icon_1"></div>
          <p class="parking__text services-list__text">
             <?=$mes['service-text-3']?>
          </p>
        </li>
        <li class="services-list__item">
          <div class="services-list__icon services-list__icon_2"></div>
          <p class="parking__text services-list__text">
             <?=$mes['service-text-4']?>
          </p>
        </li>
        <li class="services-list__item">
          <div class="services-list__icon services-list__icon_3"></div>
          <p class="parking__text services-list__text">
             <?=$mes['service-text-5']?>
          </p>
        </li>
        <li class="services-list__item">
          <div class="services-list__icon services-list__icon_4"></div>
          <p class="parking__text services-list__text">
             <?=$mes['service-text-6']?>
          </p>
        </li>
      </ul>
    </div>

    <div class="services-contact">
      <ul class="services-contact-list">
        <li class="services-contact-list__item">
          <p class="services-contact-list__text">
             <?=$mes['service-text-7']?>
          </p>
          <a href="tel:+380444940400" class="services-contact-list__link services-contact-list__link_phone">(044) 494-04-00</a>
          <a href="tel:+3800671021040" class="services-contact-list__link services-contact-list__link_phone">(067) 102-10-40</a>
        </li>
        <li class="services-contact-list__item">
          <p class="services-contact-list__text">
            <span class="services-contact-list__text_medium"> <?=$mes['service-text-8']?>
          </p>
          <p class="services-contact-list__text">
            <span class="services-contact-list__text_medium">Email:</span> <a class="services-contact-list__link" href="mailto:service@saga-development.com.ua"> service@saga-development.com.ua</a>
          </p>
        </li>
      </ul>
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
      <a class="footer__jurdoc_link" href="<?=$mes['events_url_documents']?>"><?=$mes['jur-mes-menu']?></a>
      <span><?=$mes['v02']?></span>
    </div>
  </footer>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
  <!-- Google Tag Manager (noscript) -->
 
 <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
 <?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>

</body>
</html>
