<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
    <meta charset="utf-8">
	  <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width">
	  <meta name="description" content='<?=$mes['b-mes-description']; ?>'>
    <title><?=$mes['b-mes0']?></title>
    <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css?v=1.21" />
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=1.21" />
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
    <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>

    <style media="screen">
      body{
        height: 100%;
      }
      .container_partners{
        min-height: 100%;
        background: url('/img/3s.jpg') center no-repeat;
        background-size: cover;
        box-sizing: border-box;
        font-family: "PFDinTextUniversal-Light";
      }
      .container_partners *{
        box-sizing: border-box;
      }
      .partners_wrapper{
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        padding: 80px 10px;
      }
      .main_name{
        font-size: 40px;
        text-align: center;
      }
      .partner_box{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        display: -webkit-flex;
        -webkit-flex-direction: row;
        -webkit-justify-content: space-between;
        margin: 30px auto;
      }
      .partner_box_row{
        width: 23%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        display: -webkit-flex;
        -webkit-flex-direction: column;
        -webkit-justify-content: space-between;
      }
      .partner_box_item{
        background: rgba(0,0,0,0.6);
        transition: 0.35s;
        -webkit-transition: 0.35s;
        text-align: center;
        height: 100%;
        margin-bottom: 20px;
        position: relative;
        cursor: pointer;
      }
      .partner_box_item:hover{
        background: rgba(0,53,170,0.65);
        transition: 0.35s;
        -webkit-transition: 0.35s;
      }
      .partner_box_item .text__block p{
        color: white;
        line-height: 1.2;
      }
      .partner_subname{
        width: 100%;
        font-size: 20px;
        text-align: center;
        letter-spacing: 1px;
        padding: 20px 0;
        background: #0035AA;
      }
      .partners_info{
        padding: 20px;
      }
      .partner_box_item a{
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
      }
      .partners__img {
        height: 70px;
        margin: 10px auto 20px;
      }
      .partners__img img{
        max-width: 100%;
        max-height: 100%;
      }

      @media only screen and (max-width:768px) {
        .partner_box {
          -webkit-flex-direction: column;
          flex-direction: column;
      }
      .partner_box_row {
          width: 80%;
          margin: 0 auto;
        }
      .partners__img.kmb__img{
        height: 100px;
      }

      }
    </style>

      <div class="container_partners">
        <div class="partners_wrapper">
        <?php /*Меню*/ include_once('include/top-menu.php'); ?>
 
        <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>

          <div class="main_name">
           <h1><?=$mes['b-mes1']?></h1>
          </div>
          <div class="partner_box">
            <div class="partner_box_row">
              <div class="partner_box_item">
                <div class="partner_subname"><?=$mes['b-mes6']?></div>
                <div class="partners_info">
                  <div class="partners__img">
                    <img src="/img/build/saga-logo-w.svg" alt="">
                  </div>
                  <div class="text__block">
                    <p>
                    <?=$mes['pa-mes2'];?>
                    </p>
                  </div>
                </div>
                <a href="http://saga-development.com.ua/" target="_blank"></a>
              </div>
            </div>

            <div class="partner_box_row">
              <div class="partner_box_item">
                <div class="partner_subname"><?=$mes['b-mes6']?></div>
                <div class="partners_info">
                  <div class="partners__img kmb__img">
                    <img src="/img/build/perfect.png" alt="perfect"/>
                  </div>
                  <div class="text__block">
                    <p>
                    <?=$mes['pa-mes6'];?>
                    </p>
                    <br/><br/><br/><br/><br/>
                  </div>
                </div>
                <a href="http://perfect-group.ua" target="_blank"></a>
              </div>
              
            </div>

            <div class="partner_box_row">
              <div class="partner_box_item">
                <div class="partner_subname"><?=$mes['b-mes5']?></div>
                <div class="partners_info">
                  <div class="partners__img">
                    <img src="/img/build/buro.png" alt="">
                  </div>
                  <div class="text__block">
                    <p>
                    <?=$mes['pa-mes4'];?>
                    </p>
                  </div>
                </div>
                <a href="http://www.buro-o.com" target="_blank"></a>
              </div>
              <div class="partner_box_item">
                <div class="partner_subname"><?=$mes['b-mes5']?></div>
                <div class="partners_info">
                  <div class="partners__img">
                    <img src="/img/build/terra.png" alt="terra">
                  </div>
                  <div class="text__block">
                    <p>
                    <?=$mes['pa-mes7'];?>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="partner_box_row">
              <div class="partner_box_item">
                <div class="partner_subname"><?=$mes['b-mes4']?></div>
                <div class="partners_info">
                  <div class="partners__img">
                    <img src="/img/build/kmb.png" alt="kmb">
                  </div>
                  <div class="text__block">
                    <p>
                    <?=$mes['pa-mes3'];?>
                    </p>
                  </div>
                </div>
                <a href="http://kmb.ua/ua" target="_blank"></a>
              </div>

              <div class="partner_box_item">
                <div class="partner_subname"><?=$mes['b-mes4']?></div>
                <div class="partners_info">
                  <div class="partners__img">
                    <img src="/img/build/river.png" alt="">
                  </div>
                  <div class="text__block">
                    <!-- <p>
                    <?=$mes['pa-mes6'];?>
                    </p> -->
                  </div>
                </div>
                <a href="https://riverside.net.ua/" target="_blank"></a>
              </div>
            </div>

          </div>
        </div>

      <!-- <div class="logo-more-proj clearfix">
      <ul>
      <li class="orgproj"><h2><?=$mes['pa-mes1']?><h2></li>
      <li><a href="http://new-york.com.ua/"><img src="/img/icons/Logo SVGw.svg" alt="new-york"></a></li>
      <li><a href="http://einstein.house/"><img src="/img/icons/EINSTEIN-logo.svg" alt="einstein"></a></li>
      <li><a href="https://chicago.kiev.ua/"><img src="/img/icons/logoChicago.svg" alt="chicago"></a></li>
      <li><a href="http://bristol.house/"><img src="/img/icons/BRISTOL_logoW.svg" alt="BRISTOL"></a></li>
      <li><a href="http://www.sanfrancisco.com.ua/"><img src="/img/icons/SF_logo_white.svg" alt="SanFrancisco"></a></li>
    </ul>
  </div> -->
    </div>
    <footer class="foot_static">
      <div class="foot-wrap">
        <div class="allright"><p><?=$mes['v01']?></p></div>
        <div class="web">
          <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
        </div>
        <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
        <span><?=$mes['v02']?></span>
      </div>
    </footer>
    <script src="/js/scripts.js?v=1.21"></script>

      <!-- <script src="/js/callback.js"></script> -->
  </body>
</html>