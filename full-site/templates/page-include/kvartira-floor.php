<?php 
/**
 *  @file kvartira-floor.php
 *  @brief Сторінка Оберіть квартиру
 *  		/plan/sections/floor2/
 */

$result = $db->prepare("SELECT img, sort   FROM `section` WHERE  buld=$plan AND`sec`=$sec AND `floor`=$floor[0] ");
   $result->execute();     $result->bind_result($si['img'],$si['sort']);	$result->fetch(); 	$result->close();

  // $SORT=explode(",", $si['sort']); //Масив сортування
if($floor[0]>$OPTIONS['MINFLOOR_0']){$pov1="OR (`floor`=$floor[0]-1 AND `level`=2)OR (`floor`=$floor[0]-2 AND `level`=3) OR (`floor`=$floor[0]-1 AND `level`=3)";}else{$pov1='';}

$rez=[]; $REZULT=[]; $n=0; $REZULT_NOT=[];

$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room,life_room, id, sold   FROM ".TABLE."
WHERE buld=$plan AND `sec`=$sec AND visible=1 AND (`floor`=$floor[0] $pov1) ORDER BY sorts ASC");
   $result->execute();
    $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['sold']); while($result->fetch()){   $i=0;
		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		
		$REZULT[$n]=$rez;		$n++;

		}
 $result->close();

 foreach($REZULT as $key=>$s){

   if($s['level']>1 AND $s['floor']!=$floor[0]){$t=".".($floor[0]-$s['floor']);}else{$t='';}
   if($s['sold']) {
    $URLP[$key]='';
    $clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_sold_premise';
   } else {
    $URLP[$key]='/'.$_POST['lang'].PLAN.$plan.'/sections'.$sec.'/floor'.($s['floor']+$floor[0]-$s['floor']).'/flat'.$s['number'].'_'.$s['id'].$t.$sleh;
    $clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
  }
   $sold[$key]=$s['sold'];
   $appartmentNumber[$key] = $s['number'];
   $clas_css[$key]="clas".$sec."_".$s['floor']."_".$s['id'];

	if($s['level']==2 or $s['level']==3){$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id']."_".($floor[0]-$s['floor']+1)."_";
										$clas_css[$key]="clas".$sec."_".$s['floor']."_".$s['id']."_".($floor[0]-$s['floor']+1);	}
		$clas[$key]=" ".$clas_js[$key];

//підказка 		//$URLP[$key].='--'.$s['sort']."-".($key+1);
	} ?> <div id="class_beg" class="header choice1">
			<div class="wrap_header">
<?topHeaderAjaxAdd() ?>
<?
 /*Заглушка для мобільних*/mobiledet();
