<!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>BiMailer</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><link rel="stylesheet" href="/bimailer/extra/table.css"><script src="/bimailer/extra/jquery.js"></script><script src="/bimailer/extra/allsite.js"></script><script src="/bimailer/extra/shifty.js"></script><script src="/bimailer/extra/servers.js"></script><style>section:first-of-type{padding:0;}/*.modal td:first-child{text-align:left;}*/.modal td{	max-width:480px;	box-sizing: border-box;	white-space: nowrap; /* Запрещаем перенос строк */   /* overflow: hidden; /* Обрезаем все, что не помещается в область */    text-overflow: ellipsis; /* Добавляем многоточие */}.bis{display: none;}.addons{text-align: center;}.bag td, .bags{ white-space: pre !important; color: #cc0000; font-size: 12px;}	.bags{display: block; text-align: left; width: 100%}#autor{vertical-align:bottom;}#drag{display: inline-block;}.addbg{	font-size:bold;	color:rgba(0,0,0,1);	text-align:center;	position: absolute;	background:rgba(255,255,255,0.8);	padding-top:7px;	z-index:10;	outline:1px dashed #999999;	font-size: 15px;	width: 406px;    height: 33px;	box-sizing: border-box;}	#serverlist td{cursor: pointer;}	.error{		color:#5A0000;		text-shadow: 0px 0px 12px rgba(204,0,0,1.00);	}	.error.select{background-color:rgba(254,215,215,0.70) !important;}</style></head><?php require_once _512438483(0);is_array($INT)?:require_once _512438483(1); ?><body><?php require_once _512438483(2);$vseg=mysqli_num_rows(mysqli_query($s,_512438483(3)));$tru=mysqli_num_rows(mysqli_query($s,_512438483(4))); ?><h1>Список серверов</h1><section><table class="modal" cellpadding="2" cellspacing="1" border="0" width="1000"><tbody id="serverlist"><tr><th width="20"><span data-title="Включение использования всех хостингов для рассылки" ><input type="checkbox" <?=$tru==$vseg?_512438483(5):_512438483(6)?> name="glob" /></span></th><th><span data-title="Адрес bisend.php или SMTP сервера">Адрес</span></th><th width="125"><span data-title="IP адреса почтового сервера. Для качественной рассылки IP должны быть уникальными между собой" >IP MAIL</span></th><th width="175"><span data-title="Редактируется по двойному клику. Используется в Флеш модуле и в тексте письма через код %coms%">Комментарий</span></th><th width="50"><span data-title="Допустимое количество отправляемых писем в час. Устновите 0 для снятия ограничений.">Огр.</span></th><?php $fd=mysqli_query($s,_512438483(7));while($rd=mysqli_fetch_assoc($fd)){echo _512438483(8) .$rd[_512438483(9)] ._512438483(10) .(empty($rd[_512438483(11)])?NULL:_512438483(12)) ._512438483(13);echo $rd[_512438483(14)]== _512438483(15)?_512438483(16):_512438483(17);echo _512438483(18) .$rd[_512438483(19)];echo isset($rd[_512438483(20)])?_512438483(21) .$rd[_512438483(22)] ._512438483(23):NULL;echo _512438483(24) .$rd[_512438483(25)] ._512438483(26) .htmlspecialchars($rd[_512438483(27)],ENT_QUOTES) ._512438483(28) .$rd[_512438483(29)] ._512438483(30);$r++;} ?><!--<tr id="addrow"><td colspan="3"><input type="text" name="url" placeholder="http://newsite.com/bisend.php"></td><td colspan="2"><input type="text" name="opis" placeholder="комментарий"></td><td id="adsp">Добавить</td></tr> --></tbody></table><span id="res"></span></section>	<div class="addons"><table class="modal smt" style="margin-bottom:0px"><tr><th>Адрес почтового сервера</th><th width="56">Порт</th><th width="50">SSL/TLS</th><th colspan="2">Авторизация</th><th></th></tr><tr id="addrow"><td><input type="text" name="url" placeholder="smtp.domen.ru"></td><td><input type="number" name="port" placeholder="25"></td><td><input type="checkbox" name="ssl"></td><td><input type="text" name="login" placeholder="логин"></td><td><input type="text" name="pass" placeholder="пароль"></td><td id="adsp" class="orng" width="140">Добавить SMTP</td></tr></table>	<table class="modal bis" style="margin-bottom:0px"><tr><th>URL адрес до PHP файла</th><th>Комментарий</th><th></th></tr><tr id="addrow"><td><input type="text" name="url" placeholder="http://newsite.com/bisend.php"></td><td width="170"><input type="text" name="opis" placeholder="комментарий"></td><td id="adsp" class="blue" width="140">Добавить bisend</td></tr></table>		<div id="drag"><span class="bags"></span><span data-title="Добавление подключения к SMTP серверу для отправки писем. Перетащите сюда список SMTP для массового добавления."><input class="but butO" type="button" disabled value="Добавление SMTP"></span><span data-title="URL адрес до файла bisend.php на стороннем сайте. Перетащите сюда файл содержащий список URL для массового добавления bisend."><input class="but butB" type="button" value="Добавление PHP тоннеля"></span>	</div></div><h1>Подключение сайтов для рассылки через PHP тоннель</h1><section>Для профилактики заспамливания IP, превышения порога отправки писем с одного хостинга и  пробиваемости в инбокс:<ul><li>Скачайте файлик bisend.php;</li><li>Разместите его на другом хостинге;</li><li>Введите полный URL путь до файла в форму выше (Например: http://newsite.ru/bisend.php).</li></ul><center><a href="http://bimailer.ru/download/bisend_3.32.php?forus=<?=$INT[_512438483(31)]?>"><input class="but butG" type="button" value="Скачать файл bisend.php "></a></center>	<p>Периодически проверяйте IP MAIL своих хостингов на <a href="https://2ip.ru/spam/">наличие в блек листах</a>. Их присутсвие в списках не критично, но доставляемость в инбокс падает с прогрессией попадания IP MAIL в эти спам листы.</p></section><h1>Подключение SMTP</h1><section>Для подключения SMTP серверов потребуются реквизиты этих серверов, как правило они идентичны с реквизитами почтового ящика. Список бесплатных SMTP серверов вы можете найти по ссылке <center><a href="http://bimailer.ru/help/smtp-list.php"><input class="but butG" type="button" value="Список SMTP "></a></center>
	</section><section style="background:none"><center><div class='viewport'>    <ul class='slidewrapper' data-current=0><li><h3>Доп. севера</h3><p>Подключайте сайты размещая на них bisend.php и прямые SMTP сервера, для достижения 100% инбокса. Поля "IP MAIL", должны отличаться между собой, т.к. по IP фильтруются письма.</p></li><li><h3>Добавление серверов</h3><p>Есть возможность добавлять сервера для рассылки путем перетаскивания списка серверов с рабочего стола на кнопки добавления. Поддерживаются файлы CSV, TXT, XLSX (excel 2007+). <a href="http://bimailer.ru/help/server-rassylkil.php#add_SMTP">Подробно в справке>></a>.</p></li><li><h3>Ограничения</h3><p>Дважды кликнув по полю &quot;Ограничение&quot; можно указать количество писем разрешенных для отправки в час. <a href="/bimailer/help/ogranichenie.php" title="Подробнее">Данный параметр профилактирует, но не исключает возможности блокировки сервера</a>. Установите &quot;0&quot; для снятия ограничения.</p></li><li><h3>Изменение ограничений</h3><p>При изменении ограничений, прогресс сбрасывается на ноль если рассылка остановлена.<center><img src="images/help/rowServ.png"  style="border: 1px #455A7E dashed;"></center></p></li><li><h3>Комментарий URL</h3><p>Двойной клик мышкой по полю &quot;<em><strong>Комментарий</strong></em>&quot; напротив URL адреса, разрешает редактирование. Клик мышкой вне поля, сохраняет изменения.</p></li><li><h3>Тестирование хостингов</h3><p>Тестирование URL выявит возможные ошибки и предложит их решение. Проверяйте подключенные файлы хостингов для получения информации о состоянии и доступности для использования.</p></li></ul>    <div class="slideline"><span class="next" onClick="nextSlide('x')">&lt;&lt;</span><span class="next" onClick="nextSlide('y')">&gt;&gt;</span></div></div></center></section><footer class="foo"><a href="http://bimailer.ru/help/server-rassylkil.php" class="but butG" title="Сервера для рассылки" target="_blank">Справка раздела</a> <?php require_once _512438483(32); function _512438483($i){$a=array("dbuser.php","advanced/enter.php","menu.php",'SELECT * FROM bus_serv',"SELECT * FROM bus_serv WHERE Gisp='true'",'checked','','SELECT * FROM bus_serv','<tr id="','mds','" ','ers','class="error"','><td><input type="checkbox" name="Gisp"','Gisp','true',' checked','','/></td><td>','url','login','	(','login',')','</td><td>','ip','</td><td>','com','</td><td>','lim','</td></tr>','login',"footer.php");return $a[$i];} ?></footer></body></html>