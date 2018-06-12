<? /*
$filename='include/language/'.(substr($_POST['lang'], 0,2)).".ini";
	if (file_exists($filename)) {
	 $mes = parse_ini_file($filename);
	 }
	 else{
	 $mes = parse_ini_file('language/ua.ini');
	} */
$menu_t=['','project','value',	'place_m','infra','quarter','houses','plan','walk',	'aqua',	'build','stroyka','callback'];


//$menu['text']=['Головна','Про проект','Розташування','Цінності','Водний простір','Пішоходний простір','Інфраструктура','Квартали','Будинки',"Квартири","Забудовники","Будівництво","Зв'язок"];
$menu['text']=array();
foreach($menu_t AS $k=>$text){
$menu['text'][$k]=$mes['menu-mes'.$k];
}

  ?>

   <?php
   //  setcookie("Name", "Value");
   ?>
   <!-- начало верхнего меню -->
           <div class="top-menu">
             <div class="burger-menu">
               <a id="open_my_menu" style="cursor:pointer;" onclick=" $('.my_menu').css('opacity','1').css('left','0');" ><img src="<?=$site?>/img/icons/menu.svg" alt="" width="30px"/></a>
             </div>
             <div class="right_item pcscreen">
               <p class="m_close"> <?=$mes['c-mes9']?></p>
               <p class="m_menu"> <?=$mes['c-mes10']?></p>
             </div>

			<div class="call">
              <div class="call-phone">
                <img src="<?=$site?>/img/icons/phone.png" alt="phone" />
                <p class="call-text"> <?=$mes['c-mes7']?></p>
                <p class="call-number ringo-phone">(044) 227 78 44</p>
              </div>
              <div class="call-button"><a  onclick="call();" id="call_ma_please" ><?=$mes['c-mes8']?></a></div>

              <div class="webcam_logo">
                <a href="webcam.php"><img src="<?=$site?>/img/icons/tool.svg" alt="webcam"></a>

              </div>

              <div class="lang">
                <a class="lang_ua" href="/">УКР</a>
                <a href="/en">EN</a>
              </div>
            </div>

                  <div class="clearfix"></div>
                </div>

<!-- конец верхнего меню -->

<!-- Начало выпадающего меню -->
                <div class="my_menu">
                  <div class="my_menu_wrap">
                    <div class="menu_left">


					  <?
					  $grup_menu=[4,4,5]; $in=0; $i=0;
					  ?>  <div class="left_top">
					  <div class="left_top_item"><ul><?
					  foreach($menu_t AS $k=>$text){ $i++;

					  ?>
				  <li><a href="/<?echo $_POST['lang'].$menu_t[$k]?>"><?=$menu['text'][$k]?></a></li>
						<?
					if($grup_menu[$in]==$i AND count($grup_menu)!=$in+1){ $in++; $i=0;?>
				 </ul></div><div class="left_top_item"><ul><?}		} 	  ?>
					    </ul>
                </div>
					</div>

                      <div class="left_bot">
                        <img src="<?=$site?>/img/logo-w<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg" alt="logo"/>
                      </div>
                    </div>

                    <div class="menu_right">
                      <div class="right_item">
                        <p class="m_close"><?=$mes['c-mes11']?></p>
                        <p class="m_menu"><?=$mes['c-mes10']?></p>
                        <a id="close_menu" class="m_x" onclick="$('.my_menu').css('opacity','0').css('left','-100%');" ><img src="<?=$site?>/img/icons/close-bold-red.svg" width="80px" alt="close" /></a>
                      </div>

                      <div class="right_item pcscreen">
                        <div class="menu_item_wrap">
                          <img src="<?=$site?>/img/anchor.png" alt="ancor">
                        </div>
                      </div>
                  </div>
                </div>
              </div>

<!-- Конец выпадающего меню -->


<script src="<?=$site?>js/callback.js"></script>
