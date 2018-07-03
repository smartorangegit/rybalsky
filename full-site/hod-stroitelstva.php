  <?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=$mes['s-mes-description']; ?>">
  <title><?=$mes['s-mes-title']; ?></title>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="/js/scroll/jquery-2.1.4.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css?v=1.21" />
  <link rel="stylesheet" type="text/css" href="/css/style.css?v=1.21" />
  <link rel="stylesheet" type="text/css" href="/css/hodstroit.css" />
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

    <div class="header buld stroy">
      <div class="wrap_header">
       <?php /*Меню*/ include_once('include/top-menu.php'); ?>

		   <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
<div class="header-bottom">
<!-- начало статуса работ -->

<div class="status">
  <div class="statusname">
    <h1><?=$mes['stat-2']?></h1>
  </div>
  <div class="block_top clearfix">
    <div class="status_info_1">
      <!-- <span><?=$mes['stat-3']?></span> -->
     <?php/* <h4><?=$mes['stat-4']?></h4> */?>
    </div>
  </div>

  <div class="block_bottom clearfix">
    <div class="status__1">
      <h4><?=$mes['stat-15']?> 3</h4>
	 <div class="block_hod-stroitelstva">  
		<?=$mes['block_hod-stroitelstva-3']?>
	</div> 
      <div class="block_left">
        <div class="timebar_name">
          <?=$mes['stat-7']?>
        </div>
        <div class="timebar_name">
          <p><?=$mes['stat-8']?></p>
        </div>
        <div class="timebar_name">
          <p><?=$mes['stat-9']?></p>
        </div>
        <div class="timebar_name">
          <p><?=$mes['stat-10']?></p>
        </div>
      </div>

      <div class="block_timebar">
                                                          <!-- ДОМ 3 -->
        <span class="tooltip toolti p-effect-1"><span class="tooltip-item"><svg id="container1_0"></svg></span>
        <div class="tooltip-content clearfix">
          <div class="tooltip-text">
            <div class="tool_sec">
            <!--Секція 1-->
              <?=$mes['сease']?> 1<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 98,00%<br>
              <?=$mes['brickwork']?> - 97%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 2-->
            <div class="tool_sec">
              <?=$mes['сease']?> 2<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 99%<br>
              <?=$mes['brickwork']?> - 97%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 3-->
            <div class="tool_sec">
              <?=$mes['сease']?> 3<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 100%<br>
              <?=$mes['brickwork']?> - 93%<br>
              <?=$mes['interior_fittings']?> - 59%
            </div>
            <!--Секція 4-->
            <div class="tool_sec">
              <?=$mes['сease']?> 4<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 99,10%<br>
              <?=$mes['brickwork']?> - 100%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 5-->
            <div class="tool_sec">
              <?=$mes['сease']?> 5<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 100%<br>
              <?=$mes['brickwork']?> - 91%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 6-->
            <div class="tool_sec">
              <?=$mes['сease']?> 6<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 98,00%<br>
              <?=$mes['brickwork']?> - 96%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
          </div>
        </div></span>
        <svg id="container1_1"></svg>
        <span class="tooltip toolti p-effect-1"><span class="tooltip-item"><svg id="container1_2"></svg></span>
        <!--Фасад-->
        <div class="tooltip-content clearfix">
          <div class="tooltip-text">
            <!--Секція 1-->
            <div class="tool_sec">
              <?=$mes['сease']?> 1<br>
              <?=$mes['windows']?> - 0%<br><?=$mes['facade']?> - 0%
            </div>
            <!--Секція 2-->
            <div class="tool_sec">
              <?=$mes['сease']?> 2<br>
              <?=$mes['windows']?> - 85%<br><?=$mes['facade']?> - 66%
            </div>
            <!--Секція 3-->
            <div class="tool_sec">
              <?=$mes['сease']?> 3<br>
              <?=$mes['windows']?> - 96,67%<br><?=$mes['facade']?> - 90%
            </div>
            <!--Секція 4-->
            <div class="tool_sec">
              <?=$mes['сease']?> 4<br>
              <?=$mes['windows']?> - 96,67%<br><?=$mes['facade']?> - 68%
            </div>
            <!--Секція 5-->
            <div class="tool_sec">
              <?=$mes['сease']?> 5<br>
              <?=$mes['windows']?> - 52%<br><?=$mes['facade']?> - 0%
            </div>
            <!--Секція 6-->
            <div class="tool_sec">
              <?=$mes['сease']?> 6<br>
              <?=$mes['windows']?> - 0%<br><?=$mes['facade']?> - 0%
            </div>
          </div>
        </div></span>
        <span class="tooltip toolti p-effect-1"><span class="tooltip-item"><svg id="container1_3"></svg></span>
        <!--Мережі-->
        <div class="tooltip-content clearfix">
          <div class="tooltip-text">
            <!--Секція 1-->
            <div class="tool_sec">
              <?=$mes['сease']?> 1<br>
              <?=$mes['inside']?> - 0%<br><?=$mes['exterior']?> - 0%
            </div>
            <!--Секція 2-->
            <div class="tool_sec">
              <?=$mes['сease']?> 2<br>
              <?=$mes['inside']?> - 64%<br><?=$mes['exterior']?> - 23%
            </div>
            <!--Секція 3-->
            <div class="tool_sec">
              <?=$mes['сease']?> 3<br>
              <?=$mes['inside']?> - 82%<br><?=$mes['exterior']?> - 23%
            </div>
            <!--Секція 4-->
            <div class="tool_sec">
              <?=$mes['сease']?> 4<br>
              <?=$mes['inside']?> - 43%<br><?=$mes['exterior']?> - 23%
            </div>
            <!--Секція 5-->
            <div class="tool_sec">
              <?=$mes['сease']?> 5<br>
              <?=$mes['inside']?> - 0%<br><?=$mes['exterior']?> - 0%
            </div>
            <!--Секція 6-->
            <div class="tool_sec">
              <?=$mes['сease']?> 6<br>
              <?=$mes['inside']?> - 0%<br><?=$mes['exterior']?> - 0%
            </div>
          </div>
        </div></span>

        <!-- <svg id="container1_0"></svg>
        <svg id="container1_1"></svg>
        <svg id="container1_2"></svg>
        <svg id="container1_3"></svg> -->
      </div>
    </div>
    <div class="status__2">
      <h4><?=$mes['stat-15']?> 9</h4>
	  <div class="block_hod-stroitelstva"> 
		<?=$mes['block_hod-stroitelstva-9']?>
	  </div>
      <div class="block_left">
        <div class="timebar_name">
          <?=$mes['stat-7']?>
        </div>
        <div class="timebar_name">
          <p><?=$mes['stat-8']?></p>
        </div>
        <div class="timebar_name">
          <p><?=$mes['stat-9']?></p>
        </div>
        <div class="timebar_name">
          <p><?=$mes['stat-10']?></p>
        </div>
      </div>
      <div class="block_timebar">
                                                        <!-- ДОМ 9 -->
        <span class="tooltip toolti p-effect-1"><span class="tooltip-item"><svg id="container2_0"></svg></span>
        <div class="tooltip-content clearfix">
          <div class="tooltip-text">
            <!--Секція 1-->
            <div class="tool_sec">
              <?=$mes['сease']?> 1<br>
              <?=$mes['work_to']?> 0,000 - 100%<br>
              <?=$mes['carcass']?> - 99,60%<br>
              <?=$mes['brickwork']?> - 80%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 2-->
            <div class="tool_sec">
              <?=$mes['сease']?> 2<br>
              <?=$mes['work_to']?> 0,000 - 99% <br>
              <?=$mes['carcass']?> - 98%<br>
              <?=$mes['brickwork']?> - 39%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 3-->
            <div class="tool_sec">
              <?=$mes['сease']?> 3<br>
              <?=$mes['work_to']?> 0,000 - 99,00%<br>
              <?=$mes['carcass']?> - 75%<br>
              <?=$mes['brickwork']?> - 31%<br> 
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 4-->
            <div class="tool_sec">
              <?=$mes['сease']?> 4<br>
              <?=$mes['work_to']?> 0,000 - 99% <br>
              <?=$mes['carcass']?> - 89%<br>
              <?=$mes['brickwork']?> - 49%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 5-->
            <div class="tool_sec">
              <?=$mes['сease']?> 5<br>
              <?=$mes['work_to']?> 0,000 - 100%  <br>
              <?=$mes['carcass']?> - 99,80%<br>
              <?=$mes['brickwork']?> - 85%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
            <!--Секція 6-->
            <div class="tool_sec">
              <?=$mes['сease']?> 6<br>
              <?=$mes['work_to']?> 0,000 - 100% <br>
              <?=$mes['carcass']?> - 99,60%<br>
              <?=$mes['brickwork']?> - 88%<br>
              <?=$mes['interior_fittings']?> - 0%
            </div>
          </div>
        </div></span>
        <svg id="container2_1"></svg>
        <span class="tooltip toolti p-effect-1"><span class="tooltip-item"><svg id="container2_2"></svg></span>
        <!--Фасад-->
        <div class="tooltip-content clearfix">
          <div class="tooltip-text">
            <!--Секція 1-->
            <div class="tool_sec">
              <?=$mes['сease']?> 1<br>
              <?=$mes['windows']?> - 2,5%<br><?=$mes['inside']?> - 44,5%
            </div>
            <!--Секція 2-->
            <div class="tool_sec">
              <?=$mes['сease']?> 2<br>
              <?=$mes['windows']?> - 0%<br><?=$mes['inside']?> - 0%
            </div>
            <!--Секція 3-->
            <div class="tool_sec">
              <?=$mes['сease']?> 3<br>
              <?=$mes['windows']?> - 0%<br><?=$mes['inside']?> - 0%
            </div>
            <!--Секція 4-->
            <div class="tool_sec">
              <?=$mes['сease']?> 4<br>
              <?=$mes['windows']?> - 0%<br><?=$mes['inside']?> - 0%
            </div>
            <!--Секція 5-->
            <div class="tool_sec">
              <?=$mes['сease']?> 5<br>
              <?=$mes['windows']?> - 52%<br><?=$mes['inside']?> - 79%
            </div>
            <!--Секція 6-->
            <div class="tool_sec">
              <?=$mes['сease']?> 6<br>
              <?=$mes['windows']?> - 60,00%<br><?=$mes['inside']?> - 90%
            </div>
          </div>
        </div></span>
        <span class="tooltip toolti p-effect-1"><span class="tooltip-item"><svg id="container2_3"></svg></span>
        <!--Мережі-->
        <div class="tooltip-content clearfix">
          <div class="tooltip-text">
            <!--Секція 1-->
            <div class="tool_sec">
              <?=$mes['сease']?> 1<br>
              <?=$mes['inside']?> - 11%<br><?=$mes['exterior']?> - 23%
            </div>
            <!--Секція 2-->
            <div class="tool_sec">
              <?=$mes['сease']?> 2<br>
              <?=$mes['inside']?> - 0%<br><?=$mes['exterior']?> - 0%
            </div>
            <!--Секція 3-->
            <div class="tool_sec">
              <?=$mes['сease']?> 3<br>
              <?=$mes['inside']?> - 0%<br><?=$mes['exterior']?> - 0%
            </div>
            <!--Секція 4-->
            <div class="tool_sec">
              <?=$mes['сease']?> 4<br>
              <?=$mes['inside']?> - 0%<br><?=$mes['exterior']?> - 0%
            </div>
            <!--Секція 5-->
            <div class="tool_sec">
              <?=$mes['сease']?> 5<br>
              <?=$mes['inside']?> - 74%<br><?=$mes['exterior']?> - 23%
            </div>
            <!--Секція 6-->
            <div class="tool_sec">
              <?=$mes['сease']?> 6<br>
              <?=$mes['inside']?> - 77%<br><?=$mes['exterior']?> - 23%
            </div>
          </div>
        </div></span>

      </div>
    </div>
  </div>
  <div class="status_info_2">
   <?php /* <a class="statusbutton" href="#hodstroyki"><?=$mes['stat-5']?></a> */?>
    <a class="statusbutton subscribe__show_form" href="#"><?=$mes['stat-16']?></a>
    <a class="statusbutton" href="<?=$l?>webcam/"><?=$mes['stat-6']?></a>
  </div>

  <div class="subscribe_hod_stroitelsva subscribe_hod_stroitelsva__hidden">
    <div class="subscribe_hod_stroitelsva__container">
      <div class="subscribe_hod_stroitelsva__name"><?=$mes['sub-mes5']?></div>
      <a class="subscribe_hod_stroitelsva__close_form" >
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="50 98.5 60 60"><path d="M55.21 153.29L50 148.08l9.79-9.79 9.788-9.79-9.79-9.79L50 108.92l5.21-5.21 5.21-5.21 9.79 9.79 9.79 9.788 9.79-9.79 9.79-9.788 5.21 5.21 5.21 5.21-9.79 9.79-9.788 9.79 9.79 9.79 9.788 9.79-5.21 5.21-5.21 5.21-9.79-9.79-9.79-9.788-9.79 9.79-9.79 9.788-5.21-5.21z" fill="red"/></svg>
        <!-- <img src="/img/icons/close-bold-red.svg" alt="logo" width="70px"/>-->
      </a>
      <form id='fr1' class="subscrip clearfix form_podpiska_news" action="#" method="post">
        <div class="subscrip__email_wrapper">
          <input type="email" name="email9"  placeholder="<?=$mes['sub-mes4']?>" class="subscribeForm">
          <span class="iemal">*</span>
        </div>
        <input type="submit"  class="news__buttons_item send_news__buttons_item" name="" value="<?=$mes['sub-mes2']?>">
      </form>
      <div class="succses__form_info">
        <p style='margin: -15px 0;' class="succses__form_text"></p>
      </div>
    </div>
  </div>
