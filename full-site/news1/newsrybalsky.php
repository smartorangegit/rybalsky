<?php /*Мова*/ include_once('../include/lang.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="stylesheets/screen.css">
	<link rel="stylesheet" type="text/css" href="../css/scroll.css"/>
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="../css/menu.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>

	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>"/>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/scroll/jquery-2.1.4.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/fancybox/jquery.easing.1.3.js"></script>
    <script src="/js/fancybox/jquery.mousewheel.min.js"></script>
    <script src="/js/scroll/modernizr.js"></script>
</head>
<body>
	<!-- newsrybalsky -->
	<section>
		<header>
			<div class="wrap_header">
	        	<?php /*Меню*/ include_once('../include/top-menu.php'); ?>
			    <?php /*Контактна форма*/ include_once('../include/call_my.php'); ?> 
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
					<div class="news__title">
						ОФІЦІЙНА ПОЗИЦІЯ ПРЕС-СЛУЖБИ ПРОЕКТУ ЖИТЛОВОГО РАЙОНУ
					</div>
					<div class="news__picture">
						<img src="img/newsPhoto-bg.jpg" alt="" class="news__picture_body">
					</div>
					<div class="news__time">
						<ul class="news__time_list">
							<li class="news__time_item"><img src="img/calendar-ico.png" alt="calender"><span>2017-03-13</span></li>
							<li class="news__time_item" ><img src="img/clock-ico.png" alt="clock"><span>08:53</span></li>
						</ul>
					</div>
				</div>
				<div class="news__item_text">
					<p>
						Зважаючи на той факт, що останнім часом у мережі Інтернет та засобах масової інформації з’являється велика кількість неофіційної інформації щодо правомірності будівництва Житлового району «Рибальський», прес-служба проекту вважає за необхідне прояснити ситуацію щодо порядку використання земельної ділянки, на якій здійснюється будівництво.Зазначимо, що земельну ділянку з цільовим використанням (вид використання) – "експлуатація та обслуговування майнового комплексу" було надано у Також Рішенням КМР 29 вересня 2016 року 
						№96/1100 було схвалено Детальний план території у межах вулиць Електриків, Набережно-Рибальської дороги у Подільському районі м. Києва, яким передбачено перепрофілювання території під поліфункціональну забудову (житлове, громадське та інші види використання). Важливо наголосити, що існуючі новації земельного кодексу щодо визначення виду використання земельної ділянки надають можливість зміни виду використання за рішенням землекористувача (однак за умов відповідності містобудівній документації), що також відповідає визначеним у користування Публічному акціонерному товариству «КИЇВСЬКИЙ РІЧКОВИЙ ПОРТ» Рішенням Київської міської ради № 907/907 від 28 липня 2016 року. На виконання вищезазначеного Рішення 13 жовтня 2016 року було укладено договір оренди земельної ділянки.
					</p>
					</br>
					<p>
						Також Рішенням КМР 29 вересня 2016 року №96/1100 було схвалено Детальний план території у межах вулиць Електриків, Набережно-Рибальської дороги у Подільському районі м. Києва, яким передбачено перепрофілювання території під поліфункціональну забудову (житлове, громадське та інші види використання).
						Важливо наголосити, що існуючі новації земельного кодексу щодо визначення виду використання земельної ділянки надають можливість зміни виду використання за рішенням землекористувача (однак за умов відповідності містобудівній документації), що також відповідає визначеним у договорі оренди умовам.
					</p>
					</br>
					<p>
						Станом на сьогодні інформація щодо земельної ділянки міститься на офіційних ресурсах державних органів – у Публічній кадастровій карті України та МІАС ЗМД «Містобудівний кадастр Києва». Цільове призначення – для будівництва та обслуговування інших будівель громадської забудови. Функціональна зона – території громадських будівель та споруд (існуючі). Зважаючи на вищезазначені факти, будівництво Житлового району здійснюється у межах і в спосіб, що визначені законодавством.
					</p>
					</br>
					<p>
						Звичайно ж ми розуміємо підвищену увагу до будівництва на цій території, однак вважаємо, що позиція, викладена в позовній заяві Прокуратури міста Києва, а саме "використання земельної ділянки не за призначенням", – базується на хибних припущеннях та виходить за межі повноважень органу.
					</p>
					</br>
					<p> 
						Щиро сподіваємось, це було зроблено ненавмисно і 	маємо намір захищати свої інтереси у суді, рішення якого нарешті зупинить хвилю неаргументованої та безпідставної критики правового статусу проекту.
						Наразі хочемо ще раз наголосити, що ми відкриті для запитів ЗМІ та прозорого діалогу і готові, у разі виникнення додаткових запитань та уточнень, надати всю необхідну інформацію.
					</p>
					<div class="news__buttons">
						<ul class="news__buttons_list">
							<li class="news__buttons_item"><a class="news__buttons_link" href="#">Ознайомитися з результатами правової експертизи</a></li>
							<li class="news__buttons_item"><a class="news__buttons_link" href="#"> <img src="img/Arrow-ico.png" alt="arrow">Повернутися до новин</a></li>
						</ul>
					</div>
					<div class="news__author">
						<p>Прес-служба ЖР "Рибальський"</p>
						<p>+38 (093) 634 73 35</p>
					</div>
				</div>
				<div class="news__last-news">
					<div class="news__last-news_title">
						<span>Останні новини</span>
					</div>
					<div class="news__post">
						<div class="news__post_item">
							<a href="" class="news__post_link">СУПЕР-АКЦІЯ ВІД ЖИТЛОВОГО РАЙОНУ РИБАЛЬСЬКИЙ</a>
							<time class="news__post_time">2017-03-13</time>
						</div>
						<div class="news__post_item">
							<a href="" class="news__post_link">СТВОРЮЮЧИ РИБАЛЬСЬКИЙ, МИ ДБАЄМО В ТОМУ ЧИСЛІ ПРО МАЛЕНЬКИХ МАЙБУТНІХ МЕШКАНЦІВ</a>
							<time class="news__post_time">2017-03-13</time>
						</div>
						<div class="news__post_item">
							<a href="" class="news__post_link">ВІДБУЛАСЬ ПРЕЗЕНТАЦІЯ ПРОЕКТУ RYBALSKY</a>
							<time class="news__post_time">2017-03-13</time>
						</div>
					</div>
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
</body>
</html>
