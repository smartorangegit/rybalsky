<?php
/**
 *  @file kvartira-plan.php
 *  @brief  Сторінка вибору будинку
 *  /plan/, /kvartira/
 */

	$ur='/sections';
 ?>

 <?php /*Контактна форма*/ //include_once('include/call_my.php'); ?>
		  <!--start-->
<?  /*Заглушка для мобільних*/mobiledet(); ?>

<!-- СТРАНИЦА С ВЫБОРОМ ДОМА -->

  <!-- <section class="function_first"> -->
    <input id="len" value="<?=$_POST['lang']?>" hidden>
  <?if(!$_GET['ajax']):?>

    <div class="loader ">
      <div class="loader__background">
          <div class="loader__inner"><img <?AltImgAdd($mes['alt-logo'])?>  src="/img/icons/rb_logo_white.png"></div>
       </div>
   </div>
   <?endif;?>
    <div class="header choice test">
        <style media="screen">
          .header.choice { background:none!important; background-color: transparent!important;}
          .mouse {z-index: 6;}
      </style>
        <?php include_once('include/call_my.php'); ?>
          <div class="wrap_header">
            <?php /*Меню*/ include_once('include/top-menu.php'); ?>
            <?php /*Меню Стрелки include_once('include/arrow.php'); */?>
            <div class="clearfix"></div>
              <div class="choice-svg" style="background: url(../img/app-bg.jpg); background-size: cover;">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 1364 768" style="enable-background:new 0 0 1364 768;" preserveAspectRatio="none" xml:space="preserve">
                   <style type="text/css">

                                 .st0{opacity:0.9;fill:#0035AA;enable-background:new    ;}
                                 .st1{opacity:0.4;fill:#25277D;enable-background:new    ;}
                                 .houseNumber {fill: #ffffff; font-size: 22px;font-weight:400;}
                                 .houseNumber__additional-text {fill:#ffffff; font-weight:200;}
                               </style>
                                <image width="100%" height="100%" preserveAspectRatio="none" style="image-rendering:optimizeQuality" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/choice2.jpg" id="image3561" x="0" y="0"></image>
                             <g transform="translate(-5.292031,-98.114739)">
                             <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>9<?=$ur?>1/floor2/">
                               <polygon class="st0" points="768,362.5 799.5,379.5 799.5,423 793,425.5 793,444.5 783.5,450 783.5,453 783.5,454.5 788.3,457.5 788.3,461.3 786.4,462.6 783.8,464 789.5,467.8 789.8,470.6 784,473 750.8,493 690,453.3 690,449.3 678.7,442 682.7,440 675,434.3 683,430 662.8,416.3 667,357.3 700.8,344 750.5,371.8 "/>
                              </a>
                            <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>9<?=$ur?>6/floor2/">
                          <polygon class="st1" points="862,321.8 894.3,337.5 893.5,378.3 885,382.5 881.8,380.5 878.5,384.3 878.5,386.8 873.5,389 868.5,386 860.5,390 859,394.3 842,401 841.8,403.3 804.3,419.3 803.8,421 799.5,423 799.5,379.5 768,362.5 774.3,359.8 774.3,357 788.4,350.8 790.5,352 "/>
                            </a>
                            <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>9<?=$ur?>5/floor2/">
                          <path class="st1" d="M867.3,287.8l-25.8,12l-2,31.8l22.5-9.8l32.3,15.8l-0.8,40.8l50.3-23.5l-5.3-3l7.3-3.3c0,0,3.8-1-3.3-4.8c-4.5-2.5-4.5-2.5-4.5-2.5v-21.8L867.3,287.8z"/>
                            </a>
                            <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>9<?=$ur?>4/floor2/">
                          <polygon class="st1" points="744.5,261.5 766.5,274 766.5,325.8 803.5,346.5 839.5,331.5 841.5,299.8 867.3,287.8 804.8,260.5 804.8,258 791.3,251.5 791.3,253.9 776.3,246 772.8,247.3 767.8,245 751,250.8 751,259.8 "/>
                            </a>
                            <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>9<?=$ur?>3/floor2/">
                          <polygon class="st1" points="635.3,299.8 651.5,308.1 659.7,312.3 659,321.7 679,333 683,331.3 694,337.7 694,341.7 699,344.7 700.8,344 715.1,352.3 766.5,325.8 766.5,274 744.5,261.5 737.7,264 734.3,261 632,298 "/>
                            </a>
                            <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>9<?=$ur?>2/floor2/">
                          <polygon class="st1" points="659.7,312.3 659,321.7 679,333 683,331.3 694,337.7 694,341.7 699,344.7 667,357.3 662.8,416.3 575,361.3 576.3,333.3 584.5,331.3 584.7,315.3 632,298 "/>
                            </a>
                           </g>
                               <g transform="translate(-5.292031,-103)">
                               <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>3<?=$ur?>2/floor2/">
                                 <polygon class="st2" points="938.5,479.5 933,483 933,490.5 915,501 910,574 905.5,571 889.5,580 788.5,515 788.5,506.5 783,501.5	783,473 789.8,470.6 789.5,467.8 783.8,464 788.3,461.3 788.3,457.5 783.5,454.5 783.5,450 793,444.5 793,425.5 799.5,423 803.8,421 804.3,419.3 841.8,403.3 842,401 859,394.3 884.5,406.5 884.8,445.3 893,449.3 893,459.3 898.3,457.3 898.3,453.8 899.8,453 938.5,474.3 "/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>3<?=$ur?>1/floor2/">
                            <polygon class="st2" points="1086.000 520.000, 1098.000 527.500, 1090.500 617.000, 1031.000 665.000, 967.442 621.425, 966.542 606.508, 952.817 596.500, 949.042 585.850, 910.000 562.117, 915.000 501.000, 933.000 490.500, 933.000 483.000, 938.500 479.500, 948.000 474.500, 962.800 482.800, 962.800 488.300, 988.500 501.800, 988.500 513.500, 994.500 509.800, 994.500 505.800, 996.800 505.500, 1019.000 518.000, 1019.000 523.300, 1022.300 521.000, 1022.300 511.000, 1053.800 492.500, 1065.500 498.000, 1086.500 509.000"/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>3<?=$ur?>6/floor2/">
                            <polygon class="st2" points="1120,467.3 1161,486.7 1155,576.3 1090.5,617 1098,527.5 1086,520 1086.5,509 1065.5,498 1071.7,495 1071.7,491.7 1083,486 1083,484 1096.3,479.3 1097.3,472.3 1110.7,463.7 "/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>3<?=$ur?>5/floor2/">
                            <polygon class="st2" points="1111,398 1110.7,402.3 1090,413.7 1083,486 1096.3,479.3 1097.3,472.3 1110.7,463.7 1120,467.3
                            	1161,486.7 1155,576.3 1218,531 1218.7,525 1224.7,522.7 1227.3,477 1218.3,472.3 1222,448.3 1220.3,446.7 1173,425.3 1113,397.3"/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>3<?=$ur?>4/floor2/">
                            <polygon class="st2" points="925.3,363.5 944.8,373 958.5,379.5 957,450 975,440.3 1071.7,491.7 1083,486 1090,413.7 1110.7,402.3 1111,398 978.5,338.5 "/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>3<?=$ur?>3/floor2/">
                            <polygon class="st2" points="884.5,406.5 884.8,445.3 893,449.3 893,459.3 898.3,457.3 898.3,453.8 899.8,453 925.3,467.3 957,450 958.5,379.5 947.5,374 925.3,363.5 885,382.5 881.8,380.5 878.5,384.3 878.5,386.8 873.5,389 868.5,386 860.5,390 859,394.3 "/>
                              </a>
                              </g>
                              <g id="g5567"
                              transform="matrix(0.79,0,0,0.765,427.978,139.38685)">
                              <a xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>5<?=$ur?>1/floor3/">
                              <polygon class="st2" points="664.469 559.549, 665.387 565.974, 456.123 710.073, 457.958 607.276, 387.271 552.654, 617.660 418.204, 654.373 442.068, 656.267 453.152, 673.949 465.326, 674.795 489.106, 679.843 493.466, 673.647 552.895"/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>5<?=$ur?>3/floor3/">
                              <polygon class="st2" points="252.595 594.197, 337.614 540.728, 136.719 382.409, 87.298 404.811, 86.005 410.516, 54.314 428.329, 52.104 445.997, 40.803 455.835, 40.745 517.756, 252.259 716.822"/>
                              </a>
                              <a  xmlns:xlink="http://www.w3.org/1999/xlink" rel="nofollow" class="op_ajax" href="/<?=$_POST['lang'].PLAN?>5<?=$ur?>2/floor3/">
                              <polygon class="st2" points="387.254 552.709, 457.958 607.276, 456.123 710.991, 339.559 790.841, 252.310 716.766, 252.365 594.427, 337.608 540.539, 371.120 564.012"/>
                              </g>
                              </a>
                              <!-- <g>
                                <text class="houseNumber" transform="matrix(1 0 0 1 663.65 502.5596)">№5</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 967.6035 386.2596)">№3</text>
                                <text class="houseNumber__additional-text" transform="matrix(1 0 0 1 967.6035 400.2596)">
                                  <tspan  x="-50" y="16.8">Початок будівництва</tspan>
                                  <tspan x="-30" y="33.6">17.11.2016 р</tspan>
                                  <tspan x="-30" y="50.4">2,3,4 секції - I</tspan>
                                  <tspan x="-30" y="67">квартал 2018р</tspan>
                                  <tspan x="-30" y="83.6">1,5,6 секції - II</tspan>
                                  <tspan x="-30" y="100.4">квартал 2018р</tspan>
                                </text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 1132.896 273.9448)" >№1</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 444.65 345.9448)" >№11</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 235.65 225.4448)" >№17</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 936.5 147.5596)" >№7</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 538.2548 151.2522)" >№15</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 738.533 144.9448)">№13</text>
                                <text class="houseNumber" transform="matrix(1 0 0 1 720.3115 210.9361)">№9</text>
                                <text class="houseNumber__additional-text" transform="matrix(1 0 0 1 720.3115 220.9361)">
                                  <tspan  x="-50" y="16.8">Початок будівництва</tspan>
                                  <tspan x="-30" y="33.6">17.11.2016 р</tspan>
                                  <tspan x="-30" y="50.4">1,6,7 секції - I</tspan>
                                  <tspan x="-30" y="67">квартал 2018р</tspan>
                                  <tspan x="-30" y="83.6">2,3,4 секції - II</tspan>
                                  <tspan x="-30" y="100.4">квартал 2018р</tspan>
                                </text>
                              </g> -->
                        </svg>
                      </div>
                        <div class="choiсe-list">
                          <div class="choice-item choice--1"><span class='newh3'>№1</span></div>
                          <div class="choice-item choice--3"><span class='newh3'>№3</span><?=$mes['pl-mes22']?></div>
                          <div class="choice-item choice--5"><h3>№5</h3></div>
                          <div class="choice-item choice--7"><span class='newh3'>№7</span></div>
                          <div class="choice-item choice--9"><span class='newh3'>№9</span><?=$mes['pl-mes22']?></div>
                          <div class="choice-item choice--11"><span class='newh3'>№11</span></div>
                          <div class="choice-item choice--13"><span class='newh3'>№13</span></div>
                          <div class="choice-item choice--15"><span class='newh3'>№15</span></div>
                          <div class="choice-item choice--17"><span class='newh3'>№17</span></div>
                        </div>
        		  <style>
                    @-moz-document url-prefix(){
                    .header-bottom .logo{ position: absolute; margin: 0;bottom: 0;}
                    .link-logo { position: absolute; left: 0;bottom: 0; z-index: 1000; } } </style>
            <div class="header-bottom">
              <div class="choice-name">
                <div class="timeline_ryb">
                <!-- 1 ШАГ (STEP)-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="15 0 500 80" style="enable-background:new 0 0 515 80;" xml:space="preserve">
                  <style type="text/css">
                    .tl0{fill:#ffffff;}
                    .tl2{font-family:inherit; font-size:12px; letter-spacing: 1pt; fill:#0035aa; pointer-events: none;}
                    .activeArrowBg {fill: #0035aa;}
                    .activeArrowText, .text__1 {fill: #ffffff;}
                    .noActive_block{fill:#B3B3B3;}
                    .noActive_text, .text__3, .text__2{fill:#666666;}
                  </style>
                  <a xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor:pointer;" class="op_ajax" href="/<?=$_POST['lang'].HOME.$sleh?>">
                    <polygon class="activeArrowBg" points="14.2,59 145.2,59 157.2,39 145.2,19 14.2,19 "/>
                  </a>
                  <?=$mes['tl-mes1']?>
                    <polygon class="noActive_block" points="152,59 283,59 295,39 283,19 152,19 165,39 "/>
                  <?php if(COMERC): ?>  
                     <?=$mes['tl-mes4']?>
                  <?php else: ?>
                    <?=$mes['tl-mes2']?>
                  <?php endif; ?>
                  <polygon class="noActive_block" points="291,59 499,59 511,39 499,19 291,19 304,39 "/>
                  <?=$mes['tl-mes3']?>
                  </svg>
                </div>
              </div>
                 <a class="link-logo" href="/<?=$_POST['lang']?>">
                  <div class="logo"><img <?AltImgAdd($mes['alt-logo'])?> <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logo<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"  /></div>
                </a>
              <div class="mouse nomobile"><div class="scroll"></div></div>
            </div>
          </div>
        </div>
      <!-- </section> -->
      <!-- <section class="function_second"> -->
        <div class="header proj1 main-content--2">
          <div class="wrap_header" style="position:relative;">


            <!-- </div> -->
              <div class="filter-appart">
                <a class="filter__link" href="/<?=$_POST['lang']?>filter/"><img <?AltImgAdd($mes['fil-mes-h1'])?> src="/img/filter.png" alt="filter"><div style="color:#fff"><?=$mes['p7-mes']?></div></a>
                <ul class="filter__list">
                  <li><a href="/<?=$_POST['lang']?>kvartira/odnokomnatnaya/"><?=$mes['kv-mes-flat-1']?></a></li>
                  <li><a href="/<?=$_POST['lang']?>kvartira/dvuhkomnatnaya/"><?=$mes['kv-mes-flat-2']?></a></li>
                  <li><a href="/<?=$_POST['lang']?>kvartira/trehkomnatnaya/"><?=$mes['kv-mes-flat-3']?></a></li>
                  <li><a href="/<?=$_POST['lang']?>kvartira/chetirehkomnatnaya/"><?=$mes['kv-mes-flat-4']?></a></li>
                </ul>
              </div>

              <div class="content-layer">

                <div class="modal_window_wrap">
                  <? if(COMERC):?>
                  <h1><?=$mes['cp-text14']?></h1>
                  <? else: ?>
                  <h1><?=$mes['i-mes12']?></h1>
                  <? endif; ?>
                    <p><?=$mes['i-mes13']?></p>
                      <a id="modal-call" href="#"><?=$mes['i-to-read']?> &rarr;</a>
                      <!-- <a id="modal-close1" href="#"><?=$mes['i-roll']?> &uarr;</a> -->
                      <div class="wrap_inner">
                       <?=$mes['i-mes14']?>
                      </div>
                      <a id="modal-close" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="30" height="30"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"/></svg>
                      </a>
                    </div>

                  </div>
              </div>
      		  <?footerAdd();?>
            </div>
          <!-- </section> -->


     <script type="text/javascript">
         $('#modal-call').click(function(e){
           e.preventDefault();
           $('.content-layer').css({'width':'100%', "margin": "0 auto", "position": "absolute"}),
           $('.modal_window_wrap').addClass('modal_window_wrap__opened'),
           $('.wrap_inner').css({'height':'auto', 'transition':'0.5s'}),
           $(this).hide(),
           $('#modal-close').show()
         });
         $('#modal-close').click(function(e) {
           e.preventDefault();
           if (screen.width > 768){
             $('.content-layer').css({'width':'40%', "margin": "30vh 0 0 0", "position": "static"})
           }
           else {
             $('.content-layer').css({'width':'100%', "margin": "10vh 0 0 0", "position": "static"})
           }

           $('.wrap_inner').css({'height':'0px','transition':'0.5s'}),
           $('.modal_window_wrap').removeClass('modal_window_wrap__opened'),
           $('#modal-close').hide(),
           $('#modal-call').show()
         });
     </script>

	<!--END-->
<?	//echo  $content;?>
 <script src="<?=$site?>js/ajax.js"></script>