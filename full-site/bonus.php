<?php /*Мова*/ include_once('include/lang.php'); ?>
<?php
  include $_SERVER['DOCUMENT_ROOT'].'/include/config.php';
  /*
  $kv='%';
  if($Rooms[0]>0){ $kv=$Rooms[0];}
$result = $db->prepare("SELECT floor, visible,number,buld,sec,level,all_room,life_room, id ,img,price
            FROM `apartments`
        WHERE   number LIKE '$kv.%' ORDER BY buld ASC");
   $result->execute(); $i=0;
   $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['sec'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['img'],$s['price']); while($result->fetch()){
   $s['img']='/img/houses/house'.$s['buld'].'_png_white/'.$s['img'].'.png';
   $s['url']='/'.$_POST['lang'].'plan'.$s['buld'].'/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'].'_'.$s['id'].'/';
   $flats = explode(".", $s['number']);
   $s['kim']=$flats[0];
      foreach($s as $key=>$k){
      $rez[$key]=$k;
    }
    $REZULT[$i]=$rez;
   $i++;
   }*/
  ?>
  <?
	$Rest=array('room'=>array('min'=>'', 'max'=>0));
	$Rest=array('area'=>array('min'=>'', 'max'=>0));
	$Rest=array('floor'=>array('min'=>'', 'max'=>0));
	$Rest=array('area_life'=>array('min'=>'', 'max'=>0));
	$Rest=array('sec'=>array('min'=>'', 'max'=>0));
	$Rooms[0]='';
	$kv='%';
	if($Rooms[0]>0){ $kv=$Rooms[0];}
$result = $db->prepare("SELECT floor, visible,number,buld,sec,level,all_room,life_room, id ,img,price
						FROM `apartments`
				WHERE   number LIKE '$kv.%' ORDER BY buld ASC");
   $result->execute(); $i=0;
   $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['sec'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['img'],$s['price']); while($result->fetch()){
   $s['img']='/img/houses/house'.$s['buld'].'_png_white/mini/'.$s['img'].'.png';
   $s['url']='/'.$_POST['lang'].'plan'.$s['buld'].'/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'].'_'.$s['id'].'/';
   $flats = explode(".", $s['number']);
   $s['kim']=$flats[0];
   		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		$mas_t=array('room'=>$s['kim'],'area'=>$s['all_room'],'floor'=>$s['floor'],'area_life'=>$s['life_room'],'sec'=>$s['sec'] );
		foreach($mas_t as $key=>$t){
	if(empty($Rest[$key]['min']) OR $t<$Rest[$key]['min']){$Rest[$key]['min']=round($t, 0, PHP_ROUND_HALF_UP);	}
	if(empty($Rest[$key]['max']) OR $t>$Rest[$key]['max']){$Rest[$key]['max']=round($t, 0, PHP_ROUND_HALF_UP);	}

		}

		$REZULT[$i]=$rez;
   $i++;
   }
//$Rest['room']['min']=1;
//$Rest['room']['max']=4;


