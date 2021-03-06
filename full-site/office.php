<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['office-description']; ?>">
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <title> <?=$mes['office-title']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
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
    <section class="vp_one office_one">
          <?php /*Меню*/ include_once('include/top-menu.php'); ?>

          <h1><?=$mes['menu-mes29']?></h1>
    </section>


    <main class="office-main">
      <div class="main-container">
        <div class="content">
          <div class="content-descript">
            <!-- <p class="content__heading"><?=$mes['o-mes1']?></p> -->
            <p class="content__text"><?=$mes['o-mes2']?></p>
			<p class="content__text"><?=$mes['o-mes2_1']?></p>
			<p class="content__text"><?=$mes['o-mes2_2']?></p>
			<p class="content__text"><?=$mes['o-mes2_3']?></p>
          </div>
          <div class="content-image-wrap">
            <img src="/img/commercial/office_1.jpg" alt="<?=$mes['menu-mes29']?>" title="<?=$mes['menu-mes29']?>" class="content__image">
          </div>
        </div>
    <?    /* <div class="content">
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

    	<div class="other_link__box">
      <p><?=$mes['cp-text46']?></p>
      <ul>
        <li class="bold__link">
          <img src="/img/commercial/sale_min.jpg" alt="<?=$mes['pl-mes1-kom']?>" title="<?=$mes['pl-mes1-kom']?>">
          <a href="<?=$l?>kommercheskaya/">
          <?=$mes['pl-mes1-kom']?></a></li>
        <li class="bold__link">
          <img src="/img/commercial/rent_min.jpg" alt="<?=$mes['pl-mes1-ar']?>" title="<?=$mes['pl-mes1-ar']?>">
          <a href="<?=$l?>commercial-lease/">
          <?=$mes['pl-mes1-ar']?></a></li>
     <?  /*  <li>
          <img src="/img/commercial/office_min.jpg" alt="">
          <a href="<?=$l?>office/">
          <?=$mes['cp-text2']?></a></li>  */?>
        <li>
          <img src="/img/commercial/trade_min.jpg" alt="<?=$mes['cp-text3']?>" title="<?=$mes['cp-text3']?>">
          <a href="<?=$l?>trading/">
          <?=$mes['cp-text3']?></a></li>
        <li>
          <img src="/img/commercial/medicine_min.jpg" alt="<?=$mes['cp-text4']?>" title="<?=$mes['cp-text4']?>">
          <a href="<?=$l?>medicine/">
          <?=$mes['cp-text4']?></a></li>
        <li>
          <img src="/img/commercial/rest_min.jpg" alt="<?=$mes['cp-text1']?>" title="<?=$mes['cp-text1']?>">
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
              <a href="https://smarto.agency/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartorOrange')?>  src="/img/logo-smart.png" /></a>
            </div>
			<a class="footer__jurdoc_link" href="<?=$mes['events_url_documents']?>"><?=$mes['jur-mes-menu']?></a>
            <a href="https://smarto.agency/" rel="nofollow" target="_blank" class="smarto_agency"><span><?=$mes['v02']?></span></a>
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
