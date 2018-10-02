<? GLOBAL $mes;
$u=array(1=>'odnokomnatnaya',2=>'dvuhkomnatnaya',3=>'trehkomnatnaya',4=>'chetirehkomnatnaya');
$menu_t=['','project/','',	'adress/','','','childrens/','kvartira/','sport/',	'aqua/',	'partners/','hod-stroitelstva/','callback/','news/','gallery/','','webcam/'];
$menu['text']=array();
foreach($menu_t AS $k=>$text){
$menu['text'][$k]=$mes['menu-mes'.$k];
}


$elsepage = str_replace($_POST['lang'], "", $_SERVER['REQUEST_URI']);
$elsepage = str_replace('?ajax=1', "", $elsepage);
//echo '<pre>'; print_r(explode("news_list", $elsepage)); echo '</pre>';
$haystack = 'ababcd';
$needle   = 'aB';

//$pos      = strripos($elsepage, "news_list");
///if(strripos($elsepage, "news_list")!== false){	$elsepage ='/news/';	}
//echo '<pre>'; print_r($_POST); echo '</pre>';
if($_GET['URLS']){
$elsepages= array('ua'=>'/news/','ru'=>'/news/','en'=>'/news/');
foreach($_GET['URLS_LG'] as $key=>$t){	$elsepages[$key] ='/'.$t.'/';	}
}

//echo '<pre>'; print_r($_SERVER); echo '</pre>';
if(strripos($_POST['urls'][0],'plan') !== false && count($_POST['urls'][0])==5){$elsepage='/kvartira/';}
  ?>
   <?php
   //  setcookie("Name", "Value");
   ?>
     <? include('preloader_saga.php'); ?>
   <!-- начало верхнего меню -->
           <div class="top-menu">
             <div class="top-menu__container">
               <!-- <a href="/" class="top-menu__link" title="RYBALSKY">
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 131.5 174" style="enable-background:new 0 0 131.5 174;" xml:space="preserve">
                    <g>
                    	<path fill="#FFFFFF"  class="st0" d="M116.1,104.5C116,127.8,97.2,147,73.1,150V76.1h41.5v-13H73.1V48.3c7.7-2.6,13.2-9.5,13.2-17.7    c0-10.4-8.8-18.8-19.7-18.8s-19.7,8.4-19.7,18.8c0,8.2,5.5,15.2,13.2,17.7v14.8H18.6v13h41.5V150c-24.1-3-42.9-22.2-43.1-45.5    l-13,0.1c0.2,32.4,28.2,58.8,62.5,58.8c34.3,0,62.3-26.4,62.5-58.8L116.1,104.5z M66.6,23.3c4.5,0,8.1,3.3,8.1,7.3    s-3.6,7.3-8.1,7.3c-4.5,0-8.1-3.3-8.1-7.3S62.1,23.3,66.6,23.3z"/>
                    </g>
                  </svg>
               </a> -->

             <div class="burger-menu">
               <a id="open_my_menu" style="cursor:pointer;" >
                 <svg xmlns="http://www.w3.org/2000/svg" width="36" height="24" viewBox="0 0 47.139622 24"><path d="M0 24h47.14v-4H0v4zm0-10h47.14v-4H0v4zM0 0v4h47.14V0H0z" fill="#fff"/></svg>
                 <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="#fff" d="M6 36h36v-4H6v4zm0-10h36v-4H6v4zm0-14v4h36v-4H6z"/></svg> -->
                 <span class="word_menu"><?=$mes['c-mes25']?></span>

               </a>
             </div>
             <div class="lang">
              <? if($_POST['lang']=='ru/'):?>
              <a class="lang_ru" href="/ru<?=$elsepage;?>">Рус <span class="nomobile">&#8744;</span></a>
               <ul class="lang_dropdown">
                 <li><a href="<?=$elsepage?>">Укр</a></li>
                 <li><a href="/en<?=$elsepage?>">En</a></li>
               </ul>
              <? elseif($_POST['lang']=='en/'):?>
              <a class="lang_en" href="/en<?=$elsepage?>">En <span class="nomobile">&#8744;</span></a>
               <ul class="lang_dropdown">
                 <li><a href="<?=$elsepage?>">Укр</a></li>
                 <li><a href="/ru<?=$elsepage;?>">Рус</a></li>
               </ul>
              <? else:?>
               <a class="lang_ua" href="<?=$elsepage?>">Укр <span class="nomobile">&#8744;</span></a>
               <ul class="lang_dropdown">
                 <li><a href="/en<?=$elsepage?>">En</a></li>
                 <li><a href="/ru<?=$elsepage;?>">Рус</a></li>
               </ul>
              <? endif;?>
             </div>
