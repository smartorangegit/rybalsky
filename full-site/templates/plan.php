<?php 
include('templates/function.php'); 
/**
 * Стриница с большим планом
 */
 	 /*Меню Стрелки*/ //include_once('include/arrow.php'); 
	
 $content='plan';

if (isset($_GET['ajax'])) {
 rez($id=$content); 

} else {
	
 if (PLAN=='plan') { 
    include_once 'layout.php';
 } else {
	  include_once 'kommercheskaya-list.php';
	 
 }
}

?>