?>
<!DOCTYPE html>
<html <?=$mes['i-mes8']?>>
  <head>
  <meta charset="utf-8">
	<meta name="robots" content="noindex, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<meta name="description" content="<?=$mes['fil-description']; ?>">
  <!-- <meta name="format-detection" content="telephone=no"> -->
  <title><?=$mes['fil-title']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"/>
	<?php alternateAdd($_SERVER["REQUEST_URI"]);?>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="/js/jquery-1.12.0.min.js"></script>
  <script src="/js/scripts.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/style.css?v=1.0" />
  <link rel="stylesheet" type="text/css" href="/css/filter.css?v=1.0" />
  </head>
  <body>
    <div class="container container_bonus">
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
      <div class="loader">
        <div class="loader__background">
          <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
        </div>
    </div>

    <style media="screen">
      .top-menu{
        position: absolute;  top: 0;  width: 1200px;}
      .call-button a {  background-color: transparent;  border-color: white;}
      @media only screen and (max-width:1200px) {
        .top-menu{  width: 768px;  left: 50%;  margin-left: -384px;}
      }
      @media only screen and (max-width:768px) {
        .top-menu{  width: 300px; left: auto; margin-left: auto;}
      }
    </style>
  <div class="header_bonus">
    <div class="header_bonus_top">
      <p class="bonus_info">
        Для отримання знижки, будь ласка, зверніться до віділу продажу із кодом знижки який Ви отримали у електронному листі, або зателефонуйте до менеджерів відділу продажу за детальною консультацією - <span class="bonus_phone">044 290 73 99</span>
      </p>
      <form class="promoform clearfix" id='bonus_form'>
        <input type="text" name="promocode" maxlength="30" placeholder="Увести промо-код"/>
        <input type="button" id='bonus' name="" value="ПЕРЕВІРИТИ">
      </form>
    </div>

      <div  class="green_line">
        <div id='promo' class="green_line_wrap clearfix">

          
        </div>
      </div>

  </div>
      <div class="wrap_header wrap_header_bonus clearfix">
			<?php /*Меню*/ include_once('include/top-menu.php'); ?>

		    <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
      </div>
      <div class="kvartira__container clearfix">
		     <div class="logo__container clearfix">
           <div class="logo pcscreen clearfix">
             <a href="/<?=$_POST['lang']?>">
               <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
             </a>
          </div>
        </div>
        <div class="table-wraper">
          <div class="slider-content clearfix">
            <div class="table__slider-tite"><h1><?=$mes['fil-mes-h1']?></h1></div>
	             <div class="slider-descrition clearfix">
                 <ul class="slider-descrition__list">
                    <?foreach($Rest as $key=>$t){?>
                      <li class="slider-descrition__item"></li>
                    <?}?>
                  </ul>
                </div>
          <div class="slider-wraper">
	    <script src="/js/ion.rangeSlider-2.1.7/js/ion-rangeSlider/ion.rangeSlider.js"></script>
		  <link rel="stylesheet" type="text/css" href="/js/ion.rangeSlider-2.1.7/css/ion.rangeSlider.css" />
		  <link rel="stylesheet" type="text/css" href="/js/ion.rangeSlider-2.1.7/css/ion.rangeSlider.skinHTML5.css" />

		   	<? $sort=['room','floor','area','area_life','sec'];
			     foreach($sort as $key=>$t){?>
        	 <input type="text" id="<?=$t?>"  value="" />
        	 <input type="hidden" id="<?=$t?>_min_max" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
        		<?}?>
          <input  class="select-button" onclick="document.location.href ='#result'" type="button" id="select" value="<?=$mes['p10-mes']?>"/>
        	 <input  class="reser-button"  type="button" id="reset" value="<?=$mes['p9-mes']?>"/>
                    <script>
                    tmas=['room','floor','area','area_life','sec'];
                    tmaspr=[' <?=$mes['fil-mes1']?>',' <?=$mes['fil-mes2']?>',' <?=$mes['fil-mes6']?>',' <?=$mes['fil-mes6']?>',' <?=$mes['fil-mes5']?>'];
                    tmasprList=['<?=$mes['fil-mes1']?>','<?=$mes['fil-mes2']?>','<?=$mes['fil-mes3']?>','<?=$mes['fil-mes4']?>','<?=$mes['fil-mes5']?>',];
                     var slider=[];
                     var $range=[];
                    	for(i=0; i<tmas.length; i++){
                    		$range[i]= $("#"+tmas[i]);
                    	}
                    	$('#reset').click(function(){

                    for(i=0; i<tmas.length; i++){
                    slider[i] = $range[i].data("ionRangeSlider");
                    }
                    slider[0].reset();
                    slider[1].reset();
                    slider[2].reset();
                    slider[3].reset();
                    slider[4].reset();
                    });

                    function AddFilter(){
                    	var n=[];
                      var elem = $(".slider-descrition__item");
                      elem.eq(0).html(tmaspr[1]);
                    	for(i=0; i<tmas.length; i++){
                    str=document.getElementById(tmas[i]+"_min_max").value;

                    n[tmas[i]]=str.split('/');
                    n[tmas[i]][0]=Number(n[tmas[i]][0]);
                    n[tmas[i]][1]=Number(n[tmas[i]][1]);

                    			$range[i].ionRangeSlider( {
                    			min: n[tmas[i]][0],
                                max: n[tmas[i]][1],
                                from: n[tmas[i]][0],
                                to: n[tmas[i]][1],
                                type: 'double',
                                step: 1,
                    			postfix: tmaspr[i],
                                prettify: true,
                                hasGrid: true,
                    			onFinish: updateInputs,
                    			onUpdate: updateInputs
                    			}
                    );
                          elem.eq(i).html(tmasprList[i]);
                    }
                    	function updateInputs (data) {
                    	var vals=[];
                    	for(i=0; i<tmas.length; i++){
                    		vals[i]=$("#"+tmas[i]).data("ionRangeSlider");
                    }
                    	data = $('.sort');
                    	for(i=0; i<data.length; i++){
                    	if(	data[i].dataset.room>=vals[0].old_from  && data[i].dataset.room<=vals[0].old_to &&
                    		data[i].dataset.floor>=vals[1].old_from && data[i].dataset.floor<=vals[1].old_to &&
                    		data[i].dataset.area>=vals[2].old_from && data[i].dataset.area<=vals[2].old_to &&
                    		data[i].dataset.area_life>=vals[3].old_from && data[i].dataset.area_life<=vals[3].old_to &&
                    		data[i].dataset.sec>=vals[4].old_from  && data[i].dataset.sec<=vals[4].old_to
                    		){
                    	data[i].style.display='block';
                    	}else{
                    	data[i].style.display='none';
                    	}}
                    		}
                    }
                     AddFilter();
                       </script>
					   <script>
	$('#bonus').on('click', function (e) {



	var elem = $('#bonus_form');
    var data =  elem.serialize();

		 console.log(data);
	   $.ajax({
        method: 'POST',
        url: '/include/bunusApi.php',
        data: data,
        success: function (dat) {

		$('#promo').html(dat);

        },
        error: function (dat) {
            console.log(dat);

        },
    });

	});
	</script>

                </div>
              </div>

              <ul class="kvartira__list clearfix">
                	<?foreach($u as $key=>$t):?>
                	<li class="kvartira__item <?if($key==$Rooms[0]) echo 'active';?>"><a href="/<?=$_POST['lang']?>kvartira/<?=$t?>/" class="kvartira__link"><?echo $mes['kv-mes-flat-'.$key]; if($key==$Rooms[0]) echo ' '.$mes['kv-mes7'];?></a></li>
              	 <?endforeach;?>
              </ul>
              <div class="kvartira__table" id='result'>
                <table>
                  <tr>
                    <th><?=$mes['kv-mes1']?></th>
                    <th><?=$mes['kv-mes2']?></th>
                    <th><?=$mes['kv-mes3']?></th>
                    <th><?=$mes['kv-mes4']?></th>
                    <th><?=$mes['kv-mes5']?></th>
                    <th><?=$mes['kv-mes6']?></th>
                  </tr>
                </table>
                <div class="table-body">
                  <?
                    foreach ($REZULT as $key=>$s){
                  ?>
                  <ul class="table-body__list sort" data-floor='<?=$s['floor']?>' data-area='<?=$s['all_room']?>' data-room='<?=$s['kim']?>' data-area_life='<?=$s['life_room']?>' data-sec='<?=$s['sec']?>'   style="display: block;">

                     <li class="plan-kvartiri" data-img='<?=$s['img']?>' data-alt='<?=$mes['pl-mes1-title']?>'></li>
                    <li class="table-body__item">
                      <a href="<?=$s['url']?>" class="table-body__link"><?=$s['buld']?></a>
                    </li>
                    <li class="table-body__item">
                      <a href="<?=$s['url']?>" class="table-body__link"><?=$s['sec']?></a>
                    </li>
                    <li class="table-body__item">
                      <a href="<?=$s['url']?>" class="table-body__link"><?=$s['floor']?></a>
                    </li>
                    <li class="table-body__item">
                      <a href="<?=$s['url']?>" class="table-body__link"><?=$s['kim']?></a>
                    </li>
                    <li class="table-body__item">
                      <a href="<?=$s['url']?>" class="table-body__link"><?=$s['all_room']?></a>
                    </li>
                    <li class="table-body__item">
                      <a href="<?=$s['url']?>" class="table-body__link"><?=$s['life_room']?></a>
                    </li>
                  </ul>
            <?}?>
          </div>
        </div>
      </div>
      <div class="emty"></div>
    </div>
  <!-- </section> -->
          <footer>
            <div class="foot-wrap">
              <div class="allright">
                <p><?=$mes['v01']?></p>
              </div>
              <div class="web">
                <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank"><img <?AltImgAdd('SmartOrange')?>  src="/img/logo-smart.png" width="55px" /></a>
              </div>
              <span><?=$mes['v02']?></span>
            </div>
          </footer>
      	</div>
  <script src="/js/hoverPlanOfFlat.js?v=1.0"></script>
    </body>
</html>
