<? session_start();


function rez($id){ 	GLOBAL $floo, $sec;
 include('include/config.php');
  $plan_u = str_replace("plan", "", $_POST['urls'][0]);
  if($plan_u==2){$plan=3;}else{$plan=3;}
 $sec = str_replace("sections", "", $_POST['urls'][1]);
    if(empty($sec)){$sec=1;}

$floor[0]=str_replace("floor", "", $_POST['urls'][2]);
$floor[1]=1;
if($floor[0]>1){$floor[1]=$floor[0]-1;}else{$floor[0]=2;}
if($floor[0]<10){$floor[2]=$floor[0]+1;}else{$floor[2]=10;}
$site=$_POST['site'];
$floo=$floor[0];
function ober_section(){ global $floo, $sec;
	  	/*Для блоку оберіть секцію*/
	for($i=1; $i<7; $i++ ){ $SECTSION_CLCAS[$i]='st0'; $SECTSION_CLCAS2[$i]='';
	if($sec==$i):$SECTSION_CLCAS[$i]='st1'; $SECTSION_CLCAS2[$i]='st0'; endif;
	$SECTSION[$i]='/plan2/sections'.$i.'/floor'.$floo;
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
</a>
<a class="op_ajax" href="<?=$SECTSION[2]?>">
<polygon class="<?=$SECTSION_CLCAS[2]?>" points="58.1,25 43.9,25 43.8,25 23.1,25 23.1,45.7 23.1,60 23.1,97 43.9,97 43.9,45.7 58.1,45.7 "/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 28.2988 62.6786)" class="<?=$SECTSION_CLCAS2[2]?> st3 st4">2</text>
	</g>
</g>
</a>
<a class="op_ajax" href="<?=$SECTSION[4]?>">
<polygon class="<?=$SECTSION_CLCAS[4]?>" points="138.9,25 153.1,25 153.2,25 173.9,25 173.9,45.7 173.9,60 173.9,97 153.1,97 153.1,45.7 138.9,45.7 "/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 158.632 65.012)" class="<?=$SECTSION_CLCAS2[4]?> st3 st4">4</text>
	</g>
</g>
</a>
<a class="op_ajax" href="<?=$SECTSION[3]?>">
<rect x="62.4" y="24.9" class="<?=$SECTSION_CLCAS[3]?>" width="72" height="20.8"/>
<text transform="matrix(1 0 0 1 93.1252 41.4326)" class="<?=$SECTSION_CLCAS2[3]?> st3 st4">3</text>
</a>
<a class="op_ajax" href="<?=$SECTSION[1]?>">
<polygon class="<?=$SECTSION_CLCAS[1]?>" points="58.1,174.7 43.9,174.7 43.8,174.7 23.1,174.7 23.1,154 23.1,139.7 23.1,102.7 43.9,102.7 43.9,154
	58.1,154 "/>
<g>
	<text transform="matrix(1 0 0 1 28.2985 138.6787)" class="<?=$SECTSION_CLCAS2[1]?> st3 st4">1</text>
</g>
	</a>
<a class="op_ajax" href="<?=$SECTSION[5]?>">
<polygon class="<?=$SECTSION_CLCAS[5]?>" points="138.9,174.7 153.1,174.7 153.2,174.7 173.9,174.7 173.9,154 173.9,139.7 173.9,102.7 153.1,102.7
	153.1,154 138.9,154 "/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 158.632 138.6787)" class="<?=$SECTSION_CLCAS2[5]?> st3 st4">5</text>
	</g>
</g>
	</a>
<a class="op_ajax" href="<?=$SECTSION[6]?>">
<rect x="62.4" y="154" class="<?=$SECTSION_CLCAS[6]?>" width="72" height="20.8"/>
<g>
	<g>
		<text transform="matrix(1 0 0 1 93.1248 170.6787)" class="<?=$SECTSION_CLCAS2[6]?> st3 st4">6</text>
	</g>
</g>
</a>
</svg><?

}

