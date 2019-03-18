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
          <div class="parking__sub-heading"></div>
          <?=$mes['parking-text-1']?>
      </div>
      <div class="parking__image parking__image_1">
		<img src="/img/parking/parking_1.jpg" alt="<?=$mes['parking-sub-heading-1']?>" title="<?=$mes['parking-sub-heading-1']?>">
	  </div>
    </div>
    <div class="parking__container parking__container_2">
        <div class="parking__image parking__image_2">
			<img src="/img/parking/parking_2.jpg" alt="<?=$mes['parking-sub-heading-2']?>" title="<?=$mes['parking-sub-heading-2']?>">
		</div>
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-2']?></h2>
            <?=$mes['parking-text-2']?>
        </div>
    </div>
    <div class="parking__container parking__container_3">
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-3']?></h2>
            <?=$mes['parking-text-3']?>
        </div>
        <div class="parking__image parking__image_3">
			<img src="/img/parking/parking_4.jpg" alt="<?=$mes['parking-sub-heading-3']?>" title="<?=$mes['parking-sub-heading-3']?>">
		</div>
    </div>
    <div class="parking__container parking__container_4">
        <div class="parking__image parking__image_4">
			<img src="/img/parking/parking_6.jpg" alt="<?=$mes['parking-sub-heading-4']?>" title="<?=$mes['parking-sub-heading-4']?>">
		</div>
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-4']?></h2>
            <?=$mes['parking-text-4']?>
        </div>
    </div>
    <div class="parking__container parking__container_5">
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-5']?></h2>
            <?=$mes['parking-text-5']?>
        </div>
        <div class="parking__image parking__image_5">
		<img src="/img/parking/parking_3.jpg" alt="<?=$mes['parking-sub-heading-5']?>" title="<?=$mes['parking-sub-heading-5']?>">
		</div>
    </div>
    <div class="parking__container parking__container_6 parking__container_last">
        <div class="parking__image parking__image_6">
			<img src="/img/parking/parking_5.jpg" alt="<?=$mes['parking-sub-heading-6']?>" title="<?=$mes['parking-sub-heading-6']?>">
		</div>
        <div class="parking__text">
            <h2 class="parking__sub-heading"><?=$mes['parking-sub-heading-6']?></h2>
            <?=$mes['parking-text-6']?>
        </div>
    </div>
        <div class="call-button button-flat">
          <a href="/<?=$_POST['lang']?>kvartira/"><?=$mes['menu-mes7']?></a>
		  <style>
		  .button-flat {
			display: block;
			width: 100%;
			max-width: 250px;
			margin: 20px auto;
		  }
		  </style>
        </div>
	</div>
  <footer>
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
  </footer>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
  <!-- Google Tag Manager (noscript) -->
 
 <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
 <?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>

</body>
</html>
