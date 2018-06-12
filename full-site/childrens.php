<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['childrens-description']; ?>">
  <title><?=$mes['childrens-title']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
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
    <div class="loader">
      <div class="loader__background">
        <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
      </div>
    </div>
    <section class="children__hero">
      <h1><?=$mes['chi-mes1'];?></h1>
    </section>
    <section class="playground__section">
      <div class="playground__image">
        <img src="/img/children/playground.jpg" alt="<?=$mes['chi-mes1'];?>">
      </div>
      <div class="child_item">
        <div class="block__name">
          <?=$mes['chi-mes2'];?>
        </div>
        <div class="text__block">
          <p>
            <?=$mes['chi-mes3']?>
          </p>
        </div>
      </div>
    </section>

    <section class="family-port__section">
      <div class="child_item">
        <div class="block__name">
          <?=$mes['chi-mes4'];?>
        </div>
        <div class="text__block">
          <p><?=$mes['chi-mes5'];?></p>
        </div>
      </div>
      <div class="child_item">

        <div class="vp_triptih">
          <div class="side_l">
            <div class="vp_triptih_name">
              <img src="/img/children/icon-student.png" alt="">
              <span>Rybalsky<br/> Family Port</span>
            </div>
            <table>
              <?=$mes['chi-mes6']?>
            </table>
          </div>
          <div class="side_center">
              <img src="/img/children/familyPort.jpg"<?AltImgAdd($mes['alt-logo'])?>>
          </div>
          <div class="side_r">
            <div class="vp_triptih_name">
              <img src="/img/children/icon-student.png" alt="">
              <span>Rybalsky<br/> Family Port</span>
            </div>
            <table>
              <?=$mes['chi-mes7']?>
            </table>
          </div>
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
    </section>

    <footer>
      <div class="foot-wrap">
        <div class="allright">
          <p><?=$mes['v01']?></p>
        </div>
        <div class="web">
          <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
        </div>
          <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
          <span> <?=$mes['v02']?></span>
        </div>
      </footer>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>

<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<?php /*Меню*/  include_once('include/top-menu.php'); ?>


<script src="/js/scripts.js"></script>
  </body>
</html>
