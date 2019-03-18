<?php /*Мова*/ include_once('include/lang.php'); ?>

<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=$mes['sitemap-description'];?>">
  <?/*<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">*/?>
  <title><?=$mes['sitemap-title'];?></title>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
  <script src="/js/scroll/jquery-2.1.4.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/scroll.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/sitemap.css" />
  <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css" />
	<?php //alternateAdd($_SERVER["REQUEST_URI"]);
	   $url_origin = $_SERVER["REQUEST_URI"];
	   $url_str = explode("/",$url_origin);
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){ ?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo substr($url_origin, 3);?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo substr($url_origin, 3);   ?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo substr($url_origin, 3);   ?>" />
   <?php }
	else {?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo $url_origin;?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo $url_origin;?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo $url_origin;?>" />
   <?php } 	?>
  </head>
  <body>
     <div class="loader">
          <div class="loader__background">
            <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
          </div>
     </div>

      <div class="sitemap__wraper">
        <div class="wrap_header">
           <?php /*Меню*/ include_once('include/top-menu.php'); ?>

           <?php /*Меню Стрелки*/ include_once('include/arrow.php'); ?>
           <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
        </div>

        <div class="clearfix"></div>
          <div class="sitemap__title"><h1><?=$mes['sitemap-mes']?></h1></div>
            <div class="sitemap__container clearfix">
              <div class="side-logo1">
                <div class="logo">
                  <a href="/<?=$_POST['lang']?>">
                    <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                  </a>
                </div>
              </div>
                <div class="sitemap__content clearfix">

                  <div class="sitemap_item">
                    <ul>
                      <li><a href="<?=$l.$menu_t[2]?>"><?=$menu['text'][2]?></a></li>
                      <li><a href="<?=$l.$menu_t[4]?>"><?=$menu['text'][4]?></a></li>
                      <li><a href="<?=$l.$menu_t[8]?>"><?=$menu['text'][8]?></a></li>
                      <li><a href="<?=$l.$menu_t[9]?>"><?=$menu['text'][9]?></a></li>
                      <li><a href="<?=$l.$menu_t[5]?>"><?=$menu['text'][5]?></a></li>
                      <li><a href="<?=$l.$menu_t[6]?>"><?=$menu['text'][6]?></a></li>
                      <li><a href="<?=$l.$menu_t[10]?>"><?=$menu['text'][10]?></a></li>
                      <li><a href="<?=$l.$menu_t[11]?>"><?=$menu['text'][11]?></a></li>
                      <li><a href="<?=$l.$menu_t[16]?>"><?=$menu['text'][16]?></a></li>
					  <li><a href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a></li>
                    </ul>
                  </div>

                  <div class="sitemap_item">
                    <ul>
                      <li> <a href="<?=$l.$menu_t[7]?>"><?=$menu['text'][7]?></a></li>
                      <li><a href="<?=$l.'kvartira/'.$u[1].'/';?>"><?=$mes['kv-mes-flat-'.'1']?></a></li>
                      <li><a href="<?=$l.'kvartira/'.$u[2].'/';?>"><?=$mes['kv-mes-flat-'.'2']?></a></li>
                      <li><a href="<?=$l.'kvartira/'.$u[3].'/';?>"><?=$mes['kv-mes-flat-'.'3']?></a></li>
                      <li><a href="<?=$l.'kvartira/'.$u[4].'/';?>"><?=$mes['kv-mes-flat-'.'4']?></a></li>
                      <li><a href="<?=$l.'kommercheskaya/'?>"><?=$mes['mes-name-2']?></a></li>
                      <li><a href="<?=$l.'rassrochka/'?>"><?=$mes['mes-name-4']?></a></li>
                    </ul>
                  </div>

                  <div class="sitemap_item">
                    <ul>
                      <li><a href="<?=$l.$menu_t[3]?>"><?=$menu['text'][3]?></a></li>
                      <li><a href="<?=$l.$menu_t[12]?>"><?=$menu['text'][12]?></a></li>
                      <li><a href="<?=$l.$menu_t[13]?>"><?=$menu['text'][13]?></a></li>
                      <li><a href="<?=$l.'top-planirovok/'?>"><?=$mes['mes-name']?></a></li>
                      <li><a href="<?=$l.'naberejnaya/'?>"><?=$mes['mes-name-1']?></a></li>
                      <li><a href="<?=$l.'parking/'?>"><?=$mes['mes-name-6']?></a></li>
                      <li><a href="<?=$l.'vidovaya/'?>"><?=$mes['mes-name-7']?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      </div>
        <footer class="clearfix">
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <?php /*Google Tag Manager*/include_once('include/gtm2.php');?>
  <script src="/js/scripts.js"></script>
  <script src="/js/scroll/modernizr.js"></script>
  <script src="/js/scroll/velocity.min.js"></script>
  <script src="/js/scroll/velocity.ui.min.js"></script>
  <script src="/js/scroll/main.js"></script>
  </body>
</html>
