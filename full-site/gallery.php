<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['val-description']; ?>">
  <title><?=$mes['val0']?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
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
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <style>
    .gallery {
      position: relative;
      background: url("/img/build.jpg");
      background-size: cover;
      background-position: center;
      min-height: calc(100vh - 36px);
    }
    .bxSlider__custom-controls {
      position: absolute;
      top: 50%;
      width:  50px;
      height: 50px;
      background-color: rgba(0, 57, 168, .5);
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all .5s;
    }
    .bxSlider__custom-controls:hover {
      cursor: pointer;
      background-color: rgba(0, 57, 168, 1);
    }
    .bxSlider__custom-controls_arrow {
      width: 17px;
      height: 28px;
      background-image: url('/img/gallery/arrows-spritesheet.png');
      background-repeat: no-repeat;
    }
    .bxSlider__custom-controls_arrow_left {
      background-position: left;
    }
    .bxSlider__custom-controls_arrow_right {
      background-position: right;
    }
    .bxSlider__custom-controls_position_left {
      left: 10%;
    }
    .bxSlider__custom-controls_position_right {
      right: 10%;
    }
    .bxSlider__custom-pager-container {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translate(-50%, 0);
      background-color: rgba(255, 255, 255, .7);
      padding: 5px;
      width: 700px;
    }
    .bxSlider__custom-pager {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    .bxSlider__custom-pager-link {
      width: 40px;
      height: 40px;
      display: block;
      margin: 5px;
      box-sizing: border-box;
    }
    .bxSlider__custom-pager-link.active {
      border: 1px solid rgba(0, 57, 168, 1);
    }
    .bxSlider__custom-pager-link:hover {
      cursor: pointer;
    }
    .bxSlider__custom-pager-image {
      max-width: 100%;
      height: 100%;
    }
    .gallery .bx-wrapper img{
      max-width: none;
      width: 100%;
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .gallery .js-bxSlideritem {
      height: 100vh;
      overflow: hidden;
    }
    
    @media only screen and (max-width: 768px){
      .gallery .bx-wrapper img{
        height: 100%;
        width: auto;
      }
      .bxSlider__custom-pager-link {
        width: 20px;
        height: 20px;
      }
      .bxSlider__custom-pager-container {
        width: 398px;
      }
    }
    @media only screen and (max-width: 420px) {
      .bxSlider__custom-pager-link {
        width: 15px;
        height: 15px;
      }
      .bxSlider__custom-pager-container {
        width: 300px;
      }
      .bxSlider__custom-pager-link {
        margin: 4px;
      }
    }

  </style>
  </head>
  <body>
    <div class="loader">
      <div class="loader__background">
        <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
      </div>
    </div>

    <section class="gallery">
      <div class="galery__container">
<<<<<<< HEAD
        <div class="bxslider gallery__bxslider ">
	      <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/RIBALSKY_NEW YEAR ONE_FINAL.jpeg"></div>
=======
          <div class="bxslider gallery__bxslider ">
		  <!-- <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/x1.jpg"></div>
		  <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/x2.jpg"></div>
		  <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/x3.jpg"></div> -->
		  <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/RIBALSKY_NEW YEAR ONE_FINAL.jpeg"></div>
>>>>>>> 09eaf810a8dda434a0968fe6ed6f8ff751fb0307
		  <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/4s.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/0.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/2s.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r5.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r6.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r7.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r8.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r9.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r10.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r11.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r12.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r13.jpg"></div>
          <div class="item js-bxSlideritem"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r14.jpg"></div>
        </div>
        <div class="bxSlider__custom-controls-container">
          <div class="bxSlider__custom-controls bxSlider__custom-controls_position_left js-bxSlider__custom-controls_position_left"><span class="bxSlider__custom-controls_arrow bxSlider__custom-controls_arrow_left"></span></div>
          <div class="bxSlider__custom-controls bxSlider__custom-controls_position_right js-bxSlider__custom-controls_position_right"><span class="bxSlider__custom-controls_arrow bxSlider__custom-controls_arrow_right"></span></div>
        </div>
        <div class="bxSlider__custom-pager-container">
          <div class="bxSlider__custom-pager js-bxSlider__custom-pager"></div>
        </div>
      </div>
    </section>

    <footer>
          <div class="foot-wrap">
            <div class="allright">
               <p>
                 <?=$mes['v01']?>
                </p>
            </div>
            <div class="web">
              <a href="https://smarto.agency/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartorOrange')?>  src="/img/logo-smart.png" /></a>
            </div>
			<a class="footer__jurdoc_link" href="<?=$mes['events_url_documents']?>"><?=$mes['jur-mes-menu']?></a>
            <a href="https://smarto.agency/" rel="nofollow" target="_blank" class="smarto_agency"><span><?=$mes['v02']?></span></a>
          </div>
    </footer>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
     <script src="/js/scroll/modernizr.js"></script>
 <!-- Google Tag Manager (noscript) -->

<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>


<script src="/js/scripts.js"></script>
<script>
  $(document).ready(function(){
    var slider = $('.bxslider').bxSlider({
      controls: false,
      stopAutoOnClick: true,
      pagerCustom: $('.js-bxSlider__custom-pager')
    });
    $('.js-bxSlider__custom-controls_position_right').click(slider.goToNextSlide);
    $('.js-bxSlider__custom-controls_position_left').click(slider.goToPrevSlide);
    var slides = $('.js-bxSlideritem');
    var imgs = [];
    var pagerMarkup = '';
    $.each(slides, function(index, slide) {
      if(!$(slide).hasClass('bx-clone')) {
        imgs.push($(slide).children('img').attr('src'));
      }
    });
    imgs.forEach(function(img, index) {
      pagerMarkup += '<a data-slide-index="'+ index +'" class="bxSlider__custom-pager-link" >' +
                      '<img class="bxSlider__custom-pager-image" src="'+ img +'"/>'
                    '</a>'
    });
    $('.js-bxSlider__custom-pager').html(pagerMarkup);
  }); //end ready
</script>
  </body>
</html>
