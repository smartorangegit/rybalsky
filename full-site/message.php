<? session_start();
/*Мова*/ include_once('include/lang.php');
//if(!empty($_SESSION['rezult_text'])){
?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="/js/scripts.js"></script>
		<meta name="robots" content="noindex, follow">
	<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
</head>
	<style media="screen">
	html, body{height: 100%;}

	.clearfix::after{clear: both; display: table;}
	.container{min-height: 100%; background: url('/img/build.jpg');	background-size: cover;}
	.main_content{padding-top: 120px; text-align: center;}
	.developer_box.clearfix{position: relative; padding-top: 30px;}
	.block__name{color: white;}
	footer{ margin-top: -44px;}
	.logo img{ width: 120px;}
	.bx-wrapper{margin: 0px auto;}
	.logo_proj{
		display: inline-block;
		vertical-align: middle;
		box-sizing: border-box;
    text-align: center;
    text-align: -webkit-center;
	}
	.bx-wrapper img{width: 85%;}
	.proj_slider{
		display: flex;
		display: -webkit-flex;
		align-items: center;
		-webkit-align-items: center;
	}
	.thanks_text{font-size: 20px; line-height: 1.5;	}
	.logo_proj_einstein img{width: 65%;}
	.bx-wrapper .bx-controls-direction a{text-indent: 0; text-align: center;}
	.bx-wrapper .bx-prev {left: -16px;}
	.bx-wrapper .bx-next {right: -16px;}

  </style>
  <body>
		<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <div class="container">
      <div class="wrapper">
				<?php /*Меню*/ include_once('include/top-menu.php'); ?>
				<?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
         <div class="main_content">
					 <!-- <a class="logo" href="/">
						 <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
					 </a> -->
					 <div class="thank-mess">
						 <?=$mes['i-mes6']?>
					</div>
				</div>
					<div class="developer_box clearfix">


					<ul class="proj_slider">
						<li class="logo_proj logo_proj_san">
							<a href="https://sanfrancisco.com.ua/" target="_blank">
								<img src="/img/logo/sanfrancisco_white.svg" alt="San Francisco Creative House" title="San Francisco Creative House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_new-york">
							<a href="http://new-york.com.ua/" target="_blank">
								<img src="/img/logo/new_york_logo_white.svg" alt="NEW YORK Concept House" title="NEW YORK Concept House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_bristol">
							<a href="https://bristol.house/" target="_blank">
								<img src="/img/logo/bristol_logo_white.svg" alt="BRISTOL Comfort House" title="BRISTOL Comfort House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_chicago">
							<a href="https://chicago.kiev.ua/" target="_blank">
								<img src="/img/logo/chicago_logo_white.svg" alt="CHICAGO Central House" title="CHICAGO Central House"/>
							</a>
						</li>
						<li class="logo_proj logo_proj_einstein">
							<a href="http://einstein.house/" target="_blank">
								<img src="/img/logo/EINSTEIN-logoW.svg" alt="EINSTEIN Concept House" title="EINSTEIN Concept House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_kandinskiy">
							<a href="http://kandinsky-residence.com.ua/" target="_blank">
								<img src="/img/logo/kandinsky_logo_white.svg" alt="KANDINSKY Odessa Residence" title="KANDINSKY Odessa Residence" />
							</a>
						</li>
						<li class="logo_proj logo_proj_resident">
							<a href="http://resident.house/" target="_blank">
								<img src="/img/logo/resident_logo_white.svg" alt="RESIDENT Concept House" title="RESIDENT Concept House" />
							</a>
						</li>
					</ul>
					<!-- <div class="developer_box-controls developer_box-controls_prev-slide">
						<svg viewBox="0 0 40 40" width="30" height="30" fill="#ffffff"><path d="M10,20 L30,20 L10,20 L18,28 L10,20 L18,12 L10,20"></path></svg>
					</div>
					<div class="developer_box-controls developer_box-controls_next-slide">
						<svg viewBox="0 0 40 40" width="30" height="30" fill="#ffffff"><path d="M30,20 L10,20 L30,20 L22,28 L30,20 L22,12 L30,20"></path></svg>
					</div> -->
				</div>
      </div>
    </div>
		<script src="/js/jquery.bxslider.min.js"></script>
    <script>

      var defaultSliderConfiguration = {
        slideWidth: 180,
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 1,
        auto: true,
        speed: 1000,
        pause: 3000,
        slideMargin: 20,
        infiniteLoop: true,
        easing: "ease-in-out",
        responsive: true,
        touchEnabled: true,
				nextText: '<svg height="21" viewBox="0 0 215.60001 421.0636" width="11" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m0 416.08179c0 2 1.2 3.8 3.1 4.6s4 .3 5.4-1.1l205.6-205.6c1-1 1.5-2.3 1.5-3.5s-.5-2.6-1.5-3.5l-205.5-205.4999914c-1.3-1.4-3.5-1.9-5.5-1.1-1.9.8-3.1 2.6000001-3.1 4.6000002z"/></svg>',
			  prevText: '<svg height="21" viewBox="0 0 215.60001 421.0636" width="11" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m215.6 416.08179c0 2-1.2 3.8-3.1 4.6s-4 .3-5.4-1.1l-205.6-205.6c-1-1-1.5-2.3-1.5-3.5s.5-2.6 1.5-3.5l205.5-205.4999914c1.3-1.4 3.5-1.9 5.5-1.1 1.9.8 3.1 2.6000001 3.1 4.6000002z"/></svg>',
        pager: false,
        // controls: false,
        onSliderResize: function() {
          var sliderConfiguration = getScreenSize();
          bxSlider.reloadSlider(sliderConfiguration)
        }
      };

      function getScreenSize() {
        var width = window.innerWidth;
        if(width > 1260) {
          return defaultSliderConfiguration;
        } else if(width > 1060 && width < 1260) {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 4 });
        } else if(width > 850 && width < 1060) {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 3 });
        } else if(width > 440 && width < 850) {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 2 });
        } else {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 1 });
        }
      }

      var sliderConfiguration = getScreenSize();

      // главная инициализапция
      var bxSlider = $(".proj_slider").bxSlider(sliderConfiguration);
      // Кастомные клики влево\вправо
			// Кастомные клики влево\вправо
      // $('.developer_box-controls_next-slide').click(function() {
      //   bxSlider.goToNextSlide();
      // });
      // $('.developer_box-controls_prev-slide').click(function() {
      //   bxSlider.goToPrevSlide();
      // });
    </script>
		<footer>
			<div class="foot-wrap clearfix">
				<div class="allright"<p>     <?=$mes['v01']?>  </p></div>
				<div class="web">	<a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png"width="55px" /></a></div>
				<span><?=$mes['v02']?></span>
			</div>
		</footer>
  </body>

</html>
<?
	unset($_SESSION['rezult_text']);
//}else{ header("Location:/");}?>
