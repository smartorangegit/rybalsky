<?php /*Мова*/ include_once('include/lang.php'); ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?=$mes['transport-description']; ?>">
  <title><?=$mes['transport0']?></title>
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
      <h1 class="transport__hero__heading"><?=$mes['transport13']?></h1>
    </section>
    <section class="transport__section">
      <div class="transport__container">
        <div class="transport__text">
          <h2 class="transport__sub-heading transport__sub-heading-project"><?=$mes['transport16'];?></h2>
          <p><?=$mes['transport14'];?></p>
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
          <h2 class="transport__sub-heading transport__sub-heading-values"><?=$mes['transport17'];?></h2>
			<?=$mes['transport15'];?>
		</div>
      </div>
    </section>
	<section class="transport__section">
      <div class="transport__container">
        <div class="transport__text">
          <h2 class="transport__sub-heading transport__sub-heading-project"><?=$mes['transport18'];?></h2>
          <?=$mes['transport19'];?>
        </div>
        <div class="transport__image pesh-prostir">
        </div>
      </div>
    </section>
	<section class="values__section">
      <div class="values__container">
        <div class="values__image velo">
        </div>
        <div class="values__text">
          <h2 class="transport__sub-heading transport__sub-heading-values"><?=$mes['transport20'];?></h2>
			<?=$mes['transport21'];?>
		</div>
      </div>
    </section>
	<section class="values__section">
      <div class="transport__container">
        <div class="transport__text">
          <h2 class="transport__sub-heading transport__sub-heading-project"><?=$mes['transport22'];?></h2>
          <?=$mes['transport23'];?>
		  <div class="call-button button-flat">
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
          </style>
        </div>
        <div class="transport__image obshhestvenny-transport">
		<?/* <img src="/img/transport-infrastructure/obshhestvenny-transport.jpg"> */?>
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
	  <style>

.transport__hero {
  width: 100%;
  height: 320px;
  background: url("/img/transport-infrastructure/transport-infrastructure-bg-2.jpg") center no-repeat;
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
}


.transport__hero__heading {
  font-size: 40px;
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


.transport__image {
  margin-right: 10px;
  width: 568px;
  height: 476px;
  margin-top: 65px;
  background-size: cover;
}
.obshhestvenny-transport {
	background: url("/img/transport-infrastructure/obshhestvenny-transport.jpg") center no-repeat;
	width: 568px;
	height: 476px;
	background-size: 100% 100%;
}


.transport__text p,
.values__text p {
  font-family: "PFDinTextUniversal-Light";
  line-height: 1.5;
  letter-spacing: 1px;
  font-size: 16px;
  /* padding-left: 11px; */
}


.values__image {
  margin-left: 10px;
  width: 528px;
  height: 439px;
  margin-top: 65px;
  background-repeat: no-repeat;
  background-position: center;

}
.parking {
	background-image: url("/img/transport-infrastructure/parking.jpg");
	background-size: 100% 100%;
}
.pesh-prostir {
	background-image: url("/img/transport-infrastructure/pesh-prostir.jpg");
	background-size: 100% 100%;
}

.velo {
	background-image: url("/img/transport-infrastructure/velo.jpg");
	background-size: 100% 100%;
}

.ruh-transportu {
	background-image: url("/img/transport-infrastructure/ruh-transportu.jpg");
	background-size: 100% 100%;
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

.transport__image, .values__image {
    width: 320px;
    height: 268px;
    margin: 0 auto;
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
  </style>
    </footer>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
 <!-- Google Tag Manager (noscript) -->

<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
<?php /*Меню*/ $page="place"; include_once('include/top-menu.php'); ?>


<script src="/js/scripts.js"></script>
  </body>
</html>
