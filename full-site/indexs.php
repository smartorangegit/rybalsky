<?php  
$correct_link=$_SERVER['REQUEST_URI']; global $site;
$site_url='https://rybalsky.com.ua';


///***
$pos      = strripos($correct_link, '/admin/api');
if ($pos !== false) {
	
    include('admin/api/index.php');
	exit;
}
///***
function check($var)
 {
  $var=preg_replace("/[^a-z0-9\.]/i", "", $var);
  return $var;
 }
 
 function site($ur) { global $site;
  $file = 'templates/'.$ur.'.php';
   $_POST['site']= $site;
   return $file;
 }
 
 $correct_link=check($correct_link);
 if (!$_SERVER['REQUEST_URI']==$correct_link&!$_SERVER['REQUEST_URI']=='/')
 {
 header("HTTP/1.1 404 Not Found"); include("404.php");
 }
  define ('PRO', 1);
 
include_once("include/Mobile-Detect/Mobile_Detect.php");
$detect = new Mobile_Detect;

 function ErrorPage404()
    { 
        header($_SERVER['SERVER_PROTOCOL'].'HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
		 include("404.php");
        exit();
    }
 function urcount($ur){ 
 $ur = substr_count($ur,"/"); return $ur;
    }
	$site=''; $_POST['site']= $site;
	
if (isset($_GET['id']))
{	include_once("include/redirect.php");

	if($redirectUrl) {
		foreach($redirectUrl as $key=>$t){
			
		 if($_GET['id']==$key){
			
			header( 'Location: '.$site_url.'/'.$t, true, 301 );
			 exit;
		 }
		}
	}


$len=['en','ru']; $lang=array('text'=>'', 'site'=>''); 
		 if (in_array($_GET['id'], $len, true)) {	header('Location: /'.$_GET['id'].'/');	}
		foreach($len AS $l): 	
		//echo $_GET['id']; 
		// if($_GET['id']=='ru'){	header('Location: /'.$_GET['id'].'/');}
		 
		//$pos=strripos($_GET['id'],'/');
		//if ($pos === false) {	header('Location: /'.$_GET['id'].'/');	}
		
			$_GET['id'] = str_replace($l."/", "", $_GET['id'], $count);
			if($count==1): 	$_POST['lang']=$l."/";	$lang['site']='/';	endif;
		//	$_GET['id'] = str_replace($l, "", $_GET['id'], $count);
		//	if($count==1): 	$_POST['lang']=$l."/";	$lang['site']='/';	endif;
		endforeach;	
	
  $file='/';    $urls = explode("/", $_GET['id']);

    $n=0;
  foreach($urls as $key=>$k){
	  if(empty($k)){unset($urls[$key]); $n=1;	  } 
  }
      
  $_POST['urls']=$urls;

  $r[5]=substr($urls[0], 0,8);
  $r[6]=substr($urls[0], 0,9);
  $r[7]=substr($urls[0], 0,14);

  $r[0]=substr($urls[0], 0,4);
  $r[1]=substr($urls[1], 0,8);
  $r[2]=substr($urls[2], 0,5);
  $r[3]=substr($urls[3], 0,4);
 
	$_GET['id'] = str_replace(".php", "", $_GET['id']);
	$get=$_POST['lang'].$_GET['id']; 
	$u=array(1=>'odnokomnatnaya',2=>'dvuhkomnatnaya',3=>'trehkomnatnaya',4=>'chetirehkomnatnaya');
	
	
	/**
	 * Базові сторінки Комерційної нерухомості
	*/
	$comercPageList=array('commercial-lease','kommercheskaya');

    $COMERC=0;
 
		  if (in_array($urls[0],$comercPageList)) {
			  $r=$urls_k=array(); 
			
			foreach ($urls as $key=>$t ){
				if ($key==0){continue;}
				array_push ($urls_k, $t);
			}
			    $_POST['urls']=$urls_k;
									
		  $r[0]=substr($urls[1], 0,4);
		  $r[1]=substr($urls[2], 0,8);
		  $r[2]=substr($urls[3], 0,5);
		  $r[3]=substr($urls[4], 0,4);
			  $COMERC=1;
		  } 

   
if ($_GET['id']=='/nomobile')
  { 
	if ( !($detect->isMobile())){header("Location:/");}
  } 
  
       
         // elseif (count($urls)==1 AND  $r[0]=='plan')
		 elseif (count($urls)==1 AND  $r[5]=='kvartira' AND iconv_strlen($urls[0],'UTF-8')==8)
      {  	
			
	 $site='/'.$lang['site']; $file=site($ur='plan');  
	if(!$n){  header("Location:/$get/");}  

      }
	  
	  	 elseif (count($urls)==1 AND  $r[7]=='kommercheskaya')  {  	
	$COMERC=1;
	 $site='/'.$lang['site']; $file=site($ur='plan');  
	if(!$n){  header("Location:/$get/");}  
      }
	    elseif (count($urls)==2 AND   $r[0]=='plan' AND $r[1]=='sections')
      {		 
	  $site='/'.$lang['site']; $file=site($ur=$r[1]);
	  header("Location:/".$_POST['lang']."kvartira0/");
      }
	    elseif ((count($urls)==3 OR (count($urls)==4 AND $COMERC))  AND  $r[0]=='plan' AND $r[1]=='sections' AND $r[2]=='floor')
      {	
	  $site='/'.$lang['site']; $file=site($ur=$r[2]);
	 	if(!$n){  header("Location:/$get/");}  
      }
		elseif ((count($urls)==4 OR (count($urls)==5 AND $COMERC)) AND $r[0]=='plan' AND $r[1]=='sections' AND $r[2]=='floor' AND ($r[3]=='flat'))
		  {		 
		  $site='/'.$lang['site']; $file=site($ur=$r[3]);
			if(!$n){  header("Location:/$get/");}  		
		  }
		  
 elseif(file_exists($_GET['id'].".php") AND $_GET['id']!='index')
  { 
		header("Location:/".$_POST['lang'].$_GET['id']."/");
   $site=$lang['site'];   $_POST['site']= $site;       $file = $_GET['id'].'.php';

  }
   elseif(file_exists(str_replace("/", "", $_GET['id']).".php") AND str_replace("/", "", $_GET['id'])!='index')
  { 
  
   $site=$lang['site'];   $_POST['site']= $site;       $file = str_replace("/", "", $_GET['id']).'.php';

  }
  elseif(	$_POST['lang']=='en/' AND  $_GET['id']==''OR ($_POST['lang']=='ru/' AND  $_GET['id']=='') OR $_GET['id']=='en' OR $_GET['id']=='ru'){ 
	$site='/'.$lang['site'];   $_POST['site']= $site;  $file = "index.php";  
  }
  
  elseif(count($urls)==2 AND $urls[0]=='kvartira' AND  array_search($urls[1], $u)){

	  $site=$lang['site'];   $_POST['site']= $site;       $file = 'kvartira-list.php';
	$Rooms=array_keys($u, $urls[1]);
	  if(!$n){  header("Location:/$get/");}   
	  
  }
  
  else
  { include_once ("include/config.php"); /*Соединяемся с базой*/	
//$langs=str_replace("/", "", $_POST['lang']);
if($_POST['lang']){$langs=str_replace("/", "", $_POST['lang']);}else{$langs='ua';}
 $result = $db->prepare("SELECT urls FROM news WHERE urls='".$urls[0]."' AND lang='$langs' ");
    $result->execute();
	$result->store_result();	$myrow=$result->num_rows;

	if($myrow>0){ 
	 $site='/'.$lang['site'];   $_POST['site']= $site;  $file = "news_list.php";   $_GET['URLS']=$urls[0];	
	$result = $db->prepare("SELECT urls, lang FROM news WHERE urls='".$urls[0]."'  ");
    $result->execute();
	$result->bind_result($s['urls'],$s['lang']);
	
    while ($result->fetch()) {       $_GET['URLS_LG'][$s['lang']]=$s['urls'];    }
	
		}else{
		ErrorPage404();
		global $site;	$site='/'.$lang['site'];   $_POST['site']= $site;
		}
			
		if(!$n){  header("Location:/$get/");}  

  }
}

/*

	function LastModified($filename) { Global $result_;
	header("Cache-Control: public");
	header("Expires: " . date("r", time()+10800));
	
	
	
	glob_recursive('include');
	glob_recursive('templates');
		function Modified($files){
			$b=0;
			$last_modified_time = filemtime($files);
			if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){ $b=1; }
		
			return $b;
			
		}
			
	/*
	$last_modified_time = filemtime($filename);

	if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){
	    header('HTTP/1.1 304 Not Modified');
		$b=1;
	    die; 
	}
	*//*

		foreach ($result_ as $files) {
			
		$b=$b+Modified($files);
		
		}
	
	if ($b>0) {
		header('HTTP/1.1 304 Not Modified');
					die;
	} else {
		
			header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');	
	}
	echo $b;
	
	}
	*/
	/*
	
	Global $result_;
	$result_=array();
	 function glob_recursive($dir, $mask){ Global $result_;
        foreach(glob($dir.'/*') as $filename){
                if(strtolower(substr($filename, strlen($filename)-strlen($mask), strlen($mask)))==strtolower($mask))  $result_[]=$filename;
                if(is_dir($filename)) glob_recursive($filename, $mask);
        }
	}

	
	
	
	header("Cache-Control: public");
	header("Expires: " . date("r", time()+10800));
	glob_recursive('include');
	glob_recursive('templates');
	


	$b=0; 
	
	$last_modified_time = filemtime($file);
			if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){ 
			$b=1; 
			}
	
	foreach ($result_ as $files) {
			$last_modified_time = filemtime($files);
			if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){ 
			$b=1; 
			}
	}	
		 
	if ($b) {
		header('HTTP/1.1 304 Not Modified');
	
					die;
	} else {
		
			header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');	
			//echo '<pre>'; print_r($b); echo '</pre>'; 
	}		
		
	 */
//LastModified($file);


	header("Cache-Control: public");
	header("Expires: " . date("r", time()+10800));
	$last_modified_time = filemtime($file); 
			if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){ 
			header('HTTP/1.1 304 Not Modified');
	
					die;
			}
			header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');	
//Роутинг
if ($COMERC) {

	  define('PLAN', $urls[0].'/plan');	
	  define('TYP_COMERC', $urls[0]);	
} else {  define('PLAN', 'plan'); }


include($file);

?>
