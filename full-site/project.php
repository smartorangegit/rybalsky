<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['project-description']; ?>">
  <title><?=$mes['project-title']?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
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
    <section class="project__hero">
      <h1 class="project__hero__heading"><?=$mes['val13']?></h1>
    </section>
    <section class="project__section">
      <div class="project__container">
        <div class="project__text">
          <h2 class="project__sub-heading project__sub-heading-project"><?=$mes['val16'];?></h2>
          <p><?=$mes['val14'];?></p>
        </div>
        <div class="project__image">
        </div>
      </div>
    </section>
    <section class="values__section">
      <div class="values__container">
        <div class="values__image">
        </div>
        <div class="values__text">
          <h2 class="project__sub-heading project__sub-heading-values"><?=$mes['val17'];?></h2>
          <p><?=$mes['val15'];?></p>
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
              <a href="https://smarto.agency/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartorOrange')?>  src="/img/logo-smart.png" /></a>
            </div>
			<a class="footer__jurdoc_link" href="<?=$mes['events_url_documents']?>"><?=$mes['jur-mes-menu']?></a>
            <a href="https://smarto.agency/" rel="nofollow" target="_blank" class="smarto_agency"><span><?=$mes['v02']?></span></a>
          </div>
    </footer>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
 <!-- Google Tag Manager (noscript) -->

<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>


<script src="/js/scripts.js"></script>
  </body>
</html>
