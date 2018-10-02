<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
    <meta charset="utf-8">
	  <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width">
	  <meta name="description" content="<?=$mes['q-mes-description']; ?>">
    <title><?=$mes['q-mes0']?></title>
    <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
    <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
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
    <script src="/js/jquery-1.12.0.min.js"></script>

  </head>
  <body>

    <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>
  <style media="screen">
  .wrap_header_abs {position: absolute; width: 100%; left: 0; height: 100%;top: 0;}
  </style>
    <div class="header quarty">
      <div class="nomobile">
        <div class="slider">
          <div class="item"><img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart-bg.jpg" alt="photo2"></div>
          <div class="item"><img <?AltImgAdd($mes['q-mes0'])?>  src="/img/main-bg-lt.jpg" alt="photo1"></div>
          <div class="item"><img <?AltImgAdd($mes['q-mes0'])?>  src="/img/vp-2.jpg" alt="photo3"></div>
          <div class="item"><img <?AltImgAdd($mes['q-mes0'])?>  src="/img/carous.jpg" alt="photo3"></div>
        </div>
      </div>
      <div class="wrap_header_abs">
        <div class="wrap_header">
           <?php /*Меню*/ $page="/"; include_once('include/top-menu.php'); ?>

           <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
           <div class="header-bottom">
             <div class="logo">
               <a href="/<?=$_POST['lang']?>">
                 <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
               </a>
             </div>
             <div class="logo-name blue">
                <h1 class="main-text"><?=$mes['q-mes1']?></h1>
                <p class="bottom-text"><?=$mes['q-mes2']?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content quarty">
        <div class="content-left">
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart1.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes3']?></h2>
                <p><?=$mes['q-mes4']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart2.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes7']?><?/*"Нічийних" територій <br> стає значно менше- */?></h2>
                <p><?=$mes['q-mes8']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart3.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes11']?></h2>
                <p><?=$mes['q-mes12']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart4.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes15']?></h2>
                <p><?=$mes['q-mes16']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="content-right">
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart5.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes5']?></h2>
                <p><?=$mes['q-mes6']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart6.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes9']?></h2>
                <p><?=$mes['q-mes10']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart7.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes13']?></h2>
                <p><?=$mes['q-mes14']?> </p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart8.jpg" alt="values" />
              <figcaption>
                <h2><?=$mes['q-mes17']?></h2>
                <p><?=$mes['q-mes18']?></p>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
        </div>
      </div>

      <div class="content-bottom">
          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['q-mes0'])?>  src="/img/quart/quart-bg-bot.jpg" alt="bot" />
              <figcaption>
                <div class="fig-wrap">
                  <h2><?=$mes['q-mes19']?></h2>
                  <p><?=$mes['q-mes20']?></p>
                  <p class="mini-p"><?=$mes['q-mes21']?></p>
                </div>
                <!-- <a class="link" href="#">wiew more...</a> -->
              </figcaption>
            </figure>
          </div>
          <div class="footer">
            <div class="foot-wrap">
              <div class="allright">
                <p>
                  <?=$mes['v01']?>
                </p>
              </div>
              <div class="web">
                <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" /></a>
              </div>
              <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
              <span><?=$mes['v02']?></span>
			      </div>
          </div>
        </div>
        <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
          <script src="/flipclock.js"></script>
          <script src="/js/scripts.js"></script>
          <!-- <script src="/js/jquery.bxslider.min.js"></script> -->
          <script type="text/javascript">

          $(document).ready(function(){
            $('.slider').bxSlider({
              mode: 'fade',
              auto: true,
              captions: false,
              pager: true,
              stopAutoOnClick: true
            });
          });
          </script>
    </body>
</html>
