<?php 
/**
 * http://plutov.by/post/html5_history_api
 */
$content = '<div class="app-build-name">Квартири</div>

          <div  class="header-bottom clearfix">
            <div class="logo"><img src="img/logo.jpg" alt="logo" /></div>

            <div class="app_flex nomobile">
              <div class="app_flex_items">
               
                <div class="app_com">Квартири різного розміру, призначені для потреб великих або малих сімей </div>
              </div>
              <div class="app_flex_items">
               
                <div class="app_com">Вільне планування дозволяє втілити вашу власну концепцію життя </div>
              </div>
              <div class="app_flex_items">
                
                <div class="app_com">Вид з вікна на Дніпро або на канали – вирішувати вам</div>
              </div>
              <div class="app_flex_items">
          
                <div class="app_com">Понад 90 різних планувань квартир</div>
              </div>
            </div>

            <div class="place-link">
              <!-- <a href="#"> -->
                ЩОБ ОБРАТИ КВАРТИРУ
              <!-- </a> -->
              <div class="app_com"> Зверніться, будь-ласка до відділу продажів, </br>  тел. <span class="ringo-phone">(044) 227 78 44</span> 
		
			  
			  </div>

            </div>
          </div>';  echo  $ur;
if (isset($_GET['ajax'])) { echo $content;  ?>

 <? 
} else {
    include_once 'layout.php';
}?>