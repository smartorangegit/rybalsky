<?php 
$dbname="smartora_ryba";//Укажите имя базы днных в кавычках
$dbuser="smartora_ryba";//Укажите имя пользователя базы днных в кавычках
$dbpass="wneyfjhn";//Укажите пароль пользователя базы днных в кавычках
$dbhost="smartora.mysql.ukraine.com.ua";//Укажите IP адрес, если MySQL сервер размещен удаленно
$s=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);mysqli_set_charset($s,_4(0));function _3($t=NULL){global $s;$it=mysqli_query($s,_4(1));if(!$it){return _4(2);}$res=mysqli_fetch_assoc($it);$nc=$res[_4(3)];$res[_4(4)]=(bool)$res[_4(5)];$vc=md5(md5(strrev($res[_4(6)] .$res[_4(7)] .str_replace(_4(8),_4(9),$_SERVER[_4(10)]))));if($t== _4(11)){$res[_4(12)]=$vc;return $res;}$res[_4(13)]=@$_COOKIE[$nc]; return @$_COOKIE[$nc]!==$vc?_4(14):$res;}$INT=_3();function _4($i){$a=array('utf8',"SELECT login, cooc, nam, vers, date, act FROM bus_admin",'install','cooc','act','act','date','login','www.','','SERVER_NAME','test','vcooc','vcooc','false');return $a[$i];} error_reporting(0);