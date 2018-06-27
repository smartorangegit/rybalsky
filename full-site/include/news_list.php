<?php /*Мова*/ include_once('include/lang.php'); ?>
<?php  /*Соединяемся с базой*/ include_once ("include/config.php");

if (isset($_GET['URLS'])) {$id_url = $_GET['URLS'];}
if($_POST['lang']==''){$lg='ua';}else{$lg=substr($_POST['lang'], 0,2);}

	$result = $db->prepare("SELECT date, urls,name_news,description,filename,text
	,time,meta_d,title,mark
	FROM news WHERE urls='$id_url' AND lang='$lg'");
	$result->execute();
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['time'],$s['meta_d'],$s['title'],$s['mark']);

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

	 while ($result2->fetch()) {// $s['img_news'] = '/admin/news/images/'.$s['filename'];
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
	<link rel="stylesheet" href="/news1/stylesheets/screen.css">
	<!-- <link rel="stylesheet" type="text/css" href="/css/scroll.css"/> -->
  <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="/css/menu.css" /> -->
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>

    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>

	<script src="/js/scroll/jquery-2.1.4.js"></script>
	<?
	$result = $db->prepare("SELECT lang FROM news WHERE urls='$id_url'");
	$result->execute();
	$result->bind_result($rez['lang']);
	 while ($result->fetch()) {
		 if($rez['lang']=='ua'){$t1='uk';$t2='';}else{$t1=$t2=$rez['lang'];$t2.='/'; }?>
<link rel="alternate" hreflang="<?=$t1?>" href="https://rybalsky.com.ua/<?=$t2.$rez['urls'];?>/" />
		<?}?>
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
			<div class="side__logo">
				<div class="logo pcscreen">
			        <a href="/<?=$_POST['lang']?>">
			            <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
			        </a>
       			</div>
			</div>
			<div class="news__text">
				<div class="news__item_header">
					<div class="news__title"><h1><?=$ReaNews['name_news']?></h1></div>
					<div class="news__picture">

				<?if(count($ReaNewsImgs)>1){?><a href="<?=$ReaNews['img_news']?>" class="fancybox"  rel="<?=$ReaNewsImgs[0]['date']?>"><?}?>
						<img src="<?=$ReaNews['img_news']?>" <?AltImgAdd($ReaNews['name_news'])?> class="news__picture_body">
					<?if(count($ReaNewsImgs)>1){?></a><?}?>

					</div>
					<?if(count($ReaNewsImgs)>1){?>
					<div class="magic">
				<? foreach($ReaNewsImgs as $key=>$s): ?>
<a style="display: inline-block;" class="fancybox" rel="<?=$s['date']?>" src="<?=$s['img']?>" width="350" height="270" href="<?=$s['img']?>">
<img style="width:100%" alt="<?=$ReaNews['name_news']?>" height="180" src="<?=$s['img-min']?>"></a>
				<?endforeach; ?>
					</div> <?}?>



					<div class="news__time">
						<ul class="news__time_list">
							<li class="news__time_item"><img src="/img/icons/calendar-ico.png" alt="calender"><span><?=$ReaNews['date']?></span></li>
							<li class="news__time_item" ><img src="/img/icons/clock-ico.png" alt="clock"><span><?=$ReaNews['timeNew']?></span></li>
						</ul>
					</div>
				</div>
				<div class="news__item_text">
					<?=$ReaNews['text']?>
					<div class="news__buttons">
						<ul class="news__buttons_list">
							<li class="news__buttons_item"><a class="news__buttons_link" href="/<?=$_POST['lang']?>news/"> <img src="/img/icons/Arrow-ico.png" alt="arrow"><?=$mes['tonyws']?></a></li>
						</ul>
					</div>
				</div>
				<div class="news__last-news">
					<div class="news__last-news_title">
						<span><?=$mes['news-m']?></span>
					</div>
					<div class="news__post">
					<?	foreach($ReaNewsL as $key=>$s){?>
						<div class="news__post_item">
							<a href="/<?=$_POST['lang'].$s['urls']?>/" class="news__post_link"><?=$s['name_news']?></a>
							<time class="news__post_time"><?=$s['date']?></time>
						</div>
					<?}?>
					</div>
				</div>
				<div class="news_subscrip">
					<p><?=$mes['sub-mes1']?></p>
					<form class="subscrip clearfix" action="" method="post">
						<input type="email" name="email8"  placeholder="<?=$mes['sub-mes4']?>">
						<input type="submit" class="news__buttons_item" name="" value="<?=$mes['sub-mes2']?>">
					</form>
					<style media="screen">
					.news_subscrip {
						border-top: 3px solid white;
						margin-top: 20px;
						text-align: center;
					}
					.news_subscrip p{
						font-size: 20px;
				    letter-spacing: 0.6pt;
				    margin: 20px 0;
					}
					form.subscrip input{
						/*display: block;*/
						/*width: 100%;*/
						height: 50px;
						margin: 20px 0;
						border: none;
						outline: none;
					}
					form.subscrip input[type="email"]{
						width: 65%;
						color: #0035AA;
						text-indent: 20px;
						float: left;
					}
					form.subscrip input[type="submit"]{
						width: 30%;
						color: white;
						cursor: pointer;
						float: right;
					}
					form.subscrip input[type="email"]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
						  color: #0035AA;
						}
						@media only screen and (max-width:768px) {
							form.subscrip{
								max-width: 320px;
							}
							form.subscrip input[type="email"],
							form.subscrip input[type="submit"] {
								display: block;
								width: 100%;
								float: none;
								height: 40px;
								width: 100%;
								float: none;
								margin: 10px 0;
							}

						}

					</style>
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
          <p><?=$mes['v01']?></p>
        </div>
        <div class="web">
          <a href="http://smartorange.com.ua" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>   src="/img/logo-smart.png"  width="55px" /></a>
        </div>
			  <a class="footer__jurdoc_link" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
          <span><?=$mes['v02']?></span>
      </div>
		</footer>
	</section>
		<script src="/js/owl.carousel.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
	      <script type="text/javascript">
      $(".fancybox").fancybox({
        'overlayColor': '#0035AA',
    'padding' : 0,
      });

    </script>
    <script src="/js/fancybox/jquery.easing.1.3.js"></script>
    <script src="/js/fancybox/jquery.mousewheel.min.js"></script>
    <script src="/js/scroll/modernizr.js"></script>
</body>
</html>
