<?php include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['atmosfera-description']; ?>">
  <title><?=$mes['atmosfera-title']; ?></title>
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
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <!-- <link rel="stylesheet" type="text/css" href="/css/kvartira.css" /> -->
</head>
<body>
  <style media="screen">
    body{height: 100%;}
    .container{
      min-height: 100%;
      background: url("/img/app-bg.jpg") center 0 no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    footer{margin-top: 0;}
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
        <?php include_once('include/call_my.php'); ?>
        <div class="clearfix"></div>
      </div>
      <div class="content content_atmosfera">
        <div class="content_wrap clearfix">
          <h1 class="content_name"><?=$mes['atmosfera-h1']; ?></h1>
          <div class="atmo__top">
            <div class="content_subname"><?=$mes['atmosfera-content_subname']; ?></div>
          </div>
          <div class="atmo__top">
            <div class="atmoinfo__box">
            <div class="atmo__img">
              <img src="/img/atm_svg/sfera.svg" alt="SFERA Living System (ATMOSFERA)" title="SFERA Living System (ATMOSFERA)">

            </div>
              <div class="text__block">
				<?=$mes['atmosfera-text__block']; ?>
              </div>
            </div>
            <div class="atmo_video">
              <iframe width="100%" height="350" src="https://www.youtube.com/embed/LYWyG4refiI"; frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            </div>

          </div>

          <!-- <div class="atm__box">
            <div class="atm_icon">
              <img src="/img/atm_svg/atm1.svg" alt="">
            </div>
            <div class="atm__content">
              <div class="block__name">
                З ЧОГО СКЛАДАЄТЬСЯ ATMOSFERA
              </div>
              <ul class="atm__lost">
                <li>команда по управлінню будинком</li>
                <li>мобільний додаток iOS та Android</li>
                <li>чат для вирішення екстрених ситуацій</li>
                <li>система «розумний дім»</li>
                <li>система «розумна квартира»</li>
              </ul>
            </div>

          </div> -->
          <div class="atm__box">
            <div class="atm_icon">
              <img src="/img/atm_svg/atm2.svg" alt="">
            </div>
            <div class="atm__content">
              <div class="block__name"><h2><?=$mes['atmosfera-h2']; ?></h2></div>
				<?=$mes['atmosfera-ul1']; ?>
            </div>
          </div>
          <div class="atm__box">
            <div class="atm_icon">
              <img src="/img/atm_svg/atm3.svg" alt="">
            </div>
            <div class="atm__content">
              <div class="block__name"><h2><?=$mes['atmosfera-h2-2']; ?></h2></div>
				<?=$mes['atmosfera-ul2']; ?>
            </div>
          </div>

          <div class="atm__box">
            <div class="atm_icon">
              <img src="/img/atm_svg/atm4.svg" alt="">
            </div>
            <div class="atm__content">
              <div class="block__name"><h2><?=$mes['atmosfera-h2-3']; ?></h2></div>
				<?=$mes['atmosfera-ul3']; ?>
            </div>
          </div>

          <div class="atm__box">
            <div class="atm_icon">
              <img src="/img/atm_svg/atm5.svg" alt="">
            </div>
            <div class="atm__content">
              <div class="block__name"><h2><?=$mes['atmosfera-h2-4']; ?></h2></div>
				<?=$mes['atmosfera-ul4']; ?>
            </div>
          </div>

          <div class="atm__box">
            <div class="atm_icon">
              <img src="/img/atm_svg/atm6.svg" alt="">
            </div>
            <div class="atm__content">
              <div class="block__name"><h2><?=$mes['atmosfera-h2-5']; ?></h2></div>
              <div class="text__block">
				<?=$mes['atmosfera-text__block-5']; ?>
                <!-- <p>
                  Ми допоможемо вам встановити систему «розумна квартира» та з моменту заселення даруємо вам Samsung SmartThing Hub. За його допомогою можна підключити у власній квартирі розумні пристрої:
                </p> -->

              </div>
              <!-- <ul>
                <li>термостати</li>
                <li>освітлення</li>
                <li>камери</li>
                <li>акустичні системи </li>
                <li>голосові асистенти від Apple, Amazon чи Google</li>
              </ul> -->

            </div>
          </div>
          <div class="atm__footer">
			<?=$mes['atmosfera-atm__footer']; ?>
          </div>


        </div>
        <style media="screen">
        .content_atmosfera{
          padding-top: 100px;
          box-sizing: border-box;
        }
        .content_atmosfera .text__block{
          max-width: 100%;
          color: white;
        }
        .content_atmosfera .block__name{
          color: white;
        }
        .content_atmosfera img{
          width: 100%;
        }
        h1{
          font-size: 40px;
          text-align: center;
          padding: 20px;
        }
        .content_atmosfera *{
          box-sizing: border-box;
        }
        .content_atmosfera .content_wrap{
          width: 100%;
          max-width: 1080px;
          padding: 0 10px;
          margin: 0 auto;
        }
        .atmo__top{
          display: flex;
          justify-content: space-between;
          display: -webkit-flex;
          -webkit-justify-content: space-between;
          margin-bottom: 30px;
        }
        .atmo__top .content_subname{
          padding-left: 20px;
          font-size: 20px;
          line-height: 1.5;
        }
        .atmo__top .content_text{
          padding: 0;
        }
        .atmo_video{
          width: 60%;
        }
        .atmoinfo__box{
          width: 40%;
          padding: 24px;
        }
        .atmo__img{
          width: 100px;
          margin: 0 20px;
          float: left;

        }
        .atm__box{
          border-top: 1px solid #5c5c5d;
          padding: 60px 0;
          display: flex;
          display: -webkit-flex;
          justify-content: space-between;
          align-items: center;
          -webkit-justify-content: space-between;
          -webkit-align-items: center;
        }
        .atm__box .content_subname{
          font-size: 48px;
          text-align: left;
          line-height: normal;
          padding: 0 40px;
        }
        .atm__box .content_text{
          padding: 20px 40px;
        }
        .atm_icon{
          width: 100px;
          padding: 16px;
        }

        .atm__content{
          width: 100%;
        }
        .atm__content ul{
          list-style: disc;
          list-style-position: inside;
          column-count: 2;
          line-height: 1.6;
          padding: 20px 40px;
        }
        .atm__footer{
          border-top: 1px solid #5c5c5d;
          border-bottom: 1px solid #5c5c5d;
          padding: 60px 40px;
          display: flex;
          display: -webkit-flex;
          line-height: 1.6;
          margin-bottom: 60px;
        }
        .atm__footer > div{
          padding: 24px;
        }
        @media only screen and (max-width:1024px) {
          .atmo__top:nth-child(2){
            flex-direction: column-reverse;
            align-items: center;
            -webkit-flex-direction: column-reverse;
            -webkit-align-items: center;
          }
          .atmoinfo__box{
            width: 100%;
          }
          .atmo_video{
            width: 80%;
          }
        }
          @media only screen and (max-width:768px){
            .content_atmosfera .content_wrap {
              padding: 0 10px 0 22px;
              }
            .atmo__top{
              flex-direction: column;
              align-items: center;
              -webkit-flex-direction: column;
              -webkit-align-items: center;
            }
            .atmo__top .content_subname {
              padding-left: 0px;
              font-size: 18px;
            }
            .atmoinfo__box{
              padding: 0;
            }
            .atmo__img {
              width: 85px;
            }
            .atmo_video {
              width: 100%;
            }
            iframe{
              height: 180px;
            }
            .atm__box{
              flex-direction: column;
              -webkit-flex-direction: column;
              padding: 16px 0;
            }
            .atm__box .content_subname {
              font-size: 30px;
              padding: 0;
            }
            .atm__content ul {
              column-count: 1;
              padding: 0;
            }
            .atm__box .content_text {
              padding: 20px 0;
            }
            .atm__footer {
              padding: 0;
              flex-direction: column;
              -webkit-flex-direction: column;
            }
            .atm__footer > div {
              padding: 14px 0;
            }
          }



        </style>
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
  </body>
</html>
