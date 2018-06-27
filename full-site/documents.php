<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
<head>
  <meta charset="UTF-8">
  <?php
$LastModified_unix = 1498218173;
$LastModified = gmdate("D, d M Y H:i:s GMT", $LastModified_unix);
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
$IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
$IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
exit;
}
header('Last-Modified: '. $LastModified);
?>
  <title><?=$mes['jur-mes-title']?></title>
  <!-- <link rel="stylesheet" href="/jurDoc/stylesheets/screen.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=$mes['jur-mes-description']?>">
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" href="/flipclock.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
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
  <script src="/js/scroll/jquery-2.1.4.js"></script>
<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNH6T9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="wraper">
    <div class="jur-doc__container">
      <header>
        <div class="wrap_header">
          <?php /*Меню*/ include_once('include/top-menu.php'); ?>

          <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
        <div class="clearfix"></div>
      </header>
      <div class="jur-doc__content">
        <div class="jur-doc__side-logo">
          <div class="logo pcscreen">
                     <a href="/<?=$_POST['lang']?>">
                      <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                    </a>
            </div>
        </div>
        <div class="jur-doc__body">
          <h1><?=$mes['jur-mes-menu']?></h1>
          <!-- <div class="jur-doc__text">
            <ul class="jur-doc__body_list">
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes1']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes2']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes3']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes4']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes5']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes6']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes7']?></a></li>
              <li class="jur-doc__body_item"><a href="/<?=$_POST['lang']?>" class="jur-doc__body_link"><?=$mes['jur-mes8']?></a></li>
            </ul>
          </div> -->
          <h2><?=$mes['jur-mes8']?></h2>
		      <div class="jur-doc__item">
          <h3 id="builder_documents" class="jur-doc__item_title"><?=$mes['jur-mes9']?></h3>
          <div class="jur-doc__item_pict">
            <a class="jur-doc__item_link" href="/img/jurdoc/pdf/genplan.jpg" target="_blank">
              <img src="/img/jurdoc/genplan_sm.jpg" alt="">
            </a>
          </div>
          <div class="jur-doc__item_pict">
            <a class="jur-doc__item_link" href="/img/jurdoc/pdf/streets_project.pdf" target="_blank">
              <img src="/img/jurdoc/streets_project_thumb.jpg" alt="">
            </a>
            <p><?=$mes['jur-mes13']?></p>
          </div>
          </div>
          <div class="jur-doc__item">
            <h3 class="jur-doc__item_title"><?=$mes['jur-mes1']?></h3>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/land-documents.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb.jpg" alt=""></a>

            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/land-documents2.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb-6.jpg" alt=""></a>

            </div>
          </div>
		 <div class="jur-doc__item">
            <h3 class="jur-doc__item_title"><?=$mes['jur-mes3']?></h3>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/build-permiss-1.pdf" target="_blank"><img src="/img/jurdoc/permit-jurdoc-thumb-1.jpg" alt=""></a>
              <p><?=$mes['jur-mes4']?></p>
            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/build-permiss-2.pdf" target="_blank"><img src="/img/jurdoc/permit-jurdoc-thumb-1.jpg" alt=""></a>
              <p><?=$mes['jur-mes5']?></p>
            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/build-permiss-3.pdf" target="_blank"><img src="/img/jurdoc/permit-jurdoc-thumb-3.jpg" alt=""></a>
              <p><?=$mes['jur-mes12']?></p>
            </div>
          </div>
          <div class="jur-doc__item">
            <h3 class="jur-doc__item_title"><?=$mes['jur-mes10']?></h3>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/vityag_z_dpt_ribalskij.pdf" target="_blank"><img src="/img/jurdoc/vityag_z_dpt_ribalskij.png" alt=""></a>

            </div>
          </div>
          <div class="jur-doc__item">
            <h3 class="jur-doc__item_title"><?=$mes['jur-mes2']?></h3>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/conclussion1.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb-4.jpg" alt=""></a>
              <p><?=$mes['jur-mes4']?></p>
            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/addnon-1.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb-2.jpg" alt=""></a>
              <p><?=$mes['jur-mes6']?></p>
            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/conclussion2.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb-3.jpg" alt=""></a>
              <p><?=$mes['jur-mes5']?></p>
            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/addnon-2.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb-1.jpg" alt=""></a>
              <p><?=$mes['jur-mes7']?></p>
            </div>
            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href="/img/jurdoc/pdf/conclusion-channel.pdf" target="_blank"><img src="/img/jurdoc/jurdoc-thumb-7.jpg" alt=""></a>
              <p><?=$mes['jur-mes11']?></p>
            </div>
          </div>

           <!-- **МУО** -->
          <!-- <div class="jur-doc__item">
            <h3 class="jur-doc__item_title"></h3>

            <div class="jur-doc__item_pict">
              <a class="jur-doc__item_link" href=""><img src="" alt=""></a>
              <p></p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="empty-block"></div>
      <footer class="footer1" >
        <div class="foot-wrap">
          <div class="allright">
             <p><?=$mes['v01']?></p>
          </div>
           <div class="web">
            <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png"  width="55px" /></a>
          </div>
          <span><?=$mes['v02']?></span>
        </div>
      </footer>
  </div>
  <script src="/js/scripts.js"></script>
  <script src="/flipclock.js"></script>
</body>
</html>
