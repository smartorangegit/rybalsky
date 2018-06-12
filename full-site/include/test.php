<?php  session_start(); 
echo 66666;
include('../bd_check.php');
$day = date("Y-m-d H:i:s",strtotime("-1 hour")); 
 
$check = mysql_query("SELECT * FROM calls where dates >= CURRENT_TIME - INTERVAL 1.5 HOUR" ,$DB);



$num = $_POST['phone'];
$name = $_POST['name'];
$dat = date("Y-m-d H:i:s");  
$good = 0;
echo 66667;


GLOBAL $mes;
include('config.php');
include_once('lang.php');

?>
