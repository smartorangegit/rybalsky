<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['w-mes1-description']; ?>">
  <title><?=$mes['w-mes0']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
  </head>
  <body>

    <section class="cd-section visible pp_section pp1_section">
     <div class="header pp1">
         <div class="loader">
          <div class="loader__background">
            <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
          </div>
        </div>
        <div class="wrap_header">

        <?php /*Меню*/ include_once('include/top-menu.php'); ?>

         <div class="header-bottom pp">
            <div class="logo pp">
              <a href="/<?=$_POST['lang']?>">
				<img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
              </a>
            </div>
            <div class="logo-name pp blue">
              <h1 class="main-text vp"> <?=$mes['w-mes1']?></h1>
              <p class="bottom-text vp"> <?=$mes['w-mes2']?></p>
              <p class="bottom-text vp"><?=$mes['w-mes3']?></p>
            </div>
          </div>

          <div class="mouse nomobile">
            <div class="mouse_text">
              Дізнатись більше

            </div>
            <div class="scrollto--arrow">
              <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
        				<g>
        					<polygon fill="#FFFFFF" points="48.293,23.293 32,39.586 15.707,23.293 14.293,24.854 31.293,42 32.707,42 49.707,24.854 	"></polygon>
        				</g>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

      <section class="cd-section pp_section pp2_section">
    		<div class="header pp2">
    			<div class="wrap_header">
    				<div class="header-bottom full pp">
    					<div class="logo pp pcscreen">
                <a href="/<?=$_POST['lang']?>">
                <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                </a>
              </div>
    					<div class="logo-name pp blue">
    						<h2 class="main-text vp"> <?=$mes['w-mes11']?></h2>
    						<p class="bottom-text vp"><?=$mes['w-mes4']?></p>
                <p class="bottom-text vp"><?=$mes['w-mes5']?></p>
                <p class="bottom-text vp"><?=$mes['w-mes6']?></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>

      <section class="cd-section pp_section pp3_section">
        <div class="header pp3">
    			<div class="wrap_header">
    				<div class="header-bottom pp mytab">
    					<div class="logo pcscreen">
                <a href="/<?=$_POST['lang']?>">
                <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                </a>
              </div>
    					<div class="logo-name pp blue">
    						<h2 class="main-text vp"> <?=$mes['w-mes10']?></h2>
    						<p class="bottom-text vp"><?=$mes['w-mes7']?></p>
                  <p class="bottom-text vp"><?=$mes['w-mes8']?></p>
                  <p class="bottom-text vp"><?=$mes['w-mes9']?></p>
              </div>
    				</div>
    			</div>
    		</div>
      </section >
      <footer>
        <div class="foot-wrap">
          <div class="allright">
            <p>
              <?=$mes['v01']?>
            </p>
          </div>
          <div class="web">
            <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png"  width="55px" /></a>
          </div>
          <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
          <span><?=$mes['v02']?></span>
        </div>
      </footer>
  <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>

	    <script src="/js/scripts.js"></script>

  <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>

  </body>
</html>
