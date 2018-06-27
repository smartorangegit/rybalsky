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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="/js/scripts.js"></script>
		<meta name="robots" content="noindex, follow">
	<?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
</head>
	<style media="screen">
	html, body{height: 100%; min-height: 100%;}
	.clearfix{clear: both; display: table;}
	body {width: 100%; min-height: 100%;	background: url('/img/build.jpg');	background-size: cover; overflow-x: hidden;}
	.thank-mess {text-align: -webkit-center;top: 5vh;font-size: 44px;margin: 0 auto;font-family: sans-serif;color: white;width: 100%;position: absolute;left: 0;}
	.thank-mess p {max-width: 70%}
	.logo {	width: 180px;}
	a#open_my_menu img{ display: block; margin: 0 auto; padding-top: 20px;}
	.container{  min-height: 100%;  padding-top: 30px;  box-sizing: border-box;  padding-bottom: 100px;  height: 100%;min-height: 600px;}
  .wrapper{  max-width: 1200px;  margin: 0 auto;  height: 100%;}
  footer{ position: static; width: 100%;  height: 50px;  margin-top: -50px;}
  .main_content{height:70vh; width: 100%;display: flex; flex-direction: row; align-items: flex-end; justify-content: space-between; position: relative;  }
  .top-menu{width: 100%; height: 78px;padding-top: 0; }
  .text_block{  width: 600px;  height: auto;  min-height: 400px;  background-color: pink;  flex-basis: auto;}
	@media only screen and (max-width:768px) {
		html, body{height: auto;}
		.container{height: auto; padding-bottom: 20px;}
		.thank-mess{position: static;}
		.thank-mess p {max-width: 90%}
		.wrapper {height: auto;}
		.top-menu {width: 100%;height: auto;padding-top: 0; max-width: 300px;margin: 0 auto;}
		.main_content {  flex-direction: column-reverse; height: auto; align-items: center;}
		footer {height: auto;margin-top: 0;}
	}
  </style>
  <body>
		<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
    <div class="container">
      <div class="wrapper">
				<?php /*Меню*/ include_once('include/top-menu.php'); ?>
				<?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
         <div class="main_content">
					 <a class="logo" href="/">
						 <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
					 </a>
					 <div class="thank-mess">
 						<p><?=$mes['i-mes6']?></p>
 					</div>
        </div>
      </div>
    </div>
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
