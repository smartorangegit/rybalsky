<?php /*Мова*/ include_once('include/lang.php'); ?>
<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/config.php';
  $kv='%';
  if($Rooms[0]>0){ $kv=$Rooms[0];}
  $result = $db->prepare("SELECT floor, visible,number,buld,sec,level,all_room,life_room, id ,img,price
        FROM `apartments`
        WHERE   number LIKE '$kv.%' GROUP BY all_room ORDER BY buld ASC");
   $result->execute(); $i=0;
   $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['sec'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['img'],$s['price']); while($result->fetch()){
   $s['img']='/img/houses/house'.$s['buld'].'_png_white/mini/'.$s['img'].'.png';
   $s['url']='/'.$_POST['lang'].'plan'.$s['buld'].'/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'].'_'.$s['id'].'/';
   $flats = explode(".", $s['number']);
   $s['kim']=$flats[0];
      foreach($s as $key=>$k){
      $rez[$key]=$k;
    }
    $REZULT[$i]=$rez;
   $i++;
   }
  ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['kv-mes-description-'.$Rooms[0]]; ?>">
  <title><?=$mes['kv-mes-title-'.$Rooms[0]]?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

   <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
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
   <?php }
	?>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="/js/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/kvartira.css" />
  </head>
  <body style="color:#000;">
    <div class="container">
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
      <div class="loader">
        <div class="loader__background">
           <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
        </div>
      </div>


      <section class="kvartira__section">
        <div class="wrap_header">
          <?php /*Меню*/ include_once('include/top-menu.php'); ?>
		        <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
            <div class="clearfix"></div>
        </div>
        <div class="kvartira__container">
			    <div class="header-bottom">
            <div style='color: #fff;' class="choice-name choice-name1">
              <div class="choice-f-item"><a href="/<?=$_POST['lang']?>filter/"><img <?AltImgAdd($mes['fil-mes-h1'])?> src="/img/filter.png" alt="filter"><div style="color:#fff"><?=$mes['p7-mes']?></div></a></div>
              <!-- <div class="choice-f-item"><img src="/img/compas-.png" alt="compas"><span style="display:inline-block"><?=$mes['p8-mes']?></span></div> -->
        </div>
        </div>
        <div class="logo__container">
          <div class="logo pcscreen">
            <a href="/<?=$_POST['lang']?>">
              <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
            </a>
          </div>
        </div>
        <div class="table-wraper">
              <ul class="kvartira__list">
  	<?foreach($u as $key=>$t):?>
      <li class="kvartira__item <?if($key==$Rooms[0]) echo 'active';?>">
        <a href="/<?=$_POST['lang']?>kvartira/<?=$t?>/" class="kvartira__link"><?echo $mes['kv-mes-flat-'.$key]; if($key==$Rooms[0]) echo ' '.$mes['kv-mes7'];?></a>
      </li>
	  <?endforeach;?>
        </ul>
        <div class="kvartira__table">
        <div class="apartments__filter-results__wrapper">
        <?
          foreach ($REZULT as $key=>$s){
        ?>
        <div class="apartments__filter-result sort"
          <?if($key>=10) {
              echo 'style="display:none"';
            } else {
              echo 'style="display:block"'; }?>>
            <a href="<?=$s['url']?>" class="filter-result__link">
              <div class="apartments__filter-result__image">
                <img src="<?=$s['img']?>">
              </div>
              <div class="apartments__filter-result__data">
                <ul>
                  <li><?=$mes['kv-mes1']?>: <?=$s['buld']?></li>
                  <li><?=$mes['kv-mes4']?>: <?=$s['kim']?></li>
                  <li><?=$mes['kv-mes5']?>: <?=$s['all_room']?></li>
                  <li><?=$mes['kv-mes6']?>: <?=$s['life_room']?></li>
                </ul>
                <div class="view_appartment_btn"><?=$mes['fil-mes12'];?></div>
              </div>
            </a>
        </div>
        <?
          }
        ?>
      </div> <!--apartments__filter-results__wrapper-->
        </div>
        <input type="button" value="<?=$mes['fil-mes13'];?>" class="load_more_appartments_btn filter_btn">

        <div class="table-body__bottom-text">
          <?=$mes['kv-mes-text-'.$Rooms[0]]?>
          <div id="openSeo" class="filter_btn btn"><?=$mes['i-to-read'];?></div>

          <div class="moreSeo">
            <?=$mes['kv-mes-text1-'.$Rooms[0]]?>

            <div id="closeSeo" class="filter_btn btn"><?=$mes['i-roll'];?>
          </div>


        </div>
      </div>
      <div class="emty"></div>
    </div>
  </section>
  <style media="screen">
  .kvartira__section{
    background-attachment: fixed;
  }
    .btn{
      margin: 20px auto;
      max-width: 230px;
      padding: 15px 20px;
    }
    .moreSeo{
      max-height: 0px;
      overflow: hidden;
      transition: 0.4s;
      -webkit-transition: 0.4s;
    }
    .moreSeo__open{
      max-height: 1000px;
      transition: 0.4s;
      -webkit-transition: 0.4s;
    }
  </style>
  <script type="text/javascript">
  $('#openSeo').click(function(){
    $('.moreSeo').addClass('moreSeo__open')
  });
  $('#closeSeo').click(function(){
    $('.moreSeo').removeClass('moreSeo__open')
  });

  </script>
  <footer>
    <div class="foot-wrap">
      <div class="allright">
        <p>
          <?=$mes['v01']?>
        </p>
      </div>

      <div class="web">
        <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png" width="55px" /></a>
      </div>
	  <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
      <span><?=$mes['v02']?></span>
      <!-- Yandex.Metrika counter -->
      <script type="text/javascript">
      (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43611459 = new Ya.Metrika({ id:43611459, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } });
      var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js";
      if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript>
        <div><img src="https://mc.yandex.ru/watch/43611459" style="position:absolute; left:-9999px;" alt="" /></div>
      </noscript>
      <!-- /Yandex.Metrika counter -->
    </div>
  </footer>
  </div>
  <script>
  //How many more to show
  var appartmentsToload = 10;
  //Making ordinary array from jquery object collection
  var appartments = Array.prototype.slice.call($('.sort'), 0);

  $('.load_more_appartments_btn').click(function() {
    for(var i = appartmentsToload; i < appartmentsToload + 10; i++) {
      if(appartments[i] !== undefined) {
        appartments[i].style.display = 'block';
      } else {
        break;
      }
    }
    appartmentsToload = i;
  });

  </script>
  <script src="/js/scripts.js"></script>
    </body>
</html>