<? /* <div class="saga_logo <?if(count(explode("/", $_SERVER['REQUEST_URI']))>3){echo 'saga_logo_off';}?>"><a href="http://saga-development.com.ua/" class="saga-logo" target="_blank">
<img src="/img/Saga_white.svg">
</a></div> */ ?>
             <? /*
             Вот это меню выбора языка от 14.01.18 оно не работало корректно на странице новостей -- Андрей
              <div class="lang">
               <?
               if($_GET['URLS']){
                 $elsepages= array('ua'=>'УКР','en'=>'EN','ru'=>'RU'); $i=0;
                 foreach($elsepages as $key=>$t){ if($_GET['URLS_LG'][$key]){ $i++;?>
                   <a class="<?if($i!=count($_GET['URLS_LG'])) echo 'lang_ua';?>" href="/<?if($key!='ua'){ echo $key.'/';}echo $_GET['URLS_LG'][$key];?>/"><?=$t?></a>
                   <?$elsepages[$key] ='/'.$t.'/';
                 }
               }
             }else{  ?>
               <a class="lang_ua" href="<?=$elsepage?>">Укр  <span class="nomobile">&#8744;</span></a>
               <ul class="lang_dropdown">
                 <li><a href="/en<?=$elsepage?>">En</a></li>
                 <li><a href="/ru<?=$elsepage;?>">Рус</a></li>
               </ul>

               <?}?>
             </div>*/ ?>
             <script type="text/javascript">
             $('.lang_ua, .lang_en, .lang_ru, .lang_dropdown').mouseover(function(){
               $('.lang_dropdown').addClass('lang_dropdown__active');
             })
             $('.lang_ua, .lang_en, .lang_ru, .lang_dropdown').mouseout(function(){
               $('.lang_dropdown').removeClass('lang_dropdown__active');
             })

             </script>


			      <div class="call">
              <div class="webcam_logo">
                <a href="/<?=$_POST['lang']?>webcam/">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.810135 40" width="30" height="40" fill="#ffffff"><g transform="matrix(.5655 0 0 .56326 -8.34 -8.44)"><path d="M69.502 78.115l-11.656-11.43a29.247 29.247 0 0 1-14.974 4.105c-5.465 0-10.586-1.5-14.975-4.108L16.105 78.247a4.526 4.526 0 0 0-.363 6.058 4.525 4.525 0 0 0 5.99.967c2.9-1.88 12.227-6.758 20.458-6.758 11.184 0 21.72 6.694 21.825 6.762a4.51 4.51 0 0 0 2.452.724h.123a4.525 4.525 0 0 0 2.912-7.885z"/><circle r="7.599" cy="41.373" cx="42.872"/><path d="M42.872 14.985C28.268 14.985 16.364 26 15.792 41h16.204c.548-6 5.216-9.843 10.876-9.843C48.532 31.157 53.2 35 53.747 41h16.205c-.57-15-12.477-26.015-27.08-26.015zm0 9.447a2.66 2.66 0 1 1 0-5.322 2.66 2.66 0 0 1 0 5.322zM42.872 52.304c-5.66 0-10.328-4.325-10.876-9.843H15.793c.572 14.465 12.475 26.016 27.08 26.016 14.602 0 26.508-11.55 27.08-26.015H53.745c-.547 5.52-5.215 9.844-10.874 9.844z"/></g></svg>
                  <div class="call_wrapper">
                    <span> WEB </span>
                    <span class="font28"> <?=$mes['p4-mes']?></span>
                  </div>
                </a>
              </div>
				<?php
				function ringo_phone($ringo_url){

					//$ringo_url = $_SERVER['REQUEST_URI'];
					$com_url[0] = "kommercheskaya";
					$com_url[1] = "commercial-lease";
					$com_url[2] = "filter-commercial";
					$com_url[3] = "office";
					$com_url[4] = "trading";
					$com_url[5] = "restaurant";
					$com_url[6] = "medicine";
                    $result = 0;

				foreach ($com_url as $value) {
				if((stripos($ringo_url, $value) !== FALSE)){
				 $result = 1;

				}
                }


                return $result;
				}
				?>
              <div class="call-phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.250072 49.999996" width="14" height="38" fill="#ffffff" preserveAspectRatio="none"><path d="M15.293 49.977c-.827.004-2.038.007-2.506.014l-.418.004-.695.006C8.305 50.02-.125 45.526 0 24.36.114 4.267 7.857.36 10.91.03 12.59 0 14.64 0 15.507 0l.003.003a3.725 3.725 0 0 1 3.74 3.76l-.026 6.72c-.008 2.09-1.7 3.788-3.776 3.798l.003.004c-.977.006-3.34.013-3.34.013l-1.252.007c-2.032.03-2.33 2.45-2.58 4.955-.042.1.04 10.002.063 10.05.47 4.372.505 6.556 2.446 6.528l4.166-.02c2.076-.01 4.16 1.55 4.15 3.637l-.033 6.72c-.01 2.088-1.703 3.79-3.777 3.802zM13.38 12.575c.227-.003.485 0 .885-.003 2.415-.01 3.282-.63 3.29-2.588l.025-5c.007-2.164-.304-3.33-3.317-3.312-.288.003-.563 0-.833.003l-.05 10.9zM8.31 36.885c-1.393-1.042-1.9-6.073-1.936-9.522-.01-2.61-.38-10.91 1.673-13.77.597-.852 1.886-1.004 2.434-1 .522-.008.904-.01 1.23-.01l.045-10.83c-1.127.12-2.2.422-3.393 1.225-3.433 2.233-6.93 9.79-6.703 22.083 0 0 .03 9.354 2.315 15.172 1.25 2.826 2.764 6.85 7.582 7.878l.045-10.557c-1.45.027-2.814-.052-3.295-.668zm9.097 7.252l.012-3.334c.01-2.844-1.436-3.323-3.954-3.31l-.193.01-.048 10.825c.29.018.578.038.883.035 2.92-.016 3.285-1.255 3.3-4.226z"/></svg>
                <div class="call_wrapper">
                  <span class="call_hot"> <?=$mes['c-mes7']?></span>
                  <span class="call-number font28"><a class="<? if(ringo_phone($_SERVER['REQUEST_URI'])>0){echo'ringo-commerce';}else{echo'ringo-phone';}?>" id="tT" href="tel:123123"><? if(ringo_phone($_SERVER['REQUEST_URI'])>0){echo'(044) 391-18-00';}else{echo'(044) 498-02-00';}?></a></span>
                </div>

              </div>

              <div class="call-button"><a id="call_ma_please" ><?=$mes['c-mes8']?></a></div>



            </div>
            <!--<div style="clear:both"></div>-->
          </div> <!--top-menu__container-->
		  <?$l="/".$_POST['lang'];?>
          <div class="promotions_btn">
            <a href="<?=$l?>new-terms-of-loan-for-rybalsky-03-07-2018/" class="promotions_btn__link"><?=$mes['menu-mes19'];?></a>
          </div>
        </div>

