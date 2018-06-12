<?php
include('templates/function_new.php');
/**
 * Стриница с большим планом
 */
 	 /*Меню Стрелки*/ //include_once('include/arrow.php');

 $content='plan_new';

if (isset($_GET['ajax'])) {
 rez($id=$content);

} else {
    include_once 'layout.php';
}

?>
