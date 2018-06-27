<?php /*Мова*/ include_once('include/lang.php'); ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/config.php'; ?>
  <?
	$Rest=array('area'=>array('min'=>'', 'max'=>0));
	$Rest=array('area_life'=>array('min'=>'', 'max'=>0));
	$Rooms[0]='';
	$kv='%';
	if($Rooms[0]>0) { 
    $kv=$Rooms[0];
  }
$result = $db->prepare("SELECT floor, visible,number,buld,sec,level,all_room, id ,img, price, type, sold
						FROM `apartments_comerc`
				    WHERE visible = 1 AND sold!=1 AND number LIKE '$kv.%'  GROUP BY all_room ORDER BY buld ASC");
   $result->execute(); 
   $i=0;
   $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['sec'],$s['level'],$s['all_room'],$s['id'],$s['img'],$s['price'],$s['type'], $s['sold']); while($result->fetch()){
   $s['img']='/img/houses/house'.$s['buld'].'_png_white/mini/'.$s['img'].'.png';
   $s['url']='/'.$_POST['lang'] .'kommercheskaya/' .'plan'.$s['buld'].'/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'].'_'.$s['id'].'/';
   $flats = explode(".", $s['number']);
   $s['kim']=$flats[0];
   		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		$mas_t=array('area'=>$s['all_room']);
		foreach($mas_t as $key=>$t){
	    if(empty($Rest[$key]['min']) OR $t<$Rest[$key]['min']) {
        $Rest[$key]['min']=floor($t);	
      }
	    if(empty($Rest[$key]['max']) OR $t>$Rest[$key]['max']) {
        $Rest[$key]['max']=ceil($t);	
      }

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
  <meta name="viewport" content="width=device-width">
	<meta name="description" content="<?=$mes['fil-description']; ?>">
  <title><?=$mes['fil-title']?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="canonical" href="https://<?php echo strtok($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], '?'); ?>"/>
  <!-- <link rel="stylesheet" type="text/css" href="/css/style.css" /> -->
	<?php alternateAdd($_SERVER["REQUEST_URI"]);?>
  <?php /*Google Tag Manager*/ include_once('include/gtm1.php'); ?>
  <script src="/js/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css" />
  <link rel="stylesheet" type="text/css" href="/js/ion.rangeSlider-2.1.7/css/ion.rangeSlider.css" />
	<link rel="stylesheet" type="text/css" href="/js/ion.rangeSlider-2.1.7/css/ion.rangeSlider.skinHTML5.css" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/filter.css" />
  </head>
  <body>
    <div class="container">
      <?php /*Google Tag Manager*/ include_once('include/gtm2.php'); ?>
      <div class="loader">
        <div class="loader__background">
          <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
        </div>
    </div>
  <section>
    <div class="wrap_header">
    <?php /*Меню*/ include_once('include/top-menu.php'); ?>

      <?php /*Контактна форма*/ include_once('include/call_my.php'); ?>
      <div class="clearfix"></div>
    </div>
    <div class="kvartira__container kvartira__container_commercial-filter clearfix">
        <div class="logo__container clearfix">
          <div class="logo pcscreen">
            <a href="/<?=$_POST['lang']?>">
              <img <?AltImgAdd($mes['alt-logo'])?>  src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  />
            </a>
        </div>
      </div>
      <div class="table-wraper">
        <form>
          <div class="table__slider-tite"><h1><?=$mes['fil-cp-mes-h1']?></h1></div>
          <div class="slider-content clearfix">
                <div class="checkboxes_container">
                  <div class="checkboxes__type">
                    <div class="chckboxes__heading"><?= $mes['cp-text26']?></div>
                    <div class="checkbox__type_container">
                      <input id="checkbox__type1" class="checkbox__type filter__checkbox"  type="checkbox" value="1"/>
                      <label for="checkbox__type1" class="checkbox__type-fake"></label>
                      <label for="checkbox__type1" class="checkbox__text"><?= $mes['cp-text2']?></label>
                    </div>
                    <div  class="checkbox__type_container">
                      <input id="checkbox__type2" class="checkbox__type filter__checkbox"  type="checkbox" value="2"/>
                      <label for="checkbox__type2" class="checkbox__type-fake"></label>
                      <label for="checkbox__type2" class="checkbox__text"><?= $mes['cp-text3']?></label>
                    </div>
                    <div class="checkbox__type_container">
                      <input id="checkbox__type3" class="checkbox__type filter__checkbox"  type="checkbox" value="3"/>
                      <label for="checkbox__type3" class="checkbox__type-fake"></label>
                      <label for="checkbox__type3" class="checkbox__text"><?= $mes['cp-text1']?></label>
                    </div>
                    <div class="checkbox__type_container">
                      <input id="checkbox__type4" class="checkbox__type filter__checkbox"  type="checkbox" value="4"/>
                      <label for="checkbox__type4" class="checkbox__type-fake"></label>
                      <label for="checkbox__type4" class="checkbox__text"><?= $mes['cp-text4']?></label>
                    </div>
                    
                    <!-- <input id="checkbox__type5" class="checkbox__type filter__checkbox"  type="checkbox" value="5"/>
                    <label for="checkbox__type5" class="checkbox__text"></label> 
                    <div class="checkbox__type-text"><?= $mes['cp-text5']?></div> -->
                  </div>
                  <div class="checkboxes__building">
                    <div class="chckboxes__heading"><?=$mes['fil-mes8']?></div>
                    <input id="checkbox__building1" class="checkbox__building filter__checkbox"  type="checkbox" value="3"/>
                    <label for="checkbox__building1" class="checkbox__text">3</label>
                    <!-- <input id="checkbox__building2" class="checkbox__building filter__checkbox"  type="checkbox" value="5"/>
                    <label for="checkbox__building2" class="checkbox__text">5</label> -->
                    <input id="checkbox__building3" class="checkbox__building filter__checkbox"  type="checkbox" value="9"/>
                    <label for="checkbox__building3" class="checkbox__text">9</label>
                  </div>
               <div class="checkboxes__section">
                    <div class="chckboxes__heading"><?=$mes['fil-mes9']?></div>
                    <input id="checkbox__section1" class="checkbox__section filter__checkbox"  type="checkbox" value="1"/>
                    <label for="checkbox__section1" class="checkbox__text">1</label>
                    <input id="checkbox__section2" class="checkbox__section filter__checkbox"  type="checkbox" value="2"/>
                    <label for="checkbox__section2" class="checkbox__text">2</label>
                    <input id="checkbox__section3" class="checkbox__section filter__checkbox"  type="checkbox" value="3"/>
                    <label for="checkbox__section3" class="checkbox__text">3</label>
                    <input id="checkbox__section4" class="checkbox__section filter__checkbox"  type="checkbox" value="4"/>
                    <label for="checkbox__section4" class="checkbox__text">4</label>
                    <input id="checkbox__section5" class="checkbox__section filter__checkbox"  type="checkbox" value="5"/>
                    <label for="checkbox__section5" class="checkbox__text">5</label>
                    <input id="checkbox__section6" class="checkbox__section filter__checkbox"  type="checkbox" value="6"/>
                    <label for="checkbox__section6" class="checkbox__text">6</label>
                  </div>



                </div>
                <div class="slider-wraper">
                  <? $sort=['area'];
                  foreach($sort as $key=>$t){?>
                  <div class="slider__item">
                    <div class="slider-descrition__item"></div>
                    <!-- <span data-min="<?=$Rest[$t]['min']?>" class="slider__currentMin slider__currentMin<?=$t?>">
                      <?=$Rest[$t]['min']?>
                    </span> -->
                    <!-- <span data-max="<?=$Rest[$t]['max']?>" class="slider__currentMax slider__currentMax<?=$t?>">
                      <?=$Rest[$t]['max']?>
                    </span> -->
                    <input 
                      class="slider__currentMin slider__currentMin<?=$t?>"
                      type="number" 
                      min="<?=$Rest[$t]['min']?>" 
                      value="<?=$Rest[$t]['min']?>"
                      max="<?=$Rest[$t]['max']?>">
                    <input
                      class="slider__currentMax slider__currentMax<?=$t?>"
                      type="number" 
                      min="<?=$Rest[$t]['min']?>" 
                      value="<?=$Rest[$t]['max']?>" 
                      max="<?=$Rest[$t]['max']?>">
                    <input type="text" id="<?=$t?>"  value="" />
                    <input type="hidden" id="<?=$t?>_min_max" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                  </div>
                  <?}?>
                </div>
                <input class="filter_btn filter_results_button" type="submit" value="<?=$mes['fil-mes10']?>">
                <a class="reser-button" href="#" id="reset"><?=$mes['p9-mes']?></a>
              </div>
            <div>
          </div>
        </form>
        <div class="filter-results_number__container clearfix">
          <div class="filter-results_number"><?=$mes['cp-text27']?> <span class="filter_results_count"></span></div>
        </div>
        <div class="kvartira__table">
          <div class="apartments__filter-results__wrapper js-apartments__filter-results__wrapper">
            <?
              foreach ($REZULT as $key=>$s){
            ?>
            <div class="apartments__filter-result sort" 
              data-area='<?=$s['all_room']?>' 
              data-sec='<?=$s['sec']?>' 
              data-build='<?=$s['buld']?>'
              data-type='<?=$s['type']?>'
              data-selected=true
              <?if($key>=10) { 
                  echo 'style="display:none"';
                } else { 
                  echo 'style="display:block"'; }?>>
                <a href="<?=$s['url']?>" class="filter-result__link">
                  <div class="apartments__filter-result__image">
                    <img src="<?=$s['img']?>">
                  </div>
                  <div class="apartments__filter-result__data">
                    <ul>
                      <li><?=$mes['kv-mes1']?>: <?=$s['buld']?></li>
                      <li><?=$mes['cp-text29']?>: <?=$s['number']?></li>
                      <li><?=$mes['kv-mes5']?>: <?=$s['all_room']?></li>
                    </ul>
                    <div class="view_appartment_btn"><?=$mes['cp-text28'];?></div>
                  </div>
                </a>
            </div>
            <?
              }
            ?>
          </div> <!--apartments__filter-results__wrapper-->
        </div>
        <input id="more-flats" class="filter_btn" type="button" value="<?=$mes['fil-mes13'];?>">
      </div>
      <div class="emty"></div>
    </div>
  </section>
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
  <script src="/js/ion.rangeSlider-2.1.7/js/ion-rangeSlider/ion.rangeSlider.js"></script>
  <script src="/js/hoverPlanOfFlat.js"></script>
  <script>
    var instance; // instance to hold instance of rangeslider
    tmas=['area'];
    tmaspr=[' <?=$mes['fil-mes6']?>',' <?=$mes['fil-mes6']?>'];
    tmasprList=['<?=$mes['fil-mes3']?> <?=$mes['fil-mes6']?>:','<?=$mes['fil-mes4']?> <?=$mes['fil-mes6']?>:'];
    var slider=[];
    var $range=[];
    var minArea = $('.slider__currentMinarea').attr('min');
    var maxArea = $('.slider__currentMinarea').attr('max');

    $('.slider__currentMax').change(function() {
      var max = parseInt($(this).attr('max'));
      var min = parseInt($(this).attr('min'));
      var slider = $(this).siblings('.irs-hidden-input').data("ionRangeSlider");
      if($(this).val() > max) {
        $(this).val(max);
      } else if($(this).val() < min) {
        $(this).val(max);
      } else if(parseInt($(this).val()) < parseInt($(this).siblings('.slider__currentMin').val())) {
        $(this).val(max);
      }
      slider.update({
        from: $(this).siblings('.slider__currentMin').val(),
        to: $(this).val()
      })
    });

    $('.slider__currentMin').change(function() {
      var max = parseInt($(this).attr('max'));
      var min = parseInt($(this).attr('min'));
      var slider = $(this).siblings('.irs-hidden-input').data("ionRangeSlider");
      if($(this).val() < min) {
        $(this).val(min);
      } else if($(this).val() > max) {
        $(this).val(min);
      } else if(parseInt($(this).val()) > parseInt($(this).siblings('.slider__currentMax').val())) {
        $(this).val(min);
      }
      slider.update({
        from: $(this).val(),
        to: $(this).siblings('.slider__currentMin').val()
      })
    });

    for(i=0; i<tmas.length; i++){
      $range[i]= $("#"+tmas[i]);
    }

    //Resetting all checkboxes and sliders 
    $('#reset').click(function(e){
      e.preventDefault();
      for(i=0; i<tmas.length; i++){
        slider[i] = $range[i].data("ionRangeSlider");
      }
      // Ion slider method to update slider
      slider[0].update({from: minArea, to: maxArea});
      // Setting all checkboxes to checked
      Array.prototype.forEach.call($('.filter__checkbox'), function(input) {
        input.checked = false;
      });
      resetSliderTextRepresentation();
      resetCheckboxes();
    });

    function AddFilter(){
      var n=[];
      var elem = $(".slider-descrition__item");
      elem.eq(0).html(tmaspr[1]);
      for(i=0; i<tmas.length; i++){
        str=document.getElementById(tmas[i]+"_min_max").value;
        n[tmas[i]]=str.split('/');
        n[tmas[i]][0]=Number(n[tmas[i]][0]);
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
          hide_min_max: true,
          hide_from_to: true,
          onChange: updateSliderDisplayValues
        });
        instance = $range[0].data("ionRangeSlider");
        elem.eq(i).html(tmasprList[i]);
      }
    } //End AddFilter

    //Fires every time slider is moved
    function updateSliderDisplayValues(data) {
        $(data.input).siblings('.slider__currentMin').val(data.from + '');
        $(data.input).siblings('.slider__currentMax').val(data.to + '');
    }

    // Detect change in checkboxes if at least one checkbox selected then in will filter results start
    var typeUnchecked = true;
    var buildingsUnchecked = true;
    var sectionsUnchecked = true;
    
    $('.checkboxes__type').change(function() {
      typeUnchecked = checkedCheckBoxes($(this).find('input'));
    });

    $('.checkboxes__building').change(function() {
      buildingsUnchecked = checkedCheckBoxes($(this).children('input'));
    });

    $('.checkboxes__section').change(function() {
      sectionsUnchecked = checkedCheckBoxes($(this).children('input'));
    });

    function resetCheckboxes() {
      typeUnchecked = true;
      buildingsUnchecked = true;
      sectionsUnchecked = true;
    }

    function checkedCheckBoxes(inputs) {
      for(var i = 0; i < inputs.length; i++) {
        if(inputs[i].checked) {
          return false;
        } 
      }
      return true;
    }
    // Detect change in checkboxes end


    function resetSliderTextRepresentation() {
      $('.slider__currentMinarea').val($('.slider__currentMinarea').attr('min') + '');
      $('.slider__currentMaxarea').val($('.slider__currentMaxarea').attr('max') + '');
      $('.slider__currentMinarea_life').val($('.slider__currentMinarea_life').attr('min') + '');
      $('.slider__currentMaxarea_life').val($('.slider__currentMaxarea_life').attr('max') + '');
    }

    //This function creates array from checked checkboxes later you compare result against it 
    function createCheckboxArray(jqSelector) {
      var arr = []
      $.each($(jqSelector), function(i, el) {
        if(el.checked) {
          arr.push($(el).val());
        }
      });
      return arr;
    } //end createCheckboxArray

    //This function counts how many results filtered 
    function countResults() {
      var count = 0;
      $.each($('.apartments__filter-result'), function(i, el){
        if(el.dataset.selected == 'true') {
          count++; 
        }
      });
      count = count + '';
      $('.filter_results_count').text(count);
    } //end countResults
    countResults();

    // Smooth scroll animation start
    function animateScroll() {
      $('html, body').animate({
          scrollTop: $(".js-apartments__filter-results__wrapper").offset().top
      }, 1000);
    }
    // Smooth scroll animation end

    var appLimit = 10;
    var data = $('.sort');
    var filterArr = Array.prototype.slice.call(data,0);

    function showResults() {
      appLimit = 0;
      filterArr = [];
      var checkedTypes = createCheckboxArray($('.checkbox__type'));
      var checkedBuildings = createCheckboxArray($('.checkbox__building'));
      var checkedSections = createCheckboxArray($('.checkbox__section'));
      var vals=[];
      var matchesFound = 0;
      for(i=0; i<tmas.length; i++){
        vals[i]=$("#"+tmas[i]).data("ionRangeSlider");
      }
      
      for(i=0; i<data.length; i++){
        if(data[i].dataset.area>=vals[0].old_from && data[i].dataset.area<=vals[0].old_to &&
          (typeUnchecked || checkedTypes.indexOf(data[i].dataset.type)!==-1) &&
          (buildingsUnchecked || checkedBuildings.indexOf(data[i].dataset.build)!==-1) &&
          (sectionsUnchecked || checkedSections.indexOf(data[i].dataset.sec)!==-1))
          {
            data[i].dataset.selected = true;
            if ( appLimit<10 ) {
              data[i].style.display='block';
              appLimit++;
            } else {
              data[i].style.display='none';
            }
            filterArr.push(data[i]);
          }else{
            data[i].style.display='none';
            data[i].dataset.selected = false;
          }
      }
      countResults();
    } //end updateInputs
    
    $('#more-flats').on('click', function(){
      for(var i = appLimit; i < appLimit + 10; i++) {
        if(filterArr[i]) {
          filterArr[i].style.display='block';
        } else {
          return false;
        }
      }
      appLimit = i;
    });

    AddFilter();

    $('.filter_results_button').click(function(e) {
      e.preventDefault();
      showResults();
      animateScroll();
    });
    </script>
    <script src="/js/scripts.js"></script>
    </body>
</html>
