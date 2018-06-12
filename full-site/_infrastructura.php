<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['v02-description']; ?>">
  <title><?=$mes['in-mes0']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <!-- <link rel="stylesheet" type="text/css" href="/css/scroll.css" /> -->
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
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  </head>
  <body>

    <section class="cd-section visible infra_section infra1_section">
      <div class="header infra1 vl1">
        <div class="loader">
          <div class="loader__background">
            <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
          </div>
        </div>
        <div class="wrap_header">
          <?php /*Меню*/ $page="aqua"; include_once('include/top-menu.php'); ?>

	        <?php /*Меню Стрелки include_once('include/arrow.php');*/ ?>
          <div class="header-bottom">
            <div class="logo">
              <a href="/<?=$_POST['lang']?>">
                <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
              </a>
            </div>
            <div class="logo-name vp blue">
              <h1 class="main-text vp"><?=$mes['in-mes1']?></h1>
               <?=$mes['in-mes2']?>
            </div>
          </div>
          <div class="mouse pcscreen"><div class="scroll"></div></div>
        </div>
      </div>
    </section>

    <section class="cd-section infra_section infra2_section">
      <div class="header infra2">
        <div class="wrap_header val">
          <div class="val-wrap" style="height:100%">
            <div class="header-bottom mytab">
              <div class="logo pcscreen">
                <a href="/<?=$_POST['lang']?>">
                  <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                </a>
              </div>
              <div class="logo-name vp blue">
                <h2 class="main-text vp" style="padding-bottom:16px"><?=$mes['in-mes3']?></h2>
                <p>
                 <?=$mes['in-mes4']?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section >

      <section class="cd-section infra_section infra3_section">
        <div class="header vl2 infra3">
          <div class="wrap_header">
            <div class="header-bottom mytab">
              <div class="logo pcscreen">
                <a href="/<?=$_POST['lang']?>">
                  <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                </a>
              </div>
              <div class="logo-name vp infra blue">
                <h2 class="main-text vp"><?=$mes['in-mes5']?></h2>
                <h2 class="main-text vp lit"><?=$mes['in-mes6']?></h2>
                <p class="bottom-text vp"><?=$mes['in-mes7']?></p>
                <p class="bottom-text vp"><?=$mes['in-mes8']?></p>
                <p class="bottom-text vp"><?=$mes['in-mes9']?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="foot-wrap">
          <div class="allright">
            <p><?=$mes['v01']?></p>
          </div>
          <div class="web">
            <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png"  width="55px" /></a>
          </div>
          <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
          <span> <?=$mes['v02']?></span>
        </div>
      </footer>
      <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
      <script src="/js/scroll/modernizr.js"></script>
      <script src="/js/scroll/jquery-2.1.4.js"></script>
      <script src="/js/scroll/velocity.min.js"></script>
      <script src="/js/scroll/velocity.ui.min.js"></script>
      <script src="/js/scroll/main.js"></script>
	      <script src="/js/scripts.js"></script>
      <!-- Google Tag Manager (noscript) -->
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
  </body>
</html>
