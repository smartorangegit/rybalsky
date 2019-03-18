<?php /*Мова*/ include_once('include/lang.php');
?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
    <meta charset="utf-8">
	  <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width">
	  <meta name="description" content="<?=$mes['v01-description']; ?>">
    <title><?=$mes['i-mes0']?></title>
    <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css?v=1.21" />
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=1.21" />
    <link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru/" />
    <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua" />
    <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en/" />
    <script src="/js/jquery-1.12.0.min.js"></script>

  </head>
  <body>
    <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>

    <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	      </div>
    </div>

    <!-- модальное окно -->

	   <!-- <div class="main_overlay">
    	 <div class="main_modal">
        <div class="modal_content">
          <div class="modal_close">
            <img src="/img/icons/close_w.svg" alt="" width="40">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"/></svg>
          </div>
          <h3><?=$mes['baner-text-0']?></h3>
          <div class="modal_text">
            <?=$mes['baner-text-1']?>
          <a href="<?=$mes['baner-text-3']?>"><?=$mes['baner-text-2']?></a>

            </div>
          </div>
      	</div>
      </div> -->

      <!-- модальное окно, end -->
<div class="header_video" style="display:none;">
	<div class="main-video_video">
		<video autoplay loop muted class="main-video-bg">
			<source src="/video/SAGA_master-internet_RYBALSKY.mp4" type="video/mp4">
		</video>
	<div class="sound">
		<img id="sound_on" onclick="sound_off ()" src="/img/sound_on.svg" style="display:none;">
		<img id="sound_off" onclick="sound_on ()" src="/img/sound_off.svg" style="display:block;">
	</div>
	</div>

	<div class="commerc_arrow commerc-arrow_width"></div>
</div>

<script>

function sound_on () {
	var video = document.querySelector("video");
	var sound_on = document.getElementById("sound_on");
	var sound_off = document.getElementById("sound_off");
	video.removeAttribute("muted");
	video.muted = false;
  sound_on.setAttribute("style", "display:block;");
  sound_off.setAttribute("style", "display:none;");

}
function sound_off () {
	var video = document.querySelector("video");
	var sound_on = document.getElementById("sound_on");
	var sound_off = document.getElementById("sound_off");
	video.muted = true;
  sound_on.setAttribute("style", "display:none;");
  sound_off.setAttribute("style", "display:block;");

}



</script>
	<style>
.main-video_video {
 position: relative;
/*   background: #3f5073;  пробный цвет для шапки  */
}
.header {
	position: relative;
}
.sound {
  width: 70px;
  position: absolute;
  top: 80vh;
  cursor: pointer;
  left: 50%;
  margin-left: -600px;
}
.sound img {
	width:100%;
}

.main-video-bg {
  width: 100%;
  height: auto;
  max-height: 100%;
 /* padding-top: 76px;  пробный отступ */
}
.commerc_arrow {
    width: 100%;
    height: 25px;
    position: absolute;
    bottom: 4vh;
    left: 0;
    z-index: 10;
    background-image: url('/img/commercial/arrow.png');
    background-repeat: no-repeat;
    background-position: center;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite;
}
.commerc-arrow_width {
    width: 40px !important;
    left: 50% !important;
    transform: translateX(-50%);
}
@-webkit-keyframes bounce {
   0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);
     transform: translateX(0);}
   40% {-webkit-transform: translateY(-30px);
     transform: translateY(-30px);}
   60% {-webkit-transform: translateY(-15px);
     transform: translateY(-15px);}
 }
 @-moz-keyframes bounce {
   0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
   40% {transform: translateY(-30px);}
   60% {transform: translateY(-15px);}
 }
 @keyframes bounce {
   0%, 20%, 50%, 80%, 100% {-ms-transform: translateY(0);
     transform: translateY(0);}
   40% {-ms-transform: translateY(-30px);
     transform: translateY(-30px);}
   60% {-ms-transform: translateY(-15px);
     transform: translateY(-15px);}
 }
 @media only screen and (max-width:1200px){
   .sound{
     top: 80vh;
     left: 2vw;
     margin-left: 0;
   }
 }
 @media only screen and (max-width: 768px){
   .sound {
     top: 80%;
     left: 20px;
     margin-left: 0;
   }
   .sound img {
     width:56%;
   }

 }

	</style>
    <div class="header">
        <div class="nomobile">
          <div  class="slider">
<<<<<<< HEAD
		  	<div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/RIBALSKY_NEW YEAR ONE_FINAL.jpeg"></div>
			<div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/4s.jpg"></div>
=======
		  	    <!-- <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/x1.jpg"></div>
			      <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/x2.jpg"></div>
			      <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/x3.jpg"></div> -->
			<div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/RIBALSKY_NEW YEAR ONE_FINAL.jpeg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/4s.jpg"></div>
