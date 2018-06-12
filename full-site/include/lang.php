<?session_start();?>
<?$filename='include/language/'.(substr($_POST['lang'], 0,2)).".ini"; global 	 $mes;

 if ($_GET)
 {
	 $utm=array(
		'utm_source' ,
		'utm_medium',
		'utm_campaign' ,
		'utm_term', 
		'utm_content' 
		);
	 foreach($_GET as $key=>$t)
	 {
		 
		$metka= array_search($key,$utm);
		 if ($metka!==FALSE)
		 {
			 $_SESSION[$utm[$metka]]=$t;
		 }
	 }
 }
 
	include_once("als-function.php");
	//$b=LastModifiedAdd();
	if (file_exists($filename)) { //echo 111; echo $_POST['lang'];
	 $mes = parse_ini_file($filename);
	 }
	 else{
	 $mes = parse_ini_file('language/ua.ini');
	}
	if(strripos($_SERVER['REQUEST_URI'], "//")!== false){	 header("Location:/");}
	//if(strripos($_SERVER['REQUEST_URI'], ".php")!== false AND $_SERVER['REQUEST_URI']!='/include/application.php'){	 header("Location:/404/");}

	GLOBAL $http; $http='https://rybalsky.com.ua';

	
	
	
	
	
	

/*	header("Cache-Control: public");
	header("Expires: " . date("r", time()+10800));
	$filename = 'css/style.css';
	$last_modified_time = filemtime($filename);
	if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){
	    header('HTTP/1.1 304 Not Modified');
	    die; ////* убили всё, что ниже 
	}
	header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_modified_time).' GMT');
	
	
	
	//echo '<pre>'; print_r($_SERVER); echo '</pre>';
	 $result = array(); 
   function glob_recursive($dir, $mask){ Global $result;
        foreach(glob($dir.'/*') as $filename){
                if(strtolower(substr($filename, strlen($filename)-strlen($mask), strlen($mask)))==strtolower($mask))  $result[]=$filename;////* echo $filename."<br>";
                if(is_dir($filename)) glob_recursive($filename, $mask);
        }
	}*/
//glob_recursive('/')	;
	//echo '<pre>'; print_r($result); echo '</pre>'; 
	
	?>
