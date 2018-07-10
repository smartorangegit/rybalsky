<?php 
/**
 *  @file commercial-floor.php
 *  @brief Сторінка Оберіть приміщення
 *  		/plan/sections/floor2/
 */

$result = $db->prepare("SELECT img, sort,sec   FROM `section` WHERE  buld=$plan  AND `floor`=$floor[0] ORDER BY sec ASC");
$result->execute();     $result->bind_result($si['img'],$si['sort'], $si['sec']);		
;
while($result->fetch()) {  
    $setSec[$si['sec']]=$si['img'];
	

	
  }

$result->close();
$si['img']='plan'; /*задати цей параметр в БД*/
  
  // $SORT=explode(",", $si['sort']); //Масив сортування
if($floor[0]==$OPTIONS['MINFLOOR_0']){
  $pov1="OR (`floor`=$floor[0]+2 AND `level`=2)";
}else{
  $pov1='';
}

$rez=[]; 
$REZULT=[]; 
$n=0; 
$REZULT_NOT=[];

$officePresent = false;
$tradePresent = false;
$restarauntPresent = false;
$medicinePresent = false;
$educationalPresent = false;

$result = $db->prepare("SELECT floor, visible,number,buld,level,all_room,life_room, id, sold, sec, type  FROM ".TABLE."
WHERE buld=$plan AND visible=1 AND (`floor`=$floor[0] $pov1) ORDER BY sorts ASC");
$result->execute();
$result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['sold'],$s['sec'],$s['type']);
	while($result->fetch()){   
    $i=0;
		foreach($s as $key=>$k){
      $rez[$key]=$k;
      switch($rez['type']) {
        case 1:
          $officePresent = true;
          break;
        case 2;
          $tradePresent = true;
          break;
        case 3:
          $restarauntPresent = true;
          break;
        case 4:
          $medicinePresent = true;
          break;
        case 5:
          $educationalPresent = true;
          break;
        }
		}
    $REZULT[$n]=$rez;		
    $n++;

  }
$result->close();