/**Квартири*/
if($id=='flat'){

 $flat=str_replace("flat", "", $_POST['urls'][3]);
 $result = $db->prepare("SELECT floor, 	sec, 	visible ,	number, 	all_room ,	life_room, img, room1, 	room2, 	room3, 	room4 ,	room5,
 room6, 	room7, 	room8, 	room9 ,	room10, room11,room12,room13,room14,room15,room16,room17,
 level,id FROM `apartments` WHERE buld=$plan AND `floor`=$floor[0] AND `sec`=$sec AND `number`= '$flat'");
   $result->execute();
   $result->store_result();
   if ($result->num_rows == 0){ $d=$_POST['urls'][0]."/".$_POST['urls'][1]."/".$_POST['urls'][2];
    header("Location:".$d."");  }

    $result->bind_result($s['floor'],$s['sec'],$s['visible'],$s['number'],$s['all_room'],$s['life_room'],$s['img'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
	$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
	$s['room16'],$s['room17'],$s['level'],$s['id']);
	$result->fetch();
 $result->close();
	foreach($s as $k){
		//	$rez=$rez.$k;
		}
	//echo $con;

	$mas1=['Загальна','Житлова',
		'Передпокій','Кухня','Вітальня','Спальня','Спальня 2','Спальня 3','Тераса','Санвузол','Ванна','Лоджія','Балкон','Балкон 2','Гардеробна','Гардеробна 2','Кімната','Кухня-вітальня','Комора',
'Рівень 2','Передпокій','Санвузол','Спальня 1','Спальня 2','Ванна','	Гардеробная','	Спальня','	Тераса','	Лоджия','	Спальня 3','	Вітальня','	Кухня','','','','','','','','',
'Рівень 3','Сходи','Тераса','Хол','','','','','','',''];
	$mas2=[$s['all_room'],$s['life_room'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
	$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
	$s['room16'],$s['room17']];

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

			$result = $db->prepare("SELECT img, sort   FROM `section` WHERE `sec`=$sec AND `floor`=$floor[0] ");
   $result->execute();     $result->bind_result($si['img'],$si['sort']);	$result->fetch(); 	$result->close();

   $SORT=explode(",", $si['sort']);
    if($floor[0]>1){$pov1="OR (`floor`=$floor[0]-1 AND `level`=2)OR (`floor`=$floor[0]-2 AND `level`=3)";}else{$pov1='';}
 $rez=[]; $REZULT=[]; $n=0;
$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room   FROM `apartments` WHERE buld=$plan AND `sec`=$sec AND (`floor`=$floor[0] $pov1)");
   $result->execute();
    $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room']); while($result->fetch()){   $i=0;
		foreach($s as $key=>$k){
			$rez[$key]=$k;

		}
		$REZULT[$SORT[$n]-1]=$rez;
		$n++;
		}
 $result->close();
	//echo '<pre>'; print_r($REZULT); echo '</pre>';
//echo '<pre>'; print_r($SORT); echo '</pre>';
?>
 	<!--start-->
            <div class="header-bottom">
              <div class="compass clearfix">
                <img src="<?=$site?>img/compas.png" alt="comp">
                <span>сторони </br>світу</span>

              </div>

              <div class="ch-left">
                <div class="ch-house">
                  <a class="op_ajax"  href="/plan">ОБРАТИ БУДИНОК</a>
                </div>
                <div class="ch-level">
                  <div class="ch-updown">
                   <a class="up op_ajax" href="/plan<?=$plan_u?>/sections<?=$sec?>/floor<?=$floor[2]?>"><img src="<?=$site?>img/arrow-up.png" alt=""></a>
                    <a class="down op_ajax" href="/plan<?=$plan_u?>/sections<?=$sec?>/floor<?=$floor[1]?>"><img src="<?=$site?>img/arrow-down.png" alt=""></a>

                  </div>

                  <span><?=$floor[0]?></span>поверх

                </div>
              <div class="logo"><img src="<?=$site?>img/logo.jpg" alt="logo" /></div>

              </div>

              <div class="ch2-center">
                <div class="appart-plan">
                  <span class="appart-name">Квартира <?= $flat?></span>
                  <img <?/*onclick="$('#forms_floor').css('opacity','1').css('left','0');"*/?> src="<?=$site?>img/houses/house3_png_white/<?=$s['img']?><?//kvart1?>.png" alt="appart">
                </div>

 <div class="call_my" id="forms_floor">
      <div class="call_my_wrap">
        <div class="call_my_left">

<img  src="<?=$site?>img/houses/house3_png_white/<?=$s['img']?><?//kvart1?>.png" alt="appart">

          </div>
          <div class="call_my_right">
            <a class="call_my_close" ><img src="<?=$site?>img/icons/close-bold-red.svg" alt="logo" width="70px"/></a>
          </div>
        </div>
      </div>


                <div class="ch-center-bot">
                  <div class="ch-table">
                    <h4>Площа м.кв.</h4>
					<? $ik=0;
					/*Кількість елементів в блоці Площа м.кв*/
foreach($mas2 as $k=>$n){if(!empty($n)){ $ik++;  }}
if($ik<=14){$count_d=4;}elseif($ik>14 AND $ik<=17){$count_d=5;}else{$count_d=6;}

					$print='';  $print2=''; $i=0; $m=1;
					foreach($mas2 as $k=>$n){

						if(!empty($n)){

						if($i==0):    $print.= '<div class="table-item'.$m.'"><ul>';  $print2.= '<div class="table-item'.($m+1).'"><ul>'; endif;
						if($s['level']>1 AND $k==0):  $print.='<li>Рівень 1</li>'; $print2.='<li><br></li>'; $i++; endif;

						$print.='<li>'.$mas1[$k].'</li>';   $print2.='<li>'.$n.'</li>';

					$kk=0;
							if($i==$count_d){$i=0; $m=$m+2;  $print.= '</ul></div>'.$print2.'</ul></div>';  $print2=''; $kk=1;  }else{$i++;}
						}
					}

					if($kk==0){  $print.= '</ul></div>'.$print2.'</ul></div>';  }
					echo $print;
				?>

                  </div>
                  <div class="ch-tab-right">
                    <div class="ch-sec">
                      <p class="ch-sec-num"><?=$sec?></p>
                      <p>секція</p>

                    </div>
                    <div class="ch-link">
                      <a onclick="$('#id_reservations').css('opacity','1').css('left','0');" id="id_reservations_button" >ЗАБРОНЮВАТИ КВАРТИРУ</a>

                    </div>

                  </div>

                </div>

              </div>

              <div class="ch2-right">
                <div class="ch-print-save">
                  <p>
                    <a target="_blank" class="save" href="<?=$site?>pdf/inv.php" download><img src="<?=$site?>img/pdf.png" alt="print"> Зберегти PDF</a>
                  </p>
                  <p>
                  <!--  <a class="print" onclick="window.print();" href="#"><img src="<?=$site?>img/print.png" alt="">Друк</a> -->
                  </p>
                </div>

<?  $_SESSION['title']="Будинок-3 Поперх-$s[floor] Секція-".$sec." Квартира-$s[number]";
$_SESSION['rexss']= '<img src="'.$site.'img/houses/jpg_trash/'.$s['img'].'.jpg">';

		 foreach($REZULT as $key=>$s){
	$URLP[$key]='/plan2/sections'.$sec.'/floor'.$s['floor'].'/flat'.$s['number'];
		$clas[$key]=" clas".$sec."_".$s['floor']."_".$s['number'];
	$i++;}

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



	<?
		foreach($REZULT as $key=>$s){
	$URLP[$key-1]='/plan2/sections'.$sec.'/floor'.$s['floor'].'/flat'.$s['number'];
	//$clas_js[$key-1]="clas".$sec."_".$s['floor']."_".$s['number'];
	$clas_js[$key-1]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
		$clas[$key-1]=" ".$clas_js[$key-1];
		$clas_css[$key-1]="clas".$sec."_".$s['floor']."_".$s['id'];

		//підказка $URLP[$key-1].='---'.$key;
	}
//echo $si['img'];
//echo '<pre>'; print_r($REZULT); echo '</pre>';
?>
<?/**?>
                <div class="ch-appart">

              <!--    <p>оберіть квартиру</p>
<img style=" height: 220px;   padding: 15px;" src="<?=$site?>img/g31.png"  />
<? //include('img/flat/poverx3_5/'.$si['img'].'.php');  ?> -->
                </div>*/?>
				<div class="ch-sec">
                 <p class="ch-sec-num"><?=$plan?></p>
                 <p>будинок</p>
                </div>
                <div class="ch-sect">
                  <p>оберіть секцію</p>
<?  ober_section(); ?>
                </div>
<?/****/?>
              </div>
          </div>

		  <?	 /*
		  $_SESSION['rexs']='
		  <div class="header-bottom">
              <div class="compass clearfix">
                <img src="'.$site.'img/compas.png" alt="comp">
                <span>сторони </br>світу</span>
              </div>
              <div class="ch-left">
                <div class="ch-level">
                     <span>'.$floor[0].'</span>поверх
                </div>
              <div class="logo"><img src="'.$site.'img/logo.jpg" alt="logo" /></div>
              </div>
              <div class="ch2-center">
                <div class="appart-plan">
                  <span class="appart-name">Квартира '. $flat.'</span>
                  <img src="'.$site.'img/houses/house3_png_white/'.$s["img"].'.png" alt="appart">
                </div>
                <div class="ch-center-bot">
                  <div class="ch-table">
                    <h4>Площа м.кв.</h4>
					'.$print.'
                  </div>
                  <div class="ch-tab-right">
                    <div class="ch-sec">
                      <p class="ch-sec-num">'.$sec.'</p>
                      <p>секція</p>
                    </div>
                    <div class="ch-link">
                      <a href="#">ЗАБРОНЮВАТИ КВАРТИРУ</a>
                   </div>
                  </div>
                </div>
              </div>
              <div class="ch2-right">
                <div class="ch-print-save">
                  <p>
                    <a target="_blanc" class="save" href="/pdf/inv.php"><img src="'.$site.'img/pdf.png" alt="print">Зберегти PDF</a>
                  </p>
                  <p>
                    <a class="print" href="#"><img src="'.$site.'img/print.png" alt="">Друк</a>
                  </p>
                </div>

                <div class="ch-appart">
                  <p>оберіть квартиру</p>
                </div>
                <div class="ch-sect">
                  <p>оберіть секцію</p>
                </div>
              </div>
          </div>
<!--END-->';

		*/ ?>

	 <script src="<?=$site?>js/ajax.js"></script><?
	}








/**Поверхи*/
elseif($id=='floor'){
	//floor`=$floor[0] AND `sec`=$sec AND `number`= '$flat'
$result = $db->prepare("SELECT img, sort   FROM `section` WHERE `sec`=$sec AND `floor`=$floor[0] ");
   $result->execute();     $result->bind_result($si['img'],$si['sort']);	$result->fetch(); 	$result->close();

   $SORT=explode(",", $si['sort']);
        if($floor[0]>1){$pov1="OR (`floor`=$floor[0]-1 AND `level`=2)OR (`floor`=$floor[0]-2 AND `level`=3)";}else{$pov1='';}
 $rez=[]; $REZULT=[]; $n=0;
$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room,life_room,sec,img, id
FROM `apartments` WHERE buld=$plan AND `sec`=$sec AND (`floor`=$floor[0] $pov1)");
   $result->execute(); $n=0;
    $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['sec'],$s['img'],$s['id']); while($result->fetch()){   $i=0;
		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		$REZULT[$SORT[$n]-1]=$rez;
		//$REZULT[$n]=$rez;
		$n++;
		}
 $result->close();
	//echo $si['img'];
//echo 	$floor[0]. $sec;
//echo '<pre>'; print_r($SORT); echo '</pre>';
//echo '<pre>'; print_r($REZULT); echo '</pre>';
?>
 		<!--start-->
            <div class="header-bottom">
              <div class="compass clearfix">
                <img src="<?=$site?>img/compas.png" alt="comp">
                <span>сторони </br>світу</span>

              </div>

              <div class="ch-left">
                <div class="ch-house">
                  <a  class="op_ajax" href="/plan">ОБРАТИ БУДИНОК</a>
                </div>
                <div class="ch-level">
                  <div class="ch-updown">
                    <a class="up op_ajax" href="/plan<?=$plan_u?>/sections<?=$sec?>/floor<?=$floor[2]?>"><img src="<?=$site?>img/arrow-up.png" alt=""></a>
                    <a class="down op_ajax" href="/plan<?=$plan_u?>/sections<?=$sec?>/floor<?=$floor[1]?>"><img src="<?=$site?>img/arrow-down.png" alt=""></a>
                  </div>
                  <span><?=$floor[0]?></span>поверх

                </div>
              <div class="logo"><img src="<?=$site?>img/logo.jpg" alt="logo" /></div>

              </div>
              <div class="ch-center">
			  <div >
			<?/*  <div class="ch-top-floor" style="height: 100px;  width: 100%;    font-size: 30px;     font-family: 'PFDinTextUniversal-Thin';
			  "><p >ОБЕРІТЬ КВАРТИРУ ЗІ СПИСКУ</p></div>*/?>


                <div class="ch-maplevel">


	<?

 foreach($REZULT as $key=>$s){
 /*	$URLP[$key-1]='/plan2/sections'.$sec.'/floor'.$s['floor'].'/flat'.$s['number'];
	$clas_js[$key-1]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
		$clas[$key-1]=" ".$clas_js[$key-1];
		$clas_css[$key-1]="clas".$sec."_".$s['floor']."_".$s['id'];*/
	$URLP[$key]='/plan2/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'];
	$clas_js[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'].'_';
		$clas[$key]=" ".$clas_js[$key];
		$clas_css[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'];

		//підказка $URLP[$key-1].='---'.$key;
	} ?>
<?/*
<table border="1" class="tab-floor">
  <tr >
   <th>Тип квартири</th>
   <th>Поверх</th>
   <th>Секція</th>
   <th>Будинок</th>
   <th>Загальна площа</th>
   <th>Житлова площа</th>

  </tr><?
	 foreach($REZULT as $key=>$s){ ?>

  <tr>
    <td><a class="op_ajax" href='<?=$URLP[$key]?>'><?=$s['number']?></a></td>
	<td><a class="op_ajax" href='<?=$URLP[$key]?>'><?=$s['floor']?></a></td>
	<td><a class="op_ajax" href='<?=$URLP[$key]?>'><?=$s['sec']?></a></td>
	<td><a class="op_ajax" href='<?=$URLP[$key]?>'><?=$s['buld']?></a></td>
    <td><a class="op_ajax" href='<?=$URLP[$key]?>'><?=$s['all_room']?></a></td>
    <td><a class="op_ajax" href='<?=$URLP[$key]?>'><?=$s['life_room']?></a></td>
  <!--  <td><a class="op_ajax" href='<?=$URLP[$key]?>'><img style="height:20px;" src="<?=$site?>img/houses/house3_png_white/<?=$s['img']?>.png" /></a></td> -->
  </tr>

 <?}?></table>
*/
//***


include('img/flat/poverx3_5/'.$si['img'].'.php');
//echo $si['img'];
//echo '<pre>'; print_r($REZULT); echo '</pre>';
?>

  </div>
              </div>
		<?/***********/?>
<div class="drops">
	<?$i=0; 	ksort($REZULT); foreach($REZULT as $key=>$s){ $i++; $cl=$clas_css[$key-1];	?>
                  <div class="drop <?=$cl?>"><span class="drop-text"><?=$s['number']?><span></div>
				  <div class="drop drop--<?=clas?>"><span class="drop-text"><?=$s['number']?><span></div>
<?}?>
                </div>

  <script type="text/javascript">
	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key-1];?>
      $('.<?=$clas_js[$key-1];?>').mouseover(function(){
        $('.<?=$cl?>').css('background-color','#0035aa').css('border', '1px solid #0035aa')
      });
      $('.<?=$clas_js[$key-1];?>').mouseout(function(){
        $('.<?=$cl?>').css('background-color','transparent').css('border', '1px solid #fff')
      });

	  <?}?>
</script>
                </div>			
				
              <div class="ch-right">
                <div class="ch-home">
                  <span>ОБЕРІТЬ ЖИТЛО</span>

                </div>
	<?/****/?>
 
	<?/****/?>	
              </div>
			  			  
			   <div class="ch2-right">
				<div class="ch-sec">
                 <p class="ch-sec-num"><?=$plan?></p>
                 <p>будинок</p>
                </div>

                <div class="ch-sec">
                 <p class="ch-sec-num"><?=$sec?></p>
                 <p>секція</p>
                </div>

                <div class="ch-imgsec">
				  <p style="text-align:center;">оберіть секцію</p>

			<?	  	/*Для блоку оберіть секцію*/
			ober_section(); ?>
                </div>
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
		  <!--start-->

   <div class="choice-svg">
     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1364 768" style="enable-background:new 0 0 1364 768;" xml:space="preserve">
     <style type="text/css">
       .st0{opacity:0.9;fill:#0035AA;enable-background:new    ;}
       .st1{opacity:0.7;fill:#25277D;enable-background:new    ;}
     </style>
     <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/plan2<?=$ur?>1/floor2">
       <g>
     <polygon class="st0" points="768,362.5 799.5,379.5 799.5,423 793,425.5 793,444.5 783.5,450 783.5,453 783.5,454.5 788.3,457.5
       788.3,461.3 786.4,462.6 783.8,464 789.5,467.8 789.8,470.6 784,473 750.8,493 690,453.3 690,449.3 678.7,442 682.7,440 675,434.3
       683,430 662.8,416.3 667,357.3 700.8,344 750.5,371.8 "/>
     <polygon class="st1" points="862,321.8 894.3,337.5 893.5,378.3 885,382.5 881.8,380.5 878.5,384.3 878.5,386.8 873.5,389
       868.5,386 860.5,390 859,394.3 842,401 841.8,403.3 804.3,419.3 803.8,421 799.5,423 799.5,379.5 768,362.5 774.3,359.8 774.3,357
       788.4,350.8 790.5,352 "/>
     <path class="st1" d="M867.3,287.8l-25.8,12l-2,31.8l22.5-9.8l32.3,15.8l-0.8,40.8l50.3-23.5l-5.3-3l7.3-3.3c0,0,3.8-1-3.3-4.8
       c-4.5-2.5-4.5-2.5-4.5-2.5v-21.8L867.3,287.8z"/>
     <polygon class="st1" points="744.5,261.5 766.5,274 766.5,325.8 803.5,346.5 839.5,331.5 841.5,299.8 867.3,287.8 804.8,260.5
       804.8,258 791.3,251.5 791.3,253.9 776.3,246 772.8,247.3 767.8,245 751,250.8 751,259.8 "/>
     <polygon class="st1" points="635.3,299.8 651.5,308.1 659.7,312.3 659,321.7 679,333 683,331.3 694,337.7 694,341.7 699,344.7
       700.8,344 715.1,352.3 766.5,325.8 766.5,274 744.5,261.5 737.7,264 734.3,261 632,298 "/>
     <polygon class="st1" points="659.7,312.3 659,321.7 679,333 683,331.3 694,337.7 694,341.7 699,344.7 667,357.3 662.8,416.3
       575,361.3 576.3,333.3 584.5,331.3 584.7,315.3 632,298 "/>
     </g>
     </a>

       <a  xmlns:xlink="http://www.w3.org/1999/xlink" class="op_ajax" href="/plan1<?=$ur?>1/floor2">
         <g>
     <polygon class="st1" points="871,438.5 835,458 835,472.5 831,478 828.5,538.5 890.5,578 903,571 948,598 947,604 966,616
       965.5,628 971,632 976,564.5 983.5,551 984,539 1017,518 995.5,505.7 994.3,506 994.3,509.3 986.5,513.8 986.5,501.8 962,487.3
       962,482.7 947,474.2 937.5,480 937.5,473.8 901.2,454.2 890.7,460.5 890.7,449.5 "/>
     <polygon class="st1" points="878.5,384.3 912,401.5 911.5,423 911.3,459.5 906.8,457 901.2,454.2 890.7,460.5 890.7,449.5
       871,438.5 835,458 835,472.5 831,478 828.5,538.5 786.5,513.5 786.5,505.3 782.5,502.3 789,496.8 782.5,492.5 790,487.5 784.5,484
       792.3,479.3 785.8,476.3 790,474.5 789.5,467.8 783.8,464 788.3,461.3 788.3,457.5 783.5,454.5 783.5,450 793,444.5 793,425.5
       803.8,421 804.3,419.3 841.8,403.3 842,401 859,394.3 860.5,390 868.5,386 873.5,389 "/>
     <polygon class="st1" points="1029.5,362 1003.3,377.5 997.5,452.8 976,440.5 932.3,470.5 911.3,459.5 912,401.5 878.5,384.3
       881.8,380.5 885,382.5 893.5,378.3 943.8,354.8 977.3,338.8 "/>
     <polygon class="st1" points="1178.1,427.1 1115.7,467.3 1109.3,463.7 1096,472.3 1096,480.7 1072.3,492.3 997.5,452.8 1003.3,377.5
       1029.5,362 "/>
     <polygon class="st1" points="1120.7,484.3 1145,498 1141,528.7 1148,532 1141.3,583.3 1027.7,665.7 971,632 976,564.5 983.5,551
       984,539 1017,518 1021.3,520.7 1021.3,510.7 1051.1,492 1064.2,498.3 1072.3,492.3 1096,480.7 1096,472.3 1109.3,463.7
       1115.7,467.3 1125.3,472.3 1125.2,480.5 "/>
     <polygon class="st1" points="1115.7,467.3 1125.3,472.3 1125.2,480.5 1120.7,484.3 1145,498 1141,528.7 1148,532 1141.3,583.3
       1217,529.3 1217,525 1222.7,524 1224.3,521.7 1221.3,518 1226,476.3 1218.3,472.3 1222,447.7 1178.1,427.1 "/>
        </g>
     </a>
     </svg>

        </div>
        <div class="choiсe-list">
            <div class="choice-item choice--1">
              <h3>№1</h3>

            </div>
            <div class="choice-item choice--3">
              <h3>№3</h3>
              <p class="choice-item-text">Початок будівництва</p><p class="choice-item-date"> 17.11.2016р</p>
              <p class="choice-item-text">Термін сдачі </p> <p class="choice-item-date"> III квартал 2017р</p>
            </div>
            <div class="choice-item choice--5">
              <h3>№5</h3>

            </div>
            <div class="choice-item choice--7">
              <h3>№7</h3>

            </div>
            <div class="choice-item choice--9">
              <h3>№9</h3>
              <p class="choice-item-text">Початок будівництва</p><p class="choice-item-date"> 17.11.2016р</p>
              <p class="choice-item-text">Термін сдачі </p> <p class="choice-item-date"> III квартал 2017р</p>
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





            <div class="header-bottom">
			    <div class="choice-name">оберіть будинок</div>
            <div class="logo"><img src="<?=$site?>img/logo.jpg" alt="logo" /></div>


          </div>
          <!-- Google Tag Manager (noscript) -->
         <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
	<!--END-->
<?	//echo  $content;
?> <script src="<?=$site?>js/ajax.js"></script><?
		}
		elseif($id=='sections'){


		}






}


?>
