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
      <script src="/js/jquery-1.12.0.min.js"></script>
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
    <div class="loader">
	     <div class="loader__background">
		       <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
	     </div>
    </div>

    <style media="screen">
      .callback_styles .btn{
      line-height: 60px;
      margin-bottom: 20px;
    }

      </style>


     <div class="header buld">
       <div class="wrap_header_callback">
         <?php /*Меню*/ include_once('include/top-menu.php'); ?>

    		 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
         <?php
            $webAd = $_SERVER['SCRIPT_URI'];
          ?>

          <div class="contact_top">
            <div class="contact_left">
              <h1 class="block__name"><?=$mes['c-mes1']?></h1>
              <div class="text__block">
                <p><?=$mes['kv-mes-text-14']?></p>
              </div>

            </div>
            <div class="contact_right">
              <div class="contact_builder">
				<div class="contact_builder_item">
                  <img <?AltImgAdd('saga-development.com.ua')?> src="/img/Saga_white.svg"/ style="width:30%;">
                  <div class="text__block">
                    <p class="builder_mail"><a href="http://saga-development.com.ua/"> saga-development.com.ua</a></p>
                    <p class="builder_phone">(044) 364 50 51</p>
                  </div>
                </div>
				<div class="contact_builder_item">
                  <img <?AltImgAdd('perfect-group.ua')?> src="/img/perfect-mini.png" />
                  <div class="text__block">
                    <p class="builder_mail"><a href="http://perfect-group.ua/">perfect-group.ua</a></p>
                    <p class="builder_phone">(044) 357-75-27</p>
                  </div>
                </div>
                <div class="contact_builder_item">
                  <img <?AltImgAdd('riverside.net.ua')?> src="/img/river-mini.png"/>
                  <div class="text__block">
                    <p class="builder_mail"><a href="http://riverside.net.ua/">riverside.net.ua</a></p>
                    <p class="builder_phone">(044) 364 50 51</p>
                  </div>
                </div>

                <div class="contact_builder_item">
                  <img <?AltImgAdd('kmb.ua')?>  class="kiev" src="/img/logo-kiev-mini.png"/>
                  <div class="text__block">
                    <p class="builder_mail"><a href="http://kmb.ua/ua">kmb.ua/ua</a></p>
                    <p class="builder_phone">(044) 392-72-47</p>
                  </div>
                </div>
              </div>
              <div class="contact_market">
                <div class="contact_market_first">
                  <p><?=$mes['c-mes15']?></p>
                  <p>marketing@saga-development.com.ua</p>

                </div>
                <div class="contact_market_two">
                  <p><?=$mes['c-mes22']?></p>
                  <p><?=$mes['c-mes23']?>  <?=$mes['c-mes24']?></p>
                </div>
              </div>
            </div>
          </div>



          <div class="header-bottom callback_styles">
            <div class="logo">
                <a href="/<?=$_POST['lang']?>">
                  <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                </a>
            </div>
            <div class="form">
              <?php /*Задача от 03.08.2017 по добалению форм Андрей*/ ?>
              <?php include_once('include/call_questions.php'); ?>
              <?php /*Задача от 03.08.2017 по добалению форм Андрей*/ ?>

              <div class="anonymous_wrap">
                <button class="anonymous-feedback_btn"><?=$mes['c-mes27'];?></button>
         
				<button class="show_realtor_btn btn" data-type-of-form="<?=$mes['Сотрудничество-для-риелторов'];?>"><?=$mes['Сотрудничество-для-риелторов'];?></button>
			<?/*	<a href="http://riverside.net.ua/agent/" class="rieltor_btn btn" title="Сотрудничество для риелторов"><?=$mes['Сотрудничество-для-риелторов'];?></a>
              */?>

			</div>
              <div class="anonymous-feedback">
                <div class="anonymous-feedback__container">
                  <div class="anonymous-feedback__name">
                    <?=$mes['c-mes27'];?>

                  </div>
                  <div class="anonymous-feedback__close-icon">
                    <img src="/img/icons/close-bold-red.svg" alt="close" class="anonymous-feedback__close-icon__image">
                  </div>
                  <div class="anonymous-feedback__message">
                    <?=$mes['c-mes26'];?>
                  </div>
                  <form class="anonymous-feedback__form" method="POST" action="/include/anonimus.php">
                    <textarea class="anonymous-feedback__textarea" name="anonymous-feedback__message" id="" ></textarea>
                    <button class="anonymous-feedback__submit_btn" type="submit"><?=$mes['c-mes6'];?></button>
                  </form>
        				  <div class="succses__form_info">
        					<p style='margin: -15px 0;' class="succses__form_text"></p>
        				  </div>
                </div>
              </div>

              </div>
			      </div>

          </div>
        </div>
        <footer class="foot_static">
          <div class="foot-wrap">
            <div class="allright"><p> <?=$mes['v01']?></p></div>
            <div class="web">
              <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
            </div>
            <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
            <span><?=$mes['v02']?></span>
			    </div>
        </footer>

	  <script type="text/javascript">
      $(document).ready(function(){
        form('.anonymous-feedback__form');
      }
    );

    function form(id){
      $(id).submit(function(event) { //устанавливаем событие отправки для формы
        event.preventDefault()
        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "/include/anonimus.php", //путь до php фаила отправителя
            data: form_data,
            success: function(html) {
                //код в этом блоке выполняется при успешной отправке сообщения
                 $('.succses__form_text').html(html);
                 $('.succses__form_info').fadeIn();
			      setTimeout(function(){
           $('.succses__form_info').fadeOut();
            },5000)
							$('#contactForm').css ({
								display: 'none'
							});
							$('.callback-form-pupop').css ({
								display: 'none'
							});
							$(id).trigger('reset');
            }
        });
    });
}
</script>
<style media="screen">
.anonymous_wrap{
  display: flex;
  justify-content: space-between;
}
.anonymous-feedback_btn{
  width: 49%;
  margin: 0;
      height: 60px;
}
a.rieltor_btn.btn{
  width: 49%;
  text-align: center;
  margin-bottom: 0;
  text-decoration: none;
}
      @media screen and (max-width: 1024px){
      .form { height: auto;}
      }
      @media screen and (max-width: 768px){
      .header { height: auto;}
      .wrap_header_callback {
          padding: 100px 10px 100px;
      }
      .anonymous_wrap {
      flex-direction: column;
    }
      .forms_btns{
        padding-left: 0;
        margin: 0;
      }
      .anonymous-feedback_btn{
        width: 100%;
        margin-bottom: 20px;
      }
      a.rieltor_btn.btn{
        width: 100%;
      }
      .anonymous_wrap {
          margin-left: 0px;
          margin-bottom: 20px;
      }
      .logo {
        height: auto;
        }
      .callback_styles .btn {
        line-height: 30px;
        margin-bottom: 20px;
        height: auto;
        min-height: 62px;
    }

    }

</style>
      <script src="/js/scripts.js?v=1.21"></script>
      <script src="/js/anotherForm.js"></script>
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
  </body>
</html>