</div>

<!-- конец статуса работ -->

<div class="webname stroynews">
<h1>  <?=$mes['s-mes20'];?></h1>
<!-- <?=$mes['s-mes21'];?> -->
</div>
<div id="hodstroyki" class="stroy">

<div class="timeline"></div>

<? /*Если есть emmet и умееш им пользоваться юзай єтот снипет для скорости работы только поменяй параметры
a.fancybox[data-fancybox="group37"][data-caption="<?=\$mes['s-mes52']?>"][href="/img/quart/28_02_2018/$.jpg"]*33.
*/?>
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy50">
  <div class="stroy_overlay" id='50'>
    <a id='group50' href="/img/quart/02_07_2018/1.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
    <a href="/img/quart/02_07_2018/2.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
    <a href="/img/quart/02_07_2018/3.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
    <a href="/img/quart/02_07_2018/4.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
    <a href="/img/quart/02_07_2018/5.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
    <a href="/img/quart/02_07_2018/6.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
    <a href="/img/quart/02_07_2018/7.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/8.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/9.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/10.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/11.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/12.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/13.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/14.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/15.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/16.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/17.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/18.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/19.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/20.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/21.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/22.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/23.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/24.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/25.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/26.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/27.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>
	<a href="/img/quart/02_07_2018/28.jpg" class="fancybox" data-fancybox="group50" data-caption="<?=$mes['s-mes65']?>"></a>

 </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes65']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy50 {background-image: url(/img/quart/02_07_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy49">
  <div class="stroy_overlay" id='49'>
    <a id='group49' href="/img/quart/23_06_2018/1.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
    <a href="/img/quart/23_06_2018/2.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
    <a href="/img/quart/23_06_2018/3.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
    <a href="/img/quart/23_06_2018/4.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
    <a href="/img/quart/23_06_2018/5.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
    <a href="/img/quart/23_06_2018/6.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
    <a href="/img/quart/23_06_2018/7.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/8.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/9.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/10.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/11.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/12.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/13.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/14.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/15.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/16.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/17.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/18.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/19.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>
	<a href="/img/quart/23_06_2018/20.jpg" class="fancybox" data-fancybox="group49" data-caption="<?=$mes['s-mes64']?>"></a>

 </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes64']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy49 {background-image: url(/img/quart/23_06_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy48">
  <div class="stroy_overlay" id='48'>
    <a id='group48' href="/img/quart/18_06_2018/1.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
    <a href="/img/quart/18_06_2018/2.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
    <a href="/img/quart/18_06_2018/3.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
    <a href="/img/quart/18_06_2018/4.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
    <a href="/img/quart/18_06_2018/5.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
    <a href="/img/quart/18_06_2018/6.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
    <a href="/img/quart/18_06_2018/7.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/8.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/9.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/10.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/11.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/12.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/13.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/14.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/15.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/16.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/17.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/18.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/19.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/20.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/21.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/22.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
	<a href="/img/quart/18_06_2018/23.jpg" class="fancybox" data-fancybox="group48" data-caption="<?=$mes['s-mes63']?>"></a>
 </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes63']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy48 {background-image: url(/img/quart/18_06_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy47">
  <div class="stroy_overlay" id='47'>
    <a id='group47' href="/img/quart/12_06_2018/1.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
    <a href="/img/quart/12_06_2018/2.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
    <a href="/img/quart/12_06_2018/3.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
    <a href="/img/quart/12_06_2018/4.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
    <a href="/img/quart/12_06_2018/5.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
    <a href="/img/quart/12_06_2018/6.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
    <a href="/img/quart/12_06_2018/7.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/8.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/9.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/10.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/11.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/12.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/13.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
	<a href="/img/quart/12_06_2018/14.jpg" class="fancybox" data-fancybox="group47" data-caption="<?=$mes['s-mes62']?>"></a>
 </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes62']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy47 {background-image: url(/img/quart/12_06_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy46">
  <div class="stroy_overlay" id='46'>
    <a id='group46' href="/img/quart/29_05_2018/1.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
    <a href="/img/quart/29_05_2018/2.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
    <a href="/img/quart/29_05_2018/3.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
    <a href="/img/quart/29_05_2018/4.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
    <a href="/img/quart/29_05_2018/5.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
    <a href="/img/quart/29_05_2018/6.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
    <a href="/img/quart/29_05_2018/7.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/8.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/9.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/10.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/11.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/12.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/13.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
	<a href="/img/quart/29_05_2018/14.jpg" class="fancybox" data-fancybox="group46" data-caption="<?=$mes['s-mes61']?>"></a>
 </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes61']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy46 {background-image: url(/img/quart/29_05_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy45">
  <div class="stroy_overlay" id='45'>
    <a id='group45' href="/img/quart/22_05_2018/1.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
    <a href="/img/quart/22_05_2018/2.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
    <a href="/img/quart/22_05_2018/3.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
    <a href="/img/quart/22_05_2018/4.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
    <a href="/img/quart/22_05_2018/5.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
    <a href="/img/quart/22_05_2018/6.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
    <a href="/img/quart/22_05_2018/7.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
	<a href="/img/quart/22_05_2018/8.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
	<a href="/img/quart/22_05_2018/9.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
	<a href="/img/quart/22_05_2018/10.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
	<a href="/img/quart/22_05_2018/11.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
	<a href="/img/quart/22_05_2018/12.jpg" class="fancybox" data-fancybox="group45" data-caption="<?=$mes['s-mes60']?>"></a>
 </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes60']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy45 {background-image: url(/img/quart/22_05_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->
