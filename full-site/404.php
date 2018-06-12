<?php /*Мова*/ include_once('include/lang.php'); global $site; ?>
<head <?=$mes['i-mes8']?>>

<?php
	   $url_origin = $_SERVER["REQUEST_URI"];
	   $url_str = explode("/", $url_origin);
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){ ?>
	<!-- <link rel="stylesheet" type="text/css" href="/css/style.css" /> -->
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo substr($url_origin, 3);?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo substr($url_origin, 3);   ?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo substr($url_origin, 3);?>" />
	<?php }
	else {?>
	<link rel="alternate" hreflang="ru" href="https://rybalsky.com.ua/ru<?php echo $url_origin;?>" />
  <link rel="alternate" hreflang="uk" href="https://rybalsky.com.ua<?php echo $url_origin;?>" />
  <link rel="alternate" hreflang="en" href="https://rybalsky.com.ua/en<?php echo $url_origin;?>" />
	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=$mes['404-description']?>">
  <title><?=$mes['i-mes7']?></title>
</head>
<?php
header("HTTP/1.1 404 Not Found");
header("Status: 404 Not Found");
// echo "<h1>Помилка 404. Документ не знайден!</h1>";
?>

<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/menu.css" />
<script src="/js/scroll/jquery-2.1.4.js"></script>
<script src="/js/scripts.js"></script>
<style media="screen">
 body {width: 100%; height: 100%; background: url('/img/build.jpg'); background-size: cover; overflow: hidden; }
	.thank-mess {text-align: center; padding-top: 36vh;font-size: 44px; font-family: sans-serif; color: white;}
	.header-bottom{ height: auto;	}
	.logo {width: 180px; position: absolute; bottom: 8vh; }
	a#open_my_menu img{ display: block;	margin: 0 auto;	padding-top: 20px;}
	@media only screen and (max-width:768px) {
		.header-bottom{ align-content: center;}
		.header-bottom .logo {bottom: 100px; margin-left: 50%; left: -60px;}
	}
</style>

<!-- <body> -->
	<div class="header buld">
			<div class="wrap_header">
		 <?php /*Меню*/ include_once('include/top-menu.php'); ?>
		 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
				<div class="clearfix"></div>
				<div class="thank-mess">
					<p>	<?=$mes['i-mes5']?>		</p>
				</div>
				<div class="header-bottom">
					<div class="logo">
							<a href="/">
								<img src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" />
							</a>
						</div>
				</div>
			</div>
			<footer>
				<div class="foot-wrap">
					<div class="allright"<p>     <?=$mes['v01']?>  </p></div>
					<div class="web">	<a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img  src="/img/logo-smart.png" alt="smart" width="55px" /></a></div>
					<a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
					 <span><?=$mes['v02']?></span>
				
				</div>
			</footer>

		</div>
