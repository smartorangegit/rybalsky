 <?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
	<meta name="description" content="<?php echo $mes['web-mes1-description']; ?>">
  <title><?=$mes['web-mes1']?></title>
  <!-- Google Tag Manager -->
  <script src="/js/jquery-1.12.0.min.js"></script>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" href="/flipclock.css">
  <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css" />
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

  </head>
  <body>
    <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <!-- <div class="underprice">ПІДВИЩЕННЯ ЦІН</div>
    				<div class="mesage"><p>до чергового підвищення цін залишилось  <span id="clock-close"><img src=/img/icons/close_w.svg alt="close" width="30px"></span></p>

    					<div class="clock2">
    					</div>
    				</div>
    <script src="/js/clock.js"></script> -->
    <!-- <script type="text/javascript">

    $(".underprice").click(function(){
    	$(".mesage").css("display","block");
    });

    </script> -->

 <div class="loader">
	  <div class="loader__background">
		   <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>   src="/img/icons/rb_logo_white.png"></div>
	   </div>
  </div>

  <div class="webcam_container">
  <div class="svg_background__container">
  <svg 
    class="svg_background"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:svg="http://www.w3.org/2000/svg"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 0 1384 936">
    <defs>
      <g id="camera"> 
      <g>
        <circle class="st0" cx="155.8" cy="155.5" r="135" id="circle10-6" style="fill:#0035aa" />
        <g id="g12-2">
          <path class="st1"
            d="m 155.8,28 c 34.1,0 66.1,13.3 90.2,37.3 24.1,24.1 37.3,56.1 37.3,90.2 0,34.1 -13.3,66.1 -37.3,90.2 C 221.9,269.8 189.9,283 155.8,283 121.7,283 89.7,269.7 65.6,245.7 41.5,221.6 28.3,189.6 28.3,155.5 28.3,121.4 41.6,89.4 65.6,65.3 89.7,41.2 121.7,28 155.8,28 m 0,-15 C 77.1,13 13.3,76.8 13.3,155.5 13.3,234.2 77.1,298 155.8,298 234.5,298 298.3,234.2 298.3,155.5 298.3,76.8 234.5,13 155.8,13 l 0,0 z"
            id="path14-9" inkscape:connector-curvature="0" style="fill:#ffffff" />
        </g>
      </g>
      <g id="g16-1">
        <path class="st1"
          d="m 156,113.1 c 11.9,0 21.8,9 23.7,20.9 l 31.1,0 c -2.4,-25.1 -26,-44.9 -54.8,-44.9 -28.8,0 -52.4,19.8 -54.8,44.9 l 31.1,0 c 2,-11.9 11.8,-20.9 23.7,-20.9 z m 0,-17.6 c 3,0 5.5,2.6 5.5,5.7 0,3.2 -2.5,5.7 -5.5,5.7 -3,0 -5.5,-2.6 -5.5,-5.7 0,-3.1 2.5,-5.7 5.5,-5.7 z"
          id="path18-2" inkscape:connector-curvature="0" style="fill:#ffffff" />
        <path class="st1" d="m 156,163.2 c -11.9,0 -21.8,-9 -23.7,-20.9 l -31.1,0 c 1.9,19.7 16.8,36.1 37,42.3 4.1,1.3 8.5,2.1 13,2.4 1.6,0.1 3.2,0.2 4.8,0.2 1.4,0 2.7,-0.1 4.1,-0.1 4.7,-0.3 9.2,-1.1 13.5,-2.4 20.3,-6.1 35.3,-22.5 37.2,-42.3 l -31.1,0 c -1.9,11.8 -11.8,20.8 -23.7,20.8 z"
          id="path20-7" inkscape:connector-curvature="0" style="fill:#ffffff" />
        <path class="st1" d="m 156,121.4 c -7.5,0 -13.7,5.3 -15.5,12.5 -0.3,1.3 -0.5,2.7 -0.5,4.2 0,1.5 0.2,2.8 0.5,4.2 1.8,7.2 8,12.5 15.5,12.5 7.5,0 13.7,-5.3 15.5,-12.5 0.3,-1.3 0.5,-2.7 0.5,-4.2 0,-1.5 -0.2,-2.8 -0.5,-4.2 -1.8,-7.2 -8,-12.5 -15.5,-12.5 z"
          id="path22-0" inkscape:connector-curvature="0" style="fill:#ffffff" />
        <path class="st1" d="m 183.9,189 c -8.4,3.7 -17.9,5.8 -27.9,5.8 -0.1,0 -0.2,0 -0.3,0 -10,0 -19.5,-2.2 -28,-5.9 0,0 0,0 0,0 -13,10.1 -27,24.7 -27,33.1 9,0 9,0 9,0 l 1,-1 c 0,0 19,-11.5 45,-11.5 26,0 45,11.5 45,11.5 l 1,1 c 0,0 0,0 9,0 0,-8.4 -13.8,-23 -26.8,-33 z"
          id="path24-9" inkscape:connector-curvature="0" style="fill:#ffffff" />
      </g>
      </g>
    </defs>
    <image xlink:href="/img/webcam.jpg" width="1384" height="936" y="0" x="0"/>
    <!-- Camera 1 start -->
    <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №1" data-src="https://macparts.kiev.ua:8411/player.html" href="javascript:;" class="call_web call_web2">
      <use xlink:href="#camera" transform="matrix(0.12829204,0,0,0.12829204,834.0724,441.31823)"/>
    </a>
    <!-- Camera 1 end -->
    <!-- Camera 2 start -->
    <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №2" data-src="https://macparts.kiev.ua:8415/player.html" href="javascript:;" class="call_web call_web3">
    <use xlink:href="#camera" transform="matrix(0.12829204,0,0,0.12829204,1050.86448,550.79811)"/>
    </a>
    <!-- Camera 2 end -->
    <!-- Camera 3 start -->
    <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №3" data-src="https://macparts.kiev.ua:8417/player.html" href="javascript:;" class="call_web call_web4">
      <use xlink:href="#camera" transform="matrix(0.12829204,0,0,0.12829204,1195.9965,559.50623)"></use>
    </a>
    <!-- Camera 3 end -->
    <!-- Camera 4 start -->
    <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №4" data-src="https://macparts.kiev.ua:8412/player.html" xlink:href="javascript:;" class="call_web call_web1">
      <use xlink:href="#camera" transform="matrix(0.12829204,0,0,0.12829204,852.50908,694.59826)"/>
    </a>
    <!-- Camera 4 end -->

  </svg>
  </div>
      <!-- <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №2" data-src="https://macparts.kiev.ua:8412/player.html" href="javascript:;" class="call_web call_web1">
        <img src="/img/web_min.png" alt="Webcam 1">
      </a>
      <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №2" data-src="https://macparts.kiev.ua:8411/player.html" href="javascript:;" class="call_web call_web2">
        <img src="/img/web_min.png" alt="Webcam 2">
      </a>
      <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №3" data-src="https://macparts.kiev.ua:8415/player.html" href="javascript:;" class="call_web call_web3">
        <img src="/img/web_min.png" alt="Webcam 3">
      </a>
      <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №3" data-src="https://macparts.kiev.ua:8417/player.html" href="javascript:;" class="call_web call_web4">
        <img src="/img/web_min.png" alt="Webcam 4">
      </a> -->
    <div class="webcam_wrapper clearfix">
      <?php /*Меню*/ include_once('include/top-menu.php'); ?>
      <?php /*Меню Стрелки include_once('include/arrow.php'); */?>
      <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
      <div class="webcam_main-content">
      <div class="logo_box clearfix">
        <div class="webcam_info">
          <h1 class="block__name" style="color:#fff;"><?=$mes['p6-mes']?></h1>
          <?=$mes['web-mes6']?>
        </div>
        <div class="webcam_map only_mobile">
          <img src="/img/web_mob.jpg" alt="webcamera">
          <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №4" data-src="https://macparts.kiev.ua:8412/player.html" href="javascript:;" class="only_mobile web_mob1">
            <img src="/img/web_min.png" alt="Webcam 1">
          </a>
          <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №1" data-src="https://macparts.kiev.ua:8411/player.html" href="javascript:;" class="only_mobile web_mob2">
            <img src="/img/web_min.png" alt="Webcam 2">
          </a>
          <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №3" data-src="https://macparts.kiev.ua:8415/player.html" href="javascript:;" class="only_mobile web_mob3">
            <img src="/img/web_min.png" alt="Webcam 3">
          </a>
          <a data-fancybox data-type="iframe" data-caption="Вид с вебкамеры №2" data-src="https://macparts.kiev.ua:8417/player.html" href="javascript:;" class="only_mobile web_mob4">
            <img src="/img/web_min.png" alt="Webcam 4">
          </a>
    </div>



        <a class="logo__link" href="/<?=$_POST['lang']?>">
          <img <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" />
        </a>
        <div class="webcam__buttonbox">
          <div class="call-button button-flat">
            <a href="<?=$l?>kvartira/"><?=$mes['menu-mes7']?></a>
          </div>
          <div class="call-button button-flat">
            <a href="<?=$l?>hod-stroitelstva/"><?=$mes['menu-mes15']?></a>
          </div>
          <div class="call-button button-flat">
            <a href="<?=$l?>callback/"><?=$mes['c-mes30']?></a>
          </div>

        </div>
      </div>


      </div> <!--end webcam_container-->
    </div>
  </div>
  <footer>
    <div class="foot-wrap">
      <div class="allright">
        <p><?=$mes['v01']?></p>
      </div>
      <div class="web">
        <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
      </div>
      <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
      <span><?=$mes['v02']?></span>
    </div>
  </footer>
      <style media="screen">
        body{
          height: 100%;
          background-color: rgba(0, 0, 0, 0.85);
        }
        .svg_background {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
        }
        .webcam_main-content {
          position: absolute;
        }
        /* .webcam_container{background: url(/img/webcam.jpg) center no-repeat; background-size: cover; box-sizing: border-box;  padding-bottom: 44px;  min-height: 100%;} */
        .webcam_wrapper{ max-width: 1200px; margin: 0 auto;}
        .webcam_wrapper h2{font-size: 30px;text-align: center;padding-bottom: 20px;}
        .logo_box {width: 490px;}
        .logo_box .logo__link{ width: 180px; float: left;}
        .logo_box img {width: 100%;}
        .webcam__buttonbox{width: 290px; float: right;}
        .webcam__buttonbox .call-button{width: 100%;float: none; margin-bottom: 20.8px; }
        .webcam__buttonbox .call-button a{line-height: 44px;}
        .main_box{  width: 600px;  float: right;}
        .webcam_box{padding-top: 65px;}
        .call_web {position: absolute;cursor:pointer;}
        .call_web img{width: 44px;}
        .call_web1{top: 580px; right: 35%;}
        .call_web2{top: 355px; right: 37%;}
        .call_web3{top: 495px; right: 29%;}
        .call_web4{top: 495px; right: 26%;}
        footer{  position: fixed;}
        .only_mobile{display: none;}
        @media only screen and (max-width: 1199px) {
          .webcam_wrapper{ max-width: 1000px;}
          footer{margin-top: -36px;}
        }
        @media only screen and (max-width: 1050px) {
          .call_web1{right: 34%;}
          .call_web2{right: 35%;}
          .call_web3{right: 27%;}
          .call_web4{right: 23%;}
        }
        @media only screen and (max-width: 920px) {
          .call_web1{right: 32%;}
          .call_web2{right: 32%;}
          .call_web3{right: 25%;}
          .call_web4{right: 21%;}
        }
        @media only screen and (max-width: 850px) {
          .call_web1{right: 32%;}
          .call_web2{right: 31%;}
          .call_web3{right: 21%;}
          .call_web4{right: 17%;}
        }
        @media only screen and (max-height: 700px) {
          .call_web1{top: 498px;}
          .call_web2{top: 330px;}
          .call_web3{top: 385px;}
          .call_web4{top: 461px;}
        }
        @media only screen and (max-width:767px) {
          .only_mobile{display: block;}
          .webcam_container{background: white;}
          .webcam_main-content {padding: 120px 5px 10px;}
          .logo_box {width: 100%; max-width: 380px; margin: 0 auto;}
          .logo_box .logo__link {width: 120px;}
          .webcam__buttonbox {width: calc(100% - 125px);}
          .webcam__buttonbox .call-button a {line-height: 29px; }
          .webcam__buttonbox .call-button {margin-bottom: 6px;}
          .webcam_map{display: block; margin-bottom: 10px; position: relative;}
          .call_web{display: none;}
          .web_mob1, .web_mob2, .web_mob3, .web_mob4{position: absolute; width: 46px;}
          .web_mob1 img, .web_mob2 img, .web_mob3 img, .web_mob4 img{width: 100%; height: auto;}
          .web_mob2{top: 36%; left: 18%;}
          .web_mob1{top: 82%; left: 22%;}
          .web_mob3{top: 57%; left: 52%;}
          .web_mob4{top: 59%; left: 78%;}
          .svg_background__container {
            display: none;
          }
          .webcam_main-content {
            position: static;
          }
          footer {
            position: static;
            margin-top: 0px;
          }
        }
            @media only screen and (max-width: 1000px) and (max-height: 1000px) {
            .svg_background {
              height: 100%;
            }
        }
      </style>
    <script src="/flipclock.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>
