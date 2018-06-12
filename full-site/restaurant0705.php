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
 
          <h1><?=$mes['menu-mes31']?></h1>
    </section>

    
    <main class="office-main">
      <div class="main-container">
        <div class="content">
          <div class="content-descript">
            <p class="content__heading"><?=$mes['o-mes16']?></p>
            <p class="content__text"><?=$mes['o-mes17']?></p>
			<p class="content__text"><?=$mes['o-mes18']?></p>
			<p class="content__text"><?=$mes['o-mes19']?></p>
			<p class="content__text"><?=$mes['o-mes20']?></p>
			<p class="content__text"><?=$mes['o-mes21']?></p>
          </div>
          <div class="content-image-wrap">
            <img src="/img/vp_6.jpg" alt="image" class="content__image">
          </div>
        </div>
    <?   /*  <div class="content">
          <div class="content-image-wrap content-image-wrap_wide">
            <img src="/img/vp_6.jpg" alt="image" class="content__image">
          </div>
          <div class="content-descript content-descript_thin">
            <p class="content__heading"><?=$mes['o-mes3']?></p>
            <p class="content__text"><?=$mes['o-mes4']?></p>
          </div>
        </div>
        <div class="content">
          <div class="content-descript">
            <p class="content__heading"><?=$mes['o-mes5']?></p>
            <p class="content__text"><?=$mes['o-mes6']?></p>
          </div>
          <div class="content-image-wrap">
            <img src="/img/vp_6.jpg" alt="image" class="content__image">
          </div>
        </div>

        <div class="content">
          <div class="content-image-wrap content-image-wrap_wide">
            <div class="content-image-text">
              <div class="content-image-text-heading">
                <img src="/img/icons/icon-house.png" alt="icon" class="content-image-text-heading__icon">
                <p class="content-image-text-heading__text">Внутрішні <br> двори</p>
              </div>  
              <ul class="content-image-text-list">
                <?=$mes['o-mes10']?>
                <!-- <li class="content-image-text-list__item">
                  <span class="content-image-text-list__num">330 м</span><span class="content-image-text-list__text">протяжність</span>
                </li>
                <li class="content-image-text-list__item">
                  <span class="content-image-text-list__num">6000 м2</span><span class="content-image-text-list__text">простору для <br> дозвілля</span>
                </li>
                <li class="content-image-text-list__item">
                  <span class="content-image-text-list__num">3</span><span class="content-image-text-list__text">cccc <br> dddd</span>
                </li>
                <li class="content-image-text-list__item">
                  <span class="content-image-text-list__num">4</span><span class="content-image-text-list__text">eeee</span>
                </li> -->
              </ul>
            </div>

            <div class="content-image">
              <img src="/img/life/life_4.jpg" alt="image" class="content-image__image">
              <img src="/img/life/life_4.jpg" alt="image" class="content-image__image">
            </div>

            <div class="content-image-text">
              <div class="content-image-text-heading">
                <img src="/img/icons/icon-house.png" alt="icon" class="content-image-text-heading__icon">
                <p class="content-image-text-heading__text">Внутрішні <br> двори</p>
              </div>  
              <ul class="content-image-text-list">
                <?=$mes['o-mes11']?>
                <!-- <li class="content-image-text-list__item">
                  <span class="content-image-text-list__text content-image-text-list__text_marker">протяжність</span>
                </li> -->
                <!-- <li class="content-image-text-list__item">
                  <span class="content-image-text-list__text content-image-text-list__text_marker">простору для <br> дозвілля</span>
                </li>
                <li class="content-image-text-list__item">
                  <span class="content-image-text-list__text content-image-text-list__text_marker">cccc <br> dddd</span>
                </li>
                <li class="content-image-text-list__item">
                  <span class="content-image-text-list__text content-image-text-list__text_marker">eeee</span>
                </li> -->
              </ul>
            </div>

          </div>
          <div class="content-descript content-descript_thin">
            <p class="content__heading"><?=$mes['o-mes7']?></p>
            <p class="content__text"><?=$mes['o-mes8']?></p>
            <div class="call-button button-flat call-button_commercial">
              <a href="/<?=$_POST['lang']?>commercial-sale/"><?=$mes['menu-mes7']?></a>
            </div>
          </div>
        </div> */ ?>
      </div>
    </main>

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