>>>>>>> 09eaf810a8dda434a0968fe6ed6f8ff751fb0307
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/0.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/2s.jpg"></div>
            <!-- <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/3s.jpg"></div> -->
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r5.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r6.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r7.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r8.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r9.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r10.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r11.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r12.jpg"></div>
            <div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r13.jpg"></div>
			<div class="item"><img <?AltImgAdd($mes['i-mes0']);?>  src="/img/r15.jpg"></div>

          </div>
        </div>
        <div class="wrap_header_abs">
          <style media="screen">
            .wrap_header_abs { position: absolute; width: 100%; height: 100%; left: 0; top: 0;}
            /* .logo-name {  max-width: 600px;} */
            .main-content--2 .wrap_header{  max-width: 1200px;  margin: 0 auto; height: 100%; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: end; -ms-flex-align: end; align-items: flex-end; padding-bottom: 50px; position: relative; z-index: 10;}
            .main-content--2 { padding-bottom: 50px; }
          </style>
                <div class="wrap_header">
								  				                  <div class="header-bottom main">
                      <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  /></div>
                      <div class="logo-name blue">
                        <p class="main-text <?if($_POST['lang']==='en/'){echo 'main-text__eng';}?>"><?=$mes['i-mes1']?> <?=$mes['i-mes2']?></p>
                        <p class="bottom-text"><?=$mes['i-mes3']?> <?=$mes['i-mes4']?></p>
                      </div>
                      <!-- <div class="bx-slider__custom-pager">
                        <a data-slide-index="0" href="" class="custom-pager__circle"></a>
                        <a data-slide-index="1" href="" class="custom-pager__circle"></a>
                        <a data-slide-index="2" href="" class="custom-pager__circle"></a>
                        <a data-slide-index="3" href="" class="custom-pager__circle"></a>
                      </div> -->
                    </div>
                  <?php /*Меню*/ $page="/"; include_once('include/top-menu.php'); ?>
                  <?/*Для того чтобы включть счетчик FlipClock расскоменить инклюд, библиотеку внизу и запуск в файле clock.js*/?>
<<<<<<< HEAD
                  <?php /*timer*/   include_once('include/timer.php');   ?>
=======
                  <?php /*timer*/    /* include_once('include/timer.php'); */   ?>
