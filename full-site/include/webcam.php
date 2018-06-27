 <?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $mes['web-mes1-description']; ?>">
  <title><?=$mes['web-mes1']?></title>
  <!-- Google Tag Manager -->
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
  <script src="/js/jquery-1.12.0.min.js"></script>
  <script src="/js/scripts.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
  <link rel="stylesheet" href="/flipclock.css">
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

  </head>
  <body>
    <!-- <div class="underprice">ПІДВИЩЕННЯ ЦІН</div>
    				<div class="mesage"><p>до чергового підвищення цін залишилось  <span id="clock-close"><img src=/img/icons/close_w.svg alt="close" width="30px"></span></p>

    					<div class="clock2">
    					</div>
    				</div>
    <script src="/js/clock.js"></script> -->
    <!-- <script type="text/javascript">

    $(".underprice").click(function(){
    	$(".mesage").css("display","block");
    });

    </script> -->

 <div class="loader">
	  <div class="loader__background">
		   <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>   src="/img/icons/rb_logo_white.png"></div>
	   </div>
  </div>
      <div class="header buld stroy">
        <div class="wrap_header">
       <?php /*Меню*/ include_once('include/top-menu.php'); ?>
		   <?php /*Меню Стрелки*/ include_once('include/arrow.php'); ?>
		   <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
        <div class="clearfix"></div>


         <div class="header-bottom">
           <div class="webname">
             <h1><?=$mes['p6-mes']?></h1>
           </div>
            <div class="logo">
              <a href="/<?=$_POST['lang']?>">
                <img <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" />
              </a>
            </div>

            <div class="webcam">
              <div class="web1">
                <h2><?=$mes['p5-mes']?> №3</h2>
                  <iframe src="https://macparts.kiev.ua:8415/player.html" name="restreamer-player" width="560" height="315" scrolling="no" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>
              </div>

              <div class="web2">
                <h2><?=$mes['p5-mes']?> №9</h2>
                <iframe src="https://macparts.kiev.ua:8416/player.html" name="restreamer-player" width="560" height="315" scrolling="no" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>
              </div>
            </div>

          </div>

        </div>

        <footer>
          <div class="foot-wrap">
            <div class="allright">
              <p><?=$mes['v01']?></p>
            </div>
            <div class="web">
              <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
            </div>
            <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
            <span><?=$mes['v02']?></span>
          </div>
        </footer>
      </div>
      <style media="screen">
      body{
        height: 100%;
      }
      .header.buld{
        height: 100%;
        min-height: 600px;
      }
      .header_bottom{
        position: relative;
      }
      .webname {
          position: absolute;
          font-size: 40px;
          width: 100%;
          text-align: center;
          margin: 0;
          left: 0;
          top:0;
        }
      @media only screen and (max-width:768px) {
          .webname {
            position: static;
          }
        }
      </style>
  <script src="/flipclock.js"></script>
  </body>
</html>
