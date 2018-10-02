<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['animal-space-description']; ?>">
  <title><?=$mes['animal-space-title']?></title>
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
  </head>
  <body>
    <div class="loader">
      <div class="loader__background">
        <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
      </div>
    </div>
    <section class="transport__hero">
      <h1 class="transport__hero__heading"><?=$mes['animal-space-h1']?></h1>
    </section>
    <section class="transport__section">
      <div class="transport__container">
        <div class="transport__text buldog_text">
		<img src="/img/animal-space/buldog.jpg" style="display:none;" alt="<?=$mes['animal-space-h1']?>">
          
			<?=$mes['animal-space-text-kote']?>		
		</div>
        <div class="transport__image ruh-transportu">
        </div>
      </div>
    </section>
    <section class="values__section">
      <div class="values__container">
        <div class="values__image parking">
        </div>
        <div class="values__text">
          <!-- <div class="transport__sub-heading transport__sub-heading-values"></div> -->
		  <img src="/img/animal-space/kote.jpg" style="display:none;" alt="<?=$mes['animal-space-h1']?>">
		  <h2 class="transport__sub-heading transport__sub-heading-project"><?=$mes['animal-space-h2-buldog']?></h2>
		<?=$mes['animal-space-text-buldog']?>		
		</div>
      </div>
    </section>
	<section class="transport__section">
      <div class="transport__container">
        <div class="transport__text">
		<img src="/img/animal-space/taksik.jpg" style="display:none;" alt="<?=$mes['animal-space-h1']?>">
          <h2 class="transport__sub-heading transport__sub-heading-project"><?=$mes['animal-space-h2-taksik']?></h2>
			<?=$mes['animal-space-text-taksik']?>        
		</div>
        <div class="transport__image pesh-prostir">
        </div>
      </div>
    </section>


	<!--slider -->
<div class="wrapper animal-slider_wrapper">
	<input type="radio" name="point" id="slide1" checked>
	<input type="radio" name="point" id="slide2">
	<input type="radio" name="point" id="slide3">
	<input type="radio" name="point" id="slide4">
	<input type="radio" name="point" id="slide5">
	<input type="radio" name="point" id="slide6">
	<input type="radio" name="point" id="slide7">
	<input type="radio" name="point" id="slide8">
	<input type="radio" name="point" id="slide9">
	<input type="radio" name="point" id="slide10">
	<input type="radio" name="point" id="slide11">
	<input type="radio" name="point" id="slide12">
	<input type="radio" name="point" id="slide13">
	<input type="radio" name="point" id="slide14">
	<input type="radio" name="point" id="slide15">
	<input type="radio" name="point" id="slide16">
	<input type="radio" name="point" id="slide17">
	<div class="slider">
		<div class="slides slide1"></div>
		<div class="slides slide2"></div>
		<div class="slides slide3"></div>
		<div class="slides slide4"></div>
		<div class="slides slide5"></div>
		<div class="slides slide6"></div>
		<div class="slides slide7"></div>
		<div class="slides slide8"></div>
		<div class="slides slide9"></div>
		<div class="slides slide10"></div>
		<div class="slides slide11"></div>
		<div class="slides slide12"></div>
		<div class="slides slide13"></div>
		<div class="slides slide14"></div>
		<div class="slides slide15"></div>
		<div class="slides slide16"></div>
		<div class="slides slide17"></div>
	</div>
	<div class="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>
		<label for="slide4"></label>
		<label for="slide5"></label>
		<label for="slide6"></label>
		<label for="slide7"></label>
		<label for="slide8"></label>
		<label for="slide9"></label>
		<label for="slide10"></label>
		<label for="slide11"></label>
		<label for="slide12"></label>
		<label for="slide13"></label>
		<label for="slide14"></label>
		<label for="slide15"></label>
		<label for="slide16"></label>
		<label for="slide17"></label>
	</div>
</div>
	<section class="values__section animals__section">
 
    </section>
<style>
* {
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	/* background-image: url(http://habrastorage.org/files/996/d76/d04/996d76d0410d422fa54cc433ce7ead2a.png); */
}

.wrapper {
	height: 445px;
	margin: 100px auto 0;
	position: relative;
	width: 668px;
}

.slider {
	height: inherit;
	overflow: hidden;
	position: relative;
	width: inherit;
	-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .5);
	-moz-box-shadow: 0 0 20px rgba(0, 0, 0, .5);
	-o-box-shadow: 0 0 20px rgba(0, 0, 0, .5);
	box-shadow: 0 0 20px rgba(0, 0, 0, .5);
}