?>
 <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>



 		<!--start-->
            <div class="header-bottom">

              <?php /*if(COMERC): ?>  

             <?php else: */?>
             <div class="choice-name">
               <div class="timeline_ryb">
               <!-- 2 ШАГ (STEP)-->
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="15 0 500 80" style="enable-background:new 0 0 515 80;" xml:space="preserve">
                 <style type="text/css">
                   .tl0{fill:#ffffff;}
                   .tl2{font-family:inherit; font-size:12px; letter-spacing: 1pt; fill:#0035aa; pointer-events: none;}
                   .activeArrowBg {fill: #0035aa;}
                   .activeArrowText, .text__2 {fill: #ffffff;}
                   .noActive_block{fill:#B3B3B3;}
                   .noActive_text, .text__3{fill:#666666;}
                 </style>
                 <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" href="/<?=$_POST['lang'].HOME.$sleh?>">
                   <polygon class="tl0" points="14.2,59 145.2,59 157.2,39 145.2,19 14.2,19 "/>
                 </a>
                 <?=$mes['tl-mes1']?>
                 <?php if(COMERC): ?>
                    <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" href="/commercial-lease/plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[0]?>/">
                       <polygon class="activeArrowBg" points="152,59 303,59 315,39 303,19 152,19 165,39 "/>
                    </a>  
                    <?=$mes['tl-mes4']?>
                      <polygon class="noActive_block" points="311,59 499,59 511,39 499,19 311,19 324,39 "/>
                    <?=$mes['tl-mes3']?>
                  <?php else: ?>
                    <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" href="/plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[0]?>">
                      <polygon class="activeArrowBg" points="152,59 283,59 295,39 283,19 152,19 165,39 "/>
                    </a>
                    <?=$mes['tl-mes2']?>
                      <polygon class="noActive_block" points="291,59 499,59 511,39 499,19 291,19 304,39 "/>
                   <?=$mes['tl-mes3']?>
                  <?php endif; ?>
                 </svg>
               </div>
             </div>
             <?php /*endif; */?>

            <?
            // Данная функция не отсеивает секции у которых меньше этажей -- Андрей
            function isUpPresent($plan, $sec, $floor) {
              if($plan == 9 && $sec == 3 && $floor == 8) {
                return false;
              } elseif($plan == 9 && ($sec == 1 || $sec == 5 || $sec == 6) && $floor == 9) {
                return false;
              } else if($plan == 3 && ($sec == 2 || $sec== 3 || $sec == 4 || $sec == 6) && $floor == 9) {
                return false;
              } else if($plan == 5 && ($sec== 2 || $sec== 1 || $sec== 3) && $floor == 9) {
                return false;
              }
              return true;
            }
            ?>
              <div class="ch-left">
                <div class="ch-level">
                    <? if($floor[0]!=1): ?>
                      <?if(isUpPresent($plan, $sec, $floor[0])): ?>
                      <a class="up op_ajax" href="/<?=$_POST['lang'].PLAN.$plan?>/sections<?=$sec?>/floor<?=$floor[2].$sleh?>">
                      <img <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-up.png" alt=""></a>
                      <?endif;?>
                      <span class="num-floor"><?=$floor[0]?> </span>
                      <a class="down op_ajax" href="/<?=$_POST['lang'].PLAN.$plan?>/sections<?=$sec?>/floor<?=$floor[1].$sleh?>"><img <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-down.png" alt=""></a>
                      <span class="num-title">&nbsp; <?=$mes['pl-mes6']?></span>
                    <? endif; ?>
                </div>
                <a class="logo__1" href="<?= $mes['cp-text13']?>">
                  <img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"/>
                </a>
              </div>

              <div class="ch-center <?php echo 'centerBuild' . $plan . 'sec' . $sec; ?> <?php if($plan==5 AND $sec==3){echo 'build5sec3';}?>" >
                    <input id="len" value="<?=$_POST['lang']?>" hidden>
                    <!-- <div class="ch-sec">
                       <span class="ch-sec-num"><?=$sec?></span>
                       <span><?=$mes['pl-mes4']?></span>
                       <span><?=$plan?> <?=$mes['pl-mes3']?></span>
                    </div> -->

                    <div class="ch-maplevel">
<?
//***Open SVG
include(svg_plan($svg=$si['img']));

?>
              </div>

<div class="drops" style="display:none;">
	<?$i=0; 	ksort($REZULT); foreach($REZULT as $key=>$s){ $i++; $cl=$clas_css[$key]; $cl2 = 'buld' .$plan.  '_sec' .$sec. '_numb'.str_replace('.','_',$appartmentNumber[$key]);
	$ry=0; $transform='';
	$massPopUp[$i]=$cl;
	$massUris[$i]= $URLP[$key];
	?>
        <a class="<?=$cl?> <?=$cl2?>" data-number="<?=$s['number']?>"
           data-square="<?=$s['all_room'];?>" data-squarelife="<?=$s['life_room'];?>" data-rooms="<?=$s['number']{0};?>"></a>

	<?if(($plan==5 AND $sec==1) OR ($plan!=5 AND $sec==3) OR $sec==6 OR $ry):?>

		<div class="drop2-1 <?=$cl?> <?=$cl2?>">

				  <div class="drop3-1">
          <span>
          <div><?=$s['all_room']?> <?=$mes['pl-mes21']?><sub>2</sub></div>
          <? if (PLAN=='plan') { //Житл. пл.:?>
            <div class="appartment_full_data">
              <div><?=$mes['pl-mes12']?></div>
              <div><?=$s['life_room']?> <?=$mes['pl-mes21']?><sub>2</sub></div>
            <?//К-сть к.: ?>  <div><?=$mes['pl-mes13']?><?=$s['number']{0}?></div>
            </div>
          <?}?>
        </span>
				  </div>
		<a class="op_ajax" href="<?=$URLP[$key]?>">  <div class="drop <?=$cl."-"?>"><span style='<?=$transform?>' class="drop-text"><?=$s['number']?></span>
		  </div></a>
		</div>

	<?else:?>

	<div class="drop2 <?=$cl?> <?=$cl2?>">
             <a class="op_ajax" href="<?=$URLP[$key]?>">     <div class="drop <?=$cl."-"?>">	<span class="drop-text 2"><?=$s['number']?></span>
				  </div></a>
		<div class="drop3">
      <div>
        <span class="appartment_full_data"><?=$mes['pl-mes11']?></span>
        <span><?=$s['all_room']?> <?=$mes['pl-mes21']?><sub>2</sub></span></div>
        <?  if (PLAN=='plan') {?>
          <div class="appartment_full_data">
            <div><span><?=$mes['pl-mes12']?> <?=$s['life_room']?> <?=$mes['pl-mes21']?><sub>2</sub></span></div>
            <div><span><?=$mes['pl-mes13']?> <?=$s['number']{0}?></span></div>
          </div>
        <? } ?>
      </div>
		</div>
	 	<?endif?>
<?}

    $jsonUris = json_encode($massUris);
    $json = json_encode($massPopUp);
    ?>
 </div>




       <script type="text/javascript">
           var id1 = JSON.parse('<?php print_r($json);?>');
           var id2 = JSON.parse('<?php print_r($jsonUris);?>');

           for (var i in id1) {
               var atr1 = $("."+id1[i]).attr("data-number");
               var atr2 = $("."+id1[i]).attr("data-square");
               var atr3 = $("."+id1[i]).attr("data-squarelife");
               var atr4 = $("."+id1[i]).attr("data-rooms");
               $("a[href='" +id2[i] + "']").attr({"data-number":atr1,
                   "data-square":atr2,
                   "data-squarelife":atr3,
                   "data-rooms":atr4});
           }

       var currentMousePos = { x: -1, y: -1 };
         $(document).mousemove(function(event) {
             currentMousePos.x = event.pageX;
             currentMousePos.y = event.pageY;
         });

        $('.ch-maplevel svg a.op_ajax').mousemove(function(){
          var divInfoLeftPos = currentMousePos.x - $('#appInfo').width() - 20;
          var divInfoTopPos = currentMousePos.y - $('#appInfo').height() - 20;

          $('#appInfo').css({left:divInfoLeftPos});
          $('#appInfo').css({top:divInfoTopPos});

          var sold = this.dataset.sold;
          var number = this.dataset.number;
          var square = this.dataset.square;
          var squarelife = this.dataset.squarelife;
          var rooms = this.dataset.rooms;
          if(sold == 1) {
            $('#InfoNumber').html('-');
            $('#InfoSquare').html('-');
            $('#soldText').css({'display': 'block'});
          } else {
            $('#InfoNumber').html(number);
            $('#InfoSquare').html(square);
            $('#LivingSquare').html(squarelife);
            $('#InfoRoom').html(rooms);
            $('#soldText').css({'display': 'none'});
          }
        });

         $('.ch-maplevel svg a.op_ajax').mouseover(function(){
           console.log('наведение');
           if($(window).width() > 320)
           {
             $('#appInfo').css( {visibility:'visible'});
             $('#appInfo').css( {display:'block'});
           }
            });

          $('.ch-maplevel svg a.op_ajax').mouseout(function(){
            console.log('mouseout');
            if($(window).width() > 320)
            {
              $('#appInfo').css( {visibility:'hidden'});
              $('#appInfo').css( {display:'none'});
            }
               });
       </script>

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
                <div class="ch-sec">
                   <span class="ch-sec-num"><?=$sec?></span>
                   <span><?=$mes['pl-mes4']?></span>
                   <span class="ch-sec-num"><?=$plan?></span>
                   <span><?=$mes['pl-mes3']?></span>
                </div>
                <div class="ch-home" style=" text-transform: uppercase;">

                  <!-- правка от 09/11 Аня -->
                    <a href="/<?=$_POST['lang']?>filter/" style="text-decoration:none;">
                      <img <?AltImgAdd($mes['fil-mes-h1'])?> src="/img/filter.png" alt="filter"/>
                      <div style="color:#fff"><?=$mes['p7-mes']?></div>
                    </a>
                    <!--<span><?=$mes['pl-mes16']?></span>-->
                </div>
	<?/*****/?>
                <div class="ch-imgsec ">
                  <p><?=$mes['pl-mes5']?></p>
                			<?	/*Для блоку оберіть секцію*/
                			ober_section(); ?>
                </div>
	<?/*****/?>
              </div>

          </div>

              <!-- Sold or Not starts here -->
              <?/* if(COMERC): ?>
                <? include('include/commerc_form.php'); ?>
              <? endif; */?>
              <!-- Sold or Not ends here -->

		  		<!--END-->
	<?=$content?>

		   </div>
     </div>
     <?footerAdd()?>

       <!-- всплывайка с информацией -->
       <div id="appInfo" style="visibility:hidden;">
         <div class="wrap_appInfo">

              <p>Квартира: <span class="info_value" id="InfoNumber">3</span></p>
              <p>Кількість кімнат: <span class="info_value" id="InfoRoom">2</span></p>
              <p>Загальна площа: <span class="info_value" id="InfoSquare">120</span><span class="info_value"> м<sup>2</sup></span></p>
              <p>Житлова площа: <span class="info_value" id="LivingSquare">46,5</span><span class="info_value"> м<sup>2</sup></span></p>
           <div class="info_round">
             <img src="/img/anchor.png" alt="anchor">
           </div>
        </div>
       </div>
       <!--  -->
	<script src="/js/ajax.js"></script><?