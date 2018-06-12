	  <?
foreach($menu_t AS $k=>$text){
	
	if (empty($text) && $k!=0) { unset($menu_t[$k]);  unset($menu['text'][$k]);	continue;	}

}
$menu_t = array_values($menu_t);
$menu['text'] = array_values($menu['text']);

if(!empty($_POST['lang'])){
$str = str_replace($_POST['lang'], "", $_SERVER['REQUEST_URI']);	
}else{
$str = str_replace("/", "", $_SERVER['REQUEST_URI']);	
}
$str = str_replace("/", "", $str);
$str = str_replace(".php", "", $str);
//echo "5000".$str.$_POST['lang'];
$key = array_search($str.'/',$menu_t);
//echo '<pre>'; print_r($menu_t); echo '</pre>'; 



//echo '<pre>'; print_r($_SERVER); echo '</pre>';
if($key>=0){			
	if($key==0){	$url['prev']=$menu_t[count($menu['text'])-1]; $url['next']=$menu_t[$key+1]; 
					$url['prev_text']=$menu['text'][count($menu['text'])-1]; $url['next_text']=$menu['text'][$key+1];	}
					
	elseif($key==count($menu_t)-1){	$url['prev']=$menu_t[$key-1]; $url['next']=$menu_t[0]; 
									$url['prev_text']=$menu['text'][$key-1]; $url['next_text']=$menu['text'][0];  	}
	else{		$url['prev']=$menu_t[$key-1]; $url['next']=$menu_t[$key+1];
				$url['prev_text']=$menu['text'][$key-1]; $url['next_text']=$menu['text'][$key+1];
			
	}

	}

		// if(!empty( $url['next'])): ?>
		  <div class="block-prev-next">
		<a class="block-prev" href="<? echo "/".$_POST['lang'].$url['prev']; /*if($url['prev']=='' ){}else{ }*/?>"></a>
		<a class="block-next" href="<? echo "/".$_POST['lang'].$url['next']; /*if($url['next']=='' ){}else{ }*/?>"></a>

		<div class="block-left">
		  <span><?=$url['prev_text']?></span>
		</div>

		<div class="block-right">
		  <span><?=$url['next_text']?></span>
		</div>
			</div>
			<?//endif;?>
