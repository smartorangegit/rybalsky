<?php /*Мова*/ include_once('include/lang.php');
 include_once('templates/function.php');
$LastModified_unix = 1491209119; // время последнего изменения страницы
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

 ?>
<!DOCTYPE html>

<html <?=$mes['i-mes8']?>>
<?php 
    $url_origin = $_SERVER["REQUEST_URI"];
    $url_str = explode("/", $url_origin);

    $title = $mes['pl-mes1-title'];
    $description = $mes['pl-mes1-description'];
    $result = '';

    // Определение тайтлов и дескрипшионов для сеошников....
    switch($url_origin) {
        case preg_match('/kvartira\/spa\/house\/[0-9]{1,3}\/section\/[0-9]{1,3}\/$/', $url_origin) == 1:
            // kvartira/spa/house/3/section/6/
            preg_match_all('!\d+!', $url_origin, $matches);
            $whatToReplace = array('[houseNumber]', '[sectionNumber]');
            $replaceWith = array($matches[0][0], $matches[0][1]);
            $title = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-title-house-section']);
            $description = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-description-house-section']);
            break;
        case preg_match('/kvartira\/spa\/house\/[0-9]{1,3}\/section\/[0-9]{1,3}\/flat\/[0-9]{1,4}\/$/', $url_origin) == 1:
            // kvartira/spa/house/3/section/1/flat/21/
            preg_match_all('!\d+!', $url_origin, $matches);
            $whatToReplace = array('[houseNumber]', '[sectionNumber]', '[flatNumber]');
            $replaceWith = array($matches[0][0], $matches[0][1], $matches[0][2]);
            $title = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-title-house-section-flat']);
            $description = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-description-house-section-flat']);
            break;
        case preg_match('/kvartira\/map\/house\/[0-9]{1,3}\/section\/[0-9]{1,3}\/flat\/[0-9]{1,4}\/$/', $url_origin) == 1:
            // kvartira/map/house/3/section/6/flat/294/
            preg_match_all('!\d+!', $url_origin, $matches);
            $whatToReplace = array('[houseNumber]', '[sectionNumber]', '[flatNumber]');
            $replaceWith = array($matches[0][0], $matches[0][1], $matches[0][2]);
            $title = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-title-map-house-section-flat']);
            $description = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-description-map-house-section-flat']);
            break;
        case preg_match('/\/kvartira\/map\/$/', $url_origin ) == 1:
            // kvartira/map/
            $title =  $mes['pl-mes-title-kvartira-map'];
            $description =  $mes['pl-mes-description-kvartira-map'];
            break;
        case preg_match('/kvartira\/tile\/planing\/[-+]?[0-9]*\.?[0-9]+\/$/', $url_origin) == 1:
            // kvartira/tile/planing/1.6/
            preg_match_all('/[-+]?[0-9]*\.?[0-9]+/', $url_origin, $matches);
            $whatToReplace = array('[flatNumber]');
            $replaceWith = array($matches[0][0]);
            $title = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-title-kvartira-tile-planing']);
            $description = str_replace($whatToReplace, $replaceWith, $mes['pl-mes-description-kvartira-tile-planing']);
            break;
        case preg_match('/\/kvartira\/tile\/$/', $url_origin) == 1:
            // kvartira/tile/
            $title =  $mes['pl-mes-title-kvartira-tile'];
            $description =  $mes['pl-mes-description-kvartira-tile'];
            break;
        default:
            $title = $mes['pl-mes1-title'];
            $description = $mes['pl-mes1-description'];
    }
?>
  <head>
    <meta charset="utf-8">
	<meta name="robots" content="<?if (strripos($_SERVER['REQUEST_URI'], 'floor') !== false AND strripos($_SERVER['REQUEST_URI'], 'flat') === false) {echo 'noindex nofollow'; }
	elseif(strripos($_SERVER['REQUEST_URI'], 'flat') !== false){echo 'noindex, follow';}
	else{echo 'index, follow';} ?>">
    <meta name="viewport" content="width=device-width">
		<?/** 09.12.2017 Vitaliy*/?>
	<meta name="description" content="<?=$description; ?><?//=$description?>">
    <title><?=$title; ?><?//=$title?></title>
		<?/***/?>

<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
<?	  //if ($_GET['id']=='plan/sections/floor/flat'){$site='../../../';}elseif ($_GET['id']=='plan/sections/floor'){		  $site='../../';		  }else{			  $site='../';  		  }
$site=$_POST['site'];
 ?>

	<link rel="canonical" href="<?if (strripos($_SERVER['REQUEST_URI'], 'floor') !== false) {echo $http.'/'.$_POST['lang']."kvartira/"; }elseif(strripos($_SERVER['REQUEST_URI'], 'kvartira') !== false) {echo $http.'/'.$_POST['lang']."kvartira/"; }else{echo $http.$_SERVER['REQUEST_URI'];} ?>"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/css/choise.css" />

	<?php
	   
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){ ?>
       <script src="/js/scroll/jquery-2.1.4.js"></script>
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
  <body id='class_beg' <?if ($content=='flat') {echo 'class="boby-plans"';}?>>
<?/*
<div id="class_beg" class="<?if($_GET['id']=='kvartira/' OR $_GET['id']=='plan3/' OR $_GET['id']=='plan9/'){ }else{echo "header choice1";}?>">
*/
?>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>

  <div id="content"><!----> <? rez($id=$content); ?></div>
 <?/*  </div>*/?>


 <script src="/js/scripts.js"></script>
  <script src="/flipclock.js"></script>
  <script src="/js/ajax-back.js"></script>
  <?/*Google Tag Manager*/ include_once('include/gtm2.php');?>
  </body>
</html>
