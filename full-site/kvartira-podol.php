<?php /*????*/ include_once('include/lang.php'); ?>
<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/config.php';

  $kv='%';
  if($Rooms[0]>0){ $kv=$Rooms[0];}
$result = $db->prepare("SELECT floor, visible,number,buld,sec,level,all_room,life_room, id ,img,price
            FROM `apartments`
        WHERE   number LIKE '$kv.%' ORDER BY buld ASC");
   $result->execute(); $i=0;
   $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['sec'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['img'],$s['price']); while($result->fetch()){
   $s['img']='/img/houses/house'.$s['buld'].'_png_white/'.$s['img'].'.png';
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
	<meta name="description" content="<?=$mes['kv-mes-description-13']; ?>">
  <title><?=$mes['kv-mes-title-13']?></title>
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
   <?php }
	?>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="/js/jquery-1.12.0.min.js"></script>
  <script src="/js/scripts.js"></script>
  <!-- <script src="/js/owl.carousel.min.js"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="/css/scroll.css" /> -->
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/kvartira.css" />
  <!-- <link rel="stylesheet" type="text/css" href="/css/newsstyle.css" /> -->
</head>
<body>
  <style media="screen">
    body{
      height: 100%;
    }
    .container{
      min-height: 100%;
      background: url("/img/app-bg.jpg") center 0 no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    .more_news_link a{
      color: white;
      text-decoration: none;
      font-size: 24px;
      display: block;
    }
    .more_news_link a:hover{
      color: #0035AA;

    }
    footer{
      margin-top: 0;
    }
  </style>
  <div class="container">
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <div class="loader">
       <div class="loader__background">
           <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
        </div>
    </div>
    <!-- <section> -->
      <div class="wrap_header">
        <?php include_once('include/top-menu.php'); ?>
		    <?php  include_once('include/call_my.php'); ?>
      </div>
      <div class="kvartira__container">

      <div class="logo__container">
        <div class="logo pcscreen">
          <a href="/<?=$_POST['lang']?>">
            <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
          </a>
        </div>
      </div>
      <div class="table-wraper">
        <div class="table-body__bottom-text">
		        <?=$mes['kv-mes-text-13']?>

			<div class="news_nav">
		      <div class="more_news_link">
                <p><?=$mes['q-mes22']?></p>

                <a href="<?=$l.'vidovaya/'?>"><?=$mes['mes-name-7']?></a>
                <a href="<?=$l.'parking/'?>"><?=$mes['mes-name-6']?></a>
                <a href="<?=$l.'novostroyka-center/'?>"><?=$mes['mes-name-5']?></a>
                <a href="<?=$l.'novostroyka-podol/'?>"><?=$mes['mes-name-3']?></a>
                <a href="<?=$l.'naberejnaya/'?>"><?=$mes['mes-name-1']?></a>
                <a href="<?=$l.'top-planirovok/'?>"><?=$mes['mes-name']?></a>
              </div>
			</div>
        </div>
      </div>
      <div class="emty" ></div>
    </div>
  <!-- </section> -->
	</div>
  <footer>
    <div class="foot-wrap">
      <div class="allright">
        <p><?=$mes['v01']?></p>
      </div>
      <div class="web">
        <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png" width="55px" /></a>
      </div>
      <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
      <span><?=$mes['v02']?></span>
    </div>
  </footer>

  <script src="/js/hoverPlanOfFlat.js"></script>
    </body>
</html>
