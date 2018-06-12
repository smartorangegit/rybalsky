<?php
include('templates/function.php');

  $sec = str_replace("sections", "", $_POST['urls'][1]);

  if(empty($sec))
  {
	  $sec=1;
  }

 // echo '<pre>'; print_r($_GET); echo '</pre>';

 $floor[0]=str_replace("floor", "", $_POST['urls'][2]);

	if($floor[0]>1)
	{
		$floor[1]=$floor[0]-1;
	}
	else
	{
		$floor[0]=1;
	}
	
	if($floor[0]<10)
	{
		$floor[2]=$floor[0]+1;
	}
	else
	{
		$floor[2]=10;
	}
 
 $content='floor';

	if (isset($_GET['ajax'])) 
	{ 
		rez($content);
	} 
	else 
	{
		if ($COMERC) 
		{
			include_once 'kommercheskaya-list.php';
		} 
		else 
		{
			include_once 'layout.php';
		}
	}
?>