foreach($REZULT as $key=>$s) {
  if($s['level']>1 AND $s['floor']!=$floor[0]){
     $t=".".($floor[0]-$s['floor']);
  } else {
    $t='';
  }
  if($s['level']>1) {
	   $floorBottom=true;
   }
   
   
  if($s['sold']) {
    $URLP[$key]='';
    $clas_js[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'].'_sold_premise';
  } else {
    $URLP[$key]='/'.$_POST['lang'].PLAN.$plan.'/sections'.$s['sec'].'/floor'.($s['floor']+$floor[0]-$s['floor']).'/flat'.$s['number'].'_'.$s['id'].$t.$sleh;
    $clas_js[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'].'_';
  }
  $sold[$key]=$s['sold'];
  $appartmentNumber[$key] = $s['number'];
   
   
   
 // if($sec==$s['sec']) {
	//  $clas_js[$key].=' set-sec';
 // }
  
  if($sec=='0'.$s['type']) {
	  $clas_js[$key].=' set-sec';
  }  
  $clas_css[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id'];

   
   
	/*if($s['level']==2 or $s['level']==3)
	{
		$clas_js[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id']."_".($floor[0]-$s['floor']+1)."_";
		$clas_css[$key]="clas".$s['sec']."_".$s['floor']."_".$s['id']."_".($floor[0]-$s['floor']+1);	
  }*/
  if($s['sold']) {
    $clas[$key]="";
  } else {
	  
	  switch($s['type']){
		  case 1:
			$typ='ofisy';
		  break;
		  
		  case 2:
			$typ='torgivlia';
		  break;
		  
		  case 3:
			$typ='restorany';
		  break;
		  
		  case 4:
			$typ='medytsyna';
		  break;
		  
	  }
	  $clas[$key]=" ".$typ." ".$clas_js[$key];
   // $clas[$key]=" ".$setSec[$s['sec']]." ".$clas_js[$key];
  }


  
//підказка 		//$URLP[$key].='--'.$s['sort']."-".($key+1);
	}
   
	?> <div id="class_beg" class="header choice1">
			<div class="wrap_header">
<?php 
	topHeaderAjaxAdd(); 

 /*Заглушка для мобільних*/mobiledet();

 /*Контактна форма*/ include_once('include/call_my.php'); 
 ?>

<? 
	if ($_POST['lang']!='') {
		$parametr=2;
	}
	else{
		$parametr=1;
	}
$originPage = explode('/', $_SERVER['REQUEST_URI'])[$parametr]; 

?>

 		<!--start-->
            <div class="header-bottom">

             <div class="choice-name">
               <div class="timeline_ryb">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="15 0 500 80" style="enable-background:new 0 0 515 80;" xml:space="preserve">
                 <style type="text/css">
                   .tl0{fill:#ffffff;}
                   .tl2{font-family:inherit; font-size:12px; letter-spacing: 1pt; fill:#0035aa; pointer-events: none;}
                   .activeArrowBg {fill: #0035aa;}
                   .activeArrowText, .text__2 {fill: #ffffff;}
                   .noActive_block{fill:#B3B3B3;}
                   .noActive_text, .text__3{fill:#666666;}
                 </style>
                 <a xmlns:xlink="http://www.w3.org/1999/xlink" class="test" style="cursor:pointer;"  xlink:href="/<?=$_POST['lang'].$originPage.$sleh?>">
                   <polygon class="tl0" points="14.2,59 145.2,59 157.2,39 145.2,19 14.2,19 "/>
                 </a>
                 <?=$mes['tl-mes1']?>
                    <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" xlink:href="/<?=$_POST['lang']?><?=$originPage; ?>/plan<?=$plan?>/sections<?=$sec?>/floor<?=$floor[0]?>/">
                       <polygon class="activeArrowBg" points="152,59 303,59 315,39 303,19 152,19 165,39 "/>
                    </a>  
                    <?=$mes['tl-mes4']?>
                      <polygon class="noActive_block" points="311,59 499,59 511,39 499,19 311,19 324,39 "/>
                    <?=$mes['tl-mes3']?>

                 </svg>
               </div>
             </div>

              <div class="ch-left">
                <div class="ch-level">
                    <? if($floorBottom): ?>
                      <? if($floor[0]== -1): ?>
                        <a class="down op_ajax" href="/<?=$_POST['lang'].PLAN.$plan?>/sections<?=$sec?>/floor<?=$floor[1].$sleh?>">
                          <img <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-up.png" alt="">
                        </a>
                      <? endif;?>
                      <span class="num-floor"><?=$floor[0]?></span>
                      <? if($floor[0]== 1): ?>
                        <a class="down op_ajax" href="/<?=$_POST['lang'].PLAN.$plan?>/sections<?=$sec?>/floor<?=$floor[1].$sleh?>">
                          <img <?AltImgAdd($mes['pl-mes6'])?> src="<?=$site?>img/arrow-down.png" alt="">
                        </a>
                      <? endif;?>
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

            <div class="ch-maplevel commercial__ch-maplevel">
              <?if($plan == 9):?>
                <div class="commercial__svg-text">
                  <?=$mes['cp-text24']?>
                </div><?else:?>
				<div class="commercial__svg-text">
                  <?=$mes['cp-text25']?>
                </div>
              <?endif;?>
            <?
            //***Open SVG

            include(svg_plan($svg=$si['img']));

            ?>
              <?if($plan == 9):?>
                <div class="commercial__svg-text">
                  <?=$mes['cp-text25']?>
                </div>
              <?endif;?>
            </div>

  <?
  $i=0; 	
  ksort($REZULT); 
  foreach($REZULT as $key=>$s){ 
    $i++; 
    $cl=$clas_css[$key]; 
    $cl2 = 'buld' .$plan.  '_sec' .$sec. '_numb'.str_replace('.','_',$appartmentNumber[$key]);
    $ry=0; 
    $transform='';
    $massPopUp[$i]['class']=$cl;
    $massPopUp[$i]['url'] = $URLP[$key];
    $massPopUp[$i]['area']=$s['all_room'];
    $massPopUp[$i]['number']=$s['number'];
    $massPopUp[$i]['sold']=$s['sold'];
    $massPopUp[$i]['type']=$s['type'];
    $massUris[$i]= $URLP[$key];
  }
  $json = json_encode($massPopUp);
  
 // print_r($REZULT);
  
  ?>
 </div>

  <div class="ch-right">
    <div class="ch-sec">
        <span class="ch-sec-num"><?=$sec?></span>
        <span><?=$mes['pl-mes4']?></span>
        <span class="ch-sec-num"><?=$plan?></span>
        <span><?=$mes['pl-mes3']?></span>
    </div>
    <div class="ch-home ch-home__commercial" style=" text-transform: uppercase;">

      <a href="/<?=$_POST['lang']?>filter-commercial/" style="text-decoration:none;">
        <img <?AltImgAdd($mes['fil-mes-h1'])?> src="/img/filter.png" alt="filter"/>
        <div style="color:#fff"><?=$mes['p7-mes']?></div>
      </a>
      
    </div>
    <div class="ch-imgsec  commercial-choose-section_none">
      <p><?=$mes['pl-mes5']?></p>
          <?	/*Для блоку оберіть секцію*/
          ober_section(); ?>
    </div>

    <div class="commerc__floor-legend">
      <? if($officePresent): ?>
      <div class="commerc__floor_checkbox-container commerc__floor_checkbox-office">
        <input class="commerc__floor_legend-checkbox" type="checkbox" name="office" id="legend-office" data-type="1">
        <label for="legend-office"><?= $mes['cp-text2']?></label>
      </div>
      <? endif; ?>
      <?if($tradePresent):?>
      <div class="commerc__floor_checkbox-container commerc__floor_checkbox-trade">
        <input class="commerc__floor_legend-checkbox" type="checkbox" name="trade" id="legend-trade" data-type="2">
        <label for="legend-trade"><?= $mes['cp-text3']?></label>
      </div>
      <? endif; ?>
      <? if($medicinePresent): ?>
      <div class="commerc__floor_checkbox-container commerc__floor_checkbox-medicine">
        <input class="commerc__floor_legend-checkbox" type="checkbox" name="medicine" id="legend-medicine" data-type="4">
        <label for="legend-medicine"><?= $mes['cp-text4']?></label>
      </div>
      <? endif; ?>
      <? if($restarauntPresent): ?>
      <div class="commerc__floor_checkbox-container commerc__floor_checkbox-restaraunt">
        <input class="commerc__floor_legend-checkbox" type="checkbox" name="restaraunt" id="legend-restaraunt" data-type="3">
        <label for="legend-restaraunt"><?= $mes['cp-text1']?></label>
      </div>
      <? endif; ?>
      <? if($educationalPresent):?>
      <div class="commerc__floor_checkbox-container commerc__floor_checkbox-educational-complex">
        <input class="commerc__floor_legend-checkbox" type="checkbox" name="educational-complex" id="educational-complex" data-type="5">
        <label for="educational-complex"><?= $mes['cp-text5']?></label>
      </div>
      <? endif; ?>
    </div>


  </div>

  <!-- всплывайка с информацией -->
<div id="appInfo" style="visibility:hidden;">
  <div class="wrap_appInfo">
      <p>Прміщення: <span class="info_value" id="InfoNumber">3</span></p>
      <p>Загальна площа: <span class="info_value" id="InfoSquare">120</span><span class="info_value"> м<sup>2</sup></span></p>
      <p><span id="InfoType"></span></p>
      <span id="soldText">Продано</span>
  <div class="info_round">
    <img src="/img/anchor.png" alt="anchor">
  </div>
  </div>
</div>
<!--  -->

<script type="text/javascript">

    var id1 = JSON.parse('<?php print_r($json);?>');
    var premisesGlobalArray = [];

    function Prsemise(className, number, area, sold, typeNumber, url) {
      var typeText;
      switch(typeNumber) {
        case 1:
          typeText = "office";
          break;
        case 2:
          typeText = "trade";
          break;
        case 3:
          typeText = "restaraunt"
          break;
        case 4:
          typeText = "medicine";
          break;
        case 5:
          typeText = "educational-complex";
          break;
        default:
          console.log('Edit Prsemise in commercial-floor.php');
      }
      this.className = className;
      this.url = url;
      this.number = number;
      this.area = area;
      this.sold = sold ? true : false;
      this.typeNumber = typeNumber;
      this.typeText = typeText;
    };

    function populatePopup(number, area, type, sold) {
      var typeText;
      $('#InfoNumber').html(sold ? '-' : number);
      $('#InfoSquare').html(sold ? '-' : area);

      //$('#InfoType').html(typeText);
      if(sold) {
        $('#soldText').css('display', 'block');
      } else {
        $('#soldText').css('display', 'none');
      }
    }

    for (var i in id1) {
      premisesGlobalArray.push(new Prsemise(id1[i].class, id1[i].number, id1[i].area, id1[i].sold, id1[i].type, id1[i].url))
    };

    premisesGlobalArray.forEach(function(item){
      $('a[href="'+ item.url + '"]').mouseover(function() {
        populatePopup(item.number, item.area, item.type, item.sold)
      });
    });

    // Filter on floor page legend start
    var filteredPremises = {};
    $('.commerc__floor-legend').change(function() {
      $.each($('.commerc__floor_legend-checkbox'), function(index, checkbox) {
        filteredPremises[checkbox.name] = checkbox.checked;
        console.log(filteredPremises)
        console.log(premisesGlobalArray)
      });
      premisesGlobalArray.forEach(function(item) {
        if(document.querySelector('.' + item.className + '_')) {
          document.querySelector('.' + item.className + '_').classList.remove("set-sec");
        }
        if((document.querySelector('.' + item.className + '_')) && filteredPremises[item.typeText]) {
          document.querySelector('.' + item.className + '_').classList.add("set-sec");
        }
      });
    });
    // Filter on floor page legend end

    $('.ch-maplevel svg a.op_ajax').mousemove(function(e){

      if($(window).width() > 320) {
          $('#appInfo').css( {visibility:'visible'});
          $('#appInfo').css( {display:'block'});
      }

      $('#appInfo').css({
        'top': e.offsetY - 70,
        'left': e.offsetX - 70
      });
    });

    $('.ch-maplevel svg a.op_ajax').mouseout(function(){
      if($(window).width() > 320) {
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
          </div>

		  		<!--END-->
	<?=$content?>

		   </div>
     </div>
     <?footerAdd()?>
	<script src="/js/ajax.js"></script>	