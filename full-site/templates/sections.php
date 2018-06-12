<?php include('include/config.php');
/**
 * http://plutov.by/post/html5_history_api
 */

 $content = '';

 $sec = str_replace("sections", "", $_POST['urls'][1]);
 /*$result = $db->prepare("SELECT sec,floor,img   FROM section");

   $result->execute();
    $result->bind_result($s1, $s2, $s3); while($result->fetch()){
		$content = $s1.$s2.$s3;
		}
 $result->close(); */


 //Все квартиры из  1 секуии 1 этажа   
 //SELECT t2.floor, t2.sec, t1.id, t1.number, t1.all_room, t1.life_room, t1.icon FROM `apartments` AS t1, section AS t2, flat AS t3 WHERE t2.sec=t3.`id_sec` AND t2.`floor`=1 AND t2.sec=2 AND  t3.id_flat=t1.id
  //

  $result = $db->prepare("SELECT t2.floor, t2.sec, t1.id, t1.number, t1.all_room, t1.life_room, t1.icon FROM `apartments` AS t1, section AS t2 WHERE t2.sec=t1.`id_sec` AND t2.`floor`=1 AND t2.sec=1");
   $result->execute();
   $first_floor=0;
    $result->bind_result($s['floor'],$s['sec'],$s['id'],$s['number'],$s['all_room'],$s['life_room'],$s['icon']); while($result->fetch()){

		foreach($s as $k){
			$content=$content.$k;
		}
	$content=$content.'<br>';
		}
 $result->close();

 //$content=$content.'<iframe src="../img/1.svg"></iframe>';
/*
 	<a href="">Верх</a>
	<a href="">Низ</a>
 */
 echo '<pre>'; print_r($_POST); echo '</pre>';
if (isset($_GET['ajax'])) {


	echo $content;

			} else {



    include_once ('layout.php');
	

}?>