<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy44">
  <div class="stroy_overlay" id='44'>
    <a id='group44' href="/img/quart/15_05_2018/1.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
    <a href="/img/quart/15_05_2018/2.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
    <a href="/img/quart/15_05_2018/3.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
    <a href="/img/quart/15_05_2018/4.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
    <a href="/img/quart/15_05_2018/5.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
    <a href="/img/quart/15_05_2018/6.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
    <a href="/img/quart/15_05_2018/7.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/8.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/9.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/10.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/11.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/12.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/13.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/14.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/15.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/16.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/17.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/18.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/19.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/20.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/21.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/22.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/23.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	<a href="/img/quart/15_05_2018/24.jpg" class="fancybox" data-fancybox="group44" data-caption="<?=$mes['s-mes59']?>"></a>
	
    </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes59']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy44 {background-image: url(/img/quart/15_05_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy43">
  <div class="stroy_overlay" id='43'>
    <a id='group43' href="/img/quart/02_05_2018/1.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
    <a href="/img/quart/02_05_2018/2.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
    <a href="/img/quart/02_05_2018/3.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
    <a href="/img/quart/02_05_2018/4.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
    <a href="/img/quart/02_05_2018/5.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
    <a href="/img/quart/02_05_2018/6.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
    <a href="/img/quart/02_05_2018/7.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
	<a href="/img/quart/02_05_2018/8.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
	<a href="/img/quart/02_05_2018/9.jpg" class="fancybox" data-fancybox="group43" data-caption="<?=$mes['s-mes58']?>"></a>
	
    </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes58']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy43 {background-image: url(/img/quart/02_05_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy42">
  <div class="stroy_overlay" id='42'>
    <a id='group42' href="/img/quart/16_04_2018/1.jpg" class="fancybox" data-fancybox="group42" data-caption="<?=$mes['s-mes57']?>"></a>
    <a href="/img/quart/16_04_2018/2.jpg" class="fancybox" data-fancybox="group42" data-caption="<?=$mes['s-mes57']?>"></a>
    <a href="/img/quart/16_04_2018/3.jpg" class="fancybox" data-fancybox="group42" data-caption="<?=$mes['s-mes57']?>"></a>
    <a href="/img/quart/16_04_2018/4.jpg" class="fancybox" data-fancybox="group42" data-caption="<?=$mes['s-mes57']?>"></a>
    <a href="/img/quart/16_04_2018/5.jpg" class="fancybox" data-fancybox="group42" data-caption="<?=$mes['s-mes57']?>"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes57']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy42 {background-image: url(/img/quart/16_04_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy41">
  <div class="stroy_overlay" id='41'>
    <a id='group41' href="/img/quart/10_04_2018/1.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    <a href="/img/quart/10_04_2018/2.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    <a href="/img/quart/10_04_2018/3.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    <a href="/img/quart/10_04_2018/4.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    <a href="/img/quart/10_04_2018/5.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    <a href="/img/quart/10_04_2018/6.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    <a href="/img/quart/10_04_2018/7.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
	<a href="/img/quart/10_04_2018/8.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
	<a href="/img/quart/10_04_2018/9.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
	<a href="/img/quart/10_04_2018/10.jpg" class="fancybox" data-fancybox="group41" data-caption="<?=$mes['s-mes56']?>"></a>
    </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes56']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy41 {background-image: url(/img/quart/10_04_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy40">
  <div class="stroy_overlay" id='40'>
    <a id='group40' href="/img/quart/28_03_2018/1.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    <a href="/img/quart/28_03_2018/2.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    <a href="/img/quart/28_03_2018/3.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    <a href="/img/quart/28_03_2018/4.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    <a href="/img/quart/28_03_2018/5.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    <a href="/img/quart/28_03_2018/6.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    <a href="/img/quart/28_03_2018/7.jpg" class="fancybox" data-fancybox="group40" data-caption="<?=$mes['s-mes55']?>"></a>
    </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes55']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy40 {background-image: url(/img/quart/28_03_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy39">
  <div class="stroy_overlay" id='39'>
    <a id='group39' href="/img/quart/19_03_2018/1.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/2.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/3.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/4.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/5.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/6.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/7.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
    <a href="/img/quart/19_03_2018/8.jpg" class="fancybox" data-fancybox="group39" data-caption="<?=$mes['s-mes54']?>"></a>
	</div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes54']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy39 {background-image: url(/img/quart/19_03_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy38">
  <div class="stroy_overlay" id='38'>
    <a id='group38' href="/img/quart/05_03_2018/1.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/2.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/3.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/4.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/5.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/6.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/7.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/8.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/9.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/10.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/11.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/12.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/13.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/14.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/15.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/16.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/17.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/18.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/19.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/20.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/21.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/22.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>
    <a href="/img/quart/05_03_2018/23.jpg" class="fancybox" data-fancybox="group38" data-caption="<?=$mes['s-mes53']?>"></a>

  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes53']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy38 {background-image: url(/img/quart/05_03_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy37">
  <div class="stroy_overlay" id='37'>
    <a id='group37' href="/img/quart/28_02_2018/1.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/2.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/3.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/4.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/5.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/6.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/7.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/8.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/9.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/10.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/11.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/12.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/13.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/14.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/15.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/16.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/17.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/18.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/19.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/20.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/21.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/22.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/23.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/24.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/25.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/26.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/27.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/28.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/29.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/30.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/31.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
    <a href="/img/quart/28_02_2018/32.jpg" class="fancybox" data-fancybox="group37" data-caption="<?=$mes['s-mes52']?>"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes52']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy37 {background-image: url(/img/quart/28_02_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy36">
  <div class="stroy_overlay" id='36'>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" id='group36' href="/img/quart/21_02_2018/1.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/2.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/3.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/4.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/5.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/6.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/7.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/8.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/9.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/10.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/11.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/12.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/13.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/14.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/15.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/16.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/17.jpg"></a>
    <a class="fancybox" data-fancybox="group36" data-caption="<?=$mes['s-mes51']?>" href="/img/quart/21_02_2018/18.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes51']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy36 {background-image: url(/img/quart/21_02_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy35">
  <div class="stroy_overlay" id='35'>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" id='group35' href="/img/quart/13_02_2018/1.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/2.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/3.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/4.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/5.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/6.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/7.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/8.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/9.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/10.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/11.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/12.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/13.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/14.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/15.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/16.jpg"></a>
    <a class="fancybox" data-fancybox="group35" data-caption="<?=$mes['s-mes50']?>" href="/img/quart/13_02_2018/17.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes50']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy35 {background-image: url(/img/quart/13_02_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy34">
  <div class="stroy_overlay" id='34'>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" id='group34' href="/img/quart/08_02_2018/1.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/2.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/3.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/4.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/5.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/6.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/7.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/8.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/9.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/10.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/11.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/12.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/13.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/14.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/15.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/16.jpg"></a>
    <a class="fancybox" data-fancybox="group34" data-caption="<?=$mes['s-mes49']?>" href="/img/quart/08_02_2018/17.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes49']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy34 {background-image: url(/img/quart/08_02_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy33">
  <div class="stroy_overlay" id='33'>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" id='group33' href="/img/quart/24_01_2018/1.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/2.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/3.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/4.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/5.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/6.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/7.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/8.jpg"></a>
    <a class="fancybox" data-fancybox="group33" data-caption="<?=$mes['s-mes48']?>" href="/img/quart/24_01_2018/9.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes48']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy33 {background-image: url(/img/quart/24_01_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy32">
  <div class="stroy_overlay" id='32'>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" id='group32' href="/img/quart/15_01_2018/1.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/2.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/3.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/4.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/5.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/6.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/7.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/8.jpg"></a>
    <a class="fancybox" data-fancybox="group32" data-caption="<?=$mes['s-mes47']?>" href="/img/quart/15_01_2018/9.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes47']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy32 {background-image: url(/img/quart/15_01_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy31">
  <div class="stroy_overlay" id='31'>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" id='group31' href="/img/quart/09_01_2018/1.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/2.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/3.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/4.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/5.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/6.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/7.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/8.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/9.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/10.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/11.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/12.jpg"></a>
    <a class="fancybox" data-fancybox="group31" data-caption="<?=$mes['s-mes46']?>" href="/img/quart/09_01_2018/13.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes46']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy31 {background-image: url(/img/quart/09_01_2018/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy30">
  <div class="stroy_overlay" id='30'>
    <a href="/img/quart/26_12_2017/1.jpg" class="fancybox" id='group30' data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/9.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/10.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/11.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/12.jpg"></a>
    <a class="fancybox" data-fancybox="group30" data-caption="<?=$mes['s-mes45']?>" href="/img/quart/26_12_2017/13.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes45']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy30 {    background-image: url(/img/quart/26_12_2017/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy29">
  <div class="stroy_overlay" id='29'>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" id='group29' href="/img/quart/20_12_2017/1.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group29" data-caption="<?=$mes['s-mes44']?>" href="/img/quart/20_12_2017/9.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes44']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy29 {background-image: url(/img/quart/20_12_2017/1.jpg);}</style>					  <!-- элемент timeline -->
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy28">
  <div class="stroy_overlay" id='28'>
    <a href="/img/quart/12_12_2017/1.jpg" class="fancybox" id='group28' data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/9.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/10.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/11.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/12.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/13.jpg"></a>
    <a class="fancybox" data-fancybox="group28" data-caption="<?=$mes['s-mes43']?>" href="/img/quart/12_12_2017/14.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes43']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy28 {    background-image: url(/img/quart/12_12_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy27">
  <div class="stroy_overlay" id='27'>
    <a class="fancybox" data-fancybox="group27" data-caption="<?=$mes['s-mes42']?>" id='group27' href="/img/quart/30_11_2017/1.jpg"></a>
    <a class="fancybox" data-fancybox="group27" data-caption="<?=$mes['s-mes42']?>" href="/img/quart/30_11_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group27" data-caption="<?=$mes['s-mes42']?>" href="/img/quart/30_11_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group27" data-caption="<?=$mes['s-mes42']?>" href="/img/quart/30_11_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group27" data-caption="<?=$mes['s-mes42']?>" href="/img/quart/30_11_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group27" data-caption="<?=$mes['s-mes42']?>" href="/img/quart/30_11_2017/6.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes42']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy27 {background-image: url(/img/quart/30_11_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy26">
  <div class="stroy_overlay" id='26'>
    <a href="/img/quart/28_11_2017/1.jpg" class="fancybox" id='group26' data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>"></a>
    <a class="fancybox" data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>" href="/img/quart/28_11_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>" href="/img/quart/28_11_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>" href="/img/quart/28_11_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>" href="/img/quart/28_11_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>" href="/img/quart/28_11_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group26" data-caption="<?=$mes['s-mes41']?>" href="/img/quart/28_11_2017/7.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes41']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy26 {    background-image: url(/img/quart/28_11_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy25">
  <div class="stroy_overlay" id='25'>
    <a href="/img/quart/21_11_2017/1.jpg" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" class="fancybox" id='group25'></a>
    <a class="fancybox" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" href="/img/quart/21_11_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" href="/img/quart/21_11_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" href="/img/quart/21_11_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" href="/img/quart/21_11_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" href="/img/quart/21_11_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group25" data-caption="<?=$mes['s-mes40']?>" href="/img/quart/21_11_2017/7.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes40']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy25 {    background-image: url(/img/quart/21_11_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy24">
  <div class="stroy_overlay" id='24'>
    <a href="/img/quart/10_11_2017/1.jpg" class="fancybox" id='group24' data-fancybox="group24" data-caption="<?=$mes['s-mes39']?>"></a>
    <a class="fancybox" data-fancybox="group24" data-caption="<?=$mes['s-mes39']?>" href="/img/quart/10_11_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group24" data-caption="<?=$mes['s-mes39']?>" href="/img/quart/10_11_2017/3.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes39']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy24 {    background-image: url(/img/quart/10_11_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy23">
  <div class="stroy_overlay" id='23'>
    <a href="/img/quart/02_11_2017/1.jpg" class="fancybox" id='group23' data-fancybox="group23" data-caption="<?=$mes['s-mes38']?>"></a>
    <a class="fancybox" data-fancybox="group23" data-caption="<?=$mes['s-mes38']?>" href="/img/quart/02_11_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group23" data-caption="<?=$mes['s-mes38']?>" href="/img/quart/02_11_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group23" data-caption="<?=$mes['s-mes38']?>" href="/img/quart/02_11_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group23" data-caption="<?=$mes['s-mes38']?>" href="/img/quart/02_11_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group23" data-caption="<?=$mes['s-mes38']?>" href="/img/quart/02_11_2017/6.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes38']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy23 {    background-image: url(/img/quart/02_11_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy22">
  <div class="stroy_overlay" id='22'>
    <a href="/img/quart/25_10_2017/1.jpg" class="fancybox" id='group22' data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group22" data-caption="<?=$mes['s-mes37']?>" href="/img/quart/25_10_2017/9.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes37']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy22 {    background-image: url(/img/quart/25_10_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy21">
  <div class="stroy_overlay" id='21'>
    <a href="/img/quart/11_10_2017/1.jpg" class="fancybox" id='group21' data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/9.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/10.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/11.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/12.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/13.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/14.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/15.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/16.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/17.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/18.jpg"></a>
    <a class="fancybox" data-fancybox="group21" data-caption="<?=$mes['s-mes36']?> <?=$mes['s-mes14']?>" href="/img/quart/11_10_2017/19.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes36']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy21 {    background-image: url(/img/quart/11_10_2017/1.jpg);}</style>
