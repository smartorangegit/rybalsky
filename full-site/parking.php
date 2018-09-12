<?php  include_once('include/lang.php'); ?>

<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['kv-mes-description-11']; ?>">
  <title><?=$mes['kv-mes-title-11']?></title>
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
</head>
<style media="screen">
  footer{ margin-top: 0;}
</style>
<body>
  <div class="parking">
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <div class="loader">
       <div class="loader__background">
           <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
        </div>
    </div>
    <div class="parking__hero">
      <h1 class="parking__hero-heading"><?=$mes['parking-heading']?></h1>
    </div>
    <div class="parking__container parking__container_1">
      <div class="parking__text">
          <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-1']?></h2>
          <p><?=$mes['parking-text-1']?></p>
      </div>
      <div class="parking__image"></div>
    </div>
    <div class="parking__container parking__container_2">
        <div class="parking__image"></div>
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-2']?></h2>
            <p><?=$mes['parking-text-2']?></p>
        </div>
    </div>
    <div class="parking__container parking__container_3">
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-3']?></h2>
            <p><?=$mes['parking-text-3']?></p>
        </div>
        <div class="parking__image"></div>
    </div>
    <div class="parking__container parking__container_4">
        <div class="parking__image"></div>
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-4']?></h2>
            <p><?=$mes['parking-text-4']?></p>
        </div>
    </div>
    <div class="parking__container parking__container_5">
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-5']?></h2>
            <p><?=$mes['parking-text-5']?></p>
        </div>
        <div class="parking__image"></div>
    </div>
    <div class="parking__container parking__container_6 parking__container_last">
        <div class="parking__image"></div>
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-6']?></h2>
            <p><?=$mes['parking-text-6']?></p>
        </div>
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
  <!-- Google Tag Manager (noscript) -->
 
 <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
 <?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>
 
</body>
</html>
