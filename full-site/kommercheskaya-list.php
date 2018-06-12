<?php /*Мова*/ include_once('include/lang.php');
 include_once('templates/function.php');
/*$LastModified_unix = 1491209119; // время последнего изменения страницы
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE'])){
    $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));  
$b=1;
	}
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])){
    $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
$b=1;
}
if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
$b=1;    exit;
}
header('Last-Modified: '. $LastModified);
*/
 ?>
 
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
    <meta charset="utf-8">
	<meta name="robots" content="<?if (strripos($_SERVER['REQUEST_URI'], 'floor') !== false AND strripos($_SERVER['REQUEST_URI'], 'flat') === false) {echo 'noindex, follow'; }
	elseif(strripos($_SERVER['REQUEST_URI'], 'flat') !== false){echo 'noindex, follow';}
	else{echo 'index, follow';} ?>">
    <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['kom-mes-description']?>">
    <title><?=$mes['kom-mes-title']?></title>
	
<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
<?	  //if ($_GET['id']=='plan/sections/floor/flat'){$site='../../../';}elseif ($_GET['id']=='plan/sections/floor'){		  $site='../../';		  }else{			  $site='../';  		  }
$site=$_POST['site'];
 ?>

	<link rel="canonical" href="<?if (strripos($_SERVER['REQUEST_URI'], 'floor') !== false) {echo $http.'/'.$_POST['lang']."kommercheskaya/"; }else{echo $http.$_SERVER['REQUEST_URI'];} ?>"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
    <link rel="stylesheet" type="text/css" href="/css/scroll.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/menu.css" />
	<link rel="stylesheet" type="text/css" href="/css/choise.css" />

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

    <script src="/js/scroll/modernizr.js"></script>
	<script src="/js/scroll/jquery-2.1.4.js"></script>
	<script src="/js/scroll/velocity.min.js"></script>
    <script src="/js/scroll/velocity.ui.min.js"></script>	
  </head>
  <body id='class_beg' <?if ($content!='flat') {echo 'class="boby-plans"';}?> data-content="<?= $content; ?>">
  <?  /*Google Tag Manager*/ include_once('include/gtm2.php');?>
   <div class="loader">
   <input id="len" value="<?=$_POST['lang']?>" hidden>

	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>

  <span id="content"><!----> <? rez($id=$content); ?></span> 
 <?/*  </div>*/?>
  <script src="/flipclock.js"></script>
   <script src="/js/ajax-back.js"></script>
   <script src="/js/scripts.js"></script>
  </body>
</html>
