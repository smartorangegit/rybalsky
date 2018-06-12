<?php /*Мова*/ include_once('../include/lang.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="stylesheets/screen.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/scroll.css"/>
  <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css"/>
  <link rel="stylesheet" type="text/css" href="../css/menu.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>"/>
  <script src="/js/scroll/jquery-2.1.4.js"></script>
 
</head>
<body>
  <div class="wraper">
    <div class="jur-doc__container">
      <header>
        <div class="wrap_header">
          <?php /*Меню*/ include_once('../include/top-menu.php'); ?>
          <?php /*Контактна форма*/ include_once('../include/call_my.php'); ?> 
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
          <h1>юридична документація</h1>
          <div class="jur-doc__text">
            <ul class="jur-doc__body_list">
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Документи по земельній ділянці</a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Декларація про початок будівельних робіт</a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Містобудівні умови</a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Технічні умови по комунікаціях </a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Ліцензія на будівництво </a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Декларація про ведення домів до експлуатації</a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Документи по дощовому колектору</a></li>
              <li class="jur-doc__body_item"><a href="#" class="jur-doc__body_link">Тарифи ЖЕК (діють з 1.08.14)</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="empty-block"></div>
      <footer class="footer1" >
        <div class="foot-wrap">
          <div class="allright">
             <p>
               <?=$mes['v01']?>
             </p>
          </div>
           <div class="web">
            <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png"  width="55px" /></a>
          </div>
          <span><?=$mes['v02']?></span>

        </div>
      </footer>
  </div>
   <script src="/js/scripts.js"></script>
  <script src="/js/jquery.fancybox.js"></script>
  <script src="/js/fancybox/jquery.easing.1.3.js"></script>
  <script src="/js/fancybox/jquery.mousewheel.min.js"></script>
  <script src="/js/scroll/modernizr.js"></script>  <script src="/js/owl.carousel.min.js"></script>
</body>
</html>