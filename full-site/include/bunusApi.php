<?php
GLOBAL $mes;
include('config.php');



$promo=$_POST['promocode'];
$text='';

$check = $db->prepare("SELECT proc FROM bonus WHERE kod='$promo'");
$check->execute();
$check->store_result();
//if ($check->num_rows()){ }
$check->bind_result($s['proc']);		
 while ($check->fetch()) { }
 

  if ($s['proc']) {
		 
	$text.='<div class="green_line_info">Ви отримали знижку на купівлю квартири</div><span class="bonus_value">'.str_replace('%','',$s['proc']).'</span><span class="bonus_grad">%</span>';
	 }else {
		 
		$text.='<div class="green_line_info" style="float: none;">Промо-код не знайдено</div>';
	 }
	 
	 
echo $text.'';
		   
		  