.slides {
	background-position: center;
	height: inherit;
	opacity: 0;
	position: absolute;
	width: inherit;
	z-index: 0;
	-webkit-transform: scale(1.5);
	-moz-transform: scale(1.5);
	-o-transform: scale(1.5);
	transform: scale(1.5);
	-webkit-transition: transform ease-in-out .5s, opacity ease-in-out .5s;
	-moz-transition: transform ease-in-out .5s, opacity ease-in-out .5s;
	-o-transition: transform ease-in-out .5s, opacity ease-in-out .5s;
	transition: transform ease-in-out .5s, opacity ease-in-out .5s;
	background-size: cover;
}

.slide1 { background-image: url(/img/animal-space/slider/1.jpg); }
.slide2 { background-image: url(/img/animal-space/slider/2.jpg); }
.slide3 { background-image: url(/img/animal-space/slider/3.jpg); }
.slide4 { background-image: url(/img/animal-space/slider/4.jpg); }
.slide5 { background-image: url(/img/animal-space/slider/5.jpg); }
.slide6 { background-image: url(/img/animal-space/slider/6.jpg); }
.slide7 { background-image: url(/img/animal-space/slider/7.jpg); }
.slide8 { background-image: url(/img/animal-space/slider/8.jpg); }
.slide9 { background-image: url(/img/animal-space/slider/9.jpg); }
.slide10 { background-image: url(/img/animal-space/slider/10.jpg); }
.slide11 { background-image: url(/img/animal-space/slider/11.jpg); }
.slide12 { background-image: url(/img/animal-space/slider/12.jpg); }
.slide13 { background-image: url(/img/animal-space/slider/13.jpg); }
.slide14 { background-image: url(/img/animal-space/slider/14.jpg); }
.slide15 { background-image: url(/img/animal-space/slider/15.jpg); }
.slide16 { background-image: url(/img/animal-space/slider/16.jpg); }
.slide17 { background-image: url(/img/animal-space/slider/17.jpg); }

#slide1:checked ~ .slider > .slide1,
#slide2:checked ~ .slider > .slide2,
#slide3:checked ~ .slider > .slide3,
#slide4:checked ~ .slider > .slide4,
#slide5:checked ~ .slider > .slide5, 
#slide6:checked ~ .slider > .slide6,
#slide7:checked ~ .slider > .slide7,
#slide8:checked ~ .slider > .slide8,
#slide9:checked ~ .slider > .slide9,
#slide10:checked ~ .slider > .slide10,
#slide11:checked ~ .slider > .slide11,
#slide12:checked ~ .slider > .slide12,
#slide13:checked ~ .slider > .slide13,
#slide14:checked ~ .slider > .slide14,
#slide15:checked ~ .slider > .slide15,
#slide16:checked ~ .slider > .slide16,
#slide17:checked ~ .slider > .slide17 {
	opacity: 1;
	z-index: 1;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
}

.wrapper > input {
	display: none;
}

.wrapper .controls {
	left: 50%;
	margin-left: 3px;
	/* position: absolute; */
}

.wrapper label {
	cursor: pointer;
	display: inline-block;
	height: 8px;
	margin: 25px 10px 0 16px;
	position: relative;
	width: 8px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	border-radius: 50%;
	-webkit-transition: background ease-in-out .5s;
	-moz-transition: background ease-in-out .5s;
	-o-transition: background ease-in-out .5s;
	transition: background ease-in-out .5s;
}

.wrapper label:hover, 
#slide1:checked ~ .controls label:nth-of-type(1),
#slide2:checked ~ .controls label:nth-of-type(2),
#slide3:checked ~ .controls label:nth-of-type(3),
#slide4:checked ~ .controls label:nth-of-type(4),
#slide5:checked ~ .controls label:nth-of-type(5),
#slide6:checked ~ .controls label:nth-of-type(6),
#slide7:checked ~ .controls label:nth-of-type(7),
#slide8:checked ~ .controls label:nth-of-type(8),
#slide9:checked ~ .controls label:nth-of-type(9),
#slide10:checked ~ .controls label:nth-of-type(10),
#slide11:checked ~ .controls label:nth-of-type(11),
#slide12:checked ~ .controls label:nth-of-type(12),
#slide13:checked ~ .controls label:nth-of-type(13),
#slide14:checked ~ .controls label:nth-of-type(14),
#slide15:checked ~ .controls label:nth-of-type(15),
#slide16:checked ~ .controls label:nth-of-type(16),
#slide17:checked ~ .controls label:nth-of-type(17) {
	background: #0035aa;
}

