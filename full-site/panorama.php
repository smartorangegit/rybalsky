<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['panorama-description']; ?>">
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <title> <?=$mes['panorama-title']?></title>
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
    <?php /*Меню*/ include_once('include/top-menu.php'); ?>
    <!-- <section class="vp_one medicine_one">

          <h1><?=$mes['menu-mes32']?></h1>
    </section> -->


    <main class="panorama-main">
      <!-- <div class="main-container"> -->
        <script src="https://360player.io/static/dist/scripts/embed.js" async></script>
        <iframe id="iframe" name='iframe' src="https://360player.io/p/LBYGfR/" frameborder="0" width="100%" height="100%" allowfullscreen data-token="LBYGfR"></iframe>

      <!-- </div> -->
    </main>

<script type="text/javascript">

var head = $("#iframe").contents().find("head");
var css = '<style type="text/css">' +
          '.brand{display:none}; ' +
          '</style>';
$(head).append(css);

</script>

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
      <style media="screen">
      .panorama-main{
        width: 100%;
        height: calc(100vh - 40px);
      }
      </style>
    <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
    <script src="/js/callback.js"></script>
    <script src="/flipclock.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>
