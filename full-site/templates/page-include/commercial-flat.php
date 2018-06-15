<?php /**
 *  @file commercial-flat.php
 *  @brief Сторінка Ознайомтесь з плануванням приміщення
 *  		commercial/plan/sections/floor/flat1.2_6/
 */


/*Заглушка для мобільних*/mobiledet();
GLOBAL $pdf,$sleh;

$poverx=$floor[0]-$flat_level_p;

$result = $db->prepare("SELECT floor,sec,visible,number,all_room,life_room,img,room1,room2,room3,room4,room5,
room6,room7,room8,room9,room10,room11,room12,room13,room14,room15,room16,room17,room18,room19,room20,
level,id,type FROM ".TABLE." WHERE buld=$plan AND `floor`=$floor[0]-$flat_level_p AND `sec`=$sec AND `number`= '$flat' AND visible=1");
$result->execute();
$result->store_result();
if($result->num_rows == 0){ 
  $d=$_POST['lang'].$post_plan."/".$_POST['urls'][1]."/".$_POST['urls'][2];
  header("Location:".$d."");  
}

$result->bind_result($s['floor'],$s['sec'],$s['visible'],$s['number'],$s['all_room'],$s['life_room'],$s['img'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
$s['room16'],$s['room17'],$s['room18'],$s['room19'],$s['room20'],$s['level'],$s['id'],$s['type']);$result->fetch();
$result->close();
$level=$s['level'];
$types='0'.$s['type'];
$level_floor=$s['floor'];

/*for($m=0; $m<54; $m++): 
  $mas1[$m]=$mes['pl-mes'][$m];		
endfor;*/

 $mas1[0]=$mes['pl-mes'][0];		

 $mas3=[];
 
$mas2=[$s['all_room'],$s['life_room'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
$s['room16'],$s['room17'],$s['room18'],$s['room19'],$s['room20']];
$all_room=$s['all_room'];
$life_room=$s['life_room'];
if (PLAN=='plan') { 
  $text_pdf=$mes['pdf1-mes']; 
} else {
  $text_pdf=$mes['pl-mes26'];
}
$mas3[] = $s['all_room'];


if($s['level']>1) {
  $result = $db->prepare("SELECT room1,room2,room3,room4,room5,room6,room7,room8,room9,room10,
  room11,room12,room13,room14,room15,room16,room17,room18,room19,room20,
  room21,room22,room23,room24,room25,room26,room27,room28,room29,room30
  FROM ".TABLE_LEVEL." WHERE `id_flat`=$s[id]");
  $result->execute();
  $result->bind_result($sl['room1'],$sl['room2'],$sl['room3'],$sl['room4'],$sl['room5'],$sl['room6'],$sl['room7'],$sl['room8'],$sl['room9'],$sl['room10'],
						$sl['room11'],$sl['room12'],$sl['room13'],$sl['room14'],$sl['room15'],$sl['room16'],$sl['room17'],$sl['room18'],$sl['room19'],$sl['room20'],
						$sl['room21'],$sl['room22'],$sl['room23'],$sl['room24'],$sl['room25'],$sl['room26'],$sl['room27'],$sl['room28'],$sl['room29'],$sl['room30']);
	$result->fetch();
  $result->close(); 	
	 /* 30-05-2018 Блок Площа	м.кв 
	 $i=count($mas2); /*для 2-го рівня*/ 
	 // $mas2[$i]='<br>';

	/*  foreach($sl as $key=>$k){ 
		$i++;
			//для 3-го рівня з 21 стовпчика
		  if($key=='room21' AND $s['level']>2){
		  $mas2[$i]='<br>'; 
		  $i++;
		}
				$mas2[$i]=$k;
	  }
	
		*/
	$mas1[] = $mes['kv-mes3'].' -1';	
	$mas3[] = $sl['room1'];				
}
$mas1[]=$mes['kv-mes3'].' 1';	
$mas3[] = $s['room1'];	

$result = $db->prepare("SELECT img, sort   FROM `section` WHERE `sec`=$sec AND buld=$plan  AND `floor`=$poverx ");
$result->execute();     
$result->bind_result($si['img'],$si['sort']);	
$result->fetch(); 	
$result->close();
$si['img']='plan';

if($floor[0]>$OPTIONS['MINFLOOR_0']) {
  $pov1="OR (`floor`=($floor[0]-$flat_level_p)-1 AND `level`=2)OR (`floor`=($floor[0]-$flat_level_p)-2 AND `level`=3) OR (`floor`=($floor[0]-$flat_level_p)-1 AND `level`=3)";
}else{
  $pov1='';
}

$rez=[]; 
$REZULT=[]; 
$n=0; 
$REZULT_NOT=[];

$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room,life_room, id,sorts, sold, sec   FROM ".TABLE."
WHERE buld=$plan  AND visible=1 AND  (`floor`=$floor[0]-$flat_level_p $pov1) ORDER BY sorts ASC");
$result->execute();
$result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['sorts'],$s['sold'],$s['sec']); 
while($result->fetch()){   
  $i=0;
  foreach($s as $key=>$k){
    $rez[$key]=$k;
  }
  $REZULT[$n]=$rez;		
  $n++;
  }
 $result->close();

//Для SVG
foreach($REZULT as $key=>$s){
  if($flat_level_p>0){
    $t=".".$flat_level_p;
  }else{
    $t='';
  }
  if($s['sold']) {
    $URLP[$key]='';
    $clas_js[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'].'_sold_premise';
  } else {
    $URLP[$key]='/'.$_POST['lang'].PLAN.$plan.'/sections'.$s['sec'].'/floor'.($s['floor']+$flat_level_p).'/flat'.$s['number'].'_'.$s['id'].$t.$sleh;
    $clas_js[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'].'_';
  }
  $sold[$key] = $s['sold'];
  $appartmentNumber[$key] = $s['number'];
	$clas[$key]=" ".$clas_js[$key];
	if($s['id']==$flat_id){
    $clas[$key].=' st-on';
  }
	$clas_css[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'];

//підказка 		//$URLP[$key].='--'.$s['sort']."-".($key+1);
}
	$pdf['img']=$s['img'];
?>
<div id="class_beg" class="header choice1">
<div class="wrap_header">
<?topHeaderAjaxAdd()?>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
 <?php /*Форма бронювання*/ include_once('include/reservations.php'); ?>
 <?php /*Форма сохранения pdf*/ include_once('include/save.php'); ?>
 	<!--start-->
            <div class="header-bottom">
            <input id="len" value="<?=$_POST['lang']?>" hidden>

            <div class="choice-name">
              <!-- ШАГ 3 -->
              <div class="timeline_ryb">
              <? 	if ($_POST['lang']!='') {
		$parametr=2;
	}
	else{
		$parametr=1;
	}
$originPage = explode('/', $_SERVER['REQUEST_URI'])[$parametr]; 
			  
			  ?>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="15 0 500 80" style="enable-background:new 0 0 515 80;" xml:space="preserve">
                  <style type="text/css">
                  	.tl0{fill:#ffffff;}
                    .tl2{font-family:inherit; font-size:12px; letter-spacing: 1pt; fill:#0035aa; pointer-events: none;}
                    .activeArrowBg {fill: #0035aa;}
                    .activeArrowText, .text__3 {fill: #ffffff;}
                    .noActive_block{fill:#B3B3B3;}
                    .noActive_text{fill:#666666;}
                  </style>
                  <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;"  xlink:href="/<?=$_POST['lang'].$originPage.$sleh?>">
                    <polygon class="tl0" points="14.2,59 145.2,59 157.2,39 145.2,19 14.2,19 "/>
                  </a>
                  <?=$mes['tl-mes1']?>
                 
                    <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" xlink:href="/<?=$originPage; ?>/plan<?=$plan?>/sections<?=$types?>/floor<?=$floor[0]?>/">
                    <polygon class="tl0" points="152,59 303,59 315,39 303,19 152,19 165,39 "/>
                    </a> 
                    <?=$mes['tl-mes4']?>
                      <polygon class="activeArrowBg" points="311,59 499,59 511,39 499,19 311,19 324,39  "/>
                    <?=$mes['tl-mes3']?>
                         
                  </svg>
              </div>
            </div>
            <?php /*endif;*/?>


              <div class="ch-left">
                
                <div class="ch-level">
                    <? if($floor[0]!=1): ?>
                      <a class="up op_ajax" href="/<?=$_POST['lang'].PLAN.$plan?>/sections<?=$sec?>/floor<?=$floor[2].$sleh?>">
                        <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-up.png">
                      </a>
                      <span class="num-floor"><?=$floor[0]?></span>
                      <a class="down op_ajax" href="/<?=$_POST['lang'].PLAN.$plan?>/sections<?=$sec?>/floor<?=$floor[1].$sleh?>">
                        <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-down.png" >
                      </a>
                      <span class="num-title"><?=$mes['pl-mes6']?></span>
                    <? endif ?>
                </div>

                <div class="ch-appart commercial-choose-section_none'">
                <?/****/?>


                <? //include('img/flat/3/poverx3_5/'.$si['img'].'.php');
                //***Open SVG
                $minSvgClass = 'minSvgBuld' . $plan . 'sec' . $sec;
                 if($plan==9 AND $sec==1) { echo "<div style='width:170px'>";} else{ echo "<div class='$minSvgClass'>";}
                include(svg_plan($svg=$si['img']));
                echo "</div>";

                ?>

                <script>
                $("html").mousemove(function(e){
                    var x = e.clientX;
                    var y = e.clientY;
                    var coor = "Coordinates: (" + x + "," + y + ")";
                    });
                $(document).ready(function(){
                	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
                    $(".<?=$clas_js[$key]?>").mousemove(function(e){
                      if(!$(this).parent().data().sold) {
                        var x = e.clientX;
                        var y = e.clientY;
                        var coor = "Coordinates: (" + x + "," + y + ")";
                        $(".lin_<?=$i?>").offset({top:y, left:x-145});
                      }
                    });
                	 <?}?>
                  });

                	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
                $('.<?=$clas_js[$key]?>').mouseover(function() {
                  if(!$(this).parent().data().sold) {
                    $('.lin_<?=$i?>').css('display', 'block');
                  }
                }).mouseout(function()
                {
                $('.lin_<?=$i?>').css('display', 'none');
                });
                 <?}?>
                </script>

              <?
              $i=0;
              foreach($REZULT as $key=>$s){  
                $i++; $cl=$clas_css[$key];
              ?>
                <div class="lin_<?=$i?>">
                  <?=TEXT_FLOOR?> <?=$s['number']?> <?=$s['all_room']?> <?=$mes['pl-mes20']?> <?/*=($key).'--'.$s['sorts'].'-'.$s['id']*/?>
                </div> 
              <?}?>

              </div>
                <a href="<?= $mes['cp-text13']?>">
                  <div class="logo">
                    <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
                  </div>
                </a>
              </div>

              <?
                // Тянем из базы тип помещения
                $result = $db->prepare("SELECT type FROM `apartments_comerc` WHERE `id`= $flat_id");
                $result->execute();     
                $result->bind_result($type['type']);	
                $result->fetch(); 	
                $result->close();
                $apType;
                switch($type['type']) {
                  case 1:
                    $apType = $mes['cp-text2'];
                    break;
                  case 2:
                    $apType = $mes['cp-text3'];
                    break;
                  case 3:
                    $apType = $mes['cp-text1'];
                    break;
                  case 4:
                    $apType = $mes['cp-text4'];
                    break;
                  case 5:
                    $apType = $mes['cp-text5'];
                    break;
                }
              ?>

              <div class="ch2-center">
                <span class="appart-name">
                
                  <?=$mes['cp-text10']?>
  
                  <?= $flat?><?if($level>1){

                    $mb='<span style="font-size: 15px;"> ('.$mes['cp-text11'].'-'.$level.', '. $mes['cp-text12'] . '-1, 1)</span>';
                  
                    echo $mb;}else{$mb='';}?>
                </span>

                <div class="appart-plan">
                  <?/* убрал onclick="openLargeSchema()" чтобы убрать popup */?>
                    <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd(TEXT_FLOOR)?> src="<?=$site?>img/houses/house<?=$plan?>_png_white/<?=$s['img']?><?//kvart1?>.png">
                </div>
                <div class="buttons_block">
                  <div class="ch-link">
         
                      <a onclick="$('#id_reservations').css('opacity','1').css('z-index', '99999').css('pointer-events', 'auto');" id="id_reservations_button" ><?=$mes['pl-mes8']?></a>
   
                      <?
                      $imgs='<span class="span-img-popup" style="text-align: center;">'.TEXT_FLOOR.' '.$flat.' '.$mb.'</span> <div class="open-imp-popup"><img style="height:100%; max-width: 100%; padding: 40px"  src="'.$site.'img/houses/house'.$plan.'BIG/'.$s['img'].'.png" alt="'.TEXT_FLOOR.'"></div>';
                      ?>
                  </div>
                  <!-- <div class="ch-print-save"> -->
                    <a  class="save" onclick="$('#id_save').css({'opacity':'1', 'z-index': '1000', 'pointer-events' : 'auto'});" id="id_save_button" ><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['pl-mes9'])?> src="<?=$site?>img/pdf.png" alt="print"> <?=$mes['pl-mes9']?><?//Зберегти PDF?></a>
                  <!-- </div> -->
                </div>
              </div>



              <div class="ch2-right">
                <div class="ch-tab-right">
                  <p><?=$apType;?></p>
                  <p><?=$mes['pl-mes3']?> <?=$plan?></p>
                  <p><?=$mes['pl-mes4']?> <?=$sec?></p>
                </div>
                <table class="appart_square">
                  <thead>
                    <tr>
                      <td><?=$mes['pl-mes17']?></td>
                      <td>м.кв</td>
                    </tr>
                  </thead>
                  <tbody>
                    <? foreach($mas3 as $k=>$n): ?>
                      <? if(!empty($n)):?>
                        <tr>
                          <td><?= $mas1[$k]?></td>
                          <td><?= $mas3[$k]?></td>
                        </tr>
                      <? endif;?>
                    <? endforeach;?>
                  </tbody>
                </table>

<?  $_SESSION['title']=$mes['pl-mes3']."-3 ".$mes['pl-mes6']."-$s[floor] ".$mes['pl-mes4']."-".$sec." ".TEXT_FLOOR."-$s[number]";



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

	ob_start();
	ober_section();
	$svg_sec= ob_get_clean();
	$svg_sec=str_replace('class="st0 st1"', $st2 ,$svg_sec  );
	$svg_sec=str_replace('class="st0 st0"', $st3 ,$svg_sec  );

	
//echo $svg_sec;
$_SESSION['svg_min_plan']=$svg_min_plan;

  ob_start();
include("pdf/html.php");
$svg_2= ob_get_clean();

$_SESSION['svg_min_plan']=$svg_2;
?>
  </div>
    <div id="sawinfo" class="sawinfo">
      <p style="padding-bottom:10px;"><?=$mes['cp-text8']?></p> 
      <p>
        <span><?php echo rand ( 1, 5 )?><?=$mes['cp-text9']?></span>
      </p>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      function clearMyTimeout() {
        $("#sawinfo").fadeOut("slow");
        clearTimeout(sawInfoTimer);
        $(document).off('click', clearMyTimeout);
      }
      var sawInfoTimer;
      sawInfoTimer = setTimeout(function(){
        $("#sawinfo").fadeIn('slow');
        $(document).on('click', clearMyTimeout);
      }, 5000),
        setTimeout(function(){
          $("#sawinfo").fadeOut("slow");
          $(document).off('click', clearMyTimeout);
        }, 15000)

        var data='<?=$imgs?>';
        $("#img_copy").html(data);

      });
    </script>


          <!-- <div class="ch-sect">
            <p><?=$mes['pl-mes5']?></p>
            <?  ober_section();
            ?>
          </div> -->
        </div>
    </div>
</div>
	<script src="<?=$site?>js/ajax.js"></script>

    <?footerAdd()?>
</div>
