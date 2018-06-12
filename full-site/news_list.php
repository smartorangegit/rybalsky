<?php /*Мова*/ include_once('include/lang.php'); ?>
<?php  /*Соединяемся с базой*/ include_once ("include/config.php");

if (isset($_GET['URLS'])) {$id_url = $_GET['URLS'];}
if($_POST['lang']==''){$lg='ua';}else{$lg=substr($_POST['lang'], 0,2);}

	$result = $db->prepare("SELECT date, urls,name_news,description,filename,text
	,time,meta_d,title,mark, typ
	FROM news WHERE urls='$id_url' AND lang='$lg'");
	$result->execute();
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['time'],$s['meta_d'],$s['title'],$s['mark'], $s['typ']);

	 while ($result->fetch()) { $s['img_news'] = '/admin/news/images/'.$s['filename'];
								$ts   = strtotime($s['time']);
								$s['timeNew'] = date('H:i', $ts);

				foreach($s as $key=>$k){			$rez[$key]=$k;	}

	 $ReaNews=$rez;  }

	 $i=0;

	$marka = $ReaNews['mark'];
	$result = $db->prepare("select mark,min_i,id_n,date,fname,filename from pic_news WHERE mark='$marka'");
	$result->execute();
	$result->bind_result($s['mark'],$s['min_i'],$s['id_n'],$s['date'],$s['fname'],$s['filename']);
	 while ($result->fetch()) { $s['img']="/admin/pic/images/".$s['date']."/".$s['filename'];
								$s['img-min']="/admin/pic/images/".$s['date']."/min/".$s['filename'];

				foreach($s as $key=>$k){			$rez[$key]=$k;	}
		 $ReaNewsImgs[$i]=$rez;
	 $i++; }
	 //echo '<pre>'; print_r($ReaNewsImgs); echo '</pre>';
	 //Last News//
	 $i=0;
	 	$result2 = $db->prepare("SELECT date, urls,name_news,description,filename,text
	,time,meta_d,title
	FROM news WHERE  lang='$lg' AND  urls!='$id_url' ORDER BY date DESC LIMIT 3");
	$result2->execute();
	$result2->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['time'],$s['meta_d'],$s['title']);

	 while ($result2->fetch()) {$s['img_news'] = '/admin/news/images/'.$s['filename'];
								$ts   = strtotime($s['time']);
								$s['timeNew'] = date('H:i', $ts);
							//	echo '<pre>'; print_r($s); echo '</pre>';
				foreach($s as $key=>$k){			$rez2[$key]=$k;	}

	 $ReaNewsL[$i]=$rez2; $i++; }

 ?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $ReaNews['meta_d']; ?>">
    <title><?php echo $ReaNews['title']; ?></title>
	        <!-- Google Tag Manager -->
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
<?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
	<link rel="stylesheet" type="text/css" href="/css/intlTelInput.css?v=1.21" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="/css/menu.css?v=1.21" />
	<link rel="stylesheet" type="text/css" href="/css/style.css?v=1.21"/>

	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>

	<script src="/js/scroll/jquery-2.1.4.js"></script>
	  <link rel="stylesheet" type="text/css" href="/css/hodstroit.css" />
  <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css" />
	<?
	$result = $db->prepare("SELECT lang FROM news WHERE urls='$id_url'");
	$result->execute();
	$result->bind_result($rez['lang']);
	 while ($result->fetch()) {
		 if($rez['lang']=='ua'){$t1='uk';$t2='';}else{$t1=$t2=$rez['lang'];$t2.='/'; }?>
<link rel="alternate" hreflang="<?=$t1?>" href="https://rybalsky.com.ua/<?=$t2.$rez['urls'];?>/" />
		<?}?>
