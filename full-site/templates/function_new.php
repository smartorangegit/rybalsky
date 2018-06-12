<? session_start();



function rez($id){ 	GLOBAL $floo, $sec,$plan,$db, $imgs,$site, $mes, $sleh;
/*Мова*/ include_once('include/lang.php');
/*Google Tag Manager*/ include_once('include/gtm2.php');
 include('include/config.php');
 include_once("include/Mobile-Detect/Mobile_Detect.php");
 GLOBAL $detect;
 $detect = new Mobile_Detect;
  $plan_u = str_replace("plan", "", $_POST['urls'][0]);
  $plan=$plan_u;
  $sleh='/';
  if(empty($plan)){$plan=3;}
 // if($plan_u==2){$plan=3;}elseif{$plan=3;}
 $sec = str_replace("sections", "", $_POST['urls'][1]);
    if(empty($sec)){$sec=1;}

$floor[0]=str_replace("floor", "", $_POST['urls'][2]);
$floor[1]=1;
if($floor[0]>1){$floor[1]=$floor[0]-1;}else{$floor[0]=2;}
if($floor[0]<10){$floor[2]=$floor[0]+1;}else{$floor[2]=10;}
//$site=$_POST['site'];
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

//echo '<pre>'; print_r($_POST['urls'][3]); echo '</pre>';

/*ОБЕРІТЬ СЕКЦІЮ SVG*/
function ober_section(){ global $db, $floo, $sec, $plan,$sleh;


    if($floo>1){$pov1="OR (`floor`=$floo-1 AND `level`=2)OR (`floor`=$floo-2 AND `level`=3) OR (`floor`=$floo-1 AND `level`=3)";}else{$pov1='';}
 $result = $db->prepare("SELECT sec   FROM `apartments` WHERE buld=$plan AND (`floor`=$floo $pov1) GROUP BY sec");
   $result->execute(); $div=[];
    $result->bind_result($sk['sec']); while($result->fetch()){
 	$div[$sk['sec']]=$sk['sec']; }
 $result->close();

	  	/*Для блоку оберіть секцію*/
	for($i=1; $i<7; $i++ ){ $SECTSION_CLCAS[$i]='st0'; $SECTSION_CLCAS2[$i]='';
	if($sec==$i):$SECTSION_CLCAS[$i]='st1'; $SECTSION_CLCAS2[$i]='st0'; endif;
	$SECTSION[$i]='/'.$_POST['lang'].'plan'.$plan.'/sections'.$i.'/floor'.$floo.$sleh;
	}
?>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 188 211" style="enable-background:new 0 0 188 211;" xml:space="preserve">
<style type="text/css">
	.st0{fill: transparent;stroke:#FFFFFF;stroke-miterlimit:10;}
	.st1{fill:#0035AA;}
	.st2{fill:#FFFFFF;}
	.st3{font-family:"PFDinTextUniversal"; fill:#FFFFFF;}
	.st4{font-size:18px; }
</style>
<image width="870" height="950.5" preserveAspectRatio="none" style="image-rendering:optimizeQuality" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="../img/choice.jpg" id="image3561" x="-10" y="-15"></image>
<a class="op_ajax" href="<?=$SECTSION[2]?>" <?if(empty($div[2])){ echo"style='display:none'";}?> >
<polygon class="<?=$SECTSION_CLCAS[2]?>" points="58.1,25 43.9,25 43.8,25 23.1,25 23.1,45.7 23.1,60 23.1,97 43.9,97 43.9,45.7 58.1,45.7 "/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 28.2988 62.6786)" class="<?=$SECTSION_CLCAS2[2]?> st3 st4">2</text>
	</g>
</g>
</a>
<a class="op_ajax" href="<?=$SECTSION[4]?>"  <?if(empty($div[4])){ echo"style='display:none'";}?>>
<polygon class="<?=$SECTSION_CLCAS[4]?>" points="138.9,25 153.1,25 153.2,25 173.9,25 173.9,45.7 173.9,60 173.9,97 153.1,97 153.1,45.7 138.9,45.7 "/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 158.632 65.012)" class="<?=$SECTSION_CLCAS2[4]?> st3 st4">4</text>
	</g>
</g>
</a>
<a class="op_ajax" href="<?=$SECTSION[3]?>" <?if(empty($div[3])){ echo"style='display:none'";}?>>
<rect x="62.4" y="24.9" class="<?=$SECTSION_CLCAS[3]?>" width="72" height="20.8"/>
<text transform="matrix(1 0 0 1 93.1252 41.4326)" class="<?=$SECTSION_CLCAS2[3]?> st3 st4">3</text>
</a>
<a class="op_ajax" href="<?=$SECTSION[1]?>"  <?if(empty($div[1])){ echo"style='display:none'";}?>>
<polygon class="<?=$SECTSION_CLCAS[1]?>" points="58.1,174.7 43.9,174.7 43.8,174.7 23.1,174.7 23.1,154 23.1,139.7 23.1,102.7 43.9,102.7 43.9,154
	58.1,154 "/>
<g>
	<text transform="matrix(1 0 0 1 28.2985 138.6787)" class="<?=$SECTSION_CLCAS2[1]?> st3 st4">1</text>
</g>
	</a>
<a class="op_ajax" href="<?=$SECTSION[5]?>"  <?if(empty($div[5])){ echo"style='display:none'";}?>>
<polygon class="<?=$SECTSION_CLCAS[5]?>" points="138.9,174.7 153.1,174.7 153.2,174.7 173.9,174.7 173.9,154 173.9,139.7 173.9,102.7 153.1,102.7
	153.1,154 138.9,154 "/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 158.632 138.6787)" class="<?=$SECTSION_CLCAS2[5]?> st3 st4">5</text>
	</g>
</g>
	</a>
<a class="op_ajax" href="<?=$SECTSION[6]?>" <?if(empty($div[6])){ echo"style='display:none'";}?>>
<rect x="62.4" y="154" class="<?=$SECTSION_CLCAS[6]?>" width="72" height="20.8"/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 93.1248 170.6787)" class="<?=$SECTSION_CLCAS2[6]?> st3 st4">6</text>
	</g>
</g>
</a>
</svg><?
}

/*План SVG*/
function svg_plan($svg){ GLOBAL $floo, $sec,$plan,$sleh;
	$files = scandir("img/doma/dom$plan/");
foreach($files  as $file){
$pos = strpos($file, "$floo");
if($pos===false){}else{ $img=$file; }
}
//echo '<pre>'; print_r($files); echo '</pre>';

$rr='img/doma/dom'.$plan.'/'.$img.'/'.$svg.'.php';
	return $rr;
}


function mobiledet(){ GLOBAL $detect, $site,$mes,$sleh;
	if ( $detect->isMobile() ) {?>
<div class="portrait" style="display:none">
    <div class="port-message">
<?//Будь-ласка, поверніть Ваш пристрій для коректного відображення вмісту розділу.?>
<?=$mes['pl-mes15']?>
<img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/block-portr.png">
</div>
</div>

<?}
?><input id="len" value="<?=$_POST['lang']?>" hidden><?
}



/**Квартири*/
if($id=='flat'){  /*Заглушка для мобільних*/mobiledet();
GLOBAL $pdf,$sleh;


//echo $flat_level_p;

$poverx=$floor[0]-$flat_level_p;
 //echo '<pre>'; print_r($urlsss); echo '</pre>';

 $result = $db->prepare("SELECT floor, 	sec, 	visible ,	number, 	all_room ,	life_room, img, room1, 	room2, 	room3, 	room4 ,	room5,
 room6, 	room7, 	room8, 	room9 ,	room10, room11,room12,room13,room14,room15,room16,room17,room18,room19,
 level,id FROM `apartments` WHERE buld=$plan AND `floor`=$floor[0]-$flat_level_p AND `sec`=$sec AND `number`= '$flat'");
   $result->execute();
   $result->store_result();
   if ($result->num_rows == 0){ $d=$_POST['lang'].$_POST['urls'][0]."/".$_POST['urls'][1]."/".$_POST['urls'][2];
    header("Location:".$d."");  }

    $result->bind_result($s['floor'],$s['sec'],$s['visible'],$s['number'],$s['all_room'],$s['life_room'],$s['img'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
	$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
	$s['room16'],$s['room17'],$s['room18'],$s['room19'],$s['level'],$s['id']);
	$result->fetch();
 $result->close();
 $level=$s['level'];

//echo  $s['floor'];


  $level_floor=$s['floor'];
	//foreach($s as $k){
		//	$rez=$rez.$k;
		//}
	//echo $con;
//$my_id=$s['id'];

	/*$mas1=['Загальна','Житлова',
		'Передпокій','Кухня','Вітальня','Спальня','Спальня 2','Спальня 3','Тераса','Санвузол','Ванна','Лоджія','Балкон','Балкон 2','Гардеробна','Гардеробна 2','Кімната','Кухня-вітальня','Комора','Гардеробна 3','Сходи',
'Рівень 2','Передпокій','Санвузол','Спальня 1','Спальня 2','Ванна','	Гардеробная','	Спальня','	Тераса','	Лоджия','	Спальня 3','	Вітальня','	Кухня','','','','','','','','',
'Рівень 3','Сходи','Тераса','Хол','','','','','','',''];*/

for($m=0; $m<53; $m++): $mas1[$m]=$mes['pl-mes'][$m];		endfor;

	$mas2=[$s['all_room'],$s['life_room'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
	$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
	$s['room16'],$s['room17'],$s['room18'],$s['room19']];
$all_room=$s['all_room'];
$life_room=$s['life_room'];
	if($s['level']>1){
	 $result = $db->prepare("SELECT room1, 	room2, 	room3, 	room4 ,	room5,room6,room7,room8,room9,room10,
	 room11,room12,room13,room14,room15,room16,room17,room18,room19,room20,
	 room21,room22,room23,room24,room25,room26,room27,room28,room29,room30
	 FROM `apartments_level` WHERE `id_flat`=$s[id]");
   $result->execute();
    $result->bind_result($sl['room1'],$sl['room2'],$sl['room3'],$sl['room4'],$sl['room5'],$sl['room6'],$sl['room7'],$sl['room8'],$sl['room9'],$sl['room10'],
						$sl['room11'],$sl['room12'],$sl['room13'],$sl['room14'],$sl['room15'],$sl['room16'],$sl['room17'],$sl['room18'],$sl['room19'],$sl['room20'],
						$sl['room21'],$sl['room22'],$sl['room23'],$sl['room24'],$sl['room25'],$sl['room26'],$sl['room27'],$sl['room28'],$sl['room29'],$sl['room30']
);
	$result->fetch();
 $result->close(); 	$i=count($mas2); /*для 2-го рівня*/ $mas2[$i]='<br>';

		foreach($sl as $key=>$k){ $i++;
		//для 3-го рівня з 21 стовпчика
	if($key=='room21' AND $s['level']>2){$mas2[$i]='<br>'; $i++;}
			$mas2[$i]=$k;
		}

	}

$result = $db->prepare("SELECT img, sort   FROM `section` WHERE `sec`=$sec AND `floor`=$poverx ");
   $result->execute();     $result->bind_result($si['img'],$si['sort']);	$result->fetch(); 	$result->close();

  // $SORT=explode(",", $si['sort']); //Масив сортування

        if($floor[0]>1){$pov1="OR (`floor`=($floor[0]-$flat_level_p)-1 AND `level`=2)OR (`floor`=($floor[0]-$flat_level_p)-2 AND `level`=3) OR (`floor`=($floor[0]-$flat_level_p)-1 AND `level`=3)";}else{$pov1='';}

 $rez=[]; $REZULT=[]; $n=0; $REZULT_NOT=[];


$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room,life_room, id   FROM `apartments`
WHERE buld=$plan AND `sec`=$sec AND (`floor`=$floor[0]-$flat_level_p $pov1) ORDER BY sorts ASC");
   $result->execute();
    $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['id']); while($result->fetch()){   $i=0;
		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		//$REZULT_NOT[$n]=$rez;		//$REZULT[$SORT[$n]-1]=$rez;
		$REZULT[$n]=$rez;		$n++;
		}
 $result->close();


//echo $si['img'];
//echo '<pre>'; print_r($SORT); echo '</pre>';
//echo '<pre>'; print_r($REZULT); echo '</pre>';
//echo '<pre>'; print_r($REZULT_NOT); echo '</pre>';
//Для SVG
 foreach($REZULT as $key=>$s){
	 if($flat_level_p>0){$t=".".$flat_level_p;}else{$t='';}
	$URLP[$key]='/'.$_POST['lang'].'plan'.$plan.'/sections'.$sec.'/floor'.($s['floor']+$flat_level_p).'/flat'.$s['number'].'_'.$s['id'].$t.$sleh;
	$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
		$clas[$key]=" ".$clas_js[$key];
		if($s['id']==$flat_id){$clas[$key].=' st-on';}
		//if($s['number']==$flat){$clas[$key].=' st-on';}
		$clas_css[$key]="clas".$sec."_".$s['floor']."_".$s['id'];

//підказка 		//$URLP[$key].='--'.$s['sort']."-".($key+1);
	}
	//echo '<pre>'; print_r($REZULT); echo '</pre>';
	//echo $pov1;
	$pdf['img']=$s['img'];

?>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
 <?php /*Форма бронювання*/ include_once('include/reservations.php'); ?>
 <?php /*Форма сохранения pdf*/ include_once('include/save.php'); ?>
 	<!--start-->
            <div class="header-bottom">
              <div class="compass clearfix">
                <img <?AltImgAdd($mes['pl-mes1-title'])?> src="<?=$site?>img/compas<?echo"-".(substr($_POST['lang'], 0, 2));?>.png" >
                <?//<span>сторони</br>світу</span>*/?>
				<?=$mes['pl-mes7']?>
              </div>

              <div class="ch-left">
                <div class="ch-house">
                  <a class="op_ajax"  href="/<?=$_POST['lang']?>plan<?=$sleh?>"><?=$mes['pl-mes2']?></a>
                </div>
                <div class="ch-level">
                  <div class="ch-updown">
                   <a class="up op_ajax" href="/<?=$_POST['lang']?>plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[2].$sleh?>"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-up.png"></a>
                    <a class="down op_ajax" href="/<?=$_POST['lang']?>plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[1].$sleh?>"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-down.png" ></a>

                </div>

                  <span class="num-floor"><?=$floor[0]?></span><span class="num-title"><?=$mes['pl-mes6']?></span>

                </div>
                <a href="/">
                  <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  /></div>
                </a>

              </div>

              <div class="ch2-center">
                <div class="appart-plan">
                  <span class="appart-name"><?=$mes['pl-mes14']?> <?= $flat?><?if($level>1){$mb='<span style="font-size: 20px;"> (рівнів-'.$level.', пов. '.$level_floor.'-'.($level_floor+$level-1).')</span>'; echo $mb;}else{$mb='';}?></span>
                  <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes14'])?> onclick="$('#forms_floor').css('opacity','1').css('left','0');" src="<?=$site?>img/houses/house<?=$plan?>_png_white/<?=$s['img']?><?//kvart1?>.png">

				</div>


                <div class="ch-center-bot">
                  <div class="ch-table">
                    <h4><?=$mes['pl-mes17']?></h4>
					<? $ik=0;
					/*Кількість елементів в блоці Площа м.кв*/
foreach($mas2 as $k=>$n){if(!empty($n)){ $ik++;  }}
if($ik<=14){$count_d=4;}elseif($ik>14 AND $ik<=17){$count_d=5;}else{$count_d=6;}
					$print='';  $print2=''; $i=0; $m=1;

				//echo '<pre>'; print_r($mas1); echo '</pre>';
					foreach($mas2 as $k=>$n){

						if(!empty($n)){

						if($i==0):    $print.= '<div class="table-item'.$m.'"><ul>';  $print2.= '<div class="table-item'.($m+1).'"><ul>'; endif;
						if($level>1 AND $k==0):  $print.='<li>'.$mes['pl-mes18'].' 1</li>'; $print2.='<li><br></li>'; $i++; endif;

						$print.='<li>'.$mas1[$k].'</li>';   $print2.='<li>'.$n.'</li>';

					$kk=0;
							if($i==$count_d){$i=0; $m=$m+2;  $print.= '</ul></div>'.$print2.'</ul></div>';  $print2=''; $kk=1;  }else{$i++;}
						}
					}

					if($kk==0){  $print.= '</ul></div>'.$print2.'</ul></div>';  }
					echo $print; //вивести на екран

$count_d=ceil($ik/3)-1;
					$print_pdf='';  $print_pdf2=''; $i=0; $m=1;
					/*foreach($mas2 as $k=>$n){
						if(!empty($n)){

						if($i==0):    $print_pdf.= '<div class="table-item'.$m.'"><ul>';  $print_pdf2.= '<div class="table-item'.($m+1).'"><ul>'; endif;
						if($s['level']>1 AND $k==0):  $print_pdf.='<li>Рівень 1</li>'; $print_pdf2.='<li><br></li>'; $i++; endif;

						$print_pdf.='<li>'.$mas1[$k].'</li>';   $print_pdf2.='<li>'.$n.'</li>';

					$kk=0;
							if($i==$count_d){$i=0; $m=$m+2;  $print_pdf.= '</ul></div>'.$print_pdf2.'</ul></div>';  $print_pdf2=''; $kk=1;  }else{$i++;}
						}
					}
					if($kk==0){  $print_pdf.= '</ul></div>'.$print_pdf2.'</ul></div>';  }*/

					foreach($mas2 as $k=>$n){
						if(!empty($n)){ $st='';
						if($k==0):
								if($level==1):	$st='style="padding-top:30px;"'; else: $st=''; endif;
						$print_pdf.= '<div class="table-item'.$m.'" '.$st.'><ul>';  $print_pdf2.= '<div class="table-item'.($m+1).'" '.$st.'><ul>'; endif;
						if($level>1 AND $k==0):  $print_pdf.='<li class="table-item1-li">'.$mes['pl-mes18'].'</li>'; $print_pdf2.='<li class="table-item1-li">1</li>'; $i++;
						 endif;

						$pos = strripos($mas1[$k], $mes['pl-mes18']);

if ($pos === false) {$raz=''; $zn=$mas1[$k];}else{$raz=' class="table-item1-li"'; $zn=$mes['pl-mes18']; $n=substr($mas1[$k], -1); }

					if($k>1){						$print_pdf.='<li'.$raz.'>'.$zn.'</li>';   $print_pdf2.='<li'.$raz.'>'.$n.'</li>';
					}
					$kk=0;
						}
					}
					if($kk==0){  $print_pdf.= '</ul></div>'.$print_pdf2.'</ul></div>';  }
					$pdf['print']=$print_pdf;

				?>

                  </div>
                  <div class="ch-tab-right">
                    <div class="ch-sec">
                      <p class="ch-sec-num"><?=$sec?></p>
                      <p><?=$mes['pl-mes4']?></p>
					  <p style="font-size: 18px;"><?=$mes['pl-mes3']?> <?=$plan?></p>

                    </div>

                      <div class="ch-print-save">

                      <a  class="save" onclick="$('#id_save').css('opacity','1').css('left','0');" id="id_save_button" ><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes9'])?> src="<?=$site?>img/pdf.png" alt="print"> <?=$mes['pl-mes9']?><?//Зберегти PDF?></a>


                    </div>

                  </div>

                </div>

              </div>

              <div class="ch2-right">
                <div class="ch-link">
                  <p>
                <?/*    <a target="_blank" class="save" href="<?=$site?>pdf/inv.php" ><img <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/pdf.png" alt="print"> <?=$mes['pl-mes9']?>Зберегти PDF</a>*/?>

                <a onclick="$('#id_reservations').css('opacity','1').css('left','0');" id="id_reservations_button" ><?=$mes['pl-mes8']?></a>
                <?
                $imgs='<span class="span-img-popup" style="text-align: center;">'.$mes['pl-mes14'].' '.$flat.' '.$mb.'</span> <div class="open-imp-popup"><img <style="height:100%; max-width: 100%; padding: 40px"  src="'.$site.'img/houses/house'.$plan.'BIG/'.$s['img'].'.png" alt="'.$mes['pl-mes14'].'"></div>';
                ?>
                  </p>
<script>
</script>

                  <!-- <p> -->
                  <!--  <a class="print" onclick="window.print();" href="#"><img <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/print.png" alt="">Друк</a> -->
				  <!-- <a class="print"  target="_blank" href="<?=$site?>pdf/print.php" ><img <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/print.png" alt="print"> <?=$mes['pl-mes10']?><?//Друк?></a> -->
                  <!-- </p> -->
                </div>

<?  $_SESSION['title']=$mes['pl-mes3']."-3 ".$mes['pl-mes6']."-$s[floor] ".$mes['pl-mes4']."-".$sec." ".$mes['pl-mes14']."-$s[number]";

ob_start();
include(svg_plan($svg=$si['img']));
$svg_min_plan= ob_get_clean();


$st_open='fill: #959dbd; opacity: 1;'; //стиль для заливки вибраної квартири
$st_close='fill: #ebecf1; opacity: 1;'; //стиль для заливки всіх квартир

foreach($REZULT as $key=>$s){

	$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
		$clas[$key]=" ".$clas_js[$key];

		$zamena='" style="'.$st_close;
		if($s['id']==$flat_id){$clas[$key].=' st-on';  $zamena='" style="'.$st_open; }
$svg_min_plan = str_replace($clas[$key], $zamena, $svg_min_plan);
	}

$search='class="st2"';
//$st_style=array(2=>' style="fill: #BFBFBF;" ', 3=>' style="fill: #BFBFBF;" ', 4=>' style="fill: #BFBFBF;" '); //Стиль для стін з класами st2 st3 st4
$st_style=array(2=>' style="fill: #000;" ', 3=>' style="fill: #000;" ', 4=>' style="fill: #000;" ');
foreach($st_style as $key=>$style){
	$search='class="st'.$key.'"';
	$svg_min_plan = str_replace($search, $style, $svg_min_plan);

		}

/*Для блоку оберіть секцію*/
$st0='style="stroke: #FFFFFF;  stroke-miterlimit: 10; font-size: 18px;"';
$st1='style="stroke: #074295;  stroke-miterlimit: 10; font-size: 18px;"';
$st2='style="fill: #959dbd;  stroke: #074295;  stroke-miterlimit: 10;"';
$st3='style="fill: #ffffff;   stroke: #074295;  stroke-miterlimit: 10;"';

	for($i=1; $i<7; $i++ ){ $SECTSION_CLCAS[$i]=$st3; $SECTSION_CLCAS2[$i]=$st1;
	if($sec==$i):$SECTSION_CLCAS[$i]=$st2; $SECTSION_CLCAS2[$i]=$st0; endif;
	}

	$svg_sec='
<svg  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 188 211" style="enable-background:new 0 0 188 211;" xml:space="preserve">
<style type="text/css">
	.st0{fill: transparent;stroke:#FFFFFF;stroke-miterlimit:10;}
	.st1{fill:#074295;}
	.st2{fill:#FFFFFF;}
	.st3{font-family:"PFDinTextUniversal"; fill:#FFFFFF;}
	.st4{font-size:18px; }
</style>

<a class="op_ajax" href="" >
<polygon '.$SECTSION_CLCAS[2].'  points="58.1,25 43.9,25 43.8,25 23.1,25 23.1,45.7 23.1,60 23.1,97 43.9,97 43.9,45.7 58.1,45.7 "/>
<g>
	<g>

	</g>
	<g> <text transform="matrix(1 0 0 1 85 103)" style="stroke: #074295; fill: #074295; stroke-miterlimit: 10; font-size: 50px;">'.$sec.'</text>
		<text transform="matrix(1 0 0 1 65 133)" style="stroke: #074295; fill: #074295; font-family: gothamreg; stroke-miterlimit: 10; font-size: 18px;
		">'.$mes['pl-mes4-1'].'</text>
	</g>
</g>
</a>
<a class="op_ajax" href="" >
<polygon '.$SECTSION_CLCAS[4].' points="138.9,25 153.1,25 153.2,25 173.9,25 173.9,45.7 173.9,60 173.9,97 153.1,97 153.1,45.7 138.9,45.7 "/>
<g>
	<g>

	</g>
</g>
</a>
<a class="op_ajax" href="">
<rect x="62.4" y="24.9" '.$SECTSION_CLCAS[3].' width="72" height="20.8"/>

</a>
<a class="op_ajax" href=""  >
<polygon '.$SECTSION_CLCAS[1].' points="58.1,174.7 43.9,174.7 43.8,174.7 23.1,174.7 23.1,154 23.1,139.7 23.1,102.7 43.9,102.7 43.9,154
	58.1,154 "/>
<g>

</g>
	</a>
<a class="op_ajax" href="" >
<polygon '.$SECTSION_CLCAS[5].' points="138.9,174.7 153.1,174.7 153.2,174.7 173.9,174.7 173.9,154 173.9,139.7 173.9,102.7 153.1,102.7
	153.1,154 138.9,154 "/>
<g>
	<g>

	</g>
</g>
	</a>
<a class="op_ajax" href="">
<rect x="62.4" y="154" '.$SECTSION_CLCAS[6].' width="72" height="20.8"/>
<g>
	<g>

	</g>
</g>
</a>
</svg>';
//echo $svg_sec;
$_SESSION['svg_min_plan']=$svg_min_plan;

	ob_start();
include("pdf/html.php");
$svg_2= ob_get_clean();

$_SESSION['svg_min_plan']=$svg_2;
?>



<?/*
		    <div class="drops">
	<?	ksort($REZULT); foreach($REZULT as $key=>$s){ $i++; $cl=$key;	?>
                  <div class="drop drop--<?=$cl?>"><span class="drop-text"><?=$s['number']?><span></div>
				  <?/*<div class="drop drop--<?=clas?>"><span class="drop-text"><?=$s['number']?><span></div>*/?>
<?/*}?>
                </div>

    <script type="text/javascript">
	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$key;?>
      $('.kv<?=$cl?>').mouseover(function(){
        $('.drop--<?=$cl?>').css('background-color','#0035aa').css('border', '1px solid #0035aa')
      });
      $('.kv<?=$cl?>').mouseout(function(){
        $('.drop--<?=$cl?>').css('background-color','transparent').css('border', '1px solid #fff')
      });
	  <?}?>
      </script>

		*/?>


                <div class="ch-appart">
<?/****/?>
                  <p><?=$mes['pl-mes19']?></p>

<?/*<img <?AltImgAdd($mes['alt-logo'])?> style=" height: 220px;   padding: 15px;" src="<?=$site?>img/g31.png"  />*/?>
<? //include('img/flat/3/poverx3_5/'.$si['img'].'.php');
//***Open SVG
include(svg_plan($svg=$si['img']));
?>
<?/*
<div class="drops">
	<?$i=0; 	ksort($REZULT); foreach($REZULT as $key=>$s){ $i++; $cl=$clas_css[$key];	?>
                  <div class="drop <?=$cl?>"><span class="drop-text"><?=$s['number']?><span></div>

<?}?>
                </div>*/?>
<?/*
  <script type="text/javascript">
	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
      $('.<?=$clas_js[$key];?>').mouseover(function(){
        $('.<?=$cl?>').css('background-color','#0035aa').css('border', '1px solid #0035aa')
      });
      $('.<?=$clas_js[$key];?>').mouseout(function(){
        $('.<?=$cl?>').css('background-color','transparent').css('border', '1px solid #fff')
      });
	  <?}?>
</script>*/?>



<script>
$("html").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    /*document.getElementById("demo").innerHTML = coor;*/

    });

$(document).ready(function(){
	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
      $(".<?=$clas_js[$key]?>").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_<?=$i?>").offset({top:y, left:x-145});
    });
	 <?}?>
  });

	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
$('.<?=$clas_js[$key]?>').mouseover(function() {
  $('.lin_<?=$i?>').css('display', 'block');

// console.log('OVER');
}).mouseout(function()
{
$('.lin_<?=$i?>').css('display', 'none');
// console.log('OUT');
});

 <?}?>

</script>
	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
<div class="lin_<?=$i?>">

<?=$mes['pl-mes14']?><?=$s['number']?> <?=$s['all_room']?> <?=$mes['pl-mes20']?>
</div> <?}?>

<? //echo '<pre>'; print_r($REZULT); echo '</pre>';?>

                </div>
                <div class="ch-sect">
                  <p><?=$mes['pl-mes5']?></p>
<?  ober_section();
//echo $_SESSION['rexss'];
?>
                </div>
<?/****/?>
              </div>
          </div>

		  <?
		  /*$_SESSION['rexs']='
		  <div class="header-bottom">
              <div class="compass clearfix">
                <img <?AltImgAdd($mes['alt-logo'])?> src="'.$site.'img/compas.png" >
                <span>сторони </br>світу</span>
              </div>
              <div class="ch-left">
                <div class="ch-level">
                     <span>'.$floor[0].'</span>'.$mes['pl-mes6'].'
                </div>
              <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?> src="'.$site.'img/logo.svg"  /></div>
              </div>
              <div class="ch2-center">
                <div class="appart-plan">
                  <span class="appart-name">'.$mes['pl-mes14'].' '. $flat.'</span>
                  <img <?AltImgAdd($mes['alt-logo'])?> src="'.$site.'img/houses/house3_png_white/'.$s["img"].'.png" alt="appart">
                </div>
                <div class="ch-center-bot">
                  <div class="ch-table">
                    <h4>'.$mes['pl-mes17'].'</h4>
					'.$print.'
                  </div>
                  <div class="ch-tab-right">
                    <div class="ch-sec">
                      <p class="ch-sec-num">'.$sec.'</p>
                      <p>секція</p>
                    </div>
                    <div class="ch-link">
                      <a href="#">'.$mes['pl-mes8'].'</a>
                   </div>
                  </div>
                </div>
              </div>
              <div class="ch2-right">
                <div class="ch-print-save">
                  <p>
                    <a target="_blanc" class="save" href="/pdf/inv.php"><img <?AltImgAdd($mes['alt-logo'])?> src="'.$site.'img/pdf.png" alt="print">'.$mes['pl-mes9'].'</a>
                  </p>
                  <p>
                    <a class="print" href="#"><img <?AltImgAdd($mes['alt-logo'])?> src="'.$site.'img/print.png" alt="">'.$mes['pl-mes10'].'</a>
                  </p>
                </div>

                <div class="ch-appart">
                  <p>'.$mes['pl-mes19'].'</p>
                </div>
                <div class="ch-sect">
                  <p>'.$mes['pl-mes5'].'</p>
                </div>
              </div>
          </div>
<!--END-->';*/

		  ?>

	<script src="<?=$site?>js/ajax.js"></script>
	 					<?//Вставка картинки в всплывайку?>
  <script type="text/javascript">
					  $(document).ready(function() {
						  data='<?=$imgs?>';
						   $("#img_copy").html(data);

					  });
					  </script><?

	}








/**Поверхи*/
elseif($id=='floor'){
	//floor`=$floor[0] AND `sec`=$sec AND `number`= '$flat'
$result = $db->prepare("SELECT img, sort   FROM `section` WHERE `sec`=$sec AND `floor`=$floor[0] ");
   $result->execute();     $result->bind_result($si['img'],$si['sort']);	$result->fetch(); 	$result->close();

  // $SORT=explode(",", $si['sort']); //Масив сортування
if($floor[0]>1){$pov1="OR (`floor`=$floor[0]-1 AND `level`=2)OR (`floor`=$floor[0]-2 AND `level`=3) OR (`floor`=$floor[0]-1 AND `level`=3)";}else{$pov1='';}

$rez=[]; $REZULT=[]; $n=0; $REZULT_NOT=[];


$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room,life_room, id   FROM `apartments`
WHERE buld=$plan AND `sec`=$sec AND (`floor`=$floor[0] $pov1) ORDER BY sorts ASC");
   $result->execute();
    $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['id']); while($result->fetch()){   $i=0;
		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		//$REZULT_NOT[$n]=$rez;		//$REZULT[$SORT[$n]-1]=$rez;
		$REZULT[$n]=$rez;		$n++;
		}
 $result->close();
//echo $si['img'];
//echo '<pre>'; print_r($SORT); echo '</pre>';
//echo '<pre>'; print_r($REZULT); echo '</pre>';
//echo '<pre>'; print_r($REZULT_NOT); echo '</pre>';
//Для SVG
//echo $pov1;
 foreach($REZULT as $key=>$s){

	 if($s['level']>1 AND $s['floor']!=$floor[0]){$t=".".($floor[0]-$s['floor']);}else{$t='';}
	$URLP[$key]='/'.$_POST['lang'].'plan'.$plan.'/sections'.$sec.'/floor'.($s['floor']+$floor[0]-$s['floor']).'/flat'.$s['number'].'_'.$s['id'].$t.$sleh;
	$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
	$clas_css[$key]="clas".$sec."_".$s['floor']."_".$s['id'];
	if($s['level']==2 or $s['level']==3){$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id']."_".($floor[0]-$s['floor']+1)."_";
										$clas_css[$key]="clas".$sec."_".$s['floor']."_".$s['id']."_".($floor[0]-$s['floor']+1);	}
		$clas[$key]=" ".$clas_js[$key];

//підказка 		//$URLP[$key].='--'.$s['sort']."-".($key+1);
	}
 /*Заглушка для мобільних*/mobiledet();
?>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>

 		<!--start-->
            <div class="header-bottom">
              <div class="compass clearfix">
                <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes1-title'])?> src="<?=$site?>img/compas<?echo"-".(substr($_POST['lang'], 0, 2));?>.png" >
                <?//<span>сторони </br>світу</span>?>
				<?=$mes['pl-mes7']?>
              </div>

              <div class="ch-left">
                <div class="ch-house">
                  <a  class="op_ajax" href="/<?=$_POST['lang']?>plan<?=$sleh?>"><?=$mes['pl-mes2']?></a>
                </div>
                <div class="ch-level">
                  <div class="ch-updown">
                    <a class="up op_ajax" href="/<?=$_POST['lang']?>plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[2].$sleh?>"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-up.png" alt=""></a>
                    <a class="down op_ajax" href="/<?=$_POST['lang']?>plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[1].$sleh?>"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-down.png" alt=""></a>
                  </div>
                  <span class="num-floor"><?=$floor[0]?></span><span class="num-title"><?=$mes['pl-mes6']?></span>

                </div>
                <a href="/">
                  <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  /></div>
                </a>

              </div>
              <div class="ch-center">
                <div class="ch-maplevel">

<?
//***Open SVG
//echo svg_plan($svg=$si['img']);
include(svg_plan($svg=$si['img']));
?>
              </div>
<div class="drops">
	<?$i=0; 	ksort($REZULT); foreach($REZULT as $key=>$s){ $i++; $cl=$clas_css[$key];	?>
	<?if($sec==3 OR $sec==6):?>

		<div class="drop2-1 <?=$cl?>">

				  <div class="drop3-1">
					  <span><?if ( $detect->isMobile() ):?><?=$s['all_room']?> <?=$mes['pl-mes21']?><sub>2</sub><?else:	echo $mes['pl-mes11'];?><br><?=$s['all_room']?><?=$mes['pl-mes21']?><sub>2</sub><br>
					  <?//Житл. пл.:?> 	<?=$mes['pl-mes12']?><br><?=$s['life_room']?><?=$mes['pl-mes21']?><sub>2</sub><br>
					  <?//К-сть к.: ?>  <?=$mes['pl-mes13']?><?=$s['number']{0}?><?endif?></span>
				  </div>
		<a class="op_ajax" href="<?=$URLP[$key]?>">  <div class="drop <?=$cl."-"?>"><span class="drop-text"><?=$s['number']?></span>
		  </div></a>
		</div>

	<?else:?>

	<div class="drop2 <?=$cl?>">
             <a class="op_ajax" href="<?=$URLP[$key]?>">     <div class="drop <?=$cl."-"?>">	<span class="drop-text"><?=$s['number']?></span>
				  </div></a>
				  <div class="drop3"><?if ( $detect->isMobile() ):?><span><?=$s['all_room']?> <?=$mes['pl-mes21']?><sub>2</sub></span><?else:?>
				  <span><?=$mes['pl-mes11']?> <?=$s['all_room']?><?=$mes['pl-mes21']?><sub>2</sub><br></span>
									<span><?=$mes['pl-mes12']?> <?=$s['life_room']?><?=$mes['pl-mes21']?><sub>2</sub><br></span>
									<span><?=$mes['pl-mes13']?> <?=$s['number']{0}?></span>
									<?endif?>
				</div>
		</div>
	 	<?endif?>
<?}?>
                </div>

  <script type="text/javascript">
	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
      $('.<?=$clas_js[$key];?>').mouseover(function(){
        $('.<?=$cl."-"?>').css('background','#0035aa').css('border', '1px solid #0035aa')
      });
      $('.<?=$clas_js[$key];?>').mouseout(function(){
        $('.<?=$cl."-"?>').css('background','transparent').css('border', '1px solid #fff')
      });

	    $('.<?=$cl."-"?>').mouseover(function(){
        $('.<?=$clas_js[$key]?>').css('fill','#0035aa').css('opacity','1')
      });
      $('.<?=$cl."-"?>').mouseout(function(){
        $('.<?=$clas_js[$key]?>').css('fill','#BFBFBF').css('opacity','0.6')
      });
	  <?}?>
</script>



                </div>
              <div class="ch-right">
                <div class="ch-home">
                  <span><?=$mes['pl-mes16']?></span>

                </div>
	<?/*****/?>
                <div class="ch-sec">
                 <p class="ch-sec-num"><?=$sec?></p>
                 <p><?=$mes['pl-mes4']?></p>
				<p style="font-size: 18px;  padding-bottom: 40px;"><?=$mes['pl-mes3']?> <?=$plan?></p>
                </div>
                <div class="ch-imgsec">
				  <p><?=$mes['pl-mes5']?></p>

			<?	  	/*Для блоку оберіть секцію*/
			ober_section(); ?>

                </div>
	<?/*****/?>
              </div>

          </div>

		  		<!--END-->
	<?
				echo  $content;
				?> <script src="<?=$site?>js/ajax.js"></script><?
		}
		/**План будинку*/
		elseif($id=='plan'){

		$ur='/sections';
 ?>

 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
		  <!--start-->
<?  /*Заглушка для мобільних*/mobiledet(); ?>



   <div class="choice-svg">
     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1364 768" style="enable-background:new 0 0 1364 768;" xml:space="preserve">
     <style type="text/css">
       .st0{opacity:0.9;fill:#0035AA;enable-background:new    ;}
       .st1{opacity:0.7;fill:#25277D;enable-background:new    ;}
     </style>
       <g>
       <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan9<?=$ur?>1/floor2/">
         <polygon class="st0" points="768,362.5 799.5,379.5 799.5,423 793,425.5 793,444.5 783.5,450 783.5,453 783.5,454.5 788.3,457.5
    	788.3,461.3 786.4,462.6 783.8,464 789.5,467.8 789.8,470.6 784,473 750.8,493 690,453.3 690,449.3 678.7,442 682.7,440 675,434.3
    	683,430 662.8,416.3 667,357.3 700.8,344 750.5,371.8 "/>
        </a>
      <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan9<?=$ur?>6/floor2/">
    <polygon class="st1" points="862,321.8 894.3,337.5 893.5,378.3 885,382.5 881.8,380.5 878.5,384.3 878.5,386.8 873.5,389
    	868.5,386 860.5,390 859,394.3 842,401 841.8,403.3 804.3,419.3 803.8,421 799.5,423 799.5,379.5 768,362.5 774.3,359.8 774.3,357
    	788.4,350.8 790.5,352 "/>
      </a>
      <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan9<?=$ur?>5/floor2/">
    <path class="st1" d="M867.3,287.8l-25.8,12l-2,31.8l22.5-9.8l32.3,15.8l-0.8,40.8l50.3-23.5l-5.3-3l7.3-3.3c0,0,3.8-1-3.3-4.8
    	c-4.5-2.5-4.5-2.5-4.5-2.5v-21.8L867.3,287.8z"/>
      </a>
      <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan9<?=$ur?>4/floor2/">
    <polygon class="st1" points="744.5,261.5 766.5,274 766.5,325.8 803.5,346.5 839.5,331.5 841.5,299.8 867.3,287.8 804.8,260.5
    	804.8,258 791.3,251.5 791.3,253.9 776.3,246 772.8,247.3 767.8,245 751,250.8 751,259.8 "/>
      </a>
      <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan9<?=$ur?>3/floor2/">
    <polygon class="st1" points="635.3,299.8 651.5,308.1 659.7,312.3 659,321.7 679,333 683,331.3 694,337.7 694,341.7 699,344.7
    	700.8,344 715.1,352.3 766.5,325.8 766.5,274 744.5,261.5 737.7,264 734.3,261 632,298 "/>
      </a>
      <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan9<?=$ur?>2/floor2/">
    <polygon class="st1" points="659.7,312.3 659,321.7 679,333 683,331.3 694,337.7 694,341.7 699,344.7 667,357.3 662.8,416.3
    	575,361.3 576.3,333.3 584.5,331.3 584.7,315.3 632,298 "/>
      </a>
     </g>


         <g>
         <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan3<?=$ur?>2/floor2/">
           <polygon class="st2" points="938.5,479.5 933,483 933,490.5 915,501 910,574 905.5,571 889.5,580 788.5,515 788.5,506.5 783,501.5
      	783,473 789.8,470.6 789.5,467.8 783.8,464 788.3,461.3 788.3,457.5 783.5,454.5 783.5,450 793,444.5 793,425.5 799.5,423
      	803.8,421 804.3,419.3 841.8,403.3 842,401 859,394.3 884.5,406.5 884.8,445.3 893,449.3 893,459.3 898.3,457.3 898.3,453.8
      	899.8,453 938.5,474.3 "/>
        </a>
        <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan3<?=$ur?>1/floor2/">
      <polygon class="st2" points="1065.5,498 1086.5,509 1086,520 1098,527.5 1090.5,617 1031,665 966,628 966,616.5 947,603.5
      	947,598.5 910,574 915,501 933,490.5 933,483 938.5,479.5 948,474.5 962.8,482.8 962.8,488.3 988.5,501.8 988.5,513.5 994.5,509.8
      	994.5,505.8 996.8,505.5 1019,518 1019,523.3 1022.3,521 1022.3,511 1053.8,492.5 "/>
        </a>
        <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan3<?=$ur?>6/floor2/">
      <polygon class="st2" points="1120,467.3 1161,486.7 1155,576.3 1090.5,617 1098,527.5 1086,520 1086.5,509 1065.5,498 1071.7,495
      	1071.7,491.7 1083,486 1083,484 1096.3,479.3 1097.3,472.3 1110.7,463.7 "/>
        </a>
        <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan3<?=$ur?>5/floor2/">
      <polygon class="st2" points="1111,398 1110.7,402.3 1090,413.7 1083,486 1096.3,479.3 1097.3,472.3 1110.7,463.7 1120,467.3
      	1161,486.7 1155,576.3 1218,531 1218.7,525 1224.7,522.7 1227.3,477 1218.3,472.3 1222,448.3 1220.3,446.7 1173,425.3 1113,397.3
      	"/>
        </a>
        <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan3<?=$ur?>4/floor2/">
      <polygon class="st2" points="925.3,363.5 944.8,373 958.5,379.5 957,450 975,440.3 1071.7,491.7 1083,486 1090,413.7 1110.7,402.3
      	1111,398 978.5,338.5 "/>
        </a>
        <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/<?=$_POST['lang']?>plan3<?=$ur?>3/floor2/">
      <polygon class="st2" points="884.5,406.5 884.8,445.3 893,449.3 893,459.3 898.3,457.3 898.3,453.8 899.8,453 925.3,467.3 957,450
      	958.5,379.5 947.5,374 925.3,363.5 885,382.5 881.8,380.5 878.5,384.3 878.5,386.8 873.5,389 868.5,386 860.5,390 859,394.3 "/>
        </a>
        </g>
       </svg>

        </div>
        <div class="choiсe-list">
            <div class="choice-item choice--1">
              <h3>№1</h3>

            </div>
            <div class="choice-item choice--3">
              <h3>№3</h3>
			<?=$mes['pl-mes22']?>

            </div>
            <div class="choice-item choice--5">
              <h3>№5</h3>
            </div>
            <div class="choice-item choice--7">
              <h3>№7</h3>

            </div>
            <div class="choice-item choice--9">
              <h3>№9</h3>
             <?=$mes['pl-mes22']?>
            </div>
            <div class="choice-item choice--11">
              <h3>№11</h3>

            </div>
            <div class="choice-item choice--13">
              <h3>№13</h3>

            </div>
            <div class="choice-item choice--15">
              <h3>№15</h3>

            </div>
            <div class="choice-item choice--17">
              <h3>№17</h3>

            </div>
          </div>
		  <style>
@-moz-document url-prefix()
{
.header-bottom .logo{
 position: absolute;
    margin: 0;
	bottom: 0;
}
.link-logo {
  position: absolute;
  left: 0;
  bottom: 0;
  z-index: 1000;
}
} </style>
            <div class="header-bottom">
			    <div class="choice-name"><?=$mes['pl-mes1']?></div>
            <a class="link-logo" href="/">
              <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="<?=$site?>img/logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  /></div>
            </a>


          </div>

	<!--END-->
<?	//echo  $content;
?> <script src="<?=$site?>js/ajax.js"></script><?
		}
		elseif($id=='sections'){


		}






}


?>
