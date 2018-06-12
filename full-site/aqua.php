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
    <section class="vp_one">
          <?php /*Меню*/ include_once('include/top-menu.php'); ?>

          <h1><?=$mes['a-mes1']?></h1>
    </section>

    <section class="vp_two">
      <div class="vp_item">
        <div class="block__name"><?=$mes['life-mes2']?></div>
        <div class="text__block">
          <p><?=$mes['a-mes2']?>
            <!-- Багатьом мешканцям RYBALSKY пощастить милуватися з вікон своїх квартир розкішним краєвидом на Дніпро. Ми вважаємо, що цього не достатньо, і зробимо більше, щоб нагадати киянам про цінність Дніпра та дати їм змогу відпочивати біля води. -->
          </p>
        </div>
      </div>
      <div class="vp_item">
        <img src="/img/vp_6.jpg" alt="<?=$mes['a-mes1']?>">

      </div>
    </section>

    <section class="vp_three">
      <div class="vp_item">
        <div class="vp_triptih">
          <div class="side_l">
            <div class="vp_triptih_name">
              <img src="/img/vp_icon.jpg" alt="">
              <span><?=$mes['a-mes5']?></span>
            </div>
            <table>
              <?=$mes['a-mes6']?>
            </table>
          </div>
          <div class="side_center">
            <img src="/img/vp_3.jpg" <?AltImgAdd($mes['alt-logo'])?>>
            <img src="/img/vp_4.jpg" <?AltImgAdd($mes['alt-logo'])?>>
          </div>
          <div class="side_r">
            <div class="vp_triptih_name">
              <img src="/img/vp_icon.jpg" alt="">
              <span><?=$mes['a-mes5']?></span>
            </div>
            <table>
              <?=$mes['a-mes7']?>
            </table>
          </div>
        </div>
      </div>
      <div class="vp_item">
        <div class="block__name">
          <?=$mes['a-mes3']?>
        </div>
        <div class="text__block">
          <p><?=$mes['a-mes4']?></p>
        </div>
      </div>

    </section>

    <section class="vp_four">
      <div class="vp_item">
        <div class="block__name">
          <?=$mes['a-mes8']?>
        </div>
        <div class="text__block">
          <?=$mes['a-mes9']?>
        </div>
        <div class="call-button button-flat">
          <a href="/<?=$_POST['lang']?>kvartira/"><?=$mes['menu-mes7']?></a>
        </div>
        <style media="screen">
          .button-flat{
            display: block;
            width: 100%;
            max-width: 250px;
            margin: 20px auto;
          }
          .button-flat a{
            text-transform: inherit;
          }
        </style>
      </div>

      <div class="vp_item">
        <img src="/img/vp_7.jpg" alt="<?=$mes['a-mes8']?>">

      </div>

    </section>


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
        .logo__block{
          width: 180px;
        }
        .logo__block img{
          width: 100%;
        }
      </style>
	  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
    <script src="/js/callback.js"></script>
    <script src="/flipclock.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>
