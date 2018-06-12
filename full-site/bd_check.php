<?php
$DB = mysql_connect ("smartora.mysql.ukraine.com.ua","smartora_ryba","wneyfjhn");
mysql_select_db ("smartora_ryba",$DB);
mysql_query("SET NAMES 'utf8'");




if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 
?>