</div>
<!-- конец блока -->


<div class="stroy_item stroy_item_right stroy20">
  <div class="stroy_overlay" id='20'>
    <a href="/img/quart/05_10_2017/1.JPG" class="fancybox" id='group20' data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/2.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/3.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/4.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/5.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/6.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/7.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/8.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/9.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/10.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/11.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/12.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/13.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/14.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/15.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/16.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/17.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/18.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/19.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/20.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/21.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/22.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/23.JPG"></a>
    <a class="fancybox" data-fancybox="group20" data-caption="<?=$mes['s-mes35']?> <?=$mes['s-mes14']?>" href="/img/quart/05_10_2017/24.JPG"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes35']?></p>
    <p class="stroy_name"></p>
  </figcaption>
<style>.stroy20 {    background-image: url(/img/quart/05_10_2017/1.JPG);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy19">
  <div class="stroy_overlay" id='19'>
    <a href="/img/quart/22_09_2017/1.jpg" class="fancybox" id='group19' data-fancybox="group19" data-caption="<?=$mes['s-mes34']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group19" data-caption="<?=$mes['s-mes34']?> <?=$mes['s-mes14']?>" href="/img/quart/22_09_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group19" data-caption="<?=$mes['s-mes34']?> <?=$mes['s-mes14']?>" href="/img/quart/22_09_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group19" data-caption="<?=$mes['s-mes34']?> <?=$mes['s-mes14']?>" href="/img/quart/22_09_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group19" data-caption="<?=$mes['s-mes34']?> <?=$mes['s-mes14']?>" href="/img/quart/22_09_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group19" data-caption="<?=$mes['s-mes34']?> <?=$mes['s-mes14']?>" href="/img/quart/22_09_2017/6.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes34']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy19 {    background-image: url(/img/quart/22_09_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

       <!-- начало блока -->
<div class="stroy_item stroy_item_right stroy18">
  <div class="stroy_overlay" id='18'>
    <a href="/img/quart/18_09_2017/1.jpg" class="fancybox" id='group18' data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/9.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/10.jpg"></a>
    <a class="fancybox" data-fancybox="group18" data-caption="<?=$mes['s-mes33']?> <?=$mes['s-mes14']?>" href="/img/quart/18_09_2017/11.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes33']?></p>
    <p class="stroy_name"></p>
  </figcaption>
<style>.stroy18 {    background-image: url(/img/quart/18_09_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy17">
  <div class="stroy_overlay" id='17'>
    <a href="/img/quart/08_09_2017/1.jpg" class="fancybox" id='group17' data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/9.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/10.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/11.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/12.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/13.jpg"></a>
    <a class="fancybox" data-fancybox="group17" data-caption="<?=$mes['s-mes32']?> <?=$mes['s-mes14']?>" href="/img/quart/08_09_2017/14.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes32']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy17 {    background-image: url(/img/quart/08_09_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy16">
  <div class="stroy_overlay" id='16'>
    <a href="/img/quart/04_09_2017/1.jpg" class="fancybox" id='group16' data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/5.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/6.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/7.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/8.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/9.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/10.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/11.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/12.jpg"></a>
    <a class="fancybox" data-fancybox="group16" data-caption="<?=$mes['s-mes31']?> <?=$mes['s-mes14']?>" href="/img/quart/04_09_2017/13.jpg"></a>
        </div>
        <figcaption>
          <p class="stroy_date"><?=$mes['s-mes31']?></p>
          <p class="stroy_name"></p>
        </figcaption>
        <style>.stroy16 {    background-image: url(/img/quart/04_09_2017/1.jpg);}</style>
    </div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy15">
  <div class="stroy_overlay" id='15'>
    <a href="/img/quart/22_08_2017/1.JPG" class="fancybox" id='group15' data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/2.JPG"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/3.JPG"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/4.JPG"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/5.JPG"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/6.JPG"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/7.JPG"></a>
    <a class="fancybox" data-fancybox="group15" data-caption="<?=$mes['s-mes30']?> <?=$mes['s-mes14']?>" href="/img/quart/22_08_2017/8.JPG"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes30']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy15 {    background-image: url(/img/quart/22_08_2017/1.JPG);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy14">
  <div class="stroy_overlay" id='14'>
    <a href="/img/quart/10_08_2017/1.jpg" class="fancybox" id='group14' data-fancybox="group14" data-caption="<?=$mes['s-mes29']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group14" data-caption="<?=$mes['s-mes29']?> <?=$mes['s-mes14']?>" href="/img/quart/10_08_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group14" data-caption="<?=$mes['s-mes29']?> <?=$mes['s-mes14']?>" href="/img/quart/10_08_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group14" data-caption="<?=$mes['s-mes29']?> <?=$mes['s-mes14']?>" href="/img/quart/10_08_2017/4.jpg"></a>
    <a class="fancybox" data-fancybox="group14" data-caption="<?=$mes['s-mes29']?> <?=$mes['s-mes14']?>" href="/img/quart/10_08_2017/5.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes29']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy14 {    background-image: url(/img/quart/10_08_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy13">
        <div class="stroy_overlay" id='13'>
          <a href="/img/quart/16_06_2017/1.jpg" class="fancybox" id='group13' data-fancybox="group13" data-caption="<?=$mes['s-mes19']?> <?=$mes['s-mes14']?>"></a>
          <a class="fancybox" data-fancybox="group13" data-caption="<?=$mes['s-mes19']?> <?=$mes['s-mes14']?>" href="/img/quart/16_06_2017/2.jpg"></a>
          <a class="fancybox" data-fancybox="group13" data-caption="<?=$mes['s-mes19']?> <?=$mes['s-mes14']?>" href="/img/quart/16_06_2017/3.jpg"></a>
          <a class="fancybox" data-fancybox="group13" data-caption="<?=$mes['s-mes19']?> <?=$mes['s-mes14']?>" href="/img/quart/16_06_2017/4.jpg"></a>
          <a class="fancybox" data-fancybox="group13" data-caption="<?=$mes['s-mes19']?> <?=$mes['s-mes14']?>" href="/img/quart/16_06_2017/5.jpg"></a>
        </div>
        <figcaption>
          <p class="stroy_date"><?=$mes['s-mes19']?></p>
          <p class="stroy_name"></p>
        </figcaption>
        <style>.stroy13 {    background-image: url(/img/quart/16_06_2017/1.jpg);}</style>
    </div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_right stroy12">
  <div class="stroy_overlay" id='12'>
    <a href="/img/quart/12_06_2017/1.jpg" class="fancybox" id='group12' data-fancybox="group12" data-caption="<?=$mes['s-mes18']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group12" data-caption="<?=$mes['s-mes18']?> <?=$mes['s-mes14']?>" href="/img/quart/12_06_2017/2.jpg"></a>
    <a class="fancybox" data-fancybox="group12" data-caption="<?=$mes['s-mes18']?> <?=$mes['s-mes14']?>" href="/img/quart/12_06_2017/3.jpg"></a>
    <a class="fancybox" data-fancybox="group12" data-caption="<?=$mes['s-mes18']?> <?=$mes['s-mes14']?>" href="/img/quart/12_06_2017/4.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes18']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy12 {    background-image: url(/img/quart/12_06_2017/1.jpg);}</style>
</div>
<!-- конец блока -->

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy11">
  <div class="stroy_overlay" id='11'>
    <a href="/img/quart/02_06_2017/155518.jpg" class="fancybox" id='group11' data-fancybox="group11" data-caption="<?=$mes['s-mes17']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group11" data-caption="<?=$mes['s-mes17']?> <?=$mes['s-mes14']?>" href="/img/quart/02_06_2017/155524.jpg"></a>
    <a class="fancybox" data-fancybox="group11" data-caption="<?=$mes['s-mes17']?> <?=$mes['s-mes14']?>" href="/img/quart/02_06_2017/155532.jpg"></a>
    <a class="fancybox" data-fancybox="group11" data-caption="<?=$mes['s-mes17']?> <?=$mes['s-mes14']?>" href="/img/quart/02_06_2017/155537.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes17']?></p>
    <p class="stroy_name"></p>
  </figcaption>
  <style>.stroy11 {    background-image: url(/img/quart/02_06_2017/155518.jpg);}</style>
</div>
<!-- конец блока -->

<div class="stroy_item stroy_item_right stroy10">
  <div class="stroy_overlay" id='10'>
    <a href="/img/quart/23_05_2017/mobile_20170522_165154.jpg" class="fancybox" id='group10' data-fancybox="group10" data-caption="<?=$mes['s-mes16']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group10" data-caption="<?=$mes['s-mes16']?> <?=$mes['s-mes14']?>" href="/img/quart/23_05_2017/mobile_20170522_165205.jpg"></a>
    <a class="fancybox" data-fancybox="group10" data-caption="<?=$mes['s-mes16']?> <?=$mes['s-mes14']?>" href="/img/quart/23_05_2017/mobile_20170522_165218.jpg"></a>
    <a class="fancybox" data-fancybox="group10" data-caption="<?=$mes['s-mes16']?> <?=$mes['s-mes14']?>" href="/img/quart/23_05_2017/mobile_20170522_165229.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes16']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy9">
  <div class="stroy_overlay" id='9'>
    <a href="/img/quart/12_05_2017/1205_0.jpg" class="fancybox" id='group9' data-fancybox="group9" data-caption="<?=$mes['s-mes15']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group9" data-caption="<?=$mes['s-mes15']?> <?=$mes['s-mes14']?>" href="/img/quart/12_05_2017/1205_1.jpg"></a>
    <a class="fancybox" data-fancybox="group9" data-caption="<?=$mes['s-mes15']?> <?=$mes['s-mes14']?>" href="/img/quart/12_05_2017/1205_2.jpg"></a>
    <a class="fancybox" data-fancybox="group9" data-caption="<?=$mes['s-mes15']?> <?=$mes['s-mes14']?>" href="/img/quart/12_05_2017/1205_3.jpg"></a>
    <a class="fancybox" data-fancybox="group9" data-caption="<?=$mes['s-mes15']?> <?=$mes['s-mes14']?>" href="/img/quart/12_05_2017/1205_4.jpg"></a>
    <a class="fancybox" data-fancybox="group9" data-caption="<?=$mes['s-mes15']?> <?=$mes['s-mes14']?>" href="/img/quart/12_05_2017/1205_5.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes15']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>
<!-- конец блока -->

<div class="stroy_item stroy_item_right stroy8">
  <div class="stroy_overlay" id='8'>
    <a href="/img/quart/3103_0.jpg" class="fancybox" id='group8' data-fancybox="group8" data-caption="<?=$mes['s-mes13']?> <?=$mes['s-mes14']?>"></a>
    <a class="fancybox" data-fancybox="group8" data-caption="<?=$mes['s-mes13']?> <?=$mes['s-mes14']?>" href="/img/quart/3103_1.jpg"></a>
    <a class="fancybox" data-fancybox="group8" data-caption="<?=$mes['s-mes13']?> <?=$mes['s-mes14']?>" href="/img/quart/3103_2.jpg"></a>
    <a class="fancybox" data-fancybox="group8" data-caption="<?=$mes['s-mes13']?> <?=$mes['s-mes14']?>" href="/img/quart/3103_3.jpg"></a>
    <a class="fancybox" data-fancybox="group8" data-caption="<?=$mes['s-mes13']?> <?=$mes['s-mes14']?>" href="/img/quart/3103_4.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes13']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy7">
  <div class="stroy_overlay" id='7'>
    <a href="/img/quart/20170220_5.jpg" class="fancybox" id='group7' data-fancybox="group7" data-caption="<?=$mes['s-mes12']?> <?=$mes['s-mes10']?>"></a>
    <a class="fancybox" data-fancybox="group7" data-caption="<?=$mes['s-mes12']?> <?=$mes['s-mes10']?>" href="/img/quart/20170220_2.jpg"></a>
    <a class="fancybox" data-fancybox="group7" data-caption="<?=$mes['s-mes12']?> <?=$mes['s-mes10']?>" href="/img/quart/20170220_3.jpg"></a>
    <a class="fancybox" data-fancybox="group7" data-caption="<?=$mes['s-mes12']?> <?=$mes['s-mes10']?>" href="/img/quart/20170220_4.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes12']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>
<!-- конец блока -->

<div class="stroy_item stroy_item_right stroy6">
  <div class="stroy_overlay" id='6'>
    <a href="/img/quart/foto0902_5.jpg" class="fancybox" id='group6' data-fancybox="group6" data-caption="<?=$mes['s-mes11']?> <?=$mes['s-mes10']?>"></a>
    <a class="fancybox" data-caption="<?=$mes['s-mes11']?> <?=$mes['s-mes10']?>" href="/img/quart/foto0902_3.jpg"></a>
    <a class="fancybox" data-caption="<?=$mes['s-mes11']?> <?=$mes['s-mes10']?>" href="/img/quart/foto0902_4.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes11']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy5">
  <div class="stroy_overlay" id='5'>
    <a href="/img/quart/foto2701_5.jpg" class="fancybox" id='group5' data-fancybox="group5" data-caption="<?=$mes['s-mes9']?><?=$mes['s-mes10']?>"></a>
    <a class="fancybox" data-fancybox="group5" data-caption="<?=$mes['s-mes9']?> <?=$mes['s-mes10']?>" href="/img/quart/foto2701_2.jpg"></a>
    <a class="fancybox" data-fancybox="group5" data-caption="<?=$mes['s-mes9']?> <?=$mes['s-mes10']?>" href="/img/quart/foto2701_3.jpg"></a>
    <a class="fancybox" data-fancybox="group5" data-caption="<?=$mes['s-mes9']?> <?=$mes['s-mes10']?>" href="/img/quart/foto2701_6.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes9']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>
<!-- конец блока -->

<div class="stroy_item stroy_item_right stroy4">
  <div class="stroy_overlay" id='4'>
    <a href="/img/quart/stroy01_17_5.jpg" class="fancybox" id='group4' data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>"></a>
    <a class="fancybox" data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>" href="/img/quart/stroy01_17_1.jpg"></a>
    <a class="fancybox" data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>" href="/img/quart/stroy01_17_2.jpg"></a>
    <a class="fancybox" data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>" href="/img/quart/stroy01_17_3.jpg"></a>
    <a class="fancybox" data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>" href="/img/quart/stroy01_17_4.jpg"></a>
    <a class="fancybox" data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>" href="/img/quart/stroy01_17_6.jpg"></a>
    <a class="fancybox" data-fancybox="group4" data-caption="<?=$mes['s-mes7']?> <?=$mes['s-mes8']?>" href="/img/quart/stroy01_17_7.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes7']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy3">
  <div class="stroy_overlay" id='3'>
    <a href="/img/quart/191216_1.jpg" class="fancybox" id='group3' data-fancybox="group3" data-caption="<?=$mes['s-mes5']?> <?=$mes['s-mes6']?>"></a>
    <a class="fancybox" data-fancybox="group3" data-caption="<?=$mes['s-mes5']?> <?=$mes['s-mes6']?>" href="/img/quart/191216_3.jpg"></a>
    <a class="fancybox" data-fancybox="group3" data-caption="<?=$mes['s-mes5']?> <?=$mes['s-mes6']?>" href="/img/quart/191216_4.jpg"></a>
    <a class="fancybox" data-fancybox="group3" data-caption="<?=$mes['s-mes5']?> <?=$mes['s-mes6']?>" href="/img/quart/191216_5.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes5']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>
<!-- конец блока -->

<div class="stroy_item stroy_item_right stroy2">
  <div class="stroy_overlay" id='1'>
    <a class="fancybox" id='group1' data-fancybox="group1" data-caption="<?=$mes['s-mes3']?> <?=$mes['s-mes4']?>" href="/img/quart/stroy1a.jpg"></a>
    <a class="fancybox" data-fancybox="group1" data-caption="<?=$mes['s-mes3']?> <?=$mes['s-mes4']?>" href="/img/quart/stroy2a.jpg"></a>
    <a class="fancybox" data-fancybox="group1" data-caption="<?=$mes['s-mes3']?> <?=$mes['s-mes4']?>" href="/img/quart/stroy3a.jpg"></a>
    <a class="fancybox" data-fancybox="group1" data-caption="<?=$mes['s-mes3']?> <?=$mes['s-mes4']?>" href="/img/quart/stroy4a.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes3']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>

<!-- начало блока -->
<div class="stroy_item stroy_item_left stroy1">
  <div class="stroy_overlay" id='0'>
    <a class="fancybox" id='group0' data-fancybox="group0" data-caption="<?=$mes['s-mes2']?> <?=$mes['s-mes1']?>" href="/img/quart/stroy1b.jpg"></a>
    <a class="fancybox" data-fancybox="group0" data-caption="<?=$mes['s-mes2']?> <?=$mes['s-mes1']?>" href="/img/quart/stroy2b.jpg"></a>
    <a class="fancybox" data-fancybox="group0" data-caption="<?=$mes['s-mes2']?> <?=$mes['s-mes1']?>" href="/img/quart/stroy3b.jpg"></a>
    <a class="fancybox" data-fancybox="group0" data-caption="<?=$mes['s-mes2']?> <?=$mes['s-mes1']?>" href="/img/quart/stroy4b.jpg"></a>
  </div>
  <figcaption>
    <p class="stroy_date"><?=$mes['s-mes2']?></p>
    <p class="stroy_name"></p>
  </figcaption>
</div>
<!-- конец блока -->

</div>
</div>
  <div class="logo">
    <a href="/<?=$_POST['lang']?>"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" /></a>
  </div>
</div>
<footer>
<div class="foot-wrap">
<div class="allright">
<p>
  <?=$mes['v01']?>
</p>
</div>

<div class="web">
<a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
</div>
<a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
<span><?=$mes['v02']?></span>

</div>
</footer>
<style media="screen">

.tooltip {
display: inline-block;
position: relative;
z-index: 99;
cursor: pointer;
}

/* Gap filler */
.tooltip::after {
content: '';
position: absolute;
width: 100%;
height: 20px;
bottom: 100%;
left: 50%;
pointer-events: none;
-webkit-transform: translateX(-50%);
transform: translateX(-50%);
}

.tooltip:hover::after {
pointer-events: auto;
}

/* Tooltip */

.tooltip-content {
position: absolute;
z-index: 100;
bottom: 100%;
font-size: 12px;
line-height: 1.4;
text-align: center;
font-weight: 200;
color: #fffaf0;
background: #0035AA;
opacity: 0;
border-top: 3px solid #fff;
margin: 0 0 20px -180px;
cursor: default;
pointer-events: none;
/*font-family: 'Satisfy', cursive;*/
-webkit-font-smoothing: antialiased;
-webkit-transition: opacity 0.3s 0.3s;
transition: opacity 0.3s 0.3s;
}

.tooltip:hover .tooltip-content {
opacity: 1;
pointer-events: auto;
-webkit-transition-delay: 0s;
transition-delay: 0s;
}

.tooltip-content span {
display: block;
}

.tooltip-text {
border-bottom: 10px solid #fff;
overflow: hidden;
-webkit-transform: scale3d(0,1,1);
transform: scale3d(0,1,1);
-webkit-transition: -webkit-transform 0.3s 0.3s;
transition: transform 0.3s 0.3s;
}

.tooltip:hover .tooltip-text {
-webkit-transition-delay: 0s;
transition-delay: 0s;
-webkit-transform: scale3d(1,1,1);
transform: scale3d(1,1,1);
}

.tooltip-inner {
background: rgba(85,61,61,0.95);
padding: 40px;
-webkit-transform: translate3d(0,100%,0);
transform: translate3d(0,100%,0);
webkit-transition: -webkit-transform 0.3s;
transition: transform 0.3s;
}

.tooltip:hover .tooltip-inner {
-webkit-transition-delay: 0.3s;
transition-delay: 0.3s;
-webkit-transform: translate3d(0,0,0);
transform: translate3d(0,0,0);
}
/*
.tool_sec{
width: 50%;
float: left;
text-align: left;
box-sizing: border-box;
padding: 0 4px 0 10px;
margin: 10px 0;
}*/
.tool_sec {
    width: 49%;
   float: none;
   text-align: left;
   box-sizing: border-box;
   padding: 0 4px 0 10px;
   margin: 6px 0;
   overflow: hidden;
   display: inline-block;
   vertical-align: top;
   white-space: nowrap;
}
.block_top {margin-bottom:70px;}

/* Arrow */
.tooltip-content::after {
content: '';
bottom: -20px;
left: 50%;
border: solid transparent;
height: 0;
width: 0;
position: absolute;
pointer-events: none;
border-color: transparent;
border-top-color: #fff;
border-width: 10px;
margin-left: -10px;
visibility: visible;
}

.header-bottom {height: auto; padding-bottom: 20px;}
@media only screen and (max-height: 640px) {
.header.buld {
height: auto;
}
.block_top {margin-bottom:0px;}
}
@media screen and (max-width: 768px){
.header .wrap_header {
width: 300px;
}
.stroy .timeline{
  display: none;
}
.block_top {margin-bottom:0px;}
}
@media only screen and (max-width: 1024px) and (min-width:768px){
.status{
width: 100%;
}
.block_top {margin-bottom:0px;}
}

/* 22.01.2018 --Andrey */
#hodstroyki {
  position: relative;
  margin-top: 100px;
}
.stroy_item {
  margin: 0px;
}
.stroy_item {
  margin-bottom: 25px;
  margin-left: 0px;
}

.timeline {
  position: absolute;
  top: 50%;
  left: 50%;
  height: 100%;
  transform: translate(-50%, -51%);
}

.header-bottom {
	padding-top: 60px;
}
.stroy_item:nth-child(even) {
  margin-top: -70px;
}
.stroy_item:nth-child(even):after{
  content: '';
  display: block;
  position: absolute;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
  border: 15px solid transparent;
  border-right-color: #0035aa;
  right: -30px;
  top: 50%;
}
.stroy_item:nth-child(odd):before {
  content: '';
  display: block;
  position: absolute;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
  border: 15px solid transparent;
  border-left-color: #0035aa;
  left: -30px;
  top: 50%;
}
@media only screen and (max-width: 1024px) {
  #hodstroyki {
    width: 668px;
  }
  .stroy_item {
    width: 300px;
  }
}
@media screen and (max-width: 768px) {
  #hodstroyki {
    flex-direction: column;
    width: auto;
    margin-top: 55px;
  }
  .stroy_item {
    width: 100%;
  }
  .stroy_item:nth-child(even) {
    margin-top: 0px;
  }
  .stroy_item:nth-child(even):after {
    content: none;
  }
  .stroy_item:nth-child(odd):before {
    content: none;
  }
}

.block_hod-stroitelstva {
	height: 480px;
	margin-bottom: 368px;
}
@media screen and (max-width:786px){
.block_hod-stroitelstva {
	height: 912px;
}	
}
</style>

</div>

<!-- <script src="js/fancybox/jquery.fancybox-1.2.1.pack.js"></script> -->
<script src="/js/jquery.fancybox.js"></script>

<script type="text/javascript">
$(".fancybox").fancybox({
  arrows : true,
  thumbs : {
    autoStart: true
  },
  buttons: [
    'slideShow',
    'fullScreen',
    'thumbs',
    'close'
  ],
  animationEffect: 'zoom-in-out'
});


</script>
<script src="/js/jquery.progress.js"></script>
<script src="/js/statusmob.js"></script>
<!-- <script>
if(window.screen.width > 1024) {
document.write('<script src="/js/status.js"><\/script>');
}
if(window.screen.width < 1024){
document.write('<script src="/js/statusmob.js"><\/script>');
}
</script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="/js/scripts.js?v=1.21"></script>
<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
</body>
</html>
