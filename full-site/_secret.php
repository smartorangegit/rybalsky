<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['c-mes-description']; ?>">
  <title> <?=$mes['c-mes0']?></title>
  <!-- Google Tag Manager -->
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/scroll.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/menu.css" />
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
  <script src="/js/scripts.js"></script>
  <script src="/js/scroll/modernizr.js"></script>
  </head>
  <body data-hijacking="off" data-animation="scaleDown">

  <style media="screen">
      body {
        overflow: hidden;
      }
      .header.buld .build-name{
        transition: 0.35s;
        -webkit-transition: 0.35s;

      }

      @media only screen and (max-height: 670px) and (orientation: landscape){
        .header.buld .build-name {
             top: 15%;
             left: 0;
             font-size: 100px;
             margin-top: 5%;
        }
        }
        @media only screen and (max-height: 570px) and (orientation:landscape){
          .header.buld .build-name {
               top: 0;
               left: -220px;
               font-size: 50px;
               margin-top: 20px;
          }
          }
    </style>
 <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>
      <div class="header buld">
        <div class="wrap_header">
           <?php /*Меню*/ include_once('include/top-menu.php'); ?>

		   <?php /*Меню Стрелки*/ include_once('include/arrow.php'); ?>
		   <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
        </div>
        <footer>
          <div class="foot-wrap">
            <div class="allright">
               <p>
                 <?=$mes['v01']?>
                </p>
            </div>

            <div class="web">
              <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
            </div>
			<a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
            <span><?=$mes['v02']?></span>
			    </div>
        </footer>

      </div>
      <script src="/js/scroll/jquery-2.1.4.js"></script>
      <script src="/js/scroll/velocity.min.js"></script>
      <script src="/js/scroll/velocity.ui.min.js"></script>
      <script src="/js/scroll/main.js"></script>
	     <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
       <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
  </body>
</html>