>>>>>>> 09eaf810a8dda434a0968fe6ed6f8ff751fb0307
                   <div class="nomobile">
                     <?php /*Меню Стрелки include_once('include/arrow.php'); */?>
                   </div>
          	        <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
					<!-- class="header-bottom main был сдесь -->

                  </div>
                </div>
              </div>
              <div class="main-content--2" id="link">
                <div class="wrap_header clearfix">
                  <div class="content-layer">
                    <div class="modal_window_wrap">
                      <h1><?=$mes['i-mes9']?></h1>
                      <p><?=$mes['i-mes10']?></p>
                      <a id="modal-call" href="#link"><?=$mes['i-to-read']?> &rarr;</a>
                      <!-- <a id="modal-close1" href="#"><?=$mes['i-roll']?> &uarr;</a> -->
                      <div class="wrap_inner">
                        <p><?=$mes['i-mes11']?></p>
                      </div>
                      <a id="modal-close" href="#">
                        <!-- <?=$mes['i-roll']?> &uarr; -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="30" height="30"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"/></svg>

                      </a>

                    </div>

                  </div>

                </div>

              </div>


      <div class="content">
        <div class="content-left ">
          <div class="values">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes1'])?>  src="/img/nbg-1.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes1']?></h2>
                <a class="link" href="project/">wiew more...</a>
              </figcaption>
            </figure>
          </div>
          <div class="aqua">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes9'])?> src="/img/nbg-2.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes9']?></h2>
                <a class="link" href="aqua/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="city">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes4'])?>  src="/img/nbg-3.jpg" />
              <figcaption>
                <h2><?=$menu['text'][13]?></h2>
                <a class="link" href="news/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="quarter">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes6'])?>  src="/img/nbg-4.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes6']?></h2>
                <a class="link" href="childrens/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="rybalsky">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes10'])?> src="/img/nbg-5.jpg"/>
              <figcaption>
                <h2><?=$mes['menu-mes10']?></h2>
                <a class="link" href="partners/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="place">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes12'])?>  src="/img/nbg-6.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes12']?></h2>
                <a class="link" href="callback/"></a>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="content-right">
          <div class="place">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes3'])?> src="/img/nbg-7.jpg"  />
              <figcaption>
                <h2><?=$mes['menu-mes3']?></h2>

                <a class="link" href="adress/">.</a>
              </figcaption>
            </figure>
          </div>

          <div class="living-district">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes2'])?>  src="/img/nbg-8.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes2']?></h2>

                <a class="link" href="space-for-life/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="pedzone">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes8'])?>  src="/img/nbg-9.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes8']?></h2>
                <a class="link" href="sport/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="kvartal">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes5'])?>  src="/img/nbg-10.jpg"  />
              <figcaption>
                <h2><?=$mes['menu-mes20']?></h2>
                <a class="link" href="gallery/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="appart">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes7'])?>  src="/img/nbg-11.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes7']?></h2>
                <a class="link" href="kvartira/"></a>
              </figcaption>
            </figure>
          </div>

          <div class="buildinglink">
            <figure class="ef-milo">
              <img <?AltImgAdd($mes['menu-mes11'])?>  src="/img/nbg-12.jpg" />
              <figcaption>
                <h2><?=$mes['menu-mes11']?></h2>
                <a class="link" href="hod-stroitelstva/"></a>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>

      <div class="contact_container">
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
                           <div class="contacts__number">
                             <p class="bigger"><?=$mes['c-mes28']?></p>
                             <p><a class="ringo-phone" id="tT" href="tel:123123">(044) 290-73-88</a></p>
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
                                    <input name="phone" id="phone69"   type="tel" placeholder="<?=$mes['c-mes4']?>" class='inputtelmask' style="display: none;" value="<?=rand(100000000000,999999999999);?>">
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
            </div> <!--end contact_container-->
          <style>
              form#call_form_tab2>.intl-tel-input.allow-dropdown{
                  display: none;
              }
          </style>
      <div class="footer">
          <div class="foot-wrap">
            <div class="allright">
               <p>
                 <?=$mes['v01']?>
                </p>
            </div>
            <div class="web">
              <a href="https://smarto.agency/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartorOrange')?>  src="/img/logo-smart.png" /></a>
            </div>
			<a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
            <a href="https://smarto.agency/" rel="nofollow" target="_blank" class="smarto_agency"><span><?=$mes['v02']?></span></a>
          </div>
        </div>

      <script  src="/js/scripts.js?v=1.21"></script>
      <script type="text/javascript">
          $('.submit-s').on('click', function (e) {
              e.preventDefault();
              sendForm($(this).data('id'), $('#call_my_forms').data('lang'));
              // console.log($(this).data('id'), $('#call_my_forms').data('lang'));
              return false;
          });

      $(document).ready(function(){
        $('.slider').bxSlider({
          mode: 'fade',
          auto: true,
          // controls: false,
          captions: false,
          pager: true,
          stopAutoOnClick: true
          // pagerCustom: '.bx-slider__custom-pager'
        });
      });
      </script>

      <script type="text/javascript">
  $('.modal_close, .main_overlay').click(function(){
        $('main_modal').hide(),
      $('.main_overlay').fadeOut();
    });

      </script>
      <script type="text/javascript">
          $('#modal-call').click(function(e){
            e.preventDefault();
            $('.content-layer').css({'width':'100%', "margin": "0 auto"}),
            $('.modal_window_wrap').addClass('modal_window_wrap__opened'),
            $('.wrap_inner').css({'height':'auto', 'transition':'0.5s'}),
            //add
             $('.main-content--2 .wrap_header').css({'align-items':'flex-start'}),
        	 $('html, body').animate({scrollTop: ($('#link').offset()).top}, "slow");
            $(this).hide(),
            $('#modal-close, #modal-close1').show()
          });
          $('#modal-close, #modal-close1').click(function(e) {
            e.preventDefault();
            if (screen.width > 768){
              $('.content-layer').css({'width':'40%', "margin": "30vh 0 0 0"}),
              //add
              $('.main-content--2 .wrap_header').css({'align-items':'flex-end'})
            }
            else {
              $('.content-layer').css({'width':'100%', "margin": "10vh 0 0 0"})
            }
            //add
            $('.main-content--2 .wrap_header').css({'align-items':'flex-end'}),
            $('.wrap_inner').css({'height':'0px','transition':'0.5s'}),
            $('.modal_window_wrap').removeClass('modal_window_wrap__opened'),
            $('#modal-close, #modal-close1').hide(),
            $('#modal-call').show()
          });
      </script>
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
      <script src="/js/jquery.bxslider.min.js"></script>
<<<<<<< HEAD
      <script src="/flipclock.js"></script>
=======
      <!--<script src="/flipclock.js"></script>-->
>>>>>>> 09eaf810a8dda434a0968fe6ed6f8ff751fb0307
      <script>
      // Из-за поведения FireFox при клике назад данная страница не выполняла JS данная приблуда перезагружает станицу
      // https://developer.mozilla.org/ru/docs/Web/API/WindowEventHandlers/onunload
      window.onunload = function(){};
      </script>
    </body>
</html>