<!-- конец верхнего меню -->

<!-- Начало выпадающего меню -->
        <div class="my_menu my_menu_hidden">
          <div class="my_menu_wrap">
      					  <?
      					  $l="/".$_POST['lang'];
      					  ?>
                <div class="left_top_item">
                  <a class="menu__link a_hover" href="<?=$l.$menu_t[0]?>" style="margin-bottom:30px;"><?=$menu['text'][0]?></a>
                  <a class="menu__link a_hover" href="<?=$l.$menu_t[13]?>"><?=$menu['text'][13]?></a>
                  <a class="menu__link a_hover" href="<?=$l?>documents/"><?=$mes['jur-mes-menu']?></a>
                  <a class="menu__link a_hover" href="<?=$l.$menu_t[14]?>"><?=$mes['menu-mes20']?></a>
                  <a class="menu__link a_hover" href="<?=$l?>panorama/"><?=$mes['menu-mes34']?></a>
				  <a class="menu__link" href="<?=$l?>atmosfera/">SFERA Living System</a>
                </div>

                <div class="left_top_item">
                  <span class='bigger__nolink'><?=$mes['menu-mes21']?></span>
                    <ul>
                      <li><a class="menu__link" href="<?=$l.$menu_t[1]?>"><?=$menu['text'][1]?></a></li>
                      <li><a class="menu__link" href="<?=$l?>space-for-life/"><?=$menu['text'][2]?></a></li>
                      <!-- <li><a class="menu__link" href="<?=$l.$menu_t[4]?>"><?=$menu['text'][4]?></a></li> -->
                      <li><a class="menu__link" href="<?=$l.$menu_t[8]?>"><?=$menu['text'][8]?></a></li>
                      <li><a class="menu__link" href="<?=$l.$menu_t[9]?>"><?=$menu['text'][9]?></a></li>
                      <?/*простир для инвестиций
					  <li><a class="menu__link" href="<?=$l.$menu_t[5]?>"><?=$menu['text'][5]?></a></li>*/?>
                      <li><a class="menu__link" href="<?=$l.$menu_t[6]?>"><?=$menu['text'][6]?></a></li>
					  <li><a class="menu__link" href="<?=$l?>animal-space/"><?=$mes['animal-space-h1']?></a></li>
          					  <li><a class="menu__link" href="<?=$l?>transport-infrastructure/"><?=$mes['menu-mes33']?></a></li>
          					  <li><a class="menu__link" href="<?=$l?>parking/"><?=$mes['parking-heading']?></a></li>
							  <li><a class="menu__link" href="<?=$l?>events/"><?=$mes['events-menu']?></a></li>
                    </ul>
                </div>

                 <!--realty-block -->
                <div class="left_top_item">
	                 <span class='bigger__nolink realty-block__headind'><?=$mes['menu-mes25']?></span>
	                 <a class="menu__link" href="<?=$l.$menu_t[7]?>"><?=$menu['text'][7]?></a>
	                 <ul style="padding-left:20px;">
			               <?foreach($u as $key=>$t):?>
	                     <li><a class="menu__link" href="<?=$l.'kvartira/'.$t.'/';?>"><?=$mes['kv-mes-flat-'.$key]?></a></li>
	                   <?endforeach;?>
	                 </ul>
	                 <a class="menu__link" href="<?=$l?>filter/"><?=$mes['menu-mes23']?></a>
	                 <a class="menu__link" href="<?=$l?>rassrochka/"><?=$mes['ras-mes-menu']?></a>
                 </div>
	               <div class="left_top_item">
  	                <span class='bigger__nolink realty-block__heading'><?=$mes['menu-mes26']?></span>
  	                 <a class="menu__link" href="<?=$l?>kommercheskaya/"><?=$mes['menu-mes27']?></a>
  	                 <a class="menu__link" href="<?=$l?>commercial-lease/"><?=$mes['menu-mes28']?></a>
  	                 <a class="menu__link" href="<?=$l?>filter-commercial/"><?=$mes['menu-mes23']?></a>
  	                 <a class="menu__link" href="<?=$l?>office/"><?=$mes['menu-mes29']?></a>
  	                 <a class="menu__link" href="<?=$l?>trading/"><?=$mes['menu-mes30']?></a>
  	                 <a class="menu__link" href="<?=$l?>restaurant/"><?=$mes['menu-mes31']?></a>
  	                 <a class="menu__link" href="<?=$l?>medicine/"><?=$mes['menu-mes32']?></a>
  	             </div>

                  <!--logo -->
                  <div class="left_top_item item__logo">
                    <a href="<?=$l.$menu_t[0]?>" style="display:block;">
                      <img <?AltImgAdd($mes['alt-logo'])?> src="/img/rybalsky-logom<?echo"-".(substr($_POST['lang'], 0, 2));?>.svg"/>
                    </a>
                  </div>
                  <!--END_logo -->
                <div class="left_top_item"></div>
                <div class="left_top_item left_top_item_flex_grow">
                  <span class='bigger__nolink'><?=$menu['text'][15]?></span>
                    <ul>
                    <li><a class="menu__link" href="<?=$l.$menu_t[10]?>"><?=$menu['text'][10]?></a></li>
                    <li><a class="menu__link" href="<?=$l.$menu_t[11]?>"><?=$menu['text'][11]?></a></li>
                    <li><a class="menu__link" href="<?=$l.$menu_t[16]?>"><?=$menu['text'][16]?></a></li>
					<li><a class="menu__link" href="<?=$l?>ctc/">Client Technical Control</a></li>
                  </ul>
                </div>

                  <!--contact -->
                  <div class="left_top_item">
                    <span class='bigger__nolink'><?=$menu['text'][14]?></span>
                      <ul>
                        <li><a class="menu__link" href="<?=$l.$menu_t[3]?>"><?=$menu['text'][3]?></a></li>
                        <li><a class="menu__link" href="<?=$l.$menu_t[12]?>"><?=$menu['text'][12]?></a></li>
                        <li class="menu__list__round">
                          <a href="https://www.facebook.com/RYBALSKY.UKRAINE/?ref=bookmarks" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.02" height="30" viewBox="0 0 30.020309 30"><path d="M17.042 30H11.42V15H7.67V9.83h3.75l-.006-3.047C11.414 2.566 12.558 0 17.526 0h4.136v5.17h-2.585c-1.935 0-2.028.723-2.028 2.07l-.01 2.59h4.65l-.547 5.168-4.098.002-.003 15z"/></svg>
                          </a>
                          <a href="https://www.youtube.com/channel/UCyhlsag-oKGAuIT035iBrEw/videos" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 30.000007 36" width="30"><path d="M25.376 26.333H23.4l.01-1.148c0-.51.418-.927.93-.927h.126c.513 0 .933.417.933.927l-.024 1.148zm-7.41-2.46c-.502 0-.912.337-.912.75v5.58c0 .413.41.75.91.75.504 0 .915-.337.915-.75v-5.58c0-.413-.412-.75-.915-.75zM30 20.754v10.616c0 2.546-2.21 4.63-4.908 4.63H4.908C2.208 36 0 33.916 0 31.37V20.75c0-2.547 2.208-4.632 4.908-4.632h20.184c2.7 0 4.908 2.085 4.908 4.632zM6.255 32.522V21.337h2.502V19.68l-6.67-.01v1.63l2.082.006v11.216h2.086zm7.5-9.52H11.67v5.973c0 .864.05 1.296-.005 1.448-.17.464-.932.955-1.23.05-.05-.158-.006-.636-.007-1.457l-.008-6.013H8.345l.007 5.918c0 .908-.02 1.584.007 1.892.05.543.032 1.176.536 1.537.938.678 2.737-.1 3.187-1.066l-.004 1.233 1.674.002v-9.516zm6.673 6.84l-.005-4.97c0-1.895-1.42-3.03-3.343-1.497l.01-3.696-2.085.003-.01 12.756 1.713-.026.156-.795c2.19 2.008 3.567.632 3.564-1.778zm6.528-.66l-1.564.01c0 .062-.004.134-.004.212v.872a.854.854 0 0 1-.855.848h-.306a.854.854 0 0 1-.855-.848v-2.294h3.58v-1.348c0-.985-.024-1.97-.106-2.533-.255-1.78-2.756-2.064-4.02-1.152-.396.285-.7.666-.875 1.18-.177.51-.265 1.21-.265 2.1v2.964c0 4.927 5.985 4.23 5.27-.008zm-8.023-16.09c.108.26.275.473.502.633.224.158.51.237.853.237.3 0 .568-.08.8-.25.23-.165.426-.415.584-.747l-.04.818h2.326V3.896h-1.83v7.696a.763.763 0 0 1-1.524 0V3.896h-1.91v6.67c0 .85.014 1.416.04 1.703a2.9 2.9 0 0 0 .2.823zm-7.046-5.585c0-.95.08-1.69.236-2.225A2.48 2.48 0 0 1 12.978 4c.41-.324.937-.487 1.576-.487.538 0 1 .106 1.384.313.387.208.685.478.892.81.21.335.354.68.43 1.03.08.357.117.894.117 1.62v2.5c0 .918-.037 1.592-.108 2.02a3.21 3.21 0 0 1-.46 1.202c-.23.37-.53.646-.894.823-.367.18-.787.266-1.262.266-.53 0-.976-.073-1.344-.226a1.845 1.845 0 0 1-.858-.686 3.044 3.044 0 0 1-.436-1.108c-.088-.433-.13-1.083-.13-1.95V7.508zm1.82 3.928c0 .56.418 1.017.925 1.017.508 0 .923-.457.923-1.017V6.172c0-.56-.415-1.016-.923-1.016-.507 0-.924.457-.924 1.016v5.264zm-6.434 2.658h2.193L9.47 6.51 12.064.013h-2.4L8.286 4.84 6.888 0H4.513l2.758 6.514.005 7.58z" /></svg>
                          </a>
                          <a href="https://www.instagram.com/rybalsky_kyiv/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="26"  width="26" enable-background="new 0 0 512 512" fill="#ffffff" viewBox="0 0 512 512"><path d="m352 0h-192c-88.352 0-160 71.648-160 160v192c0 88.352 71.648 160 160 160h192c88.352 0 160-71.648 160-160v-192c0-88.352-71.648-160-160-160zm112 352c0 61.76-50.24 112-112 112h-192c-61.76 0-112-50.24-112-112v-192c0-61.76 50.24-112 112-112h192c61.76 0 112 50.24 112 112z"/><path d="m256 128c-70.688 0-128 57.312-128 128s57.312 128 128 128 128-57.312 128-128-57.312-128-128-128zm0 208c-44.096 0-80-35.904-80-80 0-44.128 35.904-80 80-80s80 35.872 80 80c0 44.096-35.904 80-80 80z"/><circle cx="393.6" cy="118.4" r="17.056"/></svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  <!--END__contact -->

                  <!-- </div> -->

                  <div id="close_menu" class="close_item">
                    <span class="m_close"><?=$mes['c-mes11']?></span>
                    <a  class="m_x">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="50 98.5 60 60"><path d="M55.21 153.29L50 148.08l9.79-9.79 9.788-9.79-9.79-9.79L50 108.92l5.21-5.21 5.21-5.21 9.79 9.79 9.79 9.788 9.79-9.79 9.79-9.788 5.21 5.21 5.21 5.21-9.79 9.79-9.788 9.79 9.79 9.79 9.788 9.79-5.21 5.21-5.21 5.21-9.79-9.79-9.79-9.788-9.79 9.79-9.79 9.788-5.21-5.21z" fill="#ffffff"/></svg>
                    </a>
                  </div>

              </div>
   </div>
