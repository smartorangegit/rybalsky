<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['a-mes-description']; ?>">
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <title> <?=$mes['a-mes0']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
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
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
  </head>
  <body>
    <div class="loader">
      <div class="loader__background">
        <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
      </div>
    </div>
    <section class="vp_one trade_one">
          <?php /*Меню*/ include_once('include/top-menu.php'); ?>

          <h1><?=$mes['menu-mes30']?></h1>
    </section>


    <main class="office-main">
      <div class="main-container">
        <div class="content">
          <div class="content-descript">
            <!-- <p class="content__heading"><?=$mes['o-mes12']?></p> -->
            <p class="content__text"><?=$mes['o-mes13']?></p>
            <p class="content__text"><?=$mes['o-mes14']?></p>
            <p class="content__text"><?=$mes['o-mes15']?></p>
          </div>
          <div class="content-image-wrap">
            <img src="/img/commercial/trade_1.jpg" alt="image" class="content__image">
          </div>
        </div>

      </div>
    </main>
	<div class="other_link__box">
      <p><?=$mes['cp-text46']?></p>
      <ul>
        <li class="bold__link">
          <img src="/img/commercial/sale_min.jpg" alt="">
          <a href="<?=$l?>kommercheskaya/">
          <?=$mes['pl-mes1-kom']?></a></li>
        <li class="bold__link">
          <img src="/img/commercial/rent_min.jpg" alt="">
          <a href="<?=$l?>commercial-lease/">
          <?=$mes['pl-mes1-ar']?></a></li>
        <li>
          <img src="/img/commercial/office_min.jpg" alt="">
          <a href="<?=$l?>office/">
          <?=$mes['cp-text2']?></a></li>
      <?  /* <li>
          <img src="/img/commercial/trade_min.jpg" alt="">
          <a href="<?=$l?>trading/">
          <?=$mes['cp-text3']?></a></li> */ ?>
        <li>
          <img src="/img/commercial/medicine_min.jpg" alt="">
          <a href="<?=$l?>medicine/">
          <?=$mes['cp-text4']?></a></li>
        <li>
          <img src="/img/commercial/rest_min.jpg" alt="">
          <a href="<?=$l?>restaurant/">
          <?=$mes['cp-text1']?></a></li>
      </ul>
	  <style>
@media only screen and (max-width:1024px){
    .other_link__box li {
    width: 45%;
	}
	.other_link__box{
		padding-left: 43px;
	}
 }
 @media only screen and (max-width:768px){
   .other_link__box li {
		width: 90%;
		font-size: 16px;
	}
	.other_link__box{
		padding-left: 39px;
	}
	.main-container {
		padding-left: 35px;
	}
		.content__text {
		text-align: justify;
	}
 }
	  </style>
    </div>
      <footer>
        <div class="foot-wrap">
          <div class="allright">
            <p>
              <?=$mes['v01']?>
            </p>
          </div>
          <div class="web">
            <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>    src="/img/logo-smart.png" width="55px" /></a>
          </div>
          <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
          <span><?=$mes['v02']?></span>
        </div>
      </footer>

    <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
    <script src="/js/callback.js"></script>
    <script src="/flipclock.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>
