<?php 
include('templates/function.php'); 
/**
 * http://plutov.by/post/html5_history_api
 */
//echo '<pre>'; print_r($_GET); echo '</pre>';
//$site='../../';
 //Квартира по id    1
 /*  $result = $db->prepare("SELECT t1.number, t1.all_room, t1.life_room, t1.img, t2.ATTRIBUTE, t2.VALUE FROM `apartments` AS t1, property AS t2 WHERE t1.`id`=1 AND t2.id_FLAT=t1.`id`");
   $result->execute();  
    $result->bind_result($s['number'],$s['all_room'],$s['life_room'],$s['img'],$s['ATTRIBUTE'],$s['VALUE']); while($result->fetch()){
		foreach($s as $k){
			//$content=$content.$k;	
		}
	$content=$content.'<br>';
		}
 $result->close(); 

  //Поверх секція по id    1
    $result = $db->prepare("select 	section.floor, section.sec ,section.img from section WHERE `id`=1");
   $result->execute();  
    $result->bind_result($s['floor'],$s['sec'],$s['img']); while($result->fetch()){
		foreach($s as $k){
			//$content=$content.$k;	
		}
	$content=$content.'<br>';
		}
 $result->close(); 

 */
 $content='flat';

if (isset($_GET['ajax'])) { //echo $content; 
 rez($id=$content);
} else {
	
		if ($COMERC) {
		include_once 'kommercheskaya-list.php';
		} else {
    include_once 'layout.php';
		}
}?>