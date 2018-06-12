<!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>Справка пользователя</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><script src="/bimailer/extra/jquery.js"></script><script src="/bimailer/extra/allsite.js"></script><style>section li{text-indent:10px;	line-height: 150%;}</style></head><?php require_once "dbuser.php";is_array($INT) ?: require_once "advanced/enter.php";?><body><?php require_once "menu.php"; ?><h1>Справочная информация</h1><section><center><a href="http://bimailer.ru/help/index.php"><input class="butG" type="button" value="На сайте издателя"></a></center></section>
	<h1>Изменения в новой версии</h1>
<section>
<p>Примененные обновления в <span style="color:#ca6002; font-weight:bold;">Bi</span><span style="color:#445f88; font-weight:bold;">Mailer v<?=$INT['vers'] ?></span>
<ul>
<li>полный переход на работу через CURL, теперь большинство обязанностей по установке соединения возлагается на CURL</li>
	<li>изменение логирования ошибок SMTP серверов, полный вывод дейтсвий CURL при устанвоке соединения, основное внимание стоит уделять последним строкам лога</li>
<li>дебаг команд HELO и ELHO при приветсвии<br>
	<center></center></li>
	<li>теперь добавление SMTP севреров в скрипт из файла, требует явного указания протокола: smtp - протокол для нешифрованного соединения,
smtps - протокол соединения с шифрованием (SSL/TLS)</li>
<li>оптимизация фонового режима работы и исправление ошибок, возникающих на некоторых серверах</li>
<li>предавторизационная проверка некоторых настроек хостинга</li>
	<li>добавлено закрытие лога отправки сервера после повторного клика</li>

</ul>
</p>

</section><footer class="foo"><?php require_once "footer.php"; ?></footer>
</body>
</html>