.wrapper label:after {
	border: 2px solid #0035aa; //border: 2px solid #ddd;
	content: " ";
	display: block;
	height: 12px;
	left: -4px;
	position: absolute;
	top: -4px;
	width: 12px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	border-radius: 50%;
}
</style>
	<!--end slider -->
    <footer>
      <div class="foot-wrap">
        <div class="allright">
          <p><?=$mes['v01']?></p>
        </div>
        <div class="web">
          <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png" width="55px" /></a>
        </div>
        <a class="footer__jurdoc_link" href="/<?=$_POST['lang']?>documents/"><?=$mes['jur-mes-menu']?></a>
        <span> <?=$mes['v02']?></span>
      </div>
	  <style>

.transport__hero {
  width: 100%;
  height: 320px;
  background: url("/img/animal-space/kote_header.jpg") center no-repeat;
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
}
.transport__hero:before {
content: "";position:absolute;width: 100%;height: 320px;background: rgba(0,0,0,0.1);
}

.transport__hero__heading {
  font-size: 40px;
  z-index: 111;
}


.transport__container,
.values__container {
  padding-top: 40px;
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
}


.transport__sub-heading {
  color: #0035aa;
  font-size: 36px;
}


.transport__text,
.values__text {
  color: #292937;
  font-size: 16px;
  font-weight: 300;
  line-height: 24px;
  letter-spacing: 0.8px;
  margin: 0 10px;
}

.buldog_text {
	margin-top: 44px;
}

.transport__image {
  margin-right: 10px;
	width: 100%;
  max-width: 568px;
  height: 378px;
  /* margin-top: 65px; */
  background-size: cover;
}



.transport__text p,
.values__text p {
  font-family: "PFDinTextUniversal-Light";
  line-height: 1.5;
  letter-spacing: 1px;
  font-size: 16px;
  /* padding-left: 11px; */
  margin-bottom: 0.5em;
}


.values__image {
  margin-left: 10px;
  width: 100%;
	max-width: 528px;
  height: 359px;
  /* margin-top: 65px; */
  background-repeat: no-repeat;
  background-position: center;

}
.parking {
	background-image: url("/img/animal-space/kote.jpg");
	background-size: cover;
	background-position: center;
}
.pesh-prostir {
	background-image: url("/img/animal-space/taksik.jpg");
	background-size: cover;
	background-position: center;
}

.ruh-transportu {
	background-image: url("/img/animal-space/buldog.jpg");
	background-size: cover;
	background-position: center;
	margin-top: 45px;
}


.transport__text {
  max-width: 560px;
}


.values__section {
  margin-top: 34px;
  margin-bottom: 54px;
}


.values__text {
  max-width: 460px;
  padding-right: 107px;
}


.transport__sub-heading-project {
  /* width: 100px; */
  margin: 0px auto 35px auto;
  text-align: center;
}


.transport__sub-heading-values {
  /* width: 200px; */
  margin: 0px auto 38px auto;
  /* margin: 20px auto; */
  text-align: center;
  white-space: nowrap;
}

@media screen and (max-width: 1246px) {
	.transport__container, .values__container {
		padding-left: 20px;
	}
}

@media screen and (max-width: 767px) {

  .transport__container {
    flex-direction: column;
  }

.values__container {
    flex-direction: column-reverse;
  }

.transport__text, .values__text {
    margin: 0px auto 20px auto;
    padding: 0px 32px;
  }

.transport__image {
    max-width: 320px;
		width: 100%;
    height: 213px;
    margin: 0 auto;
  }
  .values__image {
		width: 100%;
		max-width: 320px;
    height: 217px;
    margin: 0 auto;  
  }
  
.transport__hero {
	background-position: -462px;
}

.transport__sub-heading-values {
    margin: 20px auto;
    text-align: center;
	white-space:normal;
  }
h2 {line-height: 93%;}
.transport__hero__heading {padding-left: 10%;
}
}

@media only screen and (max-width: 767px) {
	.animal-slider_wrapper {
		width: 100%;
		padding: 0 10px;
	}
	.wrapper .controls {
		text-align: center;
	}
	.animals__section {
		margin-bottom: 80px;
	}

}
@media only screen and (max-width: 400px) {
	.animals__section {
		margin-bottom: 120px;
	}
}
  </style>
    </footer>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
 <!-- Google Tag Manager (noscript) -->

<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>


<script src="/js/scripts.js"></script>
  </body>
</html>
