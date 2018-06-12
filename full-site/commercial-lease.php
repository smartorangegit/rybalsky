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
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/choise.css">
  <link rel="stylesheet" type="text/css" href="/css/menu.css">
  <link rel="stylesheet" type="text/css" href="/js/owl-slider/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="/js/owl-slider/css/owl.theme.default.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="/css/scroll.css"> -->
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
  </head>
  <body>
    <div class="loader">
      <div class="loader__background">
        <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
      </div>
    </div>

    <div class="commerc-container">
      <div class="choice-name commerc__choice-name commerc-choice-name_margin">
        <h1><?=$mes['pl-mes1-ar']?></h1>
        <div class="timeline_ryb commerc__timeline_ryb">
          <!-- 1 ШАГ (STEP) по вибору комерческой недвижимости-->
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="15 0 500 80" style="enable-background:new 0 0 515 80;" xml:space="preserve">
            <style type="text/css">
            .tl0{fill:#ffffff;}
            .tl2{font-family:inherit; font-size:12px; letter-spacing: 1pt; fill:#0035aa; pointer-events: none;}
            .activeArrowBg {fill: #0035aa;}
            .activeArrowText, .text__1 {fill: #ffffff;}
            .noActive_block{fill:#B3B3B3;}
            .noActive_text, .text__3, .text__2{fill:#666666;}
            </style>
            <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" href="/<?=$_POST['lang'].HOME.$sleh?>">
              <polygon class="activeArrowBg" points="14.2,59 145.2,59 157.2,39 145.2,19 14.2,19 "/>
            </a>
            <?=$mes['tl-mes1']?>
            <polygon class="noActive_block" points="152,59 303,59 315,39 303,19 152,19 165,39 "/>
            <?php if(COMERC): ?>
              <?=$mes['tl-mes4']?>
            <?php else: ?>
              <?=$mes['tl-mes2']?>
            <?php endif; ?>
            <polygon class="noActive_block" points="311,59 499,59 511,39 499,19 311,19 324,39 "/>
            <?=$mes['tl-mes3']?>
          </svg>
        </div>
      </div>
      <a class="link-logo commerc__logo" href="/<?=$_POST['lang']?>">
        <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" class="commerc-logo__img" /> </div>
      </a>
      <div class="mouse nomobile"><div class="scroll"></div></div>

      <div class="commerc__map">
        <div class="commerc__map-container"></div>
        <div class="commerc__map-context-menu commerc__map-context-menu_hidden">
          <ul>
            <li><a href="#" class="ctxmenu marker marker_origin">Маршрут отсюда</a></li>
            <li><a href="#" class="ctxmenu marker marker_destination">Маршрут сюда</a></li>
            <li><a href="#" class="ctxmenu panorama-view">Панорамный вид</a></li>
          </ul>
        </div>
        <div class="commerc__map-legend">
          <div class="commerc__map_checkbox-container commerc__map_checkbox-office">
            <input class="commerc__map_legend-checkbox" type="checkbox" name="office" id="legend-office">
            <label for="legend-office"><?= $mes['cp-text2']?></label>
          </div>
          <div class="commerc__map_checkbox-container commerc__map_checkbox-trade">
            <input class="commerc__map_legend-checkbox" type="checkbox" name="trade" id="legend-trade">
            <label for="legend-trade"><?= $mes['cp-text3']?></label>
          </div>
          <div class="commerc__map_checkbox-container commerc__map_checkbox-medicine">
            <input class="commerc__map_legend-checkbox" type="checkbox" name="medicine" id="legend-medicine">
            <label for="legend-medicine"><?= $mes['cp-text4']?></label>
          </div>
          <div class="commerc__map_checkbox-container commerc__map_checkbox-restaraunt">
            <input class="commerc__map_legend-checkbox" type="checkbox" name="restaraunt" id="legend-restaraunt">
            <label for="legend-restaraunt"><?= $mes['cp-text1']?></label>
          </div>
          <div class="commerc__map_checkbox-container commerc__floor_checkbox-educational-complex">
            <input class="commerc__map_legend-checkbox" type="checkbox" name="educational-center" id="legend-educational">
            <label for="legend-educational"><?= $mes['cp-text5']?></label>
          </div>
        </div>
      </div>
      <div id="toDown" class="commerc_arrow commerc-arrow_width"></div>
    </div>

    <!-- MAIN-section -->
      <section class="variants">
        <div>
            <div class="commercProperty__container" style="margin-bottom:30px;">
              <div class="commercProperty__text">
                  <h2 class="commercProperty__heading"><?=$mes['cp-text41'];?></h2>
                  <p class="commercProperty__paragraph"><?=$mes['cp-text42'];?></p>
        				  <p class="commercProperty__paragraph"><?=$mes['cp-text43'];?></p>
        				  <!-- <p class="commercProperty__paragraph"><?=$mes['cp-text44'];?></p>
        				  <p class="commercProperty__paragraph"><?=$mes['cp-text45'];?></p> -->
              </div>
              <div class="commercProperty__image">
                  <img src="/img/commercial/rent_1.jpg" alt="Office">
              </div>
            </div>
            <div class="commercProperty__container">
              <div class="commercProperty__image">
                  <img src="/img/commercial/rent_2.jpg" alt="Office">
              </div>
              <div class="commercProperty__text">
                <!-- <h2 class="commercProperty__heading"><?=$mes['cp-text41'];?></h2>
                <p class="commercProperty__paragraph"><?=$mes['cp-text42'];?></p> -->
                <!-- <p class="commercProperty__paragraph"><?=$mes['cp-text43'];?></p> -->
                <p class="commercProperty__paragraph"><?=$mes['cp-text44'];?></p>
                <p class="commercProperty__paragraph"><?=$mes['cp-text45'];?></p>
              </div>
            </div>
        </div>
      </section>
  <?  /*   <section class="commerc__features">
        <div>
            <div class="commercProperty__container">
              <div class="commercProperty__image">
                <img src="/img/commercial/r12.jpg" alt="dentist">
              </div>
              <div class="commercProperty__text">
                <h3 class="commercProperty__heading"><?=$mes['cp-text19'];?></h3>
                <div>
                  <?=$mes['cp-text20'];?>
                </div>
              </div>
            </div>
        </div>
      </section>
      <section class="commerc__advantages">
        <div class="commercProperty__container">
              <div class="commercProperty__text">
                  <h3 class="commercProperty__heading"><?=$mes['cp-text21'];?></h3>
                  <p class="commercProperty__paragraph"><?=$mes['cp-text22'];?></p>
                  <!-- <div class="call-button button-flat">
                    <a href="/<?=$_POST['lang']?>kvartira/"><?=$mes['menu-mes7']?></a>
                  </div>
                  <style media="screen">
                    .button-flat{
                      display: block;
                      width: 100%;
                      max-width: 250px;
                      margin: 20px auto;
                    }
                    .button-flat a{
                      text-transform: inherit;
                    }
                  </style> -->
              </div>
              <div class="commercProperty__image">
                  <img src="/img/commercial/r14.jpg" alt="Office">
              </div>
          </div>
        <!-- </div> -->
      </section> */ ?>


      <section class="commerc__slider">
        <div class="partners">
          <h3 class="partners__heading"><?=$mes['cp-sale-slider-heading']?></h3>
          <div class="partners-slider-wrap">
            <ul class="partners-slider owl-carousel">
              <li class="partners-slider__item">
                <a href="https://bristol.house/" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/BRISTOL_logo.svg" alt="Bristol Comfort House" class="partners-slider__image partners-slider__image-bristol">
                </a>
              </li>
              <li class="partners-slider__item">
                <a href="http://kandinsky-residence.com.ua" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/kandinsky_logo.svg" alt="KANDINSKY Odessa Residence" class="partners-slider__image partners-slider__image-kandinsky">
                </a>
              </li>
              <li class="partners-slider__item">
                <a href="http://einstein.house/" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/EINSTEIN-logo-blue.svg" alt="" class="partners-slider__image partners-slider__image-einstein">
                </a>
              <li class="partners-slider__item">
                <a href="http://new-york.com.ua/" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/Logo SVG-ny.svg" alt="New York Concept House" class="partners-slider__image partners-slider__image-ny">
                </a>
              </li>
              <li class="partners-slider__item">
                <a href="http://sanfrancisco.com.ua/" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/logoSanFr.svg" alt="San Francisco Creative House" class="partners-slider__image partners-slider__image-sf">
                </a>
              </li>
              <li class="partners-slider__item">
                <a href="http://resident.house/" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/resident_logo_color.svg" alt="RESIDENT Concept House" class="partners-slider__image partners-slider__image-resident">
                </a>
              </li>
              <li class="partners-slider__item">
                <a href="http://chicago.kiev.ua/" target="_blank" class="partners-slider__link">
                  <img src="/img/commercial/icons/Chikago.svg" alt="Chicago Central House" class="partners-slider__image partners-slider__image-chikago">
                </a>
              </li>
            </ul>
            <button class="partners-slider-button partners-slider-button__next">
              <svg class="partners-slider-button__image" version="1.1" xmlns="http://www.w3.org/2000/svg" width="19" height="28" viewBox="0 0 19 28">
                <title>chevron-right</title>
                <path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>
              </svg>
            </button>
            <button class="partners-slider-button partners-slider-button__prev">
              <svg class="partners-slider-button__image" version="1.1" xmlns="http://www.w3.org/2000/svg" width="21" height="28" viewBox="0 0 21 28">
                <title>chevron-left</title>
                <path d="M18.297 4.703l-8.297 8.297 8.297 8.297c0.391 0.391 0.391 1.016 0 1.406l-2.594 2.594c-0.391 0.391-1.016 0.391-1.406 0l-11.594-11.594c-0.391-0.391-0.391-1.016 0-1.406l11.594-11.594c0.391-0.391 1.016-0.391 1.406 0l2.594 2.594c0.391 0.391 0.391 1.016 0 1.406z"></path>
              </svg>
            </button>
          </div>
        </div>
      </section>

    <div class="contact-container-wrap">
      <div class="contact_container commerc-contact-container">
      <!-- <?php
        $webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        ?> -->
        <div class="contact_wrapper">
          <div class="tabs">
             <ul class="tabs__name clearfix">
                 <li><?=$mes['c-mes9']?></li>
                 <li><?=$mes['c-mes8']?></li>
                 <li><?=$mes['c-mes10']?></li>
             </ul>
             <div class="tabs__content">
               <div class="tabs__inner">
                 <div class="call_my">
                   <div class="call_my_left">
                     <div class="call_my_name"><?=$mes['c-mes9']?></div>
                       <div class="call_my_bottom">
                         <div class="call_my_logo">
                           <img src="/img/rybalsky-logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" <?AltImgAdd($mes['alt-logo'])?> />
                         </div>
                         <div class="tabs__inner__contacts">
                      <?  /*    <div class="contacts__number">
                             <p class="bigger"><?=$mes['c-mes28']?></p>
                             <p><a class="ringo-phone" id="tT" href="tel:123123">(044) 290-73-88</a></p>
                           </div> */ ?>
						   <div class="commercial__number">
						     <p class="bigger"><?=$mes['c-mes31']?></p>
                             <p><a class="ringo-commerce" id="tT_" href="tel:0443911800">(044) 391-18-00</a></p>
						   </div>
                           <div class="contacts__adress">
                             <p class="bigger"><?=$mes['c-mes29']?></p>
                             <p><?=$mes['p-mes10']?></p>
                             <p><?=$mes['p-mes6']?></p>
                           </div>
                           <div class="contact__hours">
                             <p class="bigger"><?=$mes['c-mes22']?></p>
                             <p><?=$mes['c-mes23']?></p>
                             <p><?=$mes['c-mes24']?></p>
                           </div>

                         </div>

                        </div>
                      </div>
                    </div>
                </div>
                <div class="tabs__inner">
                  <div class="call_my" data-lang='<?=$_POST['lang']?>'>
                    <div class="call_my_left">
                      <div class="call_my_name"><?=$mes['c-mes14']?></div>
                        <div class="call_my_bottom">
                          <div class="call_my_logo">
                            <img src="/img/rybalsky-logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" <?AltImgAdd($mes['alt-logo'])?> />
                          </div>
                          <form  id="call_form_tab1" style="position: relative; width: 100%;">
                            <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name0">
                               <input name="name" id="name0_"  type="text" placeholder="<?=$mes['c-mes3']?>">
                               <span class="itext">*</span>
                            </p>
                            <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>" id="phone0">
                              <input name="phone" id="phone0_"  onkeyup="javascript:countme('call_form_tab1');" type="tel" placeholder="<?=$mes['c-mes4']?>" class='inputtelmask' >
                              <span class="iphone">*</span>
                            </p>
                            <input name="typ" hidden value="0" >
                            <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                            <input  name="metka" class="metka" type="hidden" value="Form from Rybalsky"/>
                            <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
                            <p>
                              <textarea name="formData" id="formData" cols="30" rows="10"  placeholder="<?=$mes['c-mes12']?>"></textarea>
                            </p>
                            <div class="succses__form_info"><p class="succses__form_text"></p></div>
                            <input  type="submit" data-id="call_form_tab1" value="<?=$mes['c-mes14']?>" class="button submit-s">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="tabs__inner">
                      <div class="tabs__inner">
                        <div class="call_my" data-lang='<?=$_POST['lang']?>'>
                          <div class="call_my_left">
                            <div class="call_my_name"><?=$mes['c-mes10']?></div>
                            <div class="call_my_bottom">
                              <div class="call_my_logo">
                                <img src="/img/rybalsky-logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" <?AltImgAdd($mes['alt-logo'])?> />
                              </div>
                              <form  id="call_form_tab2" style="position: relative; width: 100%;">
                                <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name0">
                                  <input name="name" id="name0_"  type="text" placeholder="<?=$mes['c-mes3']?>">
                                    <span class="itext">*</span>
                                </p>
                                <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>">
                                  <input name="email" onkeyup="javascript:countme('call_form_tab2');" type="email" placeholder="E-mail">
                                  <span class="iphone">*</span>
                                </p>
                                <input name="typ" hidden value="0" >
                                <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                                <input  name="metka" class="metka" type="hidden" value="Form from Rybalsky"/>
                                <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
                                <p>
                                  <textarea name="formData" id="formData" cols="30" rows="10"  placeholder="<?=$mes['c-mes20']?>"></textarea>
                                </p>
                                <div class="succses__form_info"><p class="succses__form_text"></p></div>
                                <input  type="submit" data-id="call_form_tab2" value="<?=$mes['c-mes6']?>" class="button submit-s">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!--end contact_container-->
    <!-- MAIN-section -->

    <footer class="commerc__footer">
        <div class="foot-wrap">
          <div class="allright">
            <p>
              <?=$mes['v01']?>
            </p>
          </div>
          <div class="web">
            <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>    src="/img/logo-smart.png" width="55px" /></a>
          </div>
          <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
          <span><?=$mes['v02']?></span>
        </div>
      </footer>


<input id="len" value="<?=$_POST['lang']?>" hidden>
<?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<?php /*Меню*/  include_once('include/top-menu.php'); ?>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0WRmu5Uhzt_7zQTjiki6jyQhE1WNrFn8"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0WRmu5Uhzt_7zQTjiki6jyQhE1WNrFn8"></script>
<script src="/js/commercial-map.js"></script>
<script src="/js/scripts.js"></script>

<!-- Script from old page -->
 <!-- <script src="/js/scroll/main.js"></script> -->
     <script type="text/javascript">
         $('#modal-call').click(function(e){
           e.preventDefault();


           $('.content-layer').css({'width':'100%', "margin": "0 auto"}),
           $('.wrap_inner').css({'height':'auto', 'transition':'0.5s'}),
           $(this).hide(),
           $('#modal-close, #modal-close1').show()
         });
         $('#modal-close, #modal-close1').click(function(e) {
           e.preventDefault();

           if (screen.width > 768){
             $('.content-layer').css({'width':'40%', "margin": "30vh 0 0 0"})
           }
           else {
             $('.content-layer').css({'width':'100%', "margin": "10vh 0 0 0"})
           }

           $('.wrap_inner').css({'height':'0px','transition':'0.5s'}),
           $('#modal-close, #modal-close1').hide(),
           $('#modal-call').show()
         });


     </script>

     <style media="screen">
       .commercProperty__container {
         align-items: flex-start;
       }
       .commercProperty__text {
         align-self: auto;
       }
       .header.choice {
            height: 100vh;
          background: url(/img/kom_back.jpg);
          background-size: 100% 100%;
        }
        .choice-svg {
          min-height: auto;
          min-width: auto;
          height: 70vh;
          width: 100%;
        }
        .header.choice { background: url('/img/kom_back.jpg'); background-size: 100% 100%;}
        .header.choice .wrap_header .header-bottom {height: 80vh;}
        .mouse {z-index: 6;}
       .main-content--2{
         padding-top: 0;
       }
       .main-content--2 .content-layer {
         max-height: 75vh;
         z-index: 5;
       }
       @media only screen and (max-width: 768px) {
        .choice-svg {
          width: 400px;
          margin: 0 auto;
        }
        .header .wrap_header {
          width: 400px;
          padding: 80px 0 0 0;
        }
       }
       @media only screen and (max-width: 519px) and (min-width: 320px) {
        .choice-svg {
          width: 320px;
        }
        .header .wrap_header {
          width: 320px;
          padding: 80px 0 0 0;
        }
       }
       @media only screen and (max-width: 768px) and (min-width: 320px) {
        .choice-svg {
          position: static;
          transform: none;
          margin-top: 10px;
          height: auto;
        }
        .header.choice .wrap_header .header-bottom {
          height: auto;
        }
        .header {
          overflow: hidden;
          height: auto;
        }
        .commerc__legend {
          position: static;
          margin: 20px auto 0 auto;
          width: 310px;
          background-color: rgba(0, 0, 0, .2);
        }
        .commerc__legend ul {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
        }
        .commerc__legend__item {
          margin: 8px 0px;
        }
        .commerc__legend__item {
          width: 50%;
          text-align:center;
        }
        .commerc__legend__item:last-child {
          width: 100%;
          text-align:center;
        }
        .commerc__legend__item:before {
          left: 15px;
        }
        .commerc_arrow {
          position: static;
          margin: 10px auto;
        }
        .choice-name-kom {
          display: none;
        }
        .header-bottom .logo img {
          width: 92px;
        }
        .header.choice {
          height: auto;
        }
        /*.link-logo {
          top: -50px;
        }
*/       }
.partners-slider__item {
  background-color: white;
  height: 200px;
  display: flex;
  justify-content: center;
  align-items: center;
}
     </style>

  <!--END-->
<?  //echo  $content;?>
 <script src="/js/ajax.js"></script>
 <script src="/js/callback.js"></script>

<? /*Script for TABs*/ ?>
 <script type="text/javascript">
    (function($){
      jQuery.fn.lightTabs = function(options){

        var createTabs = function(){
          tabs = this;
          i = 0;
          showPage = function(i){
            $(tabs).children("div").children("div").hide();
            $(tabs).children("div").children("div").eq(i).show();
            $(tabs).children("ul").children("li").removeClass("active");
            $(tabs).children("ul").children("li").eq(i).addClass("active");
          }
          showPage(0);

          $(tabs).children("ul").children("li").each(function(index, element){
          $(element).attr("data-page", i);
          i++;
        });

            $(tabs).children("ul").children("li").click(function(){
              showPage(parseInt($(this).attr("data-page")));
            });
          };
          return this.each(createTabs);
        };
      })(jQuery);

        $(document).ready(function(){
            $(".tabs").lightTabs();
    });
</script>
<? /*Script for TABs*/ ?>

<? /*Script for slider*/ ?>
<script src="/js/owl-slider/owl.carousel.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".partners-slider").owlCarousel({
      loop: true,
      items: 6,
      autoplay: true,
      autoplayTimeout: 2000,
      margin: 15,
      responsive: {
        320: {
          items: 1
        },
        570: {
          items: 3
        },
        1024: {
          items: 4
        },
        1200: {
          items: 5
        }
      }
    });
  });

  var owl = $('.partners-slider'),
      prev = $('.partners-slider-button__prev'),
      next = $('.partners-slider-button__next');

  next.on("click", function() {
    owl.trigger("next.owl.carousel");
  });

  prev.on("click", function() {
    owl.trigger("prev.owl.carousel");
  });
</script>
<? /*Script for slider*/ ?>
<!-- Script from old page -->



  </body>
</html>
