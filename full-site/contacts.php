<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['c-mes-description']; ?>">
  <title> <?=$mes['c-mes0']?></title>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/css/scroll.css" />
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
  <script src="/js/jquery-1.12.0.min.js"></script>
  </head>
  <body>
     <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	     </div>
     </div>
     <style media="screen">
     body{
       height: 100%;
     }
       .contact_container{
         min-height: 100%;
         background: url(/img/build.jpg);
         background-size: cover;
       }
       .contact_wrapper{
         max-width: 1200px;
         margin: 0 auto;
         padding-top: 100px;
       }
       .tabs{
          width: 100%;
          padding-bottom: 50px;
      }
      .tabs__content{
        border: 1px solid white;
        padding:30px;
        box-sizing: border-box;
        margin-top: -1px;
      }
      .tabs__name{
          margin:0px;
          padding:0px;
      }
      .tabs__name li{
          cursor:pointer;
          display:block;
          float:left;
          line-height: 58px;
          text-align: center;
          background: transparent;
          color:#0035AA;
          width: 33.3333333%;
          border: 1px solid #0035AA;
          font-size: 18px;
          letter-spacing: 2px;
        }
        .tabs__name li.active, .tabs__name li.active:hover{
          background:#0035AA;
          color:#fff;
      }
      .tabs__inner > .call_my{
        position: static;
        transform: none;
        -webkit-transform: none;
        opacity: 1;
        pointer-events: all;
        width: 100%;
        background-color: transparent;
      }
         footer{
         margin-top: -45px;
       }
     </style>
     <div class="contact_container">
       <?php /*Меню*/ include_once('include/top-menu.php'); ?>

       <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
       <?php
       $webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
       ?>
       <div class="contact_wrapper">
         <div class="tabs">
            <ul class="tabs__name clearfix">
                <li><?=$mes['c-mes9']?></li>
                <li><?=$mes['c-mes8']?></li>
                <li><?=$mes['c-mes10']?></li>
            </ul>
            <div class="tabs__content">
                <div class="tabs__inner">Первое содержимое</div>
                <div class="tabs__inner">
                  <div class="call_my" data-lang='<?=$_POST['lang']?>'>
                    <div class="call_my_left">
                      <div class="call_my_name"><?=$mes['c-mes14']?></div>
                        <div class="call_my_bottom">
                          <div class="call_my_logo">
                            <img src="/img/rybalsky-logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" <?AltImgAdd($mes['alt-logo'])?> />
                          </div>
                          <!-- <div class="call_my_form"> -->
                            <!-- <div class="form"> -->
                                <form  id="call_form" style="position: relative; width: 100%;">
                                  <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes3']?>" id="name0">
                                    <input name="name" id="name0_"  type="text" placeholder="<?=$mes['c-mes3']?>">
                                    <span class="itext">*</span>
                                  </p>
                                  <p class="not" data-description="<?=$mes['p2-mes']?> <?=$mes['c-mes4']?>" id="phone0">
                                    <input name="phone" id="phone0_"  onkeyup="javascript:countme('call_form');" type="tel" placeholder="<?=$mes['c-mes4']?>" class='inputtelmask' >
                                    <span class="iphone">*</span>
                                  </p>
                                    <input name="typ" hidden value="0" >
                                    <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                                    <input  name="metka" class="metka" type="hidden" value="Form from Rybalsky"/>
                                    <input  name="inn" class="userInn" type="hidden" value="Rybalsky"/>
                                  <p>
                                    <textarea name="formData" id="formData" cols="30" rows="10"  placeholder="<?=$mes['c-mes12']?>"></textarea>
                                  </p>
                                <div>
                              </div>
                              <div class="succses__form_info"><p class="succses__form_text"></p></div>
                              <input  type="submit" data-id="call_form" value="<?=$mes['c-mes14']?>" class="button submit">
                            </form>
                 <?/*  <script src="/js/call_my.js"></script>*/?>
              <!--end-->
                              </div>
                            <!-- </div>
                          </div> -->
                        </div>
                    </div>
                </div>

                <div class="tabs__inner">Третье содержимое</div>
            </div>
        </div>

       </div>

     </div>




      <footer>
        <div class="foot-wrap">
          <div class="allright">
            <p> <?=$mes['v01']?></p>
          </div>
          <div class="web">
            <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
          </div>
          <span><?=$mes['v02']?></span>
        </div>
      </footer>




      <script src="/js/scripts.js"></script>
      <script src="/js/anotherForm.js"></script>
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
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
  </body>
</html>