<!-- Конец выпадающего меню -->


	<script>
function telephone(id) {

	$(id).on('click', function(){
		var href = 'tel:'+ $(this).html();
		var href = href.replace(/[\(\)\s\-]/g, '');
		var elem = $(this);
		elem.attr('href', href);

	});
}
telephone('#tT');

var h = $(window).height();
$(window).scroll(function(){
	 windowTop = $(window).scrollTop();
	 if (windowTop > 100){
		 $(".top-menu").addClass("top-menu__zipped")
	 }
	 if (windowTop < 100){
		 $(".top-menu").removeClass("top-menu__zipped")
	 	}
   });


</script>
<style media="screen">
.promotions_btn {color: red; position: fixed; background-color: #d98c70; z-index: 1000; top: 45%; left: -90px; text-align: center; transform: rotate(-90deg); width: 206px; height: 30px; line-height: 35px; border-radius: 2px;}
.promotions_btn:before { content: ''; width: 0;height: 0;border-left: 4px solid transparent;border-right: 4px solid transparent;border-top: 8px solid #d98c70; position: absolute; top: 0px; right: -4px;}
.promotions_btn:after { content: ''; width: 0;height: 0;border-left: 4px solid transparent;border-right: 4px solid transparent;border-top: 8px solid #d98c70; position: absolute; top: 0px; left: -4px;}
.promotions_btn__link {color: white;text-decoration: none;}
 a#tT,a#tT_{ pointer-events: none;color: white;text-decoration:none;}
 .my_menu .left_top_item{box-sizing: border-box;}
@media screen and (max-width:768px) {
 a#tT{  pointer-events: all;}
 .promotions_btn{left:-98px;}
}
</style>
	<!--Сквозное лого
<a href="http://saga-development.com.ua/" class="saga-logo" target="_blank">
<img src="/img/Saga_white.svg">
</a>
<style>
.saga-logo {
    /* position: fixed; */
    top: 10px; /* 90 */
    right: 25px; /* 55 */
    /* display: block; */
	display: inline-block;
    width: 60px;
    z-index: 20;
    text-align: center;
    overflow: hidden;
}
.saga_logo {
	display: inline-block;
	vertical-align: middle;
}
@media screen and (max-width: 768px){
	.saga_logo {
	margin-left: 9px;
    display: block;
    padding-top: 5px;
    position: absolute;
	}
	.saga_logo_off {display:none;}
}
</style>-->
<!--Конец сквозного лого-->