<style>
a {color: #ffffff;}
.news__wraper {
	background-image: url('/img/news/news_bg.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	padding-top: 80px;
}
.news__title {
	max-width: 1200px;
	margin: 0 auto 10px auto;
	font-size: 40px;
}
.news__text {
	max-width: 1200px;
	margin: 0 auto;
	padding: 21px 40px 45px 35px;
	border: 1px solid #d8d8d8;
	box-sizing: border-box;
}
.news__text p img{
	width: 50%;

}
.news__item_text:after {
	content: '';
	display: table;
	clear: both;
}
.news__picture {
	max-width: 560px;
	float: left;
	margin-right: 38px;
	margin-bottom: 18px;
}
.news__picture img {
	width: 100%;
}
.news__time_item {
	margin-bottom: 35px;
}
.news__time_item span{
	margin-left: 20px;
}
.news__item_text {
	color: #ffffff;
	font-size: 16px;
	line-height: 1.5;
}
.news__buttons_link {
	display: inline-block;
	text-align: center;
	font-size: 16px;
	text-decoration: none;
	color: #ffffff;
	width: 310px;
	height: 50px;
	line-height: 50px;
	background-color: #0035aa;
	margin-top: 20px;
	transition: all .5s;
}
.news__buttons_link:hover {
	background-color: #0f1157;
}

.subscription-form-news__container {
	max-width: 1200px;
	margin: 0 auto;
}

.subscription-form-news__container {
	margin-top: 15px;
	box-sizing: border-box;
	border: 1px solid #d8d8d8;
	padding: 24px 30px 22px 35px;
}

.subscription-form-news__container input[type="email"] {
	font-size: 16px !important;
	width: 70% !important;
	color: #808080 !important;
	letter-spacing: 0.4px !important;
}
.subscription-form-news__container input[type="submit"] {
	width: 28% !important;
	height: 52px !important;
	background-color: #0035aa !important;
	font-size: 16px !important;
	transition: all .5s;
}
.subscription-form-news__container input[type="submit"]:hover {
	background-color: #0f1157 !important;
}
.subscription-form-news__heading {
	font-size: 24px;
	text-align: center;
}
.news__last-news {
	max-width: 1200px;
	margin: 10px auto 0px auto;
	padding-bottom: 40px;
}
.news__last-news_title {
	color: #ffffff;
	font-size: 24px;
	line-height: 1.5;
	text-align: center;
	margin-bottom: 20px;
}
.news__post {
	display: flex;
	justify-content: space-between;
}
.news__post_item {
	width: 28%;
	text-align: left;
}
.news__post_item a{
	text-decoration: none;
	color: #ffffff;
}
.news__miniture-img {
	width: 100%;
	height: auto;
}
.news__miniture-img__container {
	width: 100px;
	float: left;
	margin-right: 10px;
}
.news__post_heading_container:after {
	content: '';
	display: table;
	clear: both;
}
.magic .fancybox {
	max-height: 33px;
	max-width: 40px;
	overflow: hidden;
}
@media only screen and (max-width: 1200px) {
	.news__title,
	.news__text,
	.subscription-form-news__container,
	.news__last-news {
		max-width: 1000px;
	}
	.news__picture {
		max-width: 445px;
	}
}
@media only screen and (max-width: 1000px) {
	.news__title,
	.news__text,
	.subscription-form-news__container,
	.news__last-news {
		max-width: 800px;
	}
	.news__picture {
		float: none;
		margin: 0 auto;
	}
}
@media only screen and (max-width: 768px) {
	.news__title {
		font-size: 22px;
	}
	.news__buttons_link {
		width: 220px;
		margin: 20px auto;
		display: block;
	}
	.news__text {
		padding: 10px;
	}
	.news__text p img{
		width: 100%;

	}
	.news__title,
	.news__text,
	.subscription-form-news__container,
	.news__last-news {
		max-width: 90%;
	}
	.subscription-form-news__container input[type="email"] {
		width: 90% !important;
		margin: 10px auto !important;
	}
	.subscription-form-news__container input[type="submit"] {
		width: 90% !important;
		margin: 10px auto !important;
	}

}
.vp_two:nth-child(odd){
        flex-direction: row-reverse;
    }
	.vp_two{
padding:10px;
} 
.vp_item{
padding:10px;
}
	</style>
</head>
<body>

	<!-- newsrybalsky -->
	<section>
		<header>
			<div class="wrap_header">
	        	<?php /*Меню*/ include_once('include/top-menu.php'); ?>
			    <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
	        <div class="clearfix"></div>
		</header>
		<div class="news__wraper">
			<div class="news__title">
				<h1><?=$ReaNews['name_news']?></h1>
			</div>
			<div class="news__text">
				<div class="news__item_header">

					<div class="news__picture">
					<?if(count($ReaNewsImgs)>1){?><a href="<?=$ReaNews['img_news']?>" class="fancybox"  rel="<?=$ReaNewsImgs[0]['date']?>"><?}?>
						<img src="<?=$ReaNews['img_news']?>" <?AltImgAdd($ReaNews['name_news'])?> class="news__picture_body">
					<?if(count($ReaNewsImgs)>1){?></a><?}?>

					<?if(count($ReaNewsImgs)>1){?>
					<div class="magic">
						<? foreach($ReaNewsImgs as $key=>$s): ?>
							<a style="display: inline-block;" class="fancybox" rel="<?=$s['date']?>" src="<?=$s['img']?>" href="<?=$s['img']?>">
								<img style="width:100%" alt="<?=$ReaNews['name_news']?>" src="<?=$s['img-min']?>">
							</a>
						<?endforeach; ?>
					</div>
					<?}?>
					</div>

					<div class="news__time">
						<ul class="news__time_list">
							<li class="news__time_item"><img src="/img/icons/calendar-ico.png" alt="calender">
								<span>
								<?
								$date = date_create($ReaNews['date']);
								echo date_format($date, 'd.m.Y');
								?>
								</span>
							</li>
							<!-- <li class="news__time_item" ><img src="/img/icons/clock-ico.png" alt="clock"><span><?=$ReaNews['timeNew']?></span></li> -->
						</ul>
					</div>
				</div>
				<div class="news__item_text">
					<?=$ReaNews['text']?>
					<div class="news__buttons">
						<ul class="news__buttons_list">
							<li><a class="news__buttons_link" href="/<?=$_POST['lang']?>news/"> <img src="/img/icons/Arrow-ico.png" alt="arrow"><?=$mes['tonyws']?></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="subscription-form-news__container">
				<div>
				<? if ($ReaNews['typ']==2):?>
				<p class="subscription-form-news__heading">
					<?=$mes['sub-mes5']?>
				</p>
					<? else: ?>
				<p class="subscription-form-news__heading">
					<?=$mes['sub-mes1']?>
				</p>
					<? endif; ?>
					<form id='fr1' class="subscrip clearfix form_podpiska_news" action="#" method="post">
					<? if ($ReaNews['typ']==2):?>
						<input type="email" name="email9"  placeholder="<?=$mes['sub-mes4']?>" onkeyup="this.className='pole12'" class="subscribeForm">
					<? else: ?>
						<input type="email" name="email8"  placeholder="<?=$mes['sub-mes4']?>" onkeyup="this.className='pole12'" class="subscribeForm">
					<? endif; ?>
						<input type="submit"  class="news__buttons_item send_news__buttons_item" name="" value="<?=$mes['sub-mes2']?>">
					</form>
					<div class="succses__form_info">
						<p style='margin: -15px 0;' class="succses__form_text"></p>
					</div>
				</div>
			</div> <!--end subscription-form-news__container-->

				<div class="news__last-news">
					<div class="news__last-news_title">
						<span><?=$mes['news-m']?></span>
					</div>
					<div class="news__post">
					<?	foreach($ReaNewsL as $key=>$s){?>
						<div class="news__post_item">
							<div class="news__post_heading_container">
								<div class="news__miniture-img__container">
									<img class="news__miniture-img" src="<?=$s['img_news']?>" alt="">
								</div>
								<a href="/<?=$_POST['lang'].$s['urls']?>/" class="news__post_link"><?=$s['name_news']?></a>
								<!-- <time class="news__post_time"><?=$s['date']?></time> -->
							</div>
						</div>
					<?}?>
					</div>
				</div>

		</div>
		<style>
			footer {
				position: static;
			}

		</style>
		<footer>
			<div class="foot-wrap">
              <div class="allright">
                <p>
                  <?=$mes['v01']?>
                </p>
              </div>

              <div class="web">
                <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png"  width="55px" /></a>
              </div>
			  <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
              <span><?=$mes['v02']?></span>
			  <!-- Yandex.Metrika counter -->
			<script type="text/javascript">
			(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43611459 = new Ya.Metrika({ id:43611459, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } });
			var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js";
			if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript>
			<div><img src="https://mc.yandex.ru/watch/43611459" style="position:absolute; left:-9999px;" alt="" /></div>
			</noscript>
			<!-- /Yandex.Metrika counter -->
            </div>
		</footer>
	</section>
			<script src="/js/owl.carousel.min.js"></script>
    <script src="/js/scripts.js?v=1.21"></script>
    <script src="/js/jquery.fancybox.js"></script>
	      <script type="text/javascript">
      $(".fancybox").fancybox({
        'overlayColor': '#0035AA',
		'padding' : 0,
      });

	</script>

	<div class="subscribe_hod_stroitelsva subscribe_hod_stroitelsva__hidden">
    <div class="subscribe_hod_stroitelsva__container">
      <div class="subscribe_hod_stroitelsva__name"><?=$mes['sub-mes1']?></div>
      <a class="subscribe_hod_stroitelsva__close_form" >
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="50 98.5 60 60"><path d="M55.21 153.29L50 148.08l9.79-9.79 9.788-9.79-9.79-9.79L50 108.92l5.21-5.21 5.21-5.21 9.79 9.79 9.79 9.788 9.79-9.79 9.79-9.788 5.21 5.21 5.21 5.21-9.79 9.79-9.788 9.79 9.79 9.79 9.788 9.79-5.21 5.21-5.21 5.21-9.79-9.79-9.79-9.788-9.79 9.79-9.79 9.788-5.21-5.21z" fill="red"/></svg>
        <!-- <img src="/img/icons/close-bold-red.svg" alt="logo" width="70px"/>-->
      </a>
      <form id='fr2' class="subscrip clearfix form_podpiska_news" action="#" method="post">
        <div class="subscrip__email_wrapper">
          <input type="email" name="email8"  placeholder="<?=$mes['sub-mes4']?>" onkeyup="this.className='pole12'" class="subscribeForm">
          <span class="iemal">*</span>
        </div>
        <input type="submit"  class="news__buttons_item send_news__buttons_item" name="" value="<?=$mes['sub-mes2']?>">
      </form>
      <div class="succses__form_info">
        <p style='margin: -15px 0;' class="succses__form_text"></p>
      </div>
    </div>
  </div>

</div>
</div>
    <script src="/js/fancybox/jquery.easing.1.3.js"></script>
    <script src="/js/fancybox/jquery.mousewheel.min.js"></script>
	<script src="/js/scroll/modernizr.js"></script>
	<script src="/js/scripts.js?v=1.21"></script>
 <style>
 .stroy024 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image024.jpg);}
 .stroy022 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image022.jpg);}
 .stroy020 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image020.jpg);}
 .stroy018 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image018.jpg);}
 .stroy016 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image016.jpg);}
 .stroy010 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image010.jpg);}
 .stroy012 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image012.jpg);}
 .stroy014 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image014.jpg);}
 .stroy008 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image008.jpg);}
 .stroy006 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image006.jpg);}
 .stroy004 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image004.jpg);}
 .stroy002 {background-image: url(https://rybalsky.com.ua/img/shourum-na-rybalskomu/image002.jpg);}
 .stroy_item:nth-child(even) {
    margin-top: 70px;
}
 </style>
 <script type="text/javascript">
$(".fancybox").fancybox({
  arrows : true,
  thumbs : {
    autoStart: true
  },
  buttons: [
    'slideShow',
    'fullScreen',
    'thumbs',
    'close'
  ],
  animationEffect: 'zoom-in-out'
});


</script>
<style media="screen">



/* 22.01.2018 --Andrey */
#hodstroyki {
  position: relative;
  margin-top: 100px;
}
.stroy_item {
  margin: 0px;
}
.stroy_item {
  margin-bottom: 25px;
  margin-left: 0px;
}

.timeline {
  position: absolute;
  top: 50%;
  left: 50%;
  height: 100%;
  transform: translate(-50%, -51%);
}

.header-bottom {
	padding-top: 60px;
}
.stroy_item:nth-child(even) {
  margin-top: -70px;
}
.stroy_item:nth-child(even):after{
  content: '';
  display: block;
  position: absolute;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
  border: 15px solid transparent;
  border-right-color: #0035aa;
  right: -30px;
  top: 50%;
}
.stroy_item:nth-child(odd):before {
  content: '';
  display: block;
  position: absolute;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
  border: 15px solid transparent;
  border-left-color: #0035aa;
  left: -30px;
  top: 50%;
}
@media only screen and (max-width: 1024px) {
  #hodstroyki {
    width: 668px;
  }
  .stroy_item {
    width: 300px;
  }
}
@media screen and (max-width: 768px) {
  #hodstroyki {
    flex-direction: column;
    width: auto;
    margin-top: 55px;
  }
  .stroy_item {
    width: 100%;
  }
  .stroy_item:nth-child(even) {
    margin-top: 0px;
  }
  .stroy_item:nth-child(even):after {
    content: none;
  }
  .stroy_item:nth-child(odd):before {
    content: none;
  }
}

.block_hod-stroitelstva {
	height: 120px;
	margin-bottom: 40px;
}
@media screen and (max-width:786px){
.block_hod-stroitelstva {
	height: 180px;
}	
}
.stroy_date{
background: rgba(0,0,0,0.4);
  padding: 20px; 
}
a.fancybox{
/* position: absolute; */
    width: 100%;
   height: 100%;
    font-size: 0;
}
.stroy {
    width: 1000px;
   }
   .stroy_item {
    width: 468px;
   height: 280px;
   } 
   @media screen and (max-width: 1200px) {
   .stroy {
    width: 100%;
   }
   .stroy_item {
    width: 46.7%;
   height: 280px;
   } 
   }
      @media screen and (max-width: 768px) {

   .stroy_item {
    width: 100%;
   height: 280px;
   } 
   }
</style>
</body>
</html>
