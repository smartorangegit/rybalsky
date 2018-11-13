<?php session_start();

function rez($id){ 	GLOBAL $floo, $sec,$plan,$db, $imgs,$site, $mes, $sleh;
/*Мова*/ include_once('include/lang.php');
 include('include/config.php');
 include_once("include/Mobile-Detect/Mobile_Detect.php");
 GLOBAL $detect;
 $detect = new Mobile_Detect;
 $plan= $plan_u = str_replace("plan", "", $_POST['urls'][0]);
 $post_plan=$_POST['urls'][0];

 GLOBAL $massPopUp;
 GLOBAL $massUris;

 $OPTIONS=array('MINFLOOR'=>2,'MAXFLOOR'=>10, 'MINFLOOR_0'=>1,'MAXFLOOR_0'=>10);

 if (PLAN=='plan') {
 define('TABLE','apartments',TRUE);
 define('HOME','kvartira',TRUE);
 define('TABLE_LEVEL','apartments_level',TRUE);
 define('TEXT_FLOOR',$mes['pl-mes14'],TRUE);
 define('TEXT_FLOOR1',$mes['pl-mes16'],TRUE);
 define('TEXT_FLOOR2',$mes['pl-mes19'],TRUE);
 define('COMERC',0,TRUE);

 } else {
 define('TABLE','apartments_comerc',TRUE);
 define('HOME','commercial-lease',TRUE);
 define('TABLE_LEVEL','apartments_level_comerc',TRUE);
 define('TEXT_FLOOR',$mes['pl-mes28'],TRUE);
 define('TEXT_FLOOR1',$mes['pl-mes27'],TRUE);
 define('TEXT_FLOOR2',$mes['pl-mes27'],TRUE);
 define('COMERC',1,TRUE);

 $OPTIONS=array('MINFLOOR'=>-1,'MAXFLOOR'=>1, 'MINFLOOR_0'=>-1,'MAXFLOOR_0'=>1);
 }

  $sleh='/';
  
 if(empty($plan)){$plan=3;}
  
 $sec = str_replace("sections", "", $_POST['urls'][1]);
    if(empty($sec)){$sec=1;}

$floor[0]=str_replace("floor", "", $_POST['urls'][2]);
$floor[1]=1;

	if($floor[0]>$OPTIONS['MINFLOOR_0']){$floor[1]=$floor[0]-1;}else{$floor[0]= $OPTIONS['MINFLOOR'];}
	if($floor[0]<$OPTIONS['MAXFLOOR_0']){$floor[2]=$floor[0]+1;}else{$floor[2]=$OPTIONS['MAXFLOOR'];}

	if($floor[0]==0){$floor[0]--;}
	if($floor[1]==0){$floor[1]--;}
	if($floor[2]==0){$floor[2]++;}

$site='/';

$floo=$floor[0];

if(!empty($_POST['urls'][3])){
$flat=str_replace("flat", "", $_POST['urls'][3]);

 $flat_number=$flat; $flat_level=1;
 $flat_mas = explode("_", $flat);
 $flat=$flat_mas[0];
 $flat_mas = explode(".", $flat_mas[1]);
 $flat_id=$flat_mas[0];		 $flat_level_p=$flat_mas[1];
 if(empty($flat_level_p)){$flat_level_p=0;}
}

	/*ОБЕРІТЬ СЕКЦІЮ SVG*/
	function ober_section(){ global $db, $floo, $sec, $plan,$sleh, $mes;

		if($floo>1){$pov1="OR (`floor`=$floo-1 AND `level`=2)OR (`floor`=$floo-2 AND `level`=3) OR (`floor`=$floo-1 AND `level`=3)";}else{$pov1='';}
	 $result = $db->prepare("SELECT sec   FROM ".TABLE." WHERE buld=$plan AND visible=1 AND (`floor`=$floo $pov1) GROUP BY sec");
	   $result->execute(); $div=[];
		$result->bind_result($sk['sec']); while($result->fetch()){
		$div[$sk['sec']]=$sk['sec']; }
	 $result->close();

			/*Для блоку оберіть секцію*/
		for($i=1; $i<7; $i++ ){ $SECTSION_CLCAS[$i]='st0'; $SECTSION_CLCAS2[$i]='';
		if($sec==$i):$SECTSION_CLCAS[$i]='st1'; $SECTSION_CLCAS2[$i]='st0'; endif;
		$SECTSION[$i]='/'.$_POST['lang'].PLAN.$plan.'/sections'.$i.'/floor'.$floo.$sleh;
		}

		if (PLAN!='plan'){

			require 'img/doma/dom'.$plan.'/plan.php';

			return;
	  }
	  if($plan == 5) {
		include_once('img/doma/mini/miniPlan5.php');
	  } else {
		include_once('img/doma/mini/miniPlan3_9.php');
	  }
	}

	/*План SVG*/
	function svg_plan($svg){ GLOBAL $floo, $sec,$plan,$sleh;

		$files = scandir("img/doma/dom$plan/");
		foreach($files  as $file){

		$pos = str_replace('poverx', '', $file);

	$t1=explode ('_',$pos);
		if ($t1>1) {	if (in_array($floo, $t1)) {$img=$file; }

		} else{
			if($pos==$floo){ $img=$file; } else {}
		}

		}

	$rr='img/doma/dom'.$plan.'/'.$img.'/'.$svg.'.php';

		return $rr;
	}

	function mobiledet(){ GLOBAL $detect, $site,$mes,$sleh, $sec, $plan;
		if ( $detect->isMobile() && $plan != 'kommercheskaya' && $plan != 'kvartira') {?>
	<div class="portrait" style="display:none">
		<div class="port-message">
	<?//Будь-ласка, поверніть Ваш пристрій для коректного відображення вмісту розділу.?>
	<?=$mes['pl-mes15']?>
	<img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/block-portr.png">
	</div>
	</div>

	<?}
	
	}

	function topHeaderAjaxAdd(){

		 /*Меню*/ include_once('include/top-menu.php'); 

	}
	
	function footerAdd(){ 	GLOBAL $mes;?>
		  <footer>
			<div class="foot-wrap">
			  <div class="allright"><p><?=$mes['v01']?></p></div>
			  <div class="web">
			   <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png"  width="55px" /></a>
			  </div>
			  <a class="footer__jurdoc_link" href="/<?=$_POST['lang']?>documents/"><?=$mes['jur-mes-menu']?></a>
			  <span><?=$mes['v02']?></span>
			</div>
		  </footer>
	<?}
	
	
	if (PLAN=='plan')
	{
		switch($id)
		{			
			case 'plan':
				/**План будинку*/
				include('page-include/kvartira-plan.php');			
			break;
			
			case 'floor':
				/**Поверхи*/		
				include('page-include/kvartira-floor.php');		
			break;
			
			case 'flat':
				/**Квартири*/		
				include('page-include/kvartira-flat.php');
			break;
			
			default:
			break;
		}		
	}
	else
	{
		switch($id)
		{			
			case 'plan':
				/**План будинку Комерційна нерухомість*/
				//include('templates/plan_kommercheskaya.php');		
			break;
			
			case 'floor':
				/**Поверхи Комерційна нерухомість*/		
				include('page-include/commercial-floor.php');		
			break;
			
			case 'flat':
				/**Приміщення Комерційна нерухомість*/		
				include('page-include/commercial-flat.php');
			break;
			
			default:
			break;
		}		
	}	

			if (0){
				if($id=='flat')
				{
					/**Квартири*/		
					include('page-include/kvartira-flat.php');
				}
				elseif($id=='floor') 
				{
					/**Поверхи*/
					include('page-include/kvartira-floor.php');
				}
				elseif($id=='plan' AND PLAN=='plan')
				{
					/**План будинку*/
					include('page-include/kvartira-plan.php');
				}	
				elseif($id=='plan' AND PLAN!='plan')
				{

					/**План будинку Комерційна нерухомысть*/	
					//include('templates/plan_kommercheskaya.php');
				}

			}
}



